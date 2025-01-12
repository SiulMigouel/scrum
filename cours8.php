<?php include('./header.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cours.css">
    <title>cours 1</title>
</head>
<body>
    
<section class="cours">
    <div class="container">

        <div class="txt">
        <h1>Méthode Incrémentale VS Méthode Itérative</h1>

        <div class="contenue">
            <div class="section">
            <h3>Méthode incrémentale : </h3>
            <p>
            Consiste à construire un produit ou un système en ajoutant de petites portions de fonctionnalités ou de composants à chaque étape. Chaque incrément est une partie fonctionnelle du produit complet : un nouveau "morceau" du produit est livré, et ce morceau doit fonctionner et être utilisable et pleinement opérationnel.            </div>
            <div class="section">
            <h3>Méthode itérative : </h3>
            <p>
            L'itératif se concentre sur la répétition du processus de développement, où à chaque itération, l’équipe évalue le produit afin de produire au cycle suivant une version du produit améliorée et révisée. L'objectif est de répéter le travail pour affiner progressivement le produit à chaque cycle en fonction des retours reçus.            </p>
            </div>
            <p>
            La méthode scrum est itérative dans son processus global (chaque Sprint est une itération) et incrémentale dans la livraison de fonctionnalités (chaque Sprint livre un incrément fonctionnel du produit).
            </p>
        </div>
        </div>

        <div class="img">
            <video controls autoplay>
                <source src="./images/video8.mp4" type="video/webm" />
              
                <source src="./images/video8.mp4" type="video/mp4" />
              
                Download
                <a href="./images/video8.mp4">WEBM</a>
                or
                <a href="./images/video8.mp4">MP4</a>
                video.
              </video>
              <div class="boutons">
                <a href="./qcm_cours8.php">Me tester sur ce que je viens d'apprendre</a>
                <a href="./cours9.php">Je continue le cours</a>
            </div>
        </div>
    </div>
    
</section>

<?php include_once 'footer.html'; ?>
</body>
</html>
