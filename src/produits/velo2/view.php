<?php

function view_velo2($velos)
{
    include('../src/header.php');
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartBike</title>

        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
            }

            main {
                text-align: center;
                padding: 20px;
            }

            footer {
                background-color: #f0f0f0;
                padding: 10px;
                text-align: center;
            }

            .prix {
                font-size: 18px;
                font-weight: bold;
            }

            .espace-entre-boutons {
                margin-right: 10px;
            }

            .bouton-achat {
                background-color: #4caf50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }
        </style>
    </head>

    <body>
        <?php
        header_home();
        ?>

        <main>
            <h1 style="text-align: center;">Produits :</h1>

            <?php
            if ($velos && is_array($velos)) {
                foreach ($velos as $velo) {
                    echo '<div class="produit-container">';
                    echo '<img src="' . $velo['image_v'] . '" alt="Vélos">' . "<br>";
                    echo '<p class="prix">Prix : ' . $velo['prix_v'] . '</p>';
                    echo '<a href="/commander/' . $velo['id_v'] . '"><button class="bouton-achat">Commander</button></a>' . "<br>";
                    echo "<br>" . "Description du vélo : " . $velo['description_v'] . "<br>";
                    echo "</div>";
                    echo "<hr>";
                }
            } else {
                echo "Aucun produit à afficher.";
            }
            ?>

        </main>

        <?php
        include('../src/footer.php');
        footer_home();
        ?>
    </body>

    </html>
<?php
}
?>