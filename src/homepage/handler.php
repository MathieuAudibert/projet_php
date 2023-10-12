<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once ('./homepage/view.php');
require_once ('./homepage/request.php');
function handler_homepage(){
    $view = display_homepage();
    echo $view;

}
