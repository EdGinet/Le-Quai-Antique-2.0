<?php
session_start();
require_once("../models/Image.php");

class GalleryController
{

    public function getGalleryPage() {
        require_once("../views/galerie.php");
    }


    public function getGallery()
    {
        $getImages = new Image();
        $images = $getImages->showImage();
        return $images;
    }

    public function addImage()
    {
        if (isset($_POST["addImage"]) && isset($_FILES["image"])) {
            $titre = $_POST["title"];
            $lien_temporaire = $_FILES["image"]["tmp_name"];
            $nom_fichier = $_FILES["image"]["name"];
            $dossier_destination = "public/img/" . $nom_fichier;

            if (move_uploaded_file($lien_temporaire, $dossier_destination)) {
                $imageModel = new Image();
                $imageModel->init($titre, $dossier_destination);
                $imageModel->addImage();
            }
        }
        header("Location:../views/ajouter_image.php");
    }

    public function deleteImage() {

        if (isset($_POST['deleteImage'])) {

            $imageModel = new Image();

            $id_image = $_POST['image_id'];

            $imageModel->deleteImage($id_image);
        }

        header("Location:../views/supprimer_image.php");
    }


}