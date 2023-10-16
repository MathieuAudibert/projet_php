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
            table {
                width: 100%;
            }
            table, th, td {
                border: 1px solid #ccc;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #333;
                color: #fff;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            tr:nth-child(odd) {
                background-color: #fff;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'équipe</a></li>
            </ul>
        </nav>
        <h1>Votre panier</h1>
        <table>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total</th>
                <th>Action</th>
            </tr>';

    if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
        foreach ($_SESSION['panier'] as $id_fleurs_panier => $details_produit) {
            if (isset($details_produit['quantite']) && isset($details_produit['prix_unitaire'])) {
                echo '
                <tr>
                    <td>Nom du produit</td>
                    <td>' . $details_produit['quantite'] . '</td>
                    <td>Prix</td>
                    <td>' . ($details_produit['quantite'] * $details_produit['prix_unitaire']) . '</td>
                    <td>
                        <form method="post" action="../panier/requetes.php">
                            <input type="hidden" name="id_fleurs_a_supp" value="' . $id_fleurs_panier . '">
                            <button type="submit" name="supprimer_fleurs"><i class="ph ph-trash-simple"></i></button>
                        </form>
                    </td>
                </tr>';
            }
        }
    }

    echo '
        </table>
    </body>
    </html>';
}
?>
