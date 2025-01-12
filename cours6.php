<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La planification</title>
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
            margin-top: 50px;
            max-width: 450px;
            height: 300px;
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
            <h1>La planification</h1>
            <p>La planification dans SCRUM se fait lors d'une réunion pré-sprint. 
            On y retrouve le product owner, le scrum master ainsi que l'équipe de développement. Ils définissent ensemble (avec le client) les exigences/livrables et donc l'objectif du sprint. 
            L”équipe de développement va ensuite réfléchir au procédé pour atteindre celui-ci. 
            Cela permettra de vérifier que le travail à fournir correspond à la durée prévue du sprint.</p><br>

            <p><strong>Estimation des tâches :</strong></p><br>
            <p>Les tâches sont souvent estimées en termes de points d'effort, en utilisant des techniques comme le "Planning Poker" où chaque membre de l'équipe estime la tâche avant de parvenir à un consensus.</p><br>

            <p><strong>Gestion des priorités :</strong></p><br>
            <p>Le Product Owner définit et priorise les éléments du Product Backlog en fonction des besoins du marché et des parties prenantes. L'équipe de développement devra réaliser les tâches en fonction de ces priorités.</p><br>
        </div>
        <div class="image-section-container">
            <div class="image-section">
                <img src="images/glescrum.png" alt="Description de l'image" style="max-width: 100%; max-height: 100%; object-fit: cover;">
            </div>
            <div class="button-container">
                <button>Viens tester ce que tu viens d'apprendre !</button>
            </div>
        </div>

    </div>

    <?php include 'footer.html'; ?>

</body>
</html>
