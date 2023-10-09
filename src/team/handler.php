<?php
require_once ('./team/view.php');
function handler_team(){
    $view = display_team();
    echo $view;
}
