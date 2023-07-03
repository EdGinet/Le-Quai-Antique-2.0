<?php
if (isset($_POST["addMenu"])) {

    $dataStringList = $_POST['titre-menu'] . "/" . $_POST['description-menu'] . "/" . $_POST['prix'];


    header("Location:../controllers/AddMenuController.php?tab=" . $dataStringList);
}