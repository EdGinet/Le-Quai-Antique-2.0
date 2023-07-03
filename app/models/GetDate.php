<?php

require_once("DatabaseConnection.php");

class GetDate
{

    public $date;

    public function initDate($dte)
    {
        $this->date = $dte;
    }

    public function verifDate()
    {

        $query = "SELECT * FROM tables WHERE Date_Dispo <=:date";
        $params = ['date' => $this->date];
        $database = new DatabaseConnection();
        $database->connection();
        $nbRow = $database->executeQuery($query, $params);

        if (! empty($nbRow)) {
            echo "Table disponible";
        } else {
            echo "Table indisponible";
        }

    }

}