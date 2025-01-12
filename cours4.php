<?php include_once("header.html"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cours.css">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .image img {
            width: 100%;
            height: 80%;
            cursor: pointer;
    transition: transform 0.3s ease;
        }

        .imgage img:hover {
    transform: scale(1.05); /* Zoom au survol */
}

        .download {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .download a {
            text-decoration: none;
            color: white;
            background-color: #158875;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .download a:hover {
            background-color:rgb(15, 95, 82);
        }

        .boutons {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-bottom: 80px; 
}

/* Lightbox */
.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.lightbox img {
    max-width: 90%;
    max-height: 90%;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.lightbox.active {
    display: flex;
}

    

    </style>

</head>
<body>
    
<section>
    <div class="image">
        <img src="images/carte.svg" alt="carte mentale" class="clickable-image">
        <div class="download">
            <a href="./images/carte.svg" download="carte_mentale_methode_scrum.svg">Télécharger la carte</a>
        </div>
    </div>
    <div class="boutons">
        <a href="#">Me tester sur ce que je viens d'apprendre</a>
        <a href="./cours5.php">Je continue le cours</a>
    </div>
    <div class="lightbox" id="lightbox">
        <img src="" alt="carte mentale agrandie" class="lightbox-image">
    </div>
</section>
<?php include_once 'footer.html'; ?>
</body>
</html>

<script>
    // Récupération des éléments
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = lightbox.querySelector('.lightbox-image');
    const clickableImage = document.querySelector('.clickable-image');

    // Afficher la lightbox
    clickableImage.addEventListener('click', () => {
        lightbox.style.display = 'flex';
        lightboxImage.src = clickableImage.src;
    });

    // Fermer la lightbox en cliquant dessus
    lightbox.addEventListener('click', () => {
        lightbox.style.display = 'none';
    });
</script>
