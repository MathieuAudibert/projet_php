<?php
function display_team(){
    echo '
    <html>
    <head>
        <title>Fleurissimo | L\'équipe</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
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
            .form-container {
                width: 300px;
                margin: 0 auto;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../inscription">Inscription</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'équipe</a></li>
            </ul>
        </div>
        <h3>L\'équipe Fleurissimo n\'est composée que d\'une personne :</h3>
        <p>Mathieu Audibert, 18 ans, 2ème année de bachelor en développement et data à l\'Efrei.</p>
        <h4>Mon adresse e-mail : mathieu.audibert@efrei.net</h4>
    </body>
    </html>';
}
?>
