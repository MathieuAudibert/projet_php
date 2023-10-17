<?php
function requetes_panier() {
    $view = '<table>
        <tr>
            <th>Produit</th>
            <th>Prix unitaire</th>
            <th>Action</th>
        </tr>';

    if (!empty($_SESSION['panier'])) {
        foreach ($_SESSION['panier'] as $fleur) {
            $nom = $fleur['nom_fleurs'];
            $prix = $fleur['prix_fleurs']; 

            $view .= '<tr>
                <td>' . $nom . '</td>
                <td>' . $prix . '</td>
                <td>
                    <form method="post" action="../panier/requetes.php">
                        <input type="hidden" name="id_fleurs_a_supp" value="' . $id_fleurs . '">
                        <button type="submit" name="supprimer_fleurs">Supprimer</button>
                    </form>
                </td>
            </tr>';
        }
    } else {
        $view .= "<tr><td colspan='3'>Le panier est vide.</td></tr>";
    }

    $view .= '</table>';

    return $view;
}
?>