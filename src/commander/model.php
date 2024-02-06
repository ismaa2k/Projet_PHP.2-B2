<?php

function model_commander()
{
    $conn = new PDO('pgsql:host=localhost;port=5432;dbname=SmartBike', 'postgres', '92150');

    $stmt = $conn->query("SELECT * FROM commandes");
    $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $conn = null;

    return $commandes;
}
