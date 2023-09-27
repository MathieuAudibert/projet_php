<?php
require_once ('./connexion/view.php');
require_once ('./connexion/requetes.php');
function handler_connexion(){
    $view = display_connexion();
    $requetes = requetes_connexion();
    echo $view;
    echo $requetes;
}
