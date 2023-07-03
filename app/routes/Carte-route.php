<?php
session_start();
require_once("../models/DatabaseConnection.php");
$database = new DatabaseConnection();
$database->connection();

if (!isset($_SESSION["card"])) {
    $query2 = "SELECT Titre_Menu, Description_Menu, Prix FROM menus WHERE Id_Carte = :id";
    $params2 = ["id" => 1];
    $row = $database->executeQuery($query2, $params2);

    $_SESSION["card"] = $row;
}

if (isset($_GET['menu'])) {
    $array_string = explode("#", $_GET['menu']);
    $array_string_saving = $array_string[1];

    $query = "UPDATE menus SET Id_Carte = 1 WHERE Titre_Menu = :titre_menu";
    $params = ["titre_menu" => $array_string_saving];
    $database->executeNoReturnColumnQuery($query, $params);
}


