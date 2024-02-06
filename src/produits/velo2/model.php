<?php

function model_velo2()
{
    try {
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=SmartBike', 'postgres', '92150');

        $query = "SELECT * FROM velos WHERE id_v = 2";
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
