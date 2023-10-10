<?php
function display_boutique(){
    $view = '
    <html>
    <head>
        <title>Fleurissmo | Boutique</title>
        <style>
            .flower-card {
                border: 1px solid #ddd;
                padding: 10px;
                margin: 10px;
                width: 200px;
                display: inline-block;
                vertical-align: top; 
            }
            .flower-image {
                max-width: 100%;
                height: auto;
            }
            .flower-price {
                margin-top: 10px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>La boutique Fleurissimo</h1>
        <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'equipe</a></li>
            </ul>
        </nav>';
    $view .= '
        <div class="flower-card">
            <img class="flower-image" src="./images/coquelicot.png" alt="Coquelicot">
            <p class="flower-price">$10.99</p>
            <form method="post" action="../panier">
                <input type="hidden" name="fleurs_id" value="1"> 
                <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
            </form>
        </div>

        <div class="flower-card">
            <img class="flower-image" src="./images/rose.png" alt="Rose">
            <p class="flower-price">$12.99</p>
            <form method="post" action="../panier">
                <input type="hidden" name="fleurs_id" value="2"> 
                <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
            </form>
        </div>

        <div class="flower-card">
            <img class="flower-image" src="./images/marguerite.png" alt="Marguerite">
            <p class="flower-price">$20</p>
            <form method="post" action="../panier">
                <input type="hidden" name="fleurs_id" value="3"> 
                <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
            </form>
        </div>

        <div class="flower-card">
            <img class="flower-image" src="./images/tulipe.png" alt="Tulipe">
            <p class="flower-price">$5  </p>
            <form method="post" action="../panier">
                <input type="hidden" name="fleurs_id" value="4"> 
                <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
            </form>
        </div>


        <div class="flower-card">
            <img class="flower-image" src="..\images\tournesol.png" alt="Tournesol">
            <p class="flower-price">$9.99</p>
            <form method="post" action="../panier">
                <input type="hidden" name="fleurs_id" value="5"> 
                <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
            </form>
        </div>';

    $view .= '
    </body>
    </html>
    ';
    echo $view;
}
?>
