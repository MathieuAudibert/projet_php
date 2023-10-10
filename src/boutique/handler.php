<?php
require_once ('./boutique/view.php');
require_once ('./boutique/requetes.php');
function handler_boutique(){
    $view = display_boutique();
    echo $view;
}
