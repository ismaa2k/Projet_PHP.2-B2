<?php

function header_home()
{
    echo "
        <!DOCTYPE html>
        <html lang=fr>
        <head>
            <meta charset=UTF-8>
            <meta name=viewport content=width=device-width, initial-scale=1.0>
            <title>SmartBike</title>

 <style>
                header {
                    padding: 10px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                ul {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    align-items: center;
                }

                li {
                    margin-right: 20px;
                }

                a {
                    text-decoration: none;
                    font-weight: bold;
                    font-size: 16px;
                }

                #Logo {
                    width: 150px;
                }
            </style>
        </head>
        <body>
            <header>
                <ul>
                    <li><a href=/><img id=Logo src=https://i.ibb.co/3z22RwV/Capture-d-cran-2023-11-22-154226.png alt='Logo SmartBike'></a></li>
                    <li><a href=/>Accueil</a></li>
                    <li><a href=/produits>Produits</a></li>
                    <li><a href=/contact>Contact</a></li>
                </ul>
            </header>
        </body>
        </html>
    ";
}
