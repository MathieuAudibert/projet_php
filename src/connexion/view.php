<?php
function display_connexion() {
    echo '<html>
        <body>
            <h2>Inscription</h2>
            <form method="post" action="">
                <label for="nom_u_login">Nom d\'utilisateur:</label>
                <input type="text" name="nom_u_login" required><br>
                <label for="email_login">Adresse e-mail:</label>
                <input type="email" name="email_login" required><br>
                <label for="mdp_login">Mot de passe:</label>
                <input type="password" name="mdp_login" required><br>
                <input type="submit" value="S\'inscrire">
            </form>
            <h2>Connexion</h2>
            <form method="post" action="">
                <label for="nom_u_login">Nom d\'utilisateur:</label>
                <input type="text" name="nom_u_login" required><br>
                <label for="mdp_login">Mot de passe:</label>
                <input type="password" name="mdp_login" required><br>
                <input type="submit" name="connexion" value="Se connecter">
            </form>
        </body>
    </html>';
}


function regis_succes() {
    echo '<html>
        <body>
            <h2>Inscription réussie</h2>
            <p>Vous êtes maintenant inscrit sur notre site.</p>
            <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'equipe</a></li>
            </ul>
            </nav>
        </body>
        
    </html>';
}

function regis_error() {
    echo '<html>
        <body>
            <h2>Erreur d\'inscription</h2>
            <p>Une erreur est survenue lors de l\'inscription. Veuillez réessayer.</p>
            <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'equipe</a></li>
            </ul>
            </nav>
        </body>
    </html>';
}
?>