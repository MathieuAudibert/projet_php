<?php
function display_homepage(){
    $view = '
    <html>
    <head>
        <title>Fleurissimo | Accueil</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: #f5f5f5; /* Couleur de fond */
            }

            h1 {
                color: #333;
            }

            .navbar {
                background-color: #444;
                padding: 10px;
            }

            .navbar ul {
                list-style: none;
                padding: 0;
            }

            .navbar li {
                display: inline;
                margin: 10px;
            }

            p {
                font-size: 16px; /* Ajustez la taille de police */
                color: #555;
                text-align: left;
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff; /* Couleur de fond du texte */
                border-radius: 4px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../inscription">Inscription</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'équipe</a></li>
            </ul>
        </nav>
        <h1>Accueil Fleurissimo</h1>
        <p>
            Fleurissimo est un projet réalisé lors de ma 2eme année de bachelor développement et data au sein de l\'Efrei. Le projet a été donné en cours de PHP procédural et POO avec une date limite de x mois. Le site devait contenir les "features" suivantes :
        </p>
        <p>
            Pourquoi Fleurissimo ? C\'est car Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
        </p>
    </body>
    </html>
    ';
    return $view;
}
?>
