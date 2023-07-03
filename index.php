<?php


require_once("app/controllers/HomeController.php");
require_once("app/controllers/GalleryController.php");
require_once("app/controllers/FormConnexionController.php");
require_once("app/controllers/FormInscriptionController.php");
require_once("app/controllers/CarteController.php");
require_once("app/controllers/ContactController.php");
require_once("app/controllers/ReservationController.php");


$homeController = new HomeController();
$galleryController = new GalleryController();
$connexionController = new FormConnexionController();
$inscriptionController = new FormInscriptionController();
$carteController = new CarteController();
$reservationController = new ReservationController();
$contactController = new ContactController();



if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'accueil':
            $homeController->getHomePage();
            break;
        case 'galerie':
            $galleryController->getGalleryPage();
            break;
        case 'connexion':
            $connexionController->getConnexionPage();
            break;
        case 'inscription':
            $inscriptionController->getInscriptionPage();
            break;
        case 'contact':
            $contactController->getContactPage();
            break;
        case 'carte':
            $carteController->getCartePage();
            break;
        case 'reservation':
            $reservationController->getReservationPage();
            break;
    }
} else {
    $homeController->getHomePage();
}