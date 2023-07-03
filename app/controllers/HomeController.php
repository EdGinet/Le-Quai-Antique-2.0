<?php
require_once("app/models/DatabaseConnection.php");

class HomeController
{
    public $pdo;

    public function __construct()
    {

        $this->pdo = new DatabaseConnection();
        $this->pdo->connection();

    }

    public function getHomePage() {        
        require_once("app/views/accueil.php");
    }
}