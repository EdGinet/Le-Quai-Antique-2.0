<?php

if (isset($_GET["date"])) {

    require_once("../models/GetDate.php");

    $date = new GetDate();
    $date->initDate($_GET["date"]);
    $date->verifDate();
}