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
        <p>Quand a été signé le Manifeste Agile ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)">En 2001</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">En 1990</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">En 2010</label><br>
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)">En 2015</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Quel est un des principes fondamentaux du Manifeste Agile ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Mettre l’accent sur les produits opérationnels plutôt que sur la documentation exhaustive</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Suivre un plan rigide pour éviter les erreurs</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Donner la priorité aux outils avant les interactions humaines</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Respecter les contrats au lieu de collaborer avec les clients</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Quelle pratique illustre l’approche Agile ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">L’évitement des retours clients</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">La livraison unique d’un produit complet</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Une hiérarchie stricte au sein des équipes</label><br>
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)">Des livraisons fréquentes d’incréments fonctionnels</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Comment la méthode agile se distingue-t-il de la méthode en cascade ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)">Agile implique des itérations fréquentes avec des livraisons régulières</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Agile ne suit pas de plan préétabli
            </label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Agile supprime le besoin de tests dans le processus</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Agile repose sur une hiérarchie stricte</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Quelle valeur n’est pas mentionnée dans le Manifeste Agile ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">La collaboration avec les clients</label><br>
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">La documentation détaillée et complète"</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">L’adaptation au changement</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Les interactions entre individus</label>
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
