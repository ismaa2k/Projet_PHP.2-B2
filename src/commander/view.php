<?php

function view_commander()
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

            form {
                max-width: 400px;
                margin: 0 auto;
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            select,
            input[type="text"],
            input[type="email"],
            textarea {
                width: 100%;
                padding: 8px;
                margin-bottom: 12px;
                box-sizing: border-box;
            }

            textarea {
                resize: vertical;
            }

            input[type="submit"] {
                background-color: #4caf50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>

    <body>
        <?php
        header_home();
        ?>

        <main>
            <h1>Commande :</h1>

            <form action="" method="post">
                <label for="velo-select">Choisis un vélo :</label>
                <select id="velo-select" name="velo-select">
                    <optgroup label="VTT">
                        <option>Vélo Noir</option>
                        <option>Vélo Bleu</option>
                        <option>Vélo Rouge</option>
                    </optgroup>
                </select>
                <br>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required />
                <br>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required />
                <br>
                <label for="mail">Mail :</label>
                <input type="email" id="mail" name="mail" required />
                <br>
                <label for="message">Message :</label>
                <textarea id="message" name="message"></textarea>
                <br>
                <input type="submit" value="Envoyé">
            </form>
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