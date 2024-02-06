<?php

require_once('produits\velo3\view.php');
require_once('produits\velo3\model.php');
function handler_velo3()
{
    $velos = model_velo3();
    view_velo3($velos);
}
