<?php

require_once('homepage/view.php');
require_once('homepage/model.php');

function handler_homepage()
{
    $velos = model_homepage();
    view_homepage($velos);
}
