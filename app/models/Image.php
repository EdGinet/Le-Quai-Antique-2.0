<?php

require_once("DatabaseConnection.php");

class Image
{
    public $titreImage;
    public $lienImage;
    public $id;

    public function init($titre, $li)
    {

        if (isset($_SESSION['admin'])) {

            $database = new DatabaseConnection();

            $database->connection();

            $query = "SELECT ID_Compte FROM comptes WHERE Mail = :email";
            $params = ['email' => $_SESSION['admin']];

            $row = $database->executeSingleQuery($query, $params);

            $this->titreImage = $titre;
            $this->lienImage = $li;
            $this->id = $row["ID_Compte"];

        } else {
            header('Location:../views/accueil.php');
            exit();
        }
    }
    public function addImage()
    {

        if (isset($_POST["addImage"]) && isset($_FILES["image"])) {

            $database = new DatabaseConnection();
            $database->connection();

            $query = "INSERT INTO images (Titre, Lien, ID_Compte) VALUES (:titre, :lien, :id)";

            $params = [
                "titre" => $this->titreImage, 
                "lien" => $this->lienImage,
                "id" => $this->id
            ];

            $database->executeNoReturnColumnQuery($query, $params);

        } 
    }

    public function showImage() {
       
        $database = new DatabaseConnection();
        $database->connection();

        $query = "SELECT * FROM images";
        $params = [];
        $images = $database->executeQuery($query, $params);

        return $images;

    }

    public function deleteImage($id) {
        $database = new DatabaseConnection();
        $database->connection();

        $query = "DELETE FROM images WHERE Id_Image = :id_image";
        $params = ["id_image" => $id];

        $database->executeNoReturnColumnQuery($query, $params);
        
        $query2 = "SELECT Lien FROM images WHERE Id_Image = :id_image";
        $params2 = ["id_image" => $id];

        $image = $database->executeSingleQuery($query2, $params2);

        if ($image && isset($image["Lien"])) {
            $imagePath = $image["Lien"];
            unlink($imagePath);
        }
    }

}
