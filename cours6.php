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
        <h1>La planification</h1>

        <div class="contenue">
            <p>
            La planification dans SCRUM se fait lors d’une réunion pré-sprint. On y retrouve le product owner, le scrum master ainsi que l’équipe de développement. Ils définissent ensemble (avec le client) les exigences/livrables et donc l’objectif du sprint. L”équipe de développement va ensuite réfléchir au procédé pour atteindre celui-ci. Cela permettra de vérifier que le travail à fournir correspond à la durée prévue du sprint.            </p>
            <div class="section">
            <h3>Estimation des tâches :</h3>
            <p>
            Les tâches sont souvent estimées en termes de points d'effort, en utilisant des techniques comme le "Planning Poker" où chaque membre de l’équipe estime la tâche avant de parvenir à un consensus.            </p>
            </div>
            <div class="section">
            <h3>Gestion des priorités :</h3>
            <p>
            Le Product Owner définit et priorise les éléments du Product Backlog en fonction des besoins du marché et des parties prenantes. L’équipe de développement devra réaliser les tâches en fonction de ces priorités.
            </p>
            </div>
        </div>
        </div>

        <div class="img">
            <img src="./images/cours6.svg" alt="schéma planification" class="clickable-image">
              <div class="boutons">
                <a href="./qcm_cours6">Me tester sur ce que je viens d'apprendre</a>
                <a href="./cours7.php">Je continue le cours</a>
            </div>
        </div>
    </div>
    <div class="lightbox" id="lightbox">
        <img src="" alt="schéma planification" class="lightbox-image">
    </div>
</section>

<?php include_once 'footer.html'; ?>
</body>
</html>

<script>
    // Récupération des éléments
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = lightbox.querySelector('img');
    const clickableImage = document.querySelector('.clickable-image');

    // Afficher la lightbox
    clickableImage.addEventListener('click', () => {
        lightbox.style.display = 'flex';
        lightboxImage.src = clickableImage.src; // Utilise la même source que l'image cliquée
    });

    // Fermer la lightbox en cliquant dessus
    lightbox.addEventListener('click', () => {
        lightbox.style.display = 'none';
    });
</script>
