<?php

function view_contact()
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

            iframe {
                width: 100%;
            }
        </style>
    </head>

    <body>
        <?php
        header_home();
        ?>

        <main>
            <h1 style="text-align: center;">Contact :</h1>

            <form action="" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom"> <br>

                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom"> <br>

                <label for="email">Email :</label>
                <input type="email" name="email" id="email"> <br>

                <label for="message">Message :</label>
                <textarea name="message" id="message"></textarea><br>

                <input type="submit" value="Envoyé">
            </form>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42061.20892443422!2d2.35166097315967!3d48.78522047286941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e24e04a9c3%3A0xc55cb3e676f95321!2sEfrei!5e0!3m2!1sfr!2sfr!4v1700674669389!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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