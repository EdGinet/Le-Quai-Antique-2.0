<?php
session_start();

require_once("../models/Menu.php");

if (isset($_GET["tab"])) {

$splitData = explode("/", $_GET["tab"]);
$titreMenu = $splitData[0];
$descrMenu = $splitData[1];
$prix = $splitData[2];

$menu = new Menu();
$menu->init($titreMenu, $descrMenu, $prix);
$menu->saveMenu();

header("Location:../views/ajouter_menu.php");

}