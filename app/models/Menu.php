<?php
session_start(); 
require_once("DatabaseConnection.php");


class Menu
{

    public $titreMenu;
    public $descrMenu;
    public $prix;
    public $id;


    public function init($titre, $dm, $pr)
    {
        

        if (isset($_SESSION['admin'])) {

            $database = new DatabaseConnection();

            $database->connection();

            $query = "SELECT ID_Compte FROM comptes WHERE Mail = :email";
            $params = ['email' => $_SESSION['admin']];

            $row = $database->executeSingleQuery($query, $params);

            $this->titreMenu = $titre;
            $this->descrMenu = $dm;
            $this->prix = $pr;
            $this->id = $row["ID_Compte"];

        } else {
            header('Location:../views/accueil.php');
            exit();
        }


    }

    public function saveMenu()
    {
        $database = new DatabaseConnection();

        $database->connection();

        $query = "INSERT INTO menus (Titre_Menu, Description_Menu, Prix, ID_Compte) VALUES (:titreMenu, :descriptionMenu, :prix, :IdCompte)";

        $params = [
            'titreMenu' => $this->titreMenu,
            'descriptionMenu' => $this->descrMenu,
            'prix' => $this->prix,
            'IdCompte' => $this->id
        ];

        $database->executeNoReturnColumnQuery($query, $params);



    }


}