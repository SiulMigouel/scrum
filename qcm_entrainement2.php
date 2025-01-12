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
        <p>Quel est l’objectif principal de la Sprint Review ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)">Partager les résultats du Sprint avec les parties prenantes</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">Discuter des améliorations pour le prochain Sprint</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">Estimer les tâches pour le prochain Sprint</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">Réviser la Définition de "Fini"</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>La Définition de "Fini" est importante car :</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Elle permet de savoir quelles tâches seront reprises au Sprint suivant</label><br>
            <label><input type="radio" name="q2" value="1" onclick="enableNext(2)">Elle définit les conditions pour qu’une tâche soit considérée comme terminée</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Elle est établie par le client pour fixer ses attentes</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Elle remplace la phase de test dans le processus</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Qui est chargé de mettre à jour le Product Backlog ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">L’Équipe de Développement</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Le Scrum Master</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Le Client</label><br>
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)">Le Product Owner</label>
       </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Quelle est la durée typique d’un Sprint ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)"> Entre 1 et 6 mois</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)"> Une journée</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)"> Une année</label><br>
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)"> Entre 1 et 4 semaines</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Qui participe à la réunion de Sprint Planning ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)"> Le Scrum Master et le Product Owner uniquement</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)"> L’Équipe de Développement uniquement</label><br>
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)"> L’ensemble des membres SCRUM</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)"> Le Client uniquement</label>
        </form>
        <button class="prev-button" onclick="goBack(4)">Précédent</button>
        <button id="next-5" class="next-button" disabled onclick="validateAnswer(5, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-6" class="question hidden">
        <h2>Question 6</h2>
        <p>Qu’est-ce que l’Incrément dans SCRUM ?</p>
        <form id="form-6">
            <label><input type="radio" name="q6" value="1" onclick="enableNext(6)">La totalité des éléments réalisés à la fin d’un Sprint</label><br>
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">Une fonctionnalité complète livrée au client</label><br>
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">Une partie du Sprint Backlog non terminée</label><br>
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">Un critère de qualité partagé par l’équipe</label>
        </form>
        <button class="prev-button" onclick="goBack(5)">Précédent</button>
        <button id="next-6" class="next-button" disabled onclick="validateAnswer(6, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-7" class="question hidden">
        <h2>Question 7</h2>
        <p>Quel événement a lieu à la fin du Sprint pour réfléchir sur les améliorations ?/p>
        <form id="form-7">
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">Le Sprint Planning</label><br>
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">La Daily Scrum</label><br>
            <label><input type="radio" name="q7" value="1" onclick="enableNext(7)">La Sprint Review</label><br>
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">Les parties prenantes</label>
        </form>
        <button class="prev-button" onclick="goBack(6)">Précédent</button>
        <button id="next-7" class="next-button" disabled onclick="validateAnswer(7, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-8" class="question hidden">
        <h2>Question 8</h2>
        <p>Quel artefact est une liste priorisée de toutes les fonctionnalités du produit ?</p>
        <form id="form-8">
            <label><input type="radio" name="q8" value="1" onclick="enableNext(8)">Le Product Backlog</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)">Le Sprint Backlog</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)">L’Incrément</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)">La Définition de "Fini"</label>
        </form>
        <button class="prev-button" onclick="goBack(7)">Précédent</button>
        <button id="next-8" class="next-button" disabled onclick="validateAnswer(8, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-9" class="question hidden">
        <h2>Question 9</h2>
        <p>L’Équipe de Développement dans SCRUM est généralement :</p>
        <form id="form-9">
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">Le Product Backlog</label><br>
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">La Définition de "Fini"</label><br>
            <label><input type="radio" name="q9" value="1" onclick="enableNext(9)">Le Sprint Backlog</label><br>
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">L’Incrément</label>
        </form>
        <button class="prev-button" onclick="goBack(8)">Précédent</button>
        <button id="next-9" class="next-button" disabled onclick="validateAnswer(9, 1)">Suivant</button>
    </section>

    <!-- Continuez à ajouter les autres questions jusqu'à 10 -->
    <!-- Remplacez les textes, numéros et bonnes réponses pour chaque question -->

    <section id="question-10" class="question hidden">
        <h2>Question 10</h2>
        <p>Lors de la Daily Scrum, l’équipe partage :</p>
        <form id="form-10">
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">Les nouvelles idées pour les prochains Sprints</label><br>
            <label><input type="radio" name="q10" value="1" onclick="enableNext(10)">L’avancement, les obstacles et les prochaines étapes</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">Les livraisons au client</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">Les points d’effort estimés pour chaque tâche</label>
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
