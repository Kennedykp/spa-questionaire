const questionnaireForm = document.getElementById("questionnaire-form");
const questions = document.querySelectorAll(".question");

let currentQuestion = 0;

questions[currentQuestion].style.display = "block";

function showNextQuestion() {
  questions[currentQuestion].style.display = "none";
  currentQuestion++;
  questions[currentQuestion].style.display = "block";
}

function showPreviousQuestion() {
  questions[currentQuestion].style.display = "none";
  currentQuestion--;
  questions[currentQuestion].style.display = "block";
}

for (let i = 0; i < questions.length; i++) {
  const nextButton = questions[i].querySelector("#next-" + (i + 1));
  const previousButton = questions[i].querySelector("#previous-" + (i + 1));

  if (nextButton) {
    nextButton.addEventListener("click", showNextQuestion);
  }

  if (previousButton) {
    previousButton.addEventListener("click", showPreviousQuestion);
  }
}

const currentDateTime = document.querySelector('#currentDateTime');
const now = new Date();
currentDateTime.textContent = now.toLocaleString(); 


AOS.init();

