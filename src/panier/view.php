<?php
function display_panier(){
    session_start();
    $view = '
    <html>
    <head>
        <title>Fleurissimo | Panier</title>
    </head>
    <body>
        <h1>Votre panier Fleurissimo</h1>
        <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'equipe</a></li>
            </ul>
        </nav>
        <hr style ="border: 1px solid red; margin: 20px 0;">
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
                $view .= '
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

    $view .= '
        </table>
    </body>
    </html>';
    return $view;
}
?>
