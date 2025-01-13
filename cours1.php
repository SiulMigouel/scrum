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
        <h1>Introduction</h1>

        <div class="contenue">
            <p>
                C'est une <a class="lien 1" href="./cours9.php">forme de méthode agile</a> (voir vidéo), particulièrement utilisée dans le développement logiciel. La méthode SCRUM met l’accent sur la flexibilité, la collaboration et la transparence.
            </p>
            <p class="funfact">
                Funfact : conçue dans les années 90, elle s’inspire à l’origine des stratégies collaboratives du rugby.
            </p>
            <h2>La méthode SCRUM repose sur 5 valeurs pour ses membres :</h2>
            <ul>
                <li>Engagement : Chaque membre de l’équipe s’engage à atteindre les objectifs du Sprint.</li>
                <li>Respect : Les membres respectent les compétences et les contributions de chacun.</li>
                <li>Courage : Chaque membre fait preuve de courage pour relever les défis.</li>
                <li>Focus : L’équipe se concentre sur les objectifs du Sprint.</li>
                <li>Ouverture : Les membres de l’équipe partagent ouvertement les informations pertinentes.</li>
            </ul>
            <p>
                Ces principes favorisent l’amélioration continue et la création de valeur pour le client. Parmi ses avantages, elle accélère les cycles de développement, elle s’adapte aux changements et améliore la communication entre les parties prenantes.
            </p>
            <p>Les trois piliers : Transparence, Inspection, Adaptation.</p>
        </div>
        </div>

        <div class="img">
            <video controls>
                <source src="./images/video1.mp4" type="video/webm" />
              
                <source src="./images/video1.mp4" type="video/mp4" />
              
                Download
                <a href="./images/video1.mp4">WEBM</a>
                or
                <a href="./images/video1.mp4">MP4</a>
                video.
              </video>
              <div class="boutons">
                <a href="./qcm_cours1.php">Me tester sur ce que je viens d'apprendre</a>
                <a href="./cours2.php">Je continue le cours</a>
            </div>
        </div>
    </div>
    
</section>

    <?php include_once 'footer.html'; ?>

</body>
</html>
