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
        <span id="indicator-11" class="indicator"></span>
        <span id="indicator-12" class="indicator"></span>
        <span id="indicator-13" class="indicator"></span>
        <span id="indicator-14" class="indicator"></span>
        <span id="indicator-15" class="indicator"></span>
        <span id="indicator-16" class="indicator"></span>
        <span id="indicator-17" class="indicator"></span>
        <span id="indicator-18" class="indicator"></span>
        <span id="indicator-19" class="indicator"></span>
        <span id="indicator-20" class="indicator"></span>
    </div>

    <div id="feedback" class="hidden"></div>

    <!-- Questions 1 à 20 -->
    <!-- Copiez-collez le modèle ci-dessous pour les questions -->
    <section id="question-1" class="question">
        <h2>Question 1</h2>
        <p>Quel est le principal objectif de la méthode SCRUM ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="0" 
                onclick="enableNext(1)"> Garantir une planification rigide du projet</label><br>
            <label><input type="radio" name="q1" value="1" 
                onclick="enableNext(1)"> Favoriser la flexibilité, la collaboration et la transparence</label><br>
            <label><input type="radio" name="q1" value="0" 
                onclick="enableNext(1)"> Maximiser les délais de développement</label><br>
            <label><input type="radio" name="q1" value="0" 
                onclick="enableNext(1)"> Éviter toute interaction entre les membres de l'équipe</label>
        </form>
        <button class="prev-button hidden hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Quel pilier de la méthode SCRUM encourage les membres à ajuster leur travail en fonction des retours ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" 
                onclick="enableNext(2)"> Transparence</label><br>
            <label><input type="radio" name="q2" value="1" 
                onclick="enableNext(2)"> Adaptation</label><br>
            <label><input type="radio" name="q2" value="0" 
                onclick="enableNext(2)"> Inspection</label><br>
            <label><input type="radio" name="q2" value="0" 
                onclick="enableNext(2)"> Focus</label>
        </form>
        <button class="prev-button hidden hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Quel est le rôle principal du Product Owner (PO) dans la méthode SCRUM ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" 
                onclick="enableNext(3)"> Assurer que l'équipe respecte les principes SCRUM</label><br>
            <label><input type="radio" name="q3" value="0" 
                onclick="enableNext(3)">  Développer l'incrément fonctionnel</label><br>
            <label><input type="radio" name="q3" value="1" 
                onclick="enableNext(3)"> Gérer le Product Backlog et définir les priorités</label><br>
            <label><input type="radio" name="q3" value="0" 
                onclick="enableNext(3)"> Superviser directement les membres de l'équipe</label>
        </form>
        <button class="prev-button hidden hidden" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Quel rôle dans la méthode SCRUM est chargé de résoudre les obstacles rencontrés par l'équipe ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" 
                onclick="enableNext(4)"> Le Product Owner</label><br>
            <label><input type="radio" name="q4" value="1" 
                onclick="enableNext(4)"> Le Scrum Master</label><br>
            <label><input type="radio" name="q4" value="0" 
                onclick="enableNext(4)"> L'Équipe de Développement</label><br>
            <label><input type="radio" name="q4" value="0" 
                onclick="enableNext(4)">  Le Directeur de Projet</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Quel artefact SCRUM contient toutes les fonctionnalités, améliorations et corrections prioritaires pour le produit ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="0" 
                onclick="enableNext(5)">  Le Sprint Backlog</label><br>
            <label><input type="radio" name="q5" value="1" 
                onclick="enableNext(5)"> Le Product Backlog</label><br>
            <label><input type="radio" name="q5" value="0" 
                onclick="enableNext(5)"> L'Incrément</label><br>
            <label><input type="radio" name="q5" value="0" 
                onclick="enableNext(5)"> La Définition de "Fini"</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(4)">Précédent</button>
        <button id="next-5" class="next-button" disabled onclick="validateAnswer(5, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-6" class="question hidden">
        <h2>Question 6</h2>
        <p>Qu'est-ce que l'Incrément dans la méthode SCRUM ?</p>
        <form id="form-6">
            <label><input type="radio" name="q6" value="0" 
                onclick="enableNext(6)"> La liste des éléments sélectionnés pour le Sprint en cours</label><br>
            <label><input type="radio" name="q6" value="0" 
                onclick="enableNext(6)"> Une liste des tâches restant à réaliser pour le projet</label><br>
            <label><input type="radio" name="q6" value="1" 
                onclick="enableNext(6)"> La totalité des éléments réalisés et fonctionnels à la fin du Sprint</label><br>
            <label><input type="radio" name="q6" value="0" 
                onclick="enableNext(6)"> Un critère de qualité défini par le Scrum Master</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(5)">Précédent</button>
        <button id="next-6" class="next-button" disabled onclick="validateAnswer(6, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-7" class="question hidden">
        <h2>Question 7</h2>
        <p>Quel événement dans SCRUM permet à l’équipe de réfléchir sur son fonctionnement et d’identifier des améliorations ?</p>
        <form id="form-7">
            <label><input type="radio" name="q7" value="0" 
                onclick="enableNext(7)"> Sprint Planning</label><br>
            <label><input type="radio" name="q7" value="0" 
                onclick="enableNext(7)"> Sprint Review</label><br>
            <label><input type="radio" name="q7" value="1" 
                onclick="enableNext(7)"> Sprint Retrospective</label><br>
            <label><input type="radio" name="q7" value="0" 
                onclick="enableNext(7)"> Daily Scrum</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(6)">Précédent</button>
        <button id="next-7" class="next-button" disabled onclick="validateAnswer(7, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-8" class="question hidden">
        <h2>Question 8</h2>
        <p>Quel événement dans SCRUM permet à l’équipe de partager l’avancement de son travail et de discuter des obstacles ?</p>
        <form id="form-8">
            <label><input type="radio" name="q8" value="0" 
                onclick="enableNext(8)"> Sprint Retrospective</label><br>
            <label><input type="radio" name="q8" value="0" 
                onclick="enableNext(8)"> Sprint Planning</label><br>
            <label><input type="radio" name="q8" value="1" 
                onclick="enableNext(8)"> Daily Scrum</label><br>
            <label><input type="radio" name="q8" value="0" 
                onclick="enableNext(8)"> Sprint Review</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(7)">Précédent</button>
        <button id="next-8" class="next-button" disabled onclick="validateAnswer(8, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-9" class="question hidden">
        <h2>Question 9</h2>
        <p>Quel rôle est responsable de la définition et de la priorisation des éléments du Product Backlog dans SCRUM ?</p>
        <form id="form-9">
            <label><input type="radio" name="q9" value="1" 
                onclick="enableNext(9)">  Le Product Owner</label><br>
            <label><input type="radio" name="q9" value="0" 
                onclick="enableNext(9)"> Le Scrum Master</label><br>
            <label><input type="radio" name="q9" value="0" 
                onclick="enableNext(9)"> L'Équipe de Développement</label><br>
            <label><input type="radio" name="q9" value="0" 
                onclick="enableNext(9)">  Le Client</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(8)">Précédent</button>
        <button id="next-9" class="next-button" disabled onclick="validateAnswer(9, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-10" class="question hidden">
        <h2>Question 10</h2>
        <p>Quelle technique est couramment utilisée dans SCRUM pour estimer les tâches en termes de points d'effort ?</p>
        <form id="form-10">
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)"> Le Brainstorming</label><br>
            <label><input type="radio" name="q10" value="1" onclick="enableNext(10)"> Le Planning Poker</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)"> Le Focus Group</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)"> La Méthode Agile</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(9)">Précédent</button>
        <button id="next-10" class="next-button" disabled onclick="validateAnswer(10, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-11" class="question hidden">
        <h2>Question 11</h2>
        <p>Quelle est une des bonnes pratiques fondamentales dans la méthode SCRUM pour assurer une communication fluide au sein de l’équipe ?</p>
        <form id="form-11">
            <label><input type="radio" name="q11" value="0" onclick="enableNext(11)"> Suivre un plan de projet détaillé</label><br>
            <label><input type="radio" name="q11" value="1" onclick="enableNext(11)"> Utiliser des outils de gestion de projet externes</label><br>
            <label><input type="radio" name="q11" value="0" onclick="enableNext(11)"> Maintenir une communication ouverte et transparente</label><br>
            <label><input type="radio" name="q11" value="0" onclick="enableNext(11)"> Créer des rapports hebdomadaires</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(10)">Précédent</button>
        <button id="next-11" class="next-button" disabled onclick="validateAnswer(11, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-12" class="question hidden">
        <h2>Question 12</h2>
        <p>Que signifie l’auto-organisation de l’équipe dans la méthode SCRUM ?</p>
        <form id="form-12">
            <label><input type="radio" name="q12" value="0" onclick="enableNext(12)"> L’équipe suit une hiérarchie stricte avec un manager dédié</label><br>
            <label><input type="radio" name="q12" value="0" onclick="enableNext(12)"> Les membres doivent travailler sans réunions de suivi </label><br>
            <label><input type="radio" name="q12" value="0" onclick="enableNext(12)"> L’équipe dépend d’un superviseur externe pour toutes les décisions</label><br>
            <label><input type="radio" name="q12" value="1" onclick="enableNext(12)"> Les membres doivent s’organiser eux-mêmes pour accomplir les tâches</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(11)">Précédent</button>
        <button id="next-12" class="next-button" disabled onclick="validateAnswer(12, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-13" class="question hidden">
        <h2>Question 13</h2>
        <p>Quelle est la principale différence entre les méthodes incrémentale et itérative ?</p>
        <form id="form-13">
            <label><input type="radio" name="q13" value="0" onclick="enableNext(13)"> L’incrémentale se concentre sur la répétition du processus de développement, tandis que l’itérative livre une partie fonctionnelle à chaque étape</label><br>
            <label><input type="radio" name="q13" value="1" onclick="enableNext(13)">  L’incrémentale ajoute des fonctionnalités complètes à chaque étape, tandis que l’itérative se concentre sur des améliorations progressives du produit</label><br>
            <label><input type="radio" name="q13" value="0" onclick="enableNext(13)"> L’incrémentale et l’itérative sont deux termes synonymes dans le développement logiciel</label><br>
            <label><input type="radio" name="q13" value="0" onclick="enableNext(13)"> L’incrémentale se base uniquement sur des tests de validation, tandis que l’itérative privilégie la documentation</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(12)">Précédent</button>
        <button id="next-13" class="next-button" disabled onclick="validateAnswer(13, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-14" class="question hidden">
        <h2>Question 14</h2>
        <p>Comment la méthode SCRUM est-elle à la fois itérative et incrémentale ?</p>
        <form id="form-14">
            <label><input type="radio" name="q14" value="0" onclick="enableNext(14)"> SCRUM est uniquement incrémentale, car chaque Sprint est une nouvelle version complète du produit</label><br>
            <label><input type="radio" name="q14" value="0" onclick="enableNext(14)">  SCRUM est uniquement itérative, chaque Sprint produit une nouvelle version révisée du produit sans livrer de nouvelles fonctionnalités</label><br>
            <label><input type="radio" name="q14" value="1" onclick="enableNext(14)"> SCRUM est itérative dans le processus global (les Sprints répètent des cycles), et incrémentale dans la livraison de nouvelles fonctionnalités à chaque Sprint</label><br>
            <label><input type="radio" name="q14" value="0" onclick="enableNext(14)"> SCRUM n’est ni itérative, ni incrémentale, mais suit un processus linéaire</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(13)">Précédent</button>
        <button id="next-14" class="next-button" disabled onclick="validateAnswer(14, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-15" class="question hidden">
        <h2>Question 15</h2>
        <p>Quelles sont les valeurs fondamentales du Manifeste Agile ?</p>
        <form id="form-15">
            <label><input type="radio" name="q15" value="0" onclick="enableNext(15)"> Des produits détaillés plutôt que des produits opérationnels</label><br>
            <label><input type="radio" name="q15" value="0" onclick="enableNext(15)"> La planification rigide plutôt que l’adaptation au changement</label><br>
            <label><input type="radio" name="q15" value="1" onclick="enableNext(15)"> La collaboration avec les clients plutôt que la négociation contractuelle</label><br>
            <label><input type="radio" name="q15" value="0" onclick="enableNext(15)"> La gestion des outils plutôt que les individus et leurs interactions</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(14)">Précédent</button>
        <button id="next-15" class="next-button" disabled onclick="validateAnswer(15, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-16" class="question hidden">
        <h2>Question 16</h2>
        <p>Quel principe Agile met l’accent sur la satisfaction du client ?</p>
        <form id="form-16">
            <label><input type="radio" name="q16" value="0" onclick="enableNext(16)"> Collaboration quotidienne</label><br>
            <label><input type="radio" name="q16" value="0" onclick="enableNext(16)"> Changement bienvenu</label><br>
            <label><input type="radio" name="q16" value="0" onclick="enableNext(16)"> Livraisons fréquentes et opérationnelles</label><br>
            <label><input type="radio" name="q16" value="1" onclick="enableNext(16)">  Satisfaction client</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(15)">Précédent</button>
        <button id="next-16" class="next-button" disabled onclick="validateAnswer(16, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-17" class="question hidden">
        <h2>Question 17</h2>
        <p>En quoi la méthode Agile diffère-t-elle de la méthode en Cascade ?</p>
        <form id="form-17">
            <label><input type="radio" name="q17" value="0" onclick="enableNext(17)"> La méthode Agile livre un produit complet à la fin du projet, contrairement à la méthode en Cascade</label><br>
            <label><input type="radio" name="q17" value="1" onclick="enableNext(17)"> La méthode Agile livre régulièrement des incréments fonctionnels au client, créant ainsi une valeur continue</label><br>
            <label><input type="radio" name="q17" value="0" onclick="enableNext(17)"> La méthode Agile ne nécessite pas de feedback du client</label><br>
            <label><input type="radio" name="q17" value="0" onclick="enableNext(17)"> La méthode en Cascade est plus flexible que la méthode Agile</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(16)">Précédent</button>
        <button id="next-17" class="next-button" disabled onclick="validateAnswer(17, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-18" class="question hidden">
        <h2>Question 18</h2>
        <p>Qu’est-ce que la pratique "Test-Driven Requirement" (TDD) en Agile ?</p>
        <form id="form-18">
            <label><input type="radio" name="q18" value="0" onclick="enableNext(18)"> Une méthode de gestion des tâches avant le début du développement</label><br>
            <label><input type="radio" name="q18" value="1" onclick="enableNext(18)"> L’écriture des tests avant la création des spécifications du produit pour valider chaque fonctionnalité</label><br>
            <label><input type="radio" name="q18" value="0" onclick="enableNext(18)"> Une méthode pour planifier des fonctionnalités sur le long terme</label><br>
            <label><input type="radio" name="q18" value="0" onclick="enableNext(18)"> L’implémentation du produit avant tout test de validation</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(17)">Précédent</button>
        <button id="next-18" class="next-button" disabled onclick="validateAnswer(18, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-19" class="question hidden">
        <h2>Question 19</h2>
        <p>Quel principe Agile souligne l’importance de la qualité et de la simplicité dans le développement du produit ?</p>
        <form id="form-19">
            <label><input type="radio" name="q19" value="0" onclick="enableNext(19)"> Simplicité</label><br>
            <label><input type="radio" name="q19" value="0" onclick="enableNext(19)"> Auto-organisation des équipes</label><br>
            <label><input type="radio" name="q19" value="0" onclick="enableNext(19)"> Amélioration continue</label><br>
            <label><input type="radio" name="q19" value="1" onclick="enableNext(19)"> Excellence dans la conception</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(18)">Précédent</button>
        <button id="next-19" class="next-button" disabled onclick="validateAnswer(19, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-20" class="question hidden">
        <h2>Question 20</h2>
        <p>Quel aspect de la méthode Agile est mis en avant pour améliorer l’évolutivité du produit ?</p>
        <form id="form-20">
            <label><input type="radio" name="q20" value="0" onclick="enableNext(20)"> La hiérarchie stricte au sein des équipes</label><br>
            <label><input type="radio" name="q20" value="1" onclick="enableNext(20)"> La réduction au minimum des éléments non ajoutant de valeur au produit</label><br>
            <label><input type="radio" name="q20" value="0" onclick="enableNext(20)"> Le focus sur la documentation détaillée à chaque étape</label><br>
            <label><input type="radio" name="q20" value="0" onclick="enableNext(20)"> La planification exhaustive des fonctionnalités avant chaque Sprint</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(19)">Précédent</button>
        <button id="result-button" class="next-button" disabled onclick="showResult()">Résultat</button>
    </section>
    <!-------------------------------------------------------------------->

    <section id="result-section" class="hidden">
        <h2>Résultat Final</h2>
        <p id="result-text"></p>
        <button><h3>Retour à l'accueil</h3></button>
    </section>
</div>

    <script src="qcm_eval.js"></script>
</body>
</html>
<?php include_once 'footer.html'; ?>
