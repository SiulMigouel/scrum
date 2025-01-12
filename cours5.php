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
                <h1>Les évènements</h1>

                <div class="contenue">
                    <p>
                        La méthode SCRUM divise en Sprints, et chaque Sprint contient plusieurs événements clés.
                    </p>

                    <div class="section">
                        <h3>Le Sprint</h3>
                        <p>
                            Un Sprint est une période fixe, généralement de 1 à 4 semaines, au cours de laquelle un
                            Incrément de produit doit être créé. À la fin du Sprint, une revue et une rétroshpective ont
                            lieu.
                        </p>
                    </div>

                    <div class="section">
                        <h3>Sprint Planning (Planification du Sprint) :</h3>
                        <p>
                            Il contient les éléments du Product Backlog sélectionnés pour le Sprint en cours. C’est
                            l’équipe de développement qui décide de la manière de réaliser ces éléments pendant le
                            Sprint.
                        </p>
                    </div>

                    <div class="section">
                        <h3>Daily Scrum (Réunion Quotidienne) :</h3>
                        <p>
                            Cette réunion de 15 minutes permet à l’équipe de partager l’avancement de leur travail, les
                            obstacles rencontrés et de s’assurer que l’objectif du Sprint est bien en ligne.
                        </p>
                    </div>

                    <div class="section">
                        <h3>Sprint Review (Revue de Sprint) :</h3>
                        <p>
                            A la fin du Sprint, l’équipe présente le travail accompli. Le Product Owner évalue si
                            l’objectif du Sprint a été atteint et discute des ajustements nécessaires.
                        </p>
                    </div>

                    <div class="section">
                        <h3>Sprint Retrospective (Rétrospective de Sprint) :</h3>
                        <p>
                            L’équipe réfléchit sur son fonctionnement pendant le Sprint et identifie les améliorations
                            possibles pour le prochain Sprint.
                        </p>
                    </div>


                </div>
            </div>

            <div class="img">
            <img src="./images/cours5.svg" alt="Méthodologie Scrum" class="clickable-image" />
            <div class="boutons">
                <a href="#">Me tester sur ce que je viens d'apprendre</a>
                <a href="./cours6.php">Je continue le cours</a>
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