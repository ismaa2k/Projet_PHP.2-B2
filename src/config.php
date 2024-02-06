<?php
$dsn = "pgsql:host=localhost;dbname=ProSend;port=5432;";
$username = "postgres";
$password = "92150";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
