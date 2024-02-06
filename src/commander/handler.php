<?php

require_once('commander/view.php');
require_once('commander/model.php');

function handler_commander()
{
    $view = view_commander();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];

        insert_commande($nom, $prenom, $mail, $message);

        exit();
    }

    echo $view;
}

function insert_commande($nom, $prenom, $mail, $message)
{
    $conn = new PDO('pgsql:host=localhost;port=5432;dbname=SmartBike', 'postgres', '92150');

    $stmt = $conn->prepare("INSERT INTO commandes (nom_c, prenom_c, mail_c, message_c) VALUES (:nom, :prenom, :mail, :message)");

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':message', $message);

    $stmt->execute();
}
