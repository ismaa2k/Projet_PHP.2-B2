<?php

require_once('contact/view.php');
require_once('contact/model.php');
function handler_contact()
{
    $view = view_contact();
    $model = model_contact();

    echo $view;
    echo $model;
}
