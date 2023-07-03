<?php

require_once("../controllers/FormConnexionController.php");

if (isset($_POST["email"]) and isset($_POST["pswd"])) {

    $password = $_POST["pswd"];
    $mail = $_POST["email"];
    $connexion = new FormConnexionController();
    $connexion->connexion($password, $mail);

}

