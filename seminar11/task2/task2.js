const quizData = [
    {
        question: "What is the capital of France?",
        options: ["Paris", "Berlin", "Madrid", "Rome"],
        correctAnswer: "Paris"
    },
    {
        question: "Which programming language is used mainly for front-end development?",
        options: ["Java", "Python", "JavaScript", "C++"],
        correctAnswer: "JavaScript"
    },
    {
        question: "What does HTML stand for?",
        options: ["HyperText Markup Language", "High-Level Programming Language", "Home Tool Markup Language", "Hyperlink and Text Markup Language"],
        correctAnswer: "HyperText Markup Language"
    }
];

const quizContainer = document.getElementById('quiz');
const resultContainer = document.getElementById('result');
let currentQuestion = 0;
let score = 0;

function displayQuestion() {
    const currentQuizData = quizData[currentQuestion];

    quizContainer.innerHTML = `
            <div class="question">${currentQuizData.question}</div>
            <div class="options">
                ${currentQuizData.options.map(option => `<div class="option" onclick="checkAnswer('${option}')">${option}</div>`).join('')}
            </div>
        `;
}

function checkAnswer(userAnswer) {
    const correctAnswer = quizData[currentQuestion].correctAnswer;

    if (userAnswer === correctAnswer) {
        score++;
    }

    currentQuestion++;

    if (currentQuestion < quizData.length) {
        displayQuestion();
    } else {
        displayResult();
    }
}

function displayResult() {
    resultContainer.innerHTML = `Your Score: ${score} out of ${quizData.length}`;
}

displayQuestion();