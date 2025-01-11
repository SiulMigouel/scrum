let currentQuestion = 1;
let score = 0;
const totalQuestions = 3;

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

    document.getElementById(`question-${questionNumber}`).classList.add("hidden");
    const nextQuestion = document.getElementById(`question-${questionNumber + 1}`);
    if (nextQuestion) {
        nextQuestion.classList.remove("hidden");
    }

    // Bloque les choix de la question une fois validée
    const inputs = document.querySelectorAll(`#form-${questionNumber} input`);
    inputs.forEach(input => input.disabled = true);
}

function goBack(previousQuestion) {
    document.getElementById(`question-${currentQuestion}`).classList.add("hidden");
    document.getElementById(`question-${previousQuestion}`).classList.remove("hidden");
    currentQuestion = previousQuestion;

    // Bloque les choix de la question précédente
    const inputs = document.querySelectorAll(`#form-${previousQuestion} input`);
    inputs.forEach(input => input.disabled = true);
}

function enableNext(questionNumber) {
    const nextButton = document.getElementById(questionNumber === totalQuestions ? "result-button" : `next-${questionNumber}`);
    nextButton.disabled = false;
}

function showResult() {
    document.getElementById(`question-${currentQuestion}`).classList.add("hidden");
    const resultSection = document.getElementById("result-section");
    const resultText = document.getElementById("result-text");

    resultText.textContent = `Vous avez obtenu ${score} / ${totalQuestions} bonnes réponses.`;
    resultSection.classList.remove("hidden");
}
