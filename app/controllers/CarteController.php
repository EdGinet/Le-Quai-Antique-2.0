<?php
require_once("app/models/DatabaseConnection.php");

class CarteController 
{
    public $pdo;

    public function __construct()
    {

        $this->pdo = new DatabaseConnection();
        $this->pdo->connection();

    }
    public function getCartePage() {
        require_once("../views/carte.php");
    }
}