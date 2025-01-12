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
        <h1>La méthode Agile</h1>

        <div class="contenue">
            <p>
                La méthode Agile est une approche de gestion de projet qui privilégie la flexibilité, la collaboration, et la livraison continue de valeur au client. Elle s'oppose aux méthodes traditionnelles, comme la méthode en Cascade, en mettant l’accent sur l’adaptation aux changements et l'amélioration constante des processus.
            </p>
            <h3>Le Manifeste Agile :</h3>
            <ul>Signé par 17 développeurs en 2001, il repose sur quatre valeurs fondamentales :
                <li>Les individus et leurs interactions plutôt que les processus et les outils.</li>
                <li>Des produits opérationnels plutôt qu’une documentation exhaustive.</li>
                <li>La collaboration avec les clients plutôt que la négociation contractuelle.</li>
                <li>L’adaptation au changement plutôt que le suivi d’un plan rigide.</li>
            </ul>

            <h3>Les 12 Principes Agile :</h3>
            <ul>
                <li>Satisfaction client : Le client est satisfait grâce à des livraisons régulières de produits fonctionnels.</li>
                <li>Changement bienvenu : Les exigences peuvent changer, même tardivement dans le développement.</li>
                <li>Livraisons fréquentes et opérationnelles : De petites versions du produit sont livrées régulièrement.</li>
                <li>Collaboration quotidienne : Les équipes et les clients travaillent ensemble tous les jours.</li>
                <li>Motivation et encouragements : Les équipes sont autonomes et motivées pour atteindre les objectifs.</li>
                <li>Communication face-à-face : La communication directe est privilégiée pour éviter les malentendus.</li>
                <li>Opérabilité comme mesure d’avancement : La progression est mesurée par la fonctionnalité du produit livré.</li>
                <li>Rythme soutenable : Le travail est effectué à un rythme constant et durable.</li>
                <li>Excellence dans la conception : La qualité et la simplicité sont des priorités dans le développement du produit.</li>
                <li>Simplicité : Réduire au minimum ce qui n’ajoute pas de valeur au produit final.</li>
                <li>Auto-organisation des équipes : Les équipes sont autonomes et prennent leurs propres décisions.</li>
                <li>Amélioration continue : Les méthodes et techniques sont constamment améliorées à chaque itération.</li>
            </ul>

            <h3>Pratiques de la méthode :</h3>
            <ul>Elle repose sur des pratiques concrètes, notamment :
                <li>Le facteur humain : L’absence de hiérarchie permet aux équipes d’être autogérées, autonomes et libres dans leur approche.</li>
                <li>Un feedback permanent : Chaque incrément du produit est testé et validé rapidement, permettant des ajustements constants.</li>
                <li>Simplicité assumée : L’objectif est de se concentrer sur l’essentiel, en maximisant la quantité de travail à ne pas faire, pour améliorer l’évolutivité du produit.</li>
                <li>Le client au cœur du dispositif : Le client est impliqué tout au long du processus, en participant aux réunions et en donnant son feedback sur les incréments.</li>
                <li>Les itérations incrémentales : Le projet est divisé en incréments courts et à durées fixes, avec une livraison à la fin de chaque cycle. Chaque incrément se subdivise en plusieurs petites itérations, permettant une grande visibilité pour le client.</li>
                <li>Test-Driven Requirement (TDD) : Les tests sont centrés sur les spécifications du produit et sont utilisés pour valider chaque fonctionnalité avant sa mise en production.</li>
            </ul>
            <div class="section">
                <h3>Agile vs Cascade</h3>
                <p>
                    Contrairement à la méthode cascade, où toutes les étapes sont effectuées une seule fois (et la livraison de valeur n’a lieu qu’à la fin), la méthode Agile livre régulièrement des incréments fonctionnels au client, à la fin de chaque Sprint. Cela permet de créer une valeur continue et de s’adapter rapidement aux retours du client.
                </div>
            <div class="section">
            <h3>Agile vs Cycle en V : </h3>
            <p>
                Cycle en V et méthode agile : quelles différences ? | ITSS            </div>
        </div>
        </div>
    </div>
    <div class="img">
        <img src="./images/cours9.svg" alt="schéma méthode agile" class="clickable-image">
              <div class="boutons">
                <a href="#">Prêt pour le test final !!!</a>
            </div>
        </div>
        <div class="lightbox" id="lightbox">
        <img src="" alt="schéma méthode agile agrandi" class="lightbox-image">
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

