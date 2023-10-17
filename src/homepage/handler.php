<?php
require_once ('./homepage/view.php');

function handler_homepage(){
    $view = display_homepage();
    echo $view;

}
