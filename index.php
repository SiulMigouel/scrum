<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<?php include 'header.html'; ?>
<?php include 'connaissance.php'; ?>

<body>
        <div id="apprendre">
            <div class="img">
            <img src="./images/apprendre.svg" alt="Image apprendre">
            </div>
            <div class="container">
                <div class="contenue">
                    <h2>Explorez, Apprenez et Progresser</h2>
                    <p>
                        Découvrez une toute nouvelle manière d'apprendre grâce à nos ressources interactives. Avec un simple clic, accédez à des outils qui vous guideront pas à pas dans votre parcours d’apprentissage. Que vous soyez débutant ou passionné, développez vos compétences à votre rythme.
                    </p>
                    <a href="./cours1.php">
                        <button>Je veux apprendre</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="connaissance">
            <div class="img">
            <img src="./images/test.svg" alt="Image apprendre">
            </div>
            <div class="container">
                <div class="contenue">
                    <h2>Mettez vos connaissances à l’Épreuve</h2>
                    <p>
                        Êtes-vous prêt à relever le défi ? Testez vos connaissances et découvrez jusqu’où vous pouvez aller ! Nos quiz et exercices interactifs vous permettront de mesurer vos compétences tout en vous amusant. Chaque test est une opportunité d’apprendre encore plus.
                    </p>
                        <button onclick="showPopup()">Je veux tester mes connaissances</button>
                </div>
            </div>
        </div>
</body>
</html>

<?php include_once 'footer.html'; ?>

