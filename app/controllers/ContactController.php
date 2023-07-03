<?php

require_once("../models/DatabaseConnection.php");

class ContactController
{

    public function getContactPage() {
        $database = new DatabaseConnection();
        $database->connection();

        require_once("../views/contact.php");
    }
}