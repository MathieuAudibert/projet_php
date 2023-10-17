<?php

require_once('./boutique/view.php');
require_once('./boutique/requetes.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}

function handler_boutique() {
    if (isset($_POST['ajouter_au_panier']) && isset($_POST['id_fleurs'])) {
        $id_fleurs = $_POST['id_fleurs'];
        $fleur = obtenirFleurParID($id_fleurs);

        if ($fleur) {
            $_SESSION['panier'][] = $fleur;
            header('Location: ../panier');
            exit;
        } else {
            echo "Une erreur s'est produite lors de l'ajout de l'article au panier.";
        }
    } else {
        $view = display_boutique();
        echo $view;
    }
}
