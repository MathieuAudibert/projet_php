<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <title>SavourezLaSoif</title>
    </head>
    <?php
        function panier_view(){}
    ?>
    <body>
        <header>
            <h1> <a href='/'>SavourezLaSoif</a></h1>
    
            <nav>
                <ul>
                    <li><a href='/TousLesProduits'>Tous les Produits</a></li>
                    <li><a href='/Panier'><i class='ph ph-shopping-cart-simple dessus'></i></a></li>
                    <li><a href='/Connection'><i class='ph ph-sign-in'></i></a></li>
                    <li><a href='/EnSavoirPlus'><i class='ph ph-info'></i></a></li>
                </ul>
            </nav>
        </header>
            <h1>Contenu Du Panier : </h1>
            
        
    <style>
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;   
        overflow-x:hidden; 
        background-color:whitesmoke;
    }
    
    
    header {
        display:flex;
        align-items:center;
        justify-content:space-between;
        background-color:#242424;
        color: white;
        padding: 10px;
        text-align: center;
    }
    
    header h1 {
        margin: 0;
    }
    
    h1 a{
        text-decoration:none;
        color:WHITE;
    }
    .dessus{
        color:grey;
    }
    nav ul {
        list-style-type: none;
        padding: 0;
        display: flex; 
    }
    nav ul li {
        margin-right:40px;
    }
    
    nav ul li a {
        color:white;
        text-decoration: none;
    }
    nav ul li a:hover {
        color: #767676;
    }

    img{
        width:40px ;
        padding: 8px 0;
    }

    h2{
        text-align:center;
        
    }

    main {
        background-color:white;
        width: 60%;
        margin: auto;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    main img{
        width :15%;
    }
    main span{
        display:flex;
        justify-content:center;
    }

    .boisson-panier {
        display: flex;
        flex-wrap: wrap;
        justify-content:center;
        align-content: center;
        align-items: center;
    }

    form button{
        margin-left:20px;
        font-size:25px;
        color:red;
        background-color:white;
        border:none;
        cursor:pointer;
    }

    h1{
        display:flex;
        justify-content:center;
    }

    </style>
    
    
    </body >
</html>