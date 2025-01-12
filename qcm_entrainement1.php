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
        <span id="indicator-6" class="indicator"></span>
        <span id="indicator-7" class="indicator"></span>
        <span id="indicator-8" class="indicator"></span>
        <span id="indicator-9" class="indicator"></span>
        <span id="indicator-10" class="indicator"></span>
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
        <p>Quel rôle est chargé de résoudre les obstacles rencontrés par l’équipe ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)"> Le Product Owner</label><br>
            <label><input type="radio" name="q2" value="1" onclick="enableNext(2)"> Le Scrum Master</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)"> L’Équipe de Développement</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)"> Le Client</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Quel est un des avantages principaux de la méthode SCRUM ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Elle élimine les besoins de communication entre les parties prenantes</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Elle élimine le besoin de planification</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Elle garantit l’absence de bugs dans les livraisons</label><br>
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)">Elle accélère les cycles de développement</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Quels sont les trois piliers de la méthode SCRUM ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)"> Flexibilité, Collaboration, Respect</label><br>
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)"> Transparence, Inspection, Adaptation</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)"> Engagement, Courage, Focus</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)"> Planification, Livraison, Validation</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Qui est responsable de la création d’un incrément fonctionnel à la fin de chaque Sprint ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Le Product Owner</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Le Scrum Master</label><br>
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">L’Équipe de Développement</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Les parties prenantes</label>
        </form>
        <button class="prev-button" onclick="goBack(4)">Précédent</button>
        <button id="next-5" class="next-button" disabled onclick="validateAnswer(5, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-6" class="question hidden">
        <h2>Question 6</h2>
        <p>Parmi les responsabilités suivantes, laquelle appartient au Scrum Master ?</p>
        <form id="form-6">
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">Définir les priorités des fonctionnalités</label><br>
            <label><input type="radio" name="q6" value="1" onclick="enableNext(6)">Organiser les réunions Daily Scrum</label><br>
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">Gérer le budget du projet</label><br>
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">Tester les incréments livrés</label>
        </form>
        <button class="prev-button" onclick="goBack(5)">Précédent</button>
        <button id="next-6" class="next-button" disabled onclick="validateAnswer(6, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-7" class="question hidden">
        <h2>Question 7</h2>
        <p>Parmi les valeurs suivantes, laquelle n’est pas une des 5 valeurs de SCRUM ?</p>
        <form id="form-7">
            <label><input type="radio" name="q7" value="1" onclick="enableNext(7)">Collaboration</label><br>
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">Courage</label><br>
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">Engagement</label><br>
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">Ouverture</label>
        </form>
        <button class="prev-button" onclick="goBack(6)">Précédent</button>
        <button id="next-7" class="next-button" disabled onclick="validateAnswer(7, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-8" class="question hidden">
        <h2>Question 8</h2>
        <p>Quel rôle gère le Product Backlog ?</p>
        <form id="form-8">
            <label><input type="radio" name="q8" value="1" onclick="enableNext(8)"> Le Product Owner</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)"> Le Scrum Master</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)"> L’Équipe de Développement</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)"> Le Client</label>
        </form>
        <button class="prev-button" onclick="goBack(7)">Précédent</button>
        <button id="next-8" class="next-button" disabled onclick="validateAnswer(8, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-9" class="question hidden">
        <h2>Question 9</h2>
        <p>L’Équipe de Développement dans SCRUM est généralement :</p>
        <form id="form-9">
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">Supervisée directement par le Scrum Master</label><br>
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">Composée uniquement de développeurs seniors</label><br>
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">Responsable des décisions financières du projet</label><br>
            <label><input type="radio" name="q9" value="1" onclick="enableNext(9)">Auto-organisée et interdisciplinaire</label>
        </form>
        <button class="prev-button" onclick="goBack(8)">Précédent</button>
        <button id="next-9" class="next-button" disabled onclick="validateAnswer(9, 1)">Suivant</button>
    </section>

    <!-- Continuez à ajouter les autres questions jusqu'à 10 -->
    <!-- Remplacez les textes, numéros et bonnes réponses pour chaque question -->

    <section id="question-10" class="question hidden">
        <h2>Question 10</h2>
        <p>Parmi les responsabilités suivantes, laquelle appartient au Scrum Master ?</p>
        <form id="form-10">
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">Définir les priorités des fonctionnalités</label><br>
            <label><input type="radio" name="q10" value="1" onclick="enableNext(10)">Organiser les réunions Daily Scrum</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">Gérer le budget du projet</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">Tester les incréments livrés</label>
        </form>
        <button class="prev-button" onclick="goBack(9)">Précédent</button>
        <button id="result-button" class="next-button" disabled onclick="showResult()">Résultat</button>
    </section>

    <section id="result-section" class="hidden">
        <h2>Résultat Final</h2>
        <p id="result-text"></p>
        <a href="index.php"><button><h3>Retour à l'accueil</h3></button></a>
    </section>
    </div>
    <script src="qcm_entrainement.js"></script>
</body>
</html>
<?php include_once 'footer.html'; ?>
