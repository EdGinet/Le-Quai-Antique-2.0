<?php
require_once("../controllers/FormInscriptionController.php");

$database = new DatabaseConnection();
$database->connection();

$inscriptionController = new FormInscriptionController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (isset($_POST["sign-up"])) {
        
        $pswd = $_POST["pswd"];
        $email = $_POST["email"];

        
        $inscriptionController->register($pswd, $email);
    }
}


