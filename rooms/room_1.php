<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape Room 1</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    :root {
      --jungle-dark: #1d2a1f;
      --leaf: #7fa46a;
      --sand: #e3d8b6;
      --ink: #101510;
    }

    body {
      margin: 0;
      color: var(--sand);
      font-family: "Georgia", "Times New Roman", serif;
      background: var(--jungle-dark);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 100vh;
    }

    .room1-wrap {
      max-width: 980px;
      margin: 0 auto;
      padding: 32px 24px 80px;
      position: relative;
    }

    .room1-header {
      display: grid;
      gap: 12px;
      margin-bottom: 24px;
    }

    .room1-header h1 {
      font-size: clamp(2rem, 4vw, 3.2rem);
      letter-spacing: 1px;
      margin: 0;
      color: #f2e6c9;
    }

    .room1-header p {
      margin: 0;
      max-width: 700px;
      color: rgba(242, 230, 201, 0.8);
      font-size: 1.05rem;
    }

    #timer {
      position: absolute;
      top: 20px;
      right: 24px;
      font-size: 1.4rem;
      font-weight: bold;
      color: var(--leaf);
      background: rgba(16, 21, 16, 0.75);
      padding: 8px 16px;
      border-radius: 12px;
      z-index: 10;
    }

    .room1-panel {
      background: rgba(12, 16, 12, 0.72);
      border-radius: 18px;
      padding: 22px 22px 28px;
    }

    .trail {
      display: grid;
      gap: 12px;
      margin: 24px 0 32px;
      background: rgba(16, 21, 16, 0.55);
      border-radius: 18px;
      padding: 18px 22px;
    }

    .trail span {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 1rem;
      color: rgba(242, 230, 201, 0.75);
    }

    .trail span.active {
      color: #f2e6c9;
      font-weight: 600;
    }

    .step {
      display: none;
      background: rgba(16, 21, 16, 0.62);
      border-radius: 22px;
      padding: 26px 28px;
      margin-bottom: 22px;
    }

    .step.is-active {
      display: block;
    }

    .step h2 {
      margin: 0 0 10px;
      color: #f2e6c9;
      font-size: 1.5rem;
    }

    .step p {
      margin: 0 0 18px;
      color: rgba(242, 230, 201, 0.8);
    }

    .step .clue {
      display: grid;
      gap: 10px;
      background: rgba(127, 164, 106, 0.12);
      border-radius: 14px;
      padding: 16px 18px;
      color: rgba(242, 230, 201, 0.9);
    }

    .answer-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 18px;
    }

    .answer-row input {
      flex: 1 1 220px;
      padding: 10px 12px;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: rgba(255, 255, 255, 0.08);
      color: #f2e6c9;
      font-size: 1rem;
      outline: none;
    }

    .answer-row button {
      padding: 10px 18px;
      border-radius: 10px;
      border: none;
      background: var(--leaf);
      color: var(--ink);
      font-weight: 700;
      cursor: pointer;
    }

    .feedback {
      margin-top: 12px;
      font-weight: 600;
      min-height: 20px;
    }

    .finale {
      text-align: center;
    }

    .finale h2 {
      font-size: 1.8rem;
    }

    .finale .badge {
      display: inline-block;
      margin-top: 12px;
      padding: 8px 16px;
      border-radius: 999px;
      background: rgba(242, 230, 201, 0.15);
      color: #f2e6c9;
      letter-spacing: 1px;
    }

    @media (max-width: 700px) {
      #timer {
        position: static;
        width: fit-content;
        margin: 0 0 18px auto;
      }

      .room1-wrap {
        padding: 24px 18px 60px;
      }
    }
  </style>
</head>

<body>
  <div class="room1-wrap">
    <div id="timer">30:00</div>
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
