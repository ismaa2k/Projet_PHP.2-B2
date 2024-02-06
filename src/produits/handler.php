<?php

require_once('produits/view.php');
require_once('produits/model.php');

function handler_produits()
{
    $velos = model_produits();
    view_produits($velos);
}
