<?php
session_start();
require_once("../models/Reservation.php");

class ReservationController
{
    public function getReservationPage() {
        
        require_once("../models/DatabaseConnection.php");

        $database = new DatabaseConnection();
        $database->connection();

        require_once("../views/reservation.php");
    }
}

if (isset($_GET["tab"])) {

    $splitData = explode(" ", $_GET["tab"]);
    $nbGuests = $splitData[0];
    $hourRes = $splitData[1];
    $dateRes = $splitData[2];
    $allergies = $splitData[3];
    $id = $splitData[4];

    $instanceReservation = new Reservation();
    $instanceReservation->init($nbGuests, $hourRes, $allergies, $dateRes, $id);

    $instanceReservation->saveRes();

    header("Location:../views/reservation.php?id=" . $id);

}