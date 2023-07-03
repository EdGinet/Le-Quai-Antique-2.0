<?php

require_once("DatabaseConnection.php");

$database = new DatabaseConnection();
$database->connection();

$hashed_password = password_hash('TpuOK0WfpX', PASSWORD_BCRYPT);

$query = "INSERT INTO personnes (Nom, Prenom, Adresse, CP, Telephone, Statut) VALUES (:nom, :prenom, :adresse, :cp, :telephone, :statut)";

$params = [
    'nom' => 'Michant',
    'prenom' => 'Arnaud',
    'adresse' => '9 Rue du Pont',
    'cp' => '95340',
    'telephone' => '06 56 45 23 78',
    'statut' => 'Administrateur'
];

$database->executeNoReturnColumnQuery($query, $params);

$query2 = "INSERT INTO comptes (Mail, Mot_De_Passe, Nb_Convives, Allergies, ID_Personne) VALUES (:mail, :mot_de_passe, :nb_convives, :allergies, :id_personne)";

$params2 = [
    'mail' => 'arnaudmichant@quaiantique.com',
    'mot_de_passe' => $hashed_password,
    'nb_convives' => '0',
    'allergies' => 'none',
    'id_personne' => '9'
];

$database->executeNoReturnColumnQuery($query2, $params2);


echo "L'administrateur a été créé avec succès";