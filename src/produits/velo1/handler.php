<?php

require_once('produits\velo1\view.php');
require_once('produits\velo1\model.php');
function handler_velo1()
{
    $velos = model_velo1();
    view_velo1($velos);
}
