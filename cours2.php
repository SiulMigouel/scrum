<?php include('./header.html'); ?>

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
        <h1>Les rôles durant le projet</h1>

        <div class="contenue">
            <p>
                La méthode SCRUM repose sur trois rôles principaux qui travaillent en collaboration pour atteindre les objectifs du projet annoncé.
            </p>
            <div class="section">
            <h3>Le Product Owner (PO) :</h3>
            <p>
                Il est responsable de la gestion du Product Backlog, il définit les priorités et veille à ce que l’équipe travaille sur les fonctionnalités les plus importantes. Il est le lien entre les parties prenantes (clients, dirigeants, etc.) et l’équipe de développement.
            </p>
            </div>
            <div class="section">
            <h3>Le Scrum Master :</h3>
            <p>
                Le Scrum Master est responsable de l’application de la méthode SCRUM et veille à ce que l’équipe en respecte ses principes. Il aide l’équipe à surmonter les obstacles et garantit que le processus se poursuit correctement. Il identifie les obstacles puis les résoult afin que l’équipe puisse progresser sans soucis.
            </p>
            </div>
            <div class="section">
            <h3>L’Équipe de Développement :</h3>
            <p>
                Ce sont des professionnels responsables de la création d’un incrément fonctionnel (une partie du produit) à la fin de chaque Sprint. L’équipe est auto-organisée, interdisciplinaire et ne travaille pas forcéement avec une supervision directe.            </p>
            </div>
        </div>
        </div>

        <div class="img">
            <video controls autoplay>
                <source src="./images/video2.mp4" type="video/webm" />
              
                <source src="./images/video2.mp4" type="video/mp4" />
              
                Download the
                <a href="./images/video2.mp4">WEBM</a>
                or
                <a href="./images/video2.mp4">MP4</a>
                video.
              </video>
              <div class="boutons">
                <a href="#">Me tester sur ce que je viens d'apprendre</a>
                <a href="./cours3.php">Je continue le cours</a>
            </div>
        </div>
    </div>
    
</section>

<?php include_once 'footer.html'; ?>
</body>
</html>
