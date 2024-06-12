<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>EduQuest</title>
    <!--  <style>
        @media only screen and (max-width: 600px) {
            #menu {
                display: none;
                flex-direction: column;
                align-items: center;
            }

            #hamburger {
                display: block;
                font-size: 24px;
                cursor: pointer;
                background: none;
                border: none;
                outline: none;
            }
        }
    </style>-->
</head>
<body>
    
    <nav>
        <img src="pics/logo.png" alt="" class="logomenu">


        <center>
            <form method="GET" action="">
                <input type="search" name="search" class="searchin">
                <button type="submit" class="search"></button>
            </form>
        </center>
        
        


        <button id="hamburger" onclick="toggleMenu()">☰</button>
        <span class="nav" id="menu">
            <a href="index.php" id="a">Accueil     </a>
            
            <a href="#" id="a">A propos</a>
        </span>
    </nav>

    <section>
        <h1 id="t">EduQuest - Votre Source d'Epreuves Educatives.</h1>
        <center><cite>"Trouver, Apprenez, Réussissez."<br><br></cite></center>
        
        <aside id="hist">
            
        </aside>
        <div id="contenu">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            
            <center><button id="bouton" href="entite.php">Continuer</button></center>
            
        </div>
    </section>

    <!-- <script type="text/javascript">
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = (menu.style.display === "flex" || menu.style.display === "") ? "none" : "flex";
        }
    </script>-->
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html>