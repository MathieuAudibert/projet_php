<?php
require_once ('./team/view.php');
require_once ('./team/requetes.php');
function handler_team(){
    $view = display_team();
    $requetes = requetes_team();
    echo $view;
    echo $requetes;
}
