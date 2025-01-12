<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 Valeurs Agile</title>
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
            height: 450px;
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
    <?php include 'header.html'; ?>


    <div class="container">
        <div class="text-section">
            <h1>Les rôles durant le projet</h1>
            <p>La méthode SCRUM repose sur trois rôles principaux qui travaillent en collaboration pour atteindre les objectifs du projet annoncé.</p><br>

            <p><strong>Le Product Owner (PO) :</strong><br>
            Il est responsable de la gestion du Product Backlog, il définit les priorités et veille à ce que l'équipe travaille sur les fonctionnalités les plus importantes. Il est le lien entre les parties prenantes (clients, dirigeants, etc.) et l'équipe de développement.</p><br>

            <p><strong>Le Scrum Master :</strong><br>
            Le Scrum Master est responsable de l'application de la méthode SCRUM et veille à ce que l'équipe en respecte ses principes. Il aide l'équipe à surmonter les obstacles et garantit que le processus se poursuit correctement. Il identifie les obstacles puis les résoult afin que l'équipe puisse progresser sans soucis.</p><br>

            <p><strong>L'Équipe de Développement :</strong><br>
            Ce sont des professionnels responsables de la création d'un incrément fonctionnel (une partie du produit) à la fin de chaque Sprint. L'équipe est auto-organisée, interdisciplinaire et ne travaille pas forcéement avec une supervision directe.</p>
        </div>
        <div class="image-section-container">
            <div class="image-section">
                <!-- Vidéo intégrée -->
                <video width="100%" height="100%" controls>
                    <source src="videos/Scrum Roles and Responsibilities.mp4" type="video/mp4">
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
