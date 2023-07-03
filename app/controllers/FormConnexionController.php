<?php
session_start();
class FormConnexionController
{

    public function getConnexionPage()
    {

        require_once("../models/DatabaseConnection.php");

        $database = new DatabaseConnection();
        $database->connection();

        require_once("../views/connexion.php");
    }

    public function connexion($pswd, $email)
    {

        require_once("../models/DatabaseConnection.php");

        $query = "SELECT comptes.*, personnes.Statut FROM comptes INNER JOIN personnes ON comptes.ID_Personne = personnes.ID_Personne WHERE Mail=:email";

        $params = ['email' => $email];

        $stm_unique = new DatabaseConnection();
        $stm_unique->connection();

        $row = $stm_unique->executeSingleQuery($query, $params);

        if (is_array($row)) {

            if (password_verify($pswd, $row['Mot_De_Passe'])) {

                if ($row['Statut'] == 'Administrateur') {
                    $_SESSION['admin'] = $row['Mail'];
                    header('Location:../views/admin.php');
                } else {
                    $_SESSION['user'] = $row['Mail'];
                    $_SESSION['ID_Personne'] = $row['ID_Personne'];
                    header("location:../views/reservation.php?id=" . $_SESSION['ID_Personne']);
                }

            } else {
                $error = "Mail ou mot de passe incorrect";
            }
        } else {
            $error = "Mot de passe ou mail incorrect";
        }
        if (isset($error)) {

            header("Location:../views/error.php?p=" . $error);
        }

    }

}