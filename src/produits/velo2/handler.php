<?php

require_once('produits\velo2\view.php');
require_once('produits\velo2\model.php');
function handler_velo2()
{
    $velos = model_velo2();
    view_velo2($velos);
}
