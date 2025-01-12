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
        <p>Quel artefact est une liste priorisée de toutes les fonctionnalités du produit ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)">Le Product Backlog</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">Le Sprint Backlog</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">L’Incrément</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">La Définition de "Fini"</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Qui est chargé de mettre à jour le Product Backlog ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">L’Équipe de Développement</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Le Scrum Master</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Le Client</label><br>
            <label><input type="radio" name="q2" value="1" onclick="enableNext(2)">Le Product Owner</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Qu’est-ce que l’Incrément dans SCRUM ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)">La totalité des éléments réalisés à la fin d’un Sprint</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Une fonctionnalité complète livrée au client</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Une partie du Sprint Backlog non terminée</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Un critère de qualité partagé par l’équipe</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>La Définition de "Fini" est importante car :</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Elle permet de savoir quelles tâches seront reprises au Sprint suivant</label><br>
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)">Elle définit les conditions pour qu’une tâche soit considérée comme terminée</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Elle est établie par le client pour fixer ses attentes</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Elle remplace la phase de test dans le processus</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>L’Équipe de Développement dans SCRUM est généralement :</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Le Product Backlog</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">La Définition de "Fini"</label><br>
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">Le Sprint Backlog</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">L’Incrément</label>
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
