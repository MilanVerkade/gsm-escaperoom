<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape Room 2</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="room2-container1" id="room2-container1" style="position:relative;">
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>
  <div class="mirror-box">
    <input type="text" id="r2-answer-1" placeholder="Voer de code in" maxlength="10" class="mirror-input" autocomplete="off">
    <button id="r2-submit-1" class="mirror-btn">Antwoord</button>
    <button id="r2-hint-1" class="mirror-btn hint">Hint</button>
    <div id="r2-feedback-1" class="mirror-feedback"></div>
    <div id="r2-hint-text-1" class="mirror-hint-text"></div>
  </div>
</div>

<div class="room2-container2" id="room2-container2" style="position:relative;">
  <button id="hint-btn-c2" class="hint-button">Hint</button>
  <div id="hint-text-c2" class="hint-text">Wacht niet op de zon, maar volg het pad van de lantaarn buiten. Het licht valt achtereenvolgens op de plekken waar de meester zijn gereedschap liet vallen. </div>
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>
    <div class="klik-div2-1">
      <div id="overlay5" class="overlay5">
        <div class="popup5">
          <img src="../Fotos/escaperoom2/imagecopy4.png" alt="Foto" />
          <div class="lock-inputs-container">
            <input type="number" class="lock-input" id="lock-digit-1" min="0" max="9">
            <input type="number" class="lock-input" id="lock-digit-2" min="0" max="9">
            <input type="number" class="lock-input" id="lock-digit-3" min="0" max="9">
          </div>
        </div>
      </div>
  </div>
      </div>
    </div>
  </div>
</div>

<div class="room2-container3" id="room2-container3" style="position:relative;">
  <button id="hint-btn-c3" class="hint-button">Hint</button>
  <div id="hint-text-c3" class="hint-text">Vergeet niet, de tijd draait door en alles heeft zijn gewicht.</div>
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>
  <div class="hint3" id="hint-display"></div>
  <div class="klik-div3-1">
    <div id="overlay" class="overlay">
      <div class="popup">
        <img src="../Fotos/escaperoom2/afbeelding (1).png" alt="Foto" />
        <div class="enttext"></div>
      </div>
    </div>
  </div>
  <div class="klik-div3-2">
    <div id="overlay2" class="overlay2">
      <div class="popup2">
        <img src="../Fotos/escaperoom2/imagecopy3.png" alt="Foto" />
      </div>
    </div>
  </div>
  <div class="klik-div3-3">
</div>
<script>
  // Reset de timer voor room 2
  localStorage.removeItem('timerSeconds');
</script>
<script src="../js/room2.js"></script>
<script src="../js/app.js"></script>

</body>

</html>