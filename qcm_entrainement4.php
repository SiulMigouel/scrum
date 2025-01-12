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
        <p>Comment la méthode agile se distingue-t-il de la méthode en cascade ?</p>
        <form id="form-1"> 
        <label><input type="radio" name="q4" value="1" onclick="enableNext(4)">Agile implique des itérations fréquentes avec des livraisons régulières</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Agile ne suit pas de plan préétabli
            </label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Agile supprime le besoin de tests dans le processus</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Agile repose sur une hiérarchie stricte</label>
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
        <p>Dans une méthode itérative, que fait l’équipe après chaque itération ?</p>
        <form id="form-3">
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Elle livre un produit finalisé au client</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Elle ajoute des fonctionnalités sans révision"</label><br>
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">Elle teste et améliore le produit en fonction des retours</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Elle arrête le processus pour une phase de planification complète</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>La méthode SCRUM est :</p>
        <form id="form-4">
        <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Itérative uniquement</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Incrémentale uniquement</label><br>
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)">À la fois itérative et incrémentale</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Ni itérative ni incrémentale</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Quelle est la principale caractéristique d’une méthode incrémentale ?</p>
        <form id="form-5">
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">Chaque incrément est une version révisée du produit complet</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">Les incréments se concentrent sur la répétition du processus</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">Les incréments remplacent les étapes de planification</label><br>
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)">Chaque incrément est une partie fonctionnelle et utilisable du produit</label>
        </form>
        <button class="prev-button" onclick="goBack(4)">Précédent</button>
        <button id="next-5" class="next-button" disabled onclick="validateAnswer(5, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-6" class="question hidden">
        <h2>Question 6</h2>
        <p>Quelle pratique illustre l’approche Agile ?</p>
        <form id="form-6">
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">L’évitement des retours clients</label><br>
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">La livraison unique d’un produit complet</label><br>
            <label><input type="radio" name="q6" value="0" onclick="enableNext(6)">Une hiérarchie stricte au sein des équipes</label><br>
            <label><input type="radio" name="q6" value="1" onclick="enableNext(6)">Des livraisons fréquentes d’incréments fonctionnels</label>
        </form>
        <button class="prev-button" onclick="goBack(5)">Précédent</button>
        <button id="next-6" class="next-button" disabled onclick="validateAnswer(6, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-7" class="question hidden">
        <h2>Question 7</h2>
        <p>En quoi la méthode itérative diffère-t-elle de la méthode incrémentale ?/p>
        <form id="form-7">
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">L’itératif ajoute de nouvelles fonctionnalités à chaque étape</label><br>
            <label><input type="radio" name="q7" value="1" onclick="enableNext(7)">L’itératif se concentre sur l’amélioration progressive du produit</label><br>
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">L’itératif supprime les étapes de test</label><br>
            <label><input type="radio" name="q7" value="0" onclick="enableNext(7)">L’itératif évite les révisions après chaque cycle</label>
        </form>
        <button class="prev-button" onclick="goBack(6)">Précédent</button>
        <button id="next-7" class="next-button" disabled onclick="validateAnswer(7, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-8" class="question hidden">
        <h2>Question 8</h2>
        <p>Quelle valeur n’est pas mentionnée dans le Manifeste Agile ?</p>
        <form id="form-8">
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)">La collaboration avec les clients</label><br>
            <label><input type="radio" name="q8" value="1" onclick="enableNext(8)">La documentation détaillée et complète"</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)">L’adaptation au changement</label><br>
            <label><input type="radio" name="q8" value="0" onclick="enableNext(8)">Les interactions entre individus</label>
        </form>
        <button class="prev-button" onclick="goBack(7)">Précédent</button>
        <button id="next-8" class="next-button" disabled onclick="validateAnswer(8, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-9" class="question hidden">
        <h2>Question 9</h2>
        <p>Pourquoi est-il essentiel d’impliquer tous les membres de l’équipe dans la communication ?</p>
        <form id="form-9">
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">Pour accélérer la prise de décision</label><br>
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">Pour garantir que chacun travaille sur une tâche distincte</label><br>
            <label><input type="radio" name="q9" value="1" onclick="enableNext(9)">Pour encourager la collaboration et l’engagement</label><br>
            <label><input type="radio" name="q9" value="0" onclick="enableNext(9)">Pour éviter les doublons dans le Product Backlog</label>
        </form>
        <button class="prev-button" onclick="goBack(8)">Précédent</button>
        <button id="next-9" class="next-button" disabled onclick="validateAnswer(9, 1)">Suivant</button>
    </section>

    <!-- Continuez à ajouter les autres questions jusqu'à 10 -->
    <!-- Remplacez les textes, numéros et bonnes réponses pour chaque question -->

    <section id="question-10" class="question hidden">
        <h2>Question 10</h2>
        <p>Quel est l’avantage principal de la méthode incrémentale ?</p>
        <form id="form-10">
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">La réduction des coûts liés au développement</label><br>
            <label><input type="radio" name="q10" value="1" onclick="enableNext(10)">La livraison rapide de fonctionnalités utilisables</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">L’élimination des tests inutiles</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)">Une meilleure planification à long terme</label>
        </form>
        <button class="prev-button" onclick="goBack(9)">Précédent</button>
        <button id="result-button" class="next-button" disabled onclick="showResult()">Résultat</button>
    </section>

    <section id="result-section" class="hidden">
        <h2>Résultat Final</h2>
        <p id="result-text"></p>
        <button><h3>Retour à l'accueil</h3></button>
    </section>
    </div>
    <script src="qcm_entrainement.js"></script>
</body>
</html>
<?php include_once 'footer.html'; ?>
