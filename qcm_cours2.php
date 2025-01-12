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
        <p>Quel rôle est chargé de résoudre les obstacles rencontrés par l’équipe ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Le Product Owner</label><br>
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)"> Le Scrum Master</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> L’Équipe de Développement</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Le Client</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Qui est responsable de la création d’un incrément fonctionnel à la fin de chaque Sprint ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Le Product Owner</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Le Scrum Master</label><br>
            <label><input type="radio" name="q2" value="1" onclick="enableNext(2)">L’Équipe de Développement</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Les parties prenantes</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Quel rôle gère le Product Backlog ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)"> Le Product Owner</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> Le Scrum Master</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> L’Équipe de Développement</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> Le Client</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Parmi les responsabilités suivantes, laquelle appartient au Scrum Master ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Définir les priorités des fonctionnalités</label><br>
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)">Organiser les réunions Daily Scrum</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Gérer le budget du projet</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Tester les incréments livrés</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>L’Équipe de Développement dans SCRUM est généralement :</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Supervisée directement par le Scrum Master</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Composée uniquement de développeurs seniors</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Responsable des décisions financières du projet</label><br>
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">Auto-organisée et interdisciplinaire</label>
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
