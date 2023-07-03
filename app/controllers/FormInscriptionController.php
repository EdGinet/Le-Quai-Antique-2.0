<?php
require_once("../models/DatabaseConnection.php");

class FormInscriptionController
{

    public function getInscriptionPage() {

        $database = new DatabaseConnection();
        $database->connection();

        require_once("../views/inscription.php");

    }

    public function register($pswd, $email)
    {
        $database = new DatabaseConnection();
        $database->connection();

        $query = "SELECT * FROM personnes WHERE Nom=:nom AND Prenom =:prenom";

        $params = [
            'nom' => $_POST["nom"],
            'prenom' => $_POST["prenom"]
        ];

        
        $number_of_rows = $database->executeColumnQuery($query, $params);

        if ($number_of_rows == 0) {

            $query1 = "INSERT INTO personnes (Nom,Prenom,Adresse,CP,Telephone,Statut) VALUES (:nom, :prenom, :adresse, :cp, :tel, :client)";

            $params1 = [
                'nom' => $_POST["nom"],
                'prenom' => $_POST["prenom"],
                'adresse' => $_POST["adresse"],
                'cp' => $_POST["cp"],
                'tel' => $_POST["tel"],
                'client' => "client"
            ];

            $database->executeQuery($query1, $params1);

            $personIdQuery = "SELECT id_Personne FROM personnes WHERE Nom=:nom";
            $personIdParams = ['nom' =>$_POST["nom"]];

            $personId = $database->executeSingleQuery($personIdQuery, $personIdParams);



            // Le mot de passe en clair à hacher
            //$password = $_POST["pswd"];


            $hashedPassword = password_hash(
                $pswd,
                PASSWORD_DEFAULT
            );

            $accountQuery = "INSERT INTO comptes (Mail,Mot_De_Passe,ID_Personne) VALUES (:email, :password, :personId)";

            $accountParams = [
                'email' => $_POST["email"],
                'password' => $hashedPassword,
                'personId' => $personId["id_Personne"]
            ];

            $database->executeQuery($accountQuery, $accountParams);

            $_SESSION['message'] = "Vous êtes maintenant inscrit(e).";


            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }


            header('Location:../views/connexion.php');
            exit();


        } else {

            $message = "Vous avez déjà un compte.";

            header("location:connexion.php?error=" . $message);

        }

    }

}