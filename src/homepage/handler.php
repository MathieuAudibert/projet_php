<?php
require_once ('./homepage/view.php');
require_once ('./homepage/request.php');
function handler_homepage(){
    $view = display_homepage();
    $requetes = requetes_homepage();
    echo $view;
    echo $requetes;
}
