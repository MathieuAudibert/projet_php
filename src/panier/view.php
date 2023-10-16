<?php
function display_panier() {
    echo '
    <html>
    <head>
        <title>Fleurissimo | Panier</title>
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
            .navbar li a {
                color:white;
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
        <h1>Votre panier</h1>';

    if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
        echo '<table>
                <tr>
                    <th>Nom du produit</th>
                    <th>Prix</th>
                    <th>Image</th>
                </tr>';

        foreach ($_SESSION['panier'] as $fleur) {
            echo '<tr>
                    <td>' . $fleur['nom_fleurs'] . '</td>
                    <td>$' . $fleur['prix_fleurs'] . '</td>
                    <td><img src="' . $fleur['image_fleurs'] . '" alt="' . $fleur['nom_fleurs'] . '"></td>
                  </tr>';
        }

        echo '</table>';
    } else {
        echo "Votre panier est vide.";
    }

    echo '
    </body>
    </html>';
}
?>
