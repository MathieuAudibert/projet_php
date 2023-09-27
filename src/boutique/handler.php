<?php
require_once ('./boutique/view.php');
require_once ('./boutique/requetes.php');
function handler_boutique(){
    $view = display_boutique();
    $requetes = requetes_boutique();
    echo $view;
    echo $requetes;
}
