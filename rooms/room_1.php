<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape Room 1</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="room1-container1" id="room1-container1">
    <div class="room1-wrap">
      <div class="timer" id="timer">30:00</div>
      <div class="room1-panel">
        <header class="room1-header">
          <h1>Team: ...</h1>
          <p>Vul hier straks de korte intro van jullie kamer in.</p>
        </header>

      <section class="trail" id="trail">
        <span class="active" data-step-label="0">1. Vraag 1</span>
        <span data-step-label="1">2. Vraag 2</span>
        <span data-step-label="2">3. Vraag 3</span>
      </section>

      <section class="step is-active" data-step="0">
        <h2>Titel vraag 1</h2>
        <p>Beschrijving van vraag 1.</p>
        <div class="clue">
          <strong>Hint:</strong>
          <span>Hint voor vraag 1.</span>
        </div>
        <div class="answer-row">
          <input type="text" data-answer-input placeholder="Antwoord..." autocomplete="off">
          <button data-answer-button>Bevestig</button>
        </div>
        <div class="feedback" data-feedback></div>
      </section>

      <section class="step" data-step="1">
        <h2>Titel vraag 2</h2>
        <p>Beschrijving van vraag 2.</p>
        <div class="clue">
          <strong>Hint:</strong>
          <span>Hint voor vraag 2.</span>
        </div>
        <div class="answer-row">
          <input type="text" data-answer-input placeholder="Antwoord..." autocomplete="off">
          <button data-answer-button>Bevestig</button>
        </div>
        <div class="feedback" data-feedback></div>
      </section>

      <section class="step finale" data-step="2">
        <h2>Titel vraag 3</h2>
        <p>Beschrijving van vraag 3.</p>
        <div class="clue">
          <strong>Hint:</strong>
          <span>Hint voor vraag 3.</span>
        </div>
        <div class="answer-row">
          <input type="text" data-answer-input placeholder="Antwoord..." autocomplete="off">
          <button data-answer-button>Bevestig</button>
        </div>
        <div class="feedback" data-feedback></div>
        <div class="badge" id="room1-badge" style="display:none;">Afgerond</div>
      </section>
      </div>
    </div>
  </div>

  <script>
    localStorage.removeItem('timerSeconds');
  </script>
  <script src="../js/app.js"></script>
  <script>
    (function () {
      var answers = ['noord', '247', 'vuurplaats'];
      var steps = Array.prototype.slice.call(document.querySelectorAll('[data-step]'));
      var labels = Array.prototype.slice.call(document.querySelectorAll('[data-step-label]'));

      function setActiveStep(index) {
        steps.forEach(function (step, idx) {
          step.classList.toggle('is-active', idx === index);
        });
        labels.forEach(function (label, idx) {
          label.classList.toggle('active', idx === index);
        });
      }

      function normalize(value) {
        return value.trim().toLowerCase();
      }

      steps.forEach(function (step, index) {
        var input = step.querySelector('[data-answer-input]');
        var button = step.querySelector('[data-answer-button]');
        var feedback = step.querySelector('[data-feedback]');

        function verify() {
          if (!input) return;
          var userAnswer = normalize(input.value);
          if (userAnswer === answers[index]) {
            feedback.textContent = 'Correct! De jungle geeft de volgende weg vrij.';
            feedback.style.color = '#9fe28d';
            var nextIndex = index + 1;
            if (nextIndex < steps.length) {
              setTimeout(function () {
                setActiveStep(nextIndex);
                steps[nextIndex].scrollIntoView({ behavior: 'smooth', block: 'start' });
              }, 800);
            } else {
              var badge = document.getElementById('room1-badge');
              if (badge) badge.style.display = 'inline-block';
            }
          } else {
            feedback.textContent = 'Nog niet. Kijk opnieuw naar de hint.';
            feedback.style.color = '#f2b9a0';
          }
        }

        if (button) {
          button.addEventListener('click', verify);
        }
        if (input) {
          input.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
              verify();
            }
          });
        }
      });
    })();
  </script>

</body>

</html>
