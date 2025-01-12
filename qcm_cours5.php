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
        <p>Quelle est la durée typique d’un Sprint ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Entre 1 et 6 mois</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Une journée</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)"> Une année</label><br>
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)"> Entre 1 et 4 semaines</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Quel événement a lieu à la fin du Sprint pour réfléchir sur les améliorations ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Le Sprint Planning</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">La Daily Scrum</label><br>
            <label><input type="radio" name="q2" value="1" onclick="enableNext(2)">La Sprint Review</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Les parties prenantes</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Qui participe à la réunion de Sprint Planning ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> Le Scrum Master et le Product Owner uniquement</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> L’Équipe de Développement uniquement</label><br>
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)"> L’ensemble des membres SCRUM</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)"> Le Client uniquement</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Lors de la Daily Scrum, l’équipe partage :</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Les nouvelles idées pour les prochains Sprints</label><br>
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)">L’avancement, les obstacles et les prochaines étapes</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Les livraisons au client</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Les points d’effort estimés pour chaque tâche</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Quel est l’objectif principal de la Sprint Review ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">Partager les résultats du Sprint avec les parties prenantes</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Discuter des améliorations pour le prochain Sprint</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Estimer les tâches pour le prochain Sprint</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Réviser la Définition de "Fini"</label>
        </form>
        <button class="prev-button" onclick="goBack(9)">Précédent</button>
        <button id="result-button" class="next-button" disabled onclick="showResult()">Résultat</button>
    </section>
    <!-------------------------------------------------------------------->

    <section id="result-section" class="hidden">
        <h2>Résultat Final</h2>
        <p id="result-text"></p>
        <button><h3>Retour à l'accueil</h3></button>
    </section>
    </div>

    <script src="qcm_cours.js"></script>
</body>
</html>
<?php include_once 'footer.html'; ?>