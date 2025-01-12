<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode Incrémentale VS Méthode Itérative</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
            max-width: 1200px;
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
        }

        .text-section {
            flex: 1;
            margin-right: 20px;
        }

        .text-section h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .text-section p {
            margin-bottom: 10px;
        }

        .image-section-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-section {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d3c9c9;
            width: 100%;
            max-width: 550px;
            height: 300px;
            margin-top: 25px;
            border: 2px solid #ccc;
            box-sizing: border-box;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .button-container button {
            background-color: #008c72;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .button-container button:hover {
            background-color: #006f5a;
        }
    </style>
</head>
<body>


    <div class="container">
        <div class="text-section">
            <h1>Méthode Incrémentale VS Méthode Itérative</h1>
            <p><strong>Méthode incrémentale : </strong></p><br>

            <p>Consiste à construire un produit ou un système en ajoutant de petites portions de fonctionnalités ou de composants à chaque étape. Chaque incrément est une partie fonctionnelle du produit complet : un nouveau "morceau" du produit est livré, et ce morceau doit fonctionner et être utilisable et pleinement opérationnel.</p><br>

            <p><strong>Méthode itérative :</strong></p><br>

            <p>L'itératif se concentre sur la répétition du processus de développement, où à chaque itération, l'équipe évalue le produit afin de produire au cycle suivant une version du produit améliorée et révisée. L'objectif est de répéter le travail pour affiner progressivement le produit à chaque cycle en fonction des retours reçus.</p><br>

            <p>La méthode scrum est itérative dans son processus global (chaque Sprint est une itération) et incrémentale dans la livraison de fonctionnalités (chaque Sprint livre un incrément fonctionnel du produit).</p>
        </div>
        <div class="image-section-container">
            <div class="image-section">
                <!-- Vidéo intégrée -->
                <video width="100%" height="100%" controls>
                    <source src="videos/Is agile incremental or iterative.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture vidéo.
                </video>
            </div>
            <div class="button-container">
                <button>Viens tester ce que tu viens d'apprendre !</button>
            </div>
        </div>
    </div>

    <?php include 'footer.html'; ?>

</body>
</html>
