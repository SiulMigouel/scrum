<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM Interactif</title>
    <link rel="stylesheet" href="qcm.css">
</head>
<?php include 'header.php'; ?>
<body>
    <div class='container'>
    <div class="progress-indicator">
        <!-- Ajout d'indicateurs pour 10 questions -->
        <span id="indicator-1" class="indicator"></span>
        <span id="indicator-2" class="indicator"></span>
        <span id="indicator-3" class="indicator"></span>
        <span id="indicator-4" class="indicator"></span>
        <span id="indicator-5" class="indicator"></span>
    </div>

    <div id="feedback" class="hidden">Votre réponse est...</div>

    <!-- Questions 1 à 10 -->
    <!-- Copiez-collez le modèle ci-dessous pour les questions -->
    <section id="question-1" class="question">
        <h2>Question 1</h2>
        <p>Quelle est l’origine de la méthode SCRUM ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Les techniques de collaboration militaire</label><br>
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)"> Les stratégies collaboratives du rugby</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Les méthodes industrielles japonaises</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Une technique de brainstorming</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Quel est un des avantages principaux de la méthode SCRUM ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Elle élimine les besoins de communication entre les parties prenantes</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Elle élimine le besoin de planification</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Elle garantit l’absence de bugs dans les livraisons</label><br>
            <label><input type="radio" name="q2" value="1" onclick="enableNext(2)">Elle accélère les cycles de développement</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Quels sont les trois piliers de la méthode SCRUM ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> Flexibilité, Collaboration, Respect</label><br>
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)"> Transparence, Inspection, Adaptation</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> Engagement, Courage, Focus</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> Planification, Livraison, Validation</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Parmi les valeurs suivantes, laquelle n’est pas une des 5 valeurs de SCRUM ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)">Collaboration</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Courage</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Engagement</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Ouverture</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Quel est l’objectif principal de la méthode SCRUM ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">Créer de la valeur pour le client grâce à l’amélioration continue</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Réduire les coûts de développement</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Éviter les changements pendant le développement </label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Suivre un plan rigide pour assurer la livraison</label>
        </form>
        <button class="prev-button" onclick="goBack(9)">Précédent</button>
        <button id="result-button" class="next-button" disabled onclick="showResult()">Résultat</button>
    </section>
    <!-------------------------------------------------------------------->

    <section id="result-section" class="hidden">
        <h2>Résultat Final</h2>
        <p id="result-text"></p>
        <a href="index.php"><button><h3>Retour à l'accueil</h3></button></a>
    </section>
    </div>

    <script src="qcm_cours.js"></script>
</body>
</html>
<?php include_once 'footer.html'; ?>
