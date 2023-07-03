<?php

require_once("../controllers/GalleryController.php");

$controller = new GalleryController();


if (isset($_POST['addImage'])) {
    $controller->addImage();  
}

if (isset($_POST["deleteImage"])) {
    $controller->deleteImage();
}

$controller->getGallery();