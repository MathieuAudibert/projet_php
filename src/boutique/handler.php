<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once ('./boutique/view.php');
require_once ('./boutique/requetes.php');
function handler_boutique(){
    $view = display_boutique();
    echo $view;
}
