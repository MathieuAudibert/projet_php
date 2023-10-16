<?php
function display_inscription() {
    echo '<html>
    <head>
        <title>Fleurissimo | Inscription</title>
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

            form {
                margin: 20px;
                max-width: 400px;
                margin: 0 auto;
                text-align: left;
            }

            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px; 
            }

            input[type="submit"] {
                background-color: #333;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                display: block;
                margin: 0 auto;
            }

            input[type="submit"]:hover {
                background-color: #555;
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
        <h1>Inscription à Fleurissimo</h1>
        <form method="post" action="">
            <h2>Inscription</h2>
            <label for="nom_u_login">Nom d\'utilisateur:</label>
            <input type="text" name="nom_u_login" required><br>
            <label for="email_login">Adresse e-mail:</label>
            <input type="email" name="email_login" required><br>
            <label for="mdp_login">Mot de passe:</label>
            <input type="password" name="mdp_login" required><br>
            <input type="submit" value="S\'inscrire">
        </form>
    </body>
    </html>';
}

function inscr_succes() {
    echo '
    <html>
    <head>
        <title>Fleurissimo | Inscription réussie</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
            }
            h2 {
                color: #333;
            }
            p {
                font-size: 16px;
            }
            a {
                background-color: #333;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                text-decoration: none;
            }
            a:hover {
                background-color: #555;
            }
        </style>
    </head>
    <body>
        <h2>Inscription réussie</h2>
        <p>Vous êtes maintenant inscrit sur notre site.</p>
        <div class="container">
            <a href="../">Retour à l\'accueil</a>
        </div>
    </body>
    </html>';
};

function inscr_error() {
    echo '
    <html>
    <head>
        <title>Fleurissimo | Erreur d\'inscription</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 16px;
        }
        a {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none.
        }
        a:hover {
            background-color: #555;
        }
    </style>
    </head>
    <body>
        <h2>Erreur d\'inscription</h2>
        <p>Une erreur est survenue lors de l\'inscription. Veuillez réessayer.</p>
        <div class="container">
            <a href="../inscription">Retour à l\'inscription</a>
        </div>
    </body>
    </html>';
};
