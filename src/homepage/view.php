<?php

function display_homepage(){
    $view = '
    <title>Fleurissimo | Accueil</title>
    <h1>Accueil Fleurissimo</h1>
    <body>
    <nav class="navbar">
        <ul>
            <li><a href="../">Accueil</a></li>
            <li><a href="../boutique">Boutique</a></li>
            <li><a href="../connexion">Connexion</a></li>
            <li><a href="../panier">Le panier</a></li>
            <li><a href="../team">L\'equipe</a></li>
        </ul>
        </nav>
        <hr style ="border :1px solid red; margin 20px 0;">
        <p>Fleurissimo est un projet réalisé lors de ma 2eme année de bachelor developpement et data au sein de l\'Efrei. <br>
        Le projet a été donné en cours de php procédural et POO avec une date limite de x mois. Le site devait contenir les "features" suivantes : <br>

        </p>
        <hr style ="border :1px solid red; margin 20px 0;">
        <p>Pourquoi fleurissimo ? C\'est car Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <hr style ="border :1px solid red; margin 20px 0;">
        <div style="margin: 20px;">
        <img src="/projet_php/src/images/coquelicot.png" alt="Coquelicot">
        <img src="/projet_php/src/images/marguerite.png" alt="Marguerite">
        <img src="/projet_php/src/images/rose.png" alt="Rose">
    </div>
    

    </body>
    ';
    return $view;
}

