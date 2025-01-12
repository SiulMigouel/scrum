<?php include_once("header.php"); ?>

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
        <h1>Les artefacts</h1>

        <div class="contenue">
            <p>
                Les artefacts SCRUM sont des documents qui permettent de visualiser l’évolution du projet et de garantir la transparence. Ils représentent soit du travail soit de la valeur et fournissent ainsi des opportunités pour l’inspection et l’adaptation.
            </p>
            <div class="section">
            <h3>Le Product Backlog </h3>
            <p>
                C’est une liste priorisée de toutes les fonctionnalités, améliorations et corrections à apporter au produit. Il est géré par le Product Owner et mis à jour en fonction des besoins du projet.
            </p>
            </div>
            <div class="section">
            <h3>Le Sprint Backlog :</h3>
            <p>
                Il contient les éléments du Product Backlog sélectionnés pour le Sprint en cours. C’est l’équipe de développement qui décide de la manière de réaliser ces éléments pendant le Sprint.
            </p>
            </div>
            <div class="section">
            <h3>L'Incrément <a class="lien trois" href="./cours8.php">(à ne pas confondre avec Itératif !)</a> :</h3>
            <p>
                C’est la totalité des éléments du Product Backlog réalisés à la fin du Sprint. L'Incrément est fonctionnel et doit répondre à la définition de “Fini”.
            </p>
            </div>
            <div class="section">
            <h3>La Définition de "Fini"/ “Terminé”/ “Done” :</h3>
            <p>
                Il s'agit d'un critère de qualité, partagé par l’équipe, qui précise quand une tâche ou une fonctionnalité peut être considérée comme terminée.
            </p>
            </div>
        </div>
        </div>

        <div class="img">
            <video controls autoplay>
                <source src="./images/video3.mp4" type="video/webm" />
              
                <source src="./images/video3.mp4" type="video/mp4" />
              
                Download the
                <a href="./images/video3.mp4">WEBM</a>
                or
                <a href="./images/video3.mp4">MP4</a>
                video.
              </video>
              <div class="boutons">
                <a href="#">Me tester sur ce que je viens d'apprendre</a>
                <a href="./cours4.php">Je continue le cours</a>
            </div>
        </div>
    </div>
    
</section>

<?php include_once 'footer.html'; ?>
</body>
</html>
