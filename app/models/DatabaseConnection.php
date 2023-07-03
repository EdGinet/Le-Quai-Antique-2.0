<?php

class DatabaseConnection
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "restaurant";
    private $pdo;

    public function connection()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database;", $this->user , $this->password);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function executeQuery($query, $params = [])
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function executeSingleQuery($query, $params = [])
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function executeColumnQuery($query, $params = [])
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchColumn(PDO::FETCH_ASSOC);

    }

    public function executeNoReturnColumnQuery($query, $params = [])
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
    }
}