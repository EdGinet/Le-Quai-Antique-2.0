<?php
session_start();
require_once("../models/DatabaseConnection.php");

if (isset($_POST["submit"])) {

    $dataStringList = $_POST['nb-guests'] . " " . $_POST['hour-res'] . " " . $_POST['date-res'] . " " . $_POST['allergies'] . " " . $_GET['id'];

    header("Location:../controllers/ReservationController.php?tab=" . $dataStringList);
}