<?php

require_once('config.php');
require_once('homepage/handler.php');
require_once('produits/handler.php');
require_once('commander/handler.php');
require_once('produits/velo1/handler.php');
require_once('produits/velo2/handler.php');
require_once('produits/velo3/handler.php');
require_once('contact/handler.php');

function route_request()
{
    $uri = $_SERVER['REQUEST_URI'];
    switch ($uri) {
        case '/':
            handler_homepage();
            break;
        case '/produits':
            handler_produits();
            break;
        case '/velo/1':
            handler_velo1();
            break;
        case '/velo/2':
            handler_velo2();
            break;
        case '/velo/3':
            handler_velo3();
            break;
        case '/commander/1':
            handler_commander();
            break;
        case '/commander/2':
            handler_commander();
            break;
        case '/commander/3':
            handler_commander();
            break;
        case '/contact':
            handler_contact();
            break;
        default:
            echo '404 NOT FOUND';
            break;
    }
}

route_request();
