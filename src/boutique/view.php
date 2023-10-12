<?php
function display_boutique(){
    $view = '
    <html>
    <head>
        <title>Fleurissmo | Boutique</title>
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

            .flower-container {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 20px;
            }

            .flower-card {
                border: 1px solid #ddd;
                padding: 10px;
                background-color: #fff; /* Couleur de fond des cartes */
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
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'équipe</a></li>
            </ul>
        </nav>
        <h1>La boutique Fleurissimo</h1>';

    $view .= '
        <div class="flower-container">
            <div class="flower-card">
                <img class="flower-image" src="../images/coquelicot.png" alt="Coquelicot">
                <p class="flower-price">$10.99</p>
                <form method="post" action="../panier">
                    <input type="hidden" name="fleurs_id" value="1"> 
                    <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
                </form>
            </div>

            <div class="flower-card">
                <img class="flower-image" src="../images/rose.png" alt="Rose">
                <p class="flower-price">$12.99</p>
                <form method="post" action="../panier">
                    <input type="hidden" name="fleurs_id" value="2"> 
                    <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
                </form>
            </div>

            <div class="flower-card">
                <img class="flower-image" src="../images/marguerite.png" alt="Marguerite">
                <p class="flower-price">$20</p>
                <form method="post" action="../panier">
                    <input type="hidden" name="fleurs_id" value="3"> 
                    <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
                </form>
            </div>

            <div class="flower-card">
                <img class="flower-image" src="../images/tulipe.png" alt="Tulipe">
                <p class="flower-price">$5</p>
                <form method="post" action="../panier">
                    <input type="hidden" name="fleurs_id" value="4"> 
                    <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
                </form>
            </div>

            <div class="flower-card">
                <img class="flower-image" src="../images/tournesol.png" alt="Tournesol">
                <p class="flower-price">$9.99</p>
                <form method="post" action="../panier">
                    <input type="hidden" name="fleurs_id" value="5"> 
                    <button type="submit" name="ajouter_au_panier">Ajouter au panier</button>
                </form>
            </div>
        </div>';

    $view .= '
    </body>
    </html>
    ';
    return $view;
}
?>
