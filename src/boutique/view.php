<?php
require_once('requetes.php');
function display_boutique(){
    $view = '
    <html>
    <head>
        <title>Fleurissimo | Boutique</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: #f5f5f5;
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
            .navbar li a {
                color:white;
            }
            .flower-container {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 20px;
            }

            .flower-card {
                border: 1px solid #ddd;
                padding: 10px;
                background-color: #fff;
            }

            .flower-image {
                max-width: 100%;
                height: auto;
            }

            .flower-price {
                margin-top: 10px;
                font-weight: bold;
                color: #555;
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
        <h1>La boutique Fleurissimo</h1>';



        $view .= '
        <div class="flower-container">';
    $fleurs = requetes_boutique();

    foreach ($fleurs as $fleur) {
        $view .= '
            <div class="flower-card">
                <img class="flower-image" src="' . $fleur['image_fleurs'] . '" alt="' . $fleur['nom_fleurs'] . '">
                <p class="flower-price">' . $fleur['prix_fleurs'] . '€</p>
                <p class="flower-name">'. $fleur['nom_fleurs'] .'</p>
                <p>'. $fleur['description_fleurs'] .'</p>
                
                <form method="post" action="../panier">
                    <input type="hidden" name="id_fleurs" value="' . $fleur['id_fleurs'] . '">
                    <input type="hidden" name="nom_fleurs" value="' . $fleur['nom_fleurs'] . '">
                    <input type="hidden" name="prix_fleurs" value="' . $fleur['prix_fleurs'] . '">
                    <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
                </form>
            </div>';
    }
    

    $view .= '
        </div>
    </body>
    </html>';

    return $view;
}
?>