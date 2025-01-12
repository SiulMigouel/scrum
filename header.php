<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <title>SCRUM'MI apprend la méthode facilement</title>
</head>
<?php include 'popup_eval.php'; ?>
<body>
    <div class="navbar">
        <!-- Logo à gauche -->
        <div class="navbar-left">
            <a href="./index.php" class="header-logo">
                <img src="./images/scrum-logo.png" alt="logo">
                <span>SCRUM'MI</span>
            </a>
        </div>
    
        <!-- Menu centré -->
        <div class="navbar-center">
            <ul class="header-menu">
                <li class="deroulant"><a href="#">Tous les cours</a>
                    <ul class="sous1">
                        <li><a href="#">Cours HTML et CSS</a></li>
                        <li><a href="#">Cours JavaScript</a></li>
                        <li><a href="#">Cours PHP et MySQL</a></li>
                    </ul>
                </li>
                <li class="deroulant"><a href="#">Toutes les vidéos</a>
                    <ul class="sous2">
                        <li><a href="#">CSS display</a></li>
                        <li><a href="#">CSS position</a></li>
                        <li><a href="#">CSS float</a></li>
                    </ul>
                </li>
                <li><a href="./cartemental.php">Carte mentale</a></li>
            </ul>
        </div>
    
        <!-- Bouton à droite -->
        <div class="navbar-right">
            <a onclick="showPopup()" href="#Sévaleur" class="last-button">S'évaluer</a>
        </div>
    </div>
    
    


    
    
</body>
</html>

