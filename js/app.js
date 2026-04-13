// Spiegel raadsel room 3: code-invoer en hint
document.addEventListener('DOMContentLoaded', function () {
  // Container 1 setup
  var answerInput = document.getElementById('mirror-answer');
  var submitBtn = document.getElementById('mirror-submit');
  var feedback = document.getElementById('mirror-feedback');
  var hintBtn = document.getElementById('mirror-hint');
  var hintText = document.getElementById('mirror-hint-text');
  var juisteCode = '5415';
  var container3 = document.getElementById('room3-container3');
  var container2 = document.getElementById('room3-container2');

  if (submitBtn && answerInput && feedback && container2 && container3) {
    submitBtn.addEventListener('click', function () {
      if (answerInput.value.trim() === juisteCode) {
        openRoom2();
        setTimeout(function() {
          container3.style.display = 'none';
          container2.style.display = 'flex';
        }, 1000);
      } else {
        feedback.style.color = 'red';
        feedback.textContent = 'Fout, probeer opnieuw!';
      }
    });
    answerInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') submitBtn.click();
    });
  }
  if (hintBtn && hintText) {
    hintBtn.addEventListener('click', function () {
      hintText.textContent = 'Om de toekomst te zien, kijken we vaak vooruit. Maar deze waarheid eist dat je jouw rug toekeert naar datgene wat je probeert te lezen.';
      hintText.style.display = 'block';
    });
  }

  // Container 2 setup
  var answerInput2 = document.getElementById('mirror-answer-2');
  var submitBtn2 = document.getElementById('mirror-submit-2');
  var feedback2 = document.getElementById('mirror-feedback-2');
  var hintBtn2 = document.getElementById('mirror-hint-2');
  var hintText2 = document.getElementById('mirror-hint-text-2');
  var juisteCode2 = '5121926';

  if (submitBtn2 && answerInput2 && feedback2) {
    submitBtn2.addEventListener('click', function () {
      if (answerInput2.value.trim() === juisteCode2) {
        openRoom3()
      } else {
        feedback2.style.color = 'red';
        feedback2.textContent = 'Fout, probeer opnieuw!';
      }
    });
    answerInput2.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') submitBtn2.click();
    });
  }
  if (hintBtn2 && hintText2) {
    hintBtn2.addEventListener('click', function () {
      hintText2.textContent = 'De kalender vertelt de dagen, maar de mok vertelt de waarheid.';
      hintText2.style.display = 'block';
    });
  }
});
// Deze functie opent de modal en toont de vraag
function openModal(index) {
  // Zoek het element met de class 'box' en het bijbehorende data-index
  let box = document.querySelector(`.box[data-index='${index}']`);

  // Haal de vraag en het juiste antwoord uit de dataset van de box
  let riddleText = box.dataset.riddle;
  let correctAnswer = box.dataset.answer;

  // Zet de vraagtekst in het modalvenster
  document.getElementById('riddle').innerText = riddleText;

  // Zet het correcte antwoord in de modal, zodat we het later kunnen vergelijken
  document.getElementById('modal').dataset.answer = correctAnswer;

  // Maak het antwoordveld leeg
  document.getElementById('answer').value = '';

  // Toon de overlay en de modal door de display-stijl te veranderen naar 'block'
  document.getElementById('overlay').style.display = 'block';
  document.getElementById('modal').style.display = 'block';
}

// Deze functie sluit de modal en de overlay
function closeModal() {
  // Zet de overlay en modal weer op 'none' zodat ze niet meer zichtbaar zijn
  document.getElementById('overlay').style.display = 'none';
  document.getElementById('modal').style.display = 'none';

  // Maak de feedback tekst leeg
  document.getElementById('feedback').innerText = '';
}

// Deze functie controleert of het ingevoerde antwoord correct is
function checkAnswer() {
  // Haal het antwoord van de gebruiker op uit het invoerveld en verwijder onnodige spaties
  let userAnswer = document.getElementById('answer').value.trim();

  // Haal het juiste antwoord op uit de modal
  let correctAnswer = document.getElementById('modal').dataset.answer;

  // Haal het feedback element op om de gebruiker te informeren
  let feedback = document.getElementById('feedback');

  // Vergelijk het antwoord van de gebruiker met het juiste antwoord (hoofdlettergevoeligheid negeren)
  if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
    // Als het antwoord juist is, geef positieve feedback
    feedback.innerText = 'Correct! Goed gedaan!';
    feedback.style.color = 'green';

    // Sluit de modal na 1 seconde
    setTimeout(closeModal, 1000);
  } else {
    // Als het antwoord fout is, geef negatieve feedback
    feedback.innerText = 'Fout, probeer opnieuw!';
    feedback.style.color = 'red';
  }
}

document.addEventListener('DOMContentLoaded', function () {
  var timerDivs = document.querySelectorAll('#timer');
  if (!timerDivs.length) return;
  var storedSeconds = localStorage.getItem('timerSeconds');
  var totalSeconds = storedSeconds ? parseInt(storedSeconds) : 30 * 60;
  
  function updateTimer() {
    var min = Math.floor(totalSeconds / 60);
    var sec = totalSeconds % 60;
    timerDivs.forEach(function(timerDiv) {
      timerDiv.textContent = (min < 10 ? '0' : '') + min + ':' + (sec < 10 ? '0' : '') + sec;
    });
    if (totalSeconds <= 0) {
      localStorage.removeItem('timerSeconds');
      window.location.href = '../verlies-scherm.php';
    } else {
      totalSeconds--;
      localStorage.setItem('timerSeconds', totalSeconds);
      setTimeout(updateTimer, 1000);
    }
  }
  updateTimer();
});


