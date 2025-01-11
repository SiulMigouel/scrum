let currentQuestion = 1;
let score = 0;
const totalQuestions = 10; // Total des questions

// Valider une réponse
function validateAnswer(questionNumber, correctAnswer) {
    const selected = document.querySelector(`input[name="q${questionNumber}"]:checked`);
    const indicator = document.getElementById(`indicator-${questionNumber}`);
    const feedback = document.getElementById("feedback");

    if (parseInt(selected.value) === correctAnswer) {
        score++;
        indicator.classList.add("correct");
        feedback.textContent = "Bonne réponse !";
        feedback.style.color = "green";
    } else {
        indicator.classList.add("incorrect");
        feedback.textContent = "Mauvaise réponse...";
        feedback.style.color = "red";
    }

    feedback.classList.remove("hidden");
    setTimeout(() => feedback.classList.add("hidden"), 2000);

    // Passer à la question suivante
    document.getElementById(`question-${questionNumber}`).classList.add("hidden");
    currentQuestion = questionNumber + 1;
    const nextQuestion = document.getElementById(`question-${currentQuestion}`);
    if (nextQuestion) {
        nextQuestion.classList.remove("hidden");
    }

    // Désactiver les choix de la question validée
    const inputs = document.querySelectorAll(`#form-${questionNumber} input`);
    inputs.forEach(input => input.disabled = true);
}

// Revenir à la question précédente
function goBack(previousQuestion) {
    // Masquer la question actuelle
    document.getElementById(`question-${currentQuestion}`).classList.add("hidden");
    // Afficher la question précédente
    document.getElementById(`question-${previousQuestion}`).classList.remove("hidden");
    // Mettre à jour l'indice de la question actuelle
    currentQuestion = previousQuestion;

    // Désactiver les choix de la question précédente
    const inputs = document.querySelectorAll(`#form-${previousQuestion} input`);
    inputs.forEach(input => input.disabled = true);
}

// Activer le bouton suivant
function enableNext(questionNumber) {
    const nextButton = document.getElementById(questionNumber === totalQuestions ? "result-button" : `next-${questionNumber}`);
    nextButton.disabled = false;
}

function showResult() {
    // Valider la dernière réponse
    const selected = document.querySelector(`input[name="q${currentQuestion}"]:checked`);
    const indicator = document.getElementById(`indicator-${currentQuestion}`);
    if (selected) {
        if (parseInt(selected.value) === 1) {
            score++;
            indicator.classList.add("correct");
        } else {
            indicator.classList.add("incorrect");
        }
    }

    // Désactiver les choix de la dernière question
    const inputs = document.querySelectorAll(`#form-${currentQuestion} input`);
    inputs.forEach(input => input.disabled = true);

    // Afficher le résultat final
    document.getElementById(`question-${currentQuestion}`).classList.add("hidden");
    const resultSection = document.getElementById("result-section");
    const resultText = document.getElementById("result-text");

    resultText.textContent = `Vous avez obtenu ${score} / ${totalQuestions} bonnes réponses.`;
    resultSection.classList.remove("hidden");
}