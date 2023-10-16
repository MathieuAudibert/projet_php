<?php
function requetes_panier(){
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    $total = 0;

    if (isset($_POST['fleurs_id_a_supprimer']) && is_numeric($_POST['fleurs_id_a_supprimer'])) {
        $id_fleurs_a_supp = $_POST['fleurs_id_a_supprimer'];
        if (isset($_SESSION['panier'][$id_fleurs_a_supp])) {
            unset($_SESSION['panier'][$id_fleurs_a_supp]);
        }
    
        header('Location: panier');
        exit;
    }
    if (empty($_SESSION['panier'])) {
        echo "<tr><td colspan='4'>Le panier est vide.</td></tr>";
    } else {

        try {
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=fleurissimo', 'postgres', '20221134');
            
            foreach ($_SESSION['panier'] as $fleurs_id) {
                $requete = $bdd->prepare("SELECT * FROM fleurs WHERE id_fleurs = :id_fleurs");
                $requete->bindParam(':id_fleurs', $fleurs_id, PDO::PARAM_INT);
                $requete->execute();
                $fleurs = $requete->fetch(PDO::FETCH_ASSOC);
                
                $total += $fleurs['prix_fleurs'];
                
                echo "<tr>
                        <td>" . $fleurs['nom_fleurs'] . "</td>
                        <td>1</td>
                        <td>" . $fleurs['prix_fleurs'] . "</td>
                        <td>" . $fleurs['prix_fleurs'] . "</td>
                      </tr>";
                      
                echo "<tr>
                        <td colspan='3'></td>
                        <td>
                            <form method='post' action='requetes.php'>
                                <input type='hidden' name='fleurs_id_a_supprimer' value='" . $fleurs_id . "'>
                                <button type='submit' name='supprimer_fleurs'><i class='ph ph-trash-simple'></i></button>
                            </form>
                        </td>
                      </tr>";
            }
            
            echo "<tr><td colspan='3'>Total du panier :</td><td>" . $total . "</td></tr>";
            
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    echo "</table>";
}
?>
