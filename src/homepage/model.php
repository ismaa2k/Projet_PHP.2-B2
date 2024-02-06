<?php

function model_homepage()
{
    try {
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=SmartBike', 'postgres', '92150');

        $query = "SELECT * FROM velos ORDER BY id_v DESC LIMIT 1"; // Récupère les 3 derniers vélos
        $statement = $pdo->prepare($query);

        $statement->execute();

        $velos = $statement->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $velos;
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
        return false;
    }
}
