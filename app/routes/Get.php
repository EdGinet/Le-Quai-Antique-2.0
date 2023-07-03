<?php

if (isset($_GET["q"])) {

    $date_res = $_GET["q"];

    header("Location:../controllers/DateController.php?date=" . $date_res);
}