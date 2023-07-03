<?php
require_once("DatabaseConnection.php");
class Reservation
{
    public $nbGuests;
    public $hourRes;
    public $allergies;
    public $dateRes;
    public $id;

    public function init($nb, $hres, $alg, $dres, $id)
    {
        $this->nbGuests = $nb;
        $this->hourRes = $hres;
        $this->allergies = $alg;
        $this->dateRes = $dres;
        $this->id = $id;
    }
    public function saveRes()
    {
        $query = "INSERT INTO reservations (Nb_personne, Heure_Prevue, Date, Mention_Allergies,ID_Personne) VALUES (:nbGuests, :hourRes, :dateRes, :allergies, :id)";

        $params = [
            'nbGuests' => $this->nbGuests,
            'hourRes' => $this->hourRes,
            'dateRes' => $this->dateRes,
            'allergies' => $this->allergies,
            'id' => $this->id
        ];

        $database = new DatabaseConnection();

        $database->connection();
        $database->executeQuery($query, $params);
    }
}