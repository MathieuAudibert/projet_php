<?php
function display_connexion($connect) {
    echo '
    <html>
    <head>
        <title>Fleurissimo | Connexion</title>
    </head>
    <body>
        <h1>Connexion</h1>
        <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'equipe</a></li>
            </ul>
        </nav>
        <form action="handler.php" method="POST">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br><br>
        
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br><br>
        
            <input type="submit" value="Se connecter">
        </form>
        
        <p>';
    if ($connect) {
        echo "Connexion réussie!";
    } else {
        echo "Échec de la connexion!";
    }
    echo '</p>
    </body>
    </html>
    ';
}
function display_inscription(){
    echo '
    <html>
    <head>
        <title>Fleurissimo | Inscription</title>
    </head>
    <body>
        <h1>Inscription</h1>
        <nav class="navbar">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../boutique">Boutique</a></li>
                <li><a href="../connexion">Connexion</a></li>
                <li><a href="../panier">Le panier</a></li>
                <li><a href="../team">L\'equipe</a></li>
            </ul>
        </nav>
        <hr style ="border :1px solid red; margin 20px 0;">
        <form action="handler.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br><br>
            
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br><br>
            
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="S inscrire">
        </form>
    </body>
    </html>
    ';
}

?>
