<?php
require_once ('./panier/view.php');
require_once ('./panier/requetes.php');
function handler_panier(){
    $view = display_panier();
    $requetes = requetes_panier();
    echo $view;
    echo $requetes;
}
