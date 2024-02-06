<?php

function view_homepage($velos)
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

            h1 {
                text-align: center;
            }

            .velo-container {
                margin-bottom: 20px;
            }

            .prix {
                font-size: 18px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <?php
        header_home();
        ?>

        <main>
            <h1>Bienvenue sur SmartBike</h1>

            <?php
            if ($velos && is_array($velos)) {
                foreach ($velos as $velo) {
                    echo '<div class="velo-container">';
                    echo  "<br>" . "Voici le dernier vélo que SmartBike possède :" . "<br>";
                    echo '<img src="' . $velo['image_v'] . '" alt="Image du dernier vélo ajouté">' . "<br>";
                    echo "Description du vélo : " . $velo['description_v'] . "<br>";
                    echo '<p class="prix">Prix : ' . $velo['prix_v'] . '</p>';
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