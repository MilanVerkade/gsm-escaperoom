<?php
require_once('../dbcon.php');

try {
  $stmt = $db_connection->query("SELECT * FROM riddles WHERE roomId = 2");
  $riddles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Databasefout: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape Room 2</title>
  <link rel="stylesheet" href="../css/style.css">
  <script defer src="../js/room3.js"></script>
</head>

<body>

<div class="room3-container1" id="room3-container1">
  <div class="timer" id="timer">30:00</div>
  <div class="mirror-box">
    <input type="text" id="mirror-answer" placeholder="Voer de code in" maxlength="10" class="mirror-input" autocomplete="off">
    <button id="mirror-submit" class="mirror-btn">Antwoord</button>
    <button id="mirror-hint" class="mirror-btn hint">Hint</button>
    <div id="mirror-feedback" class="mirror-feedback"></div>
    <div id="mirror-hint-text" class="mirror-hint-text"></div>
  </div>
</div>


</div>

<div class="room3-container2" id="room3-container2">
  <div class="timer" id="timer">30:00</div>
  <div class="mirror-box">
    <input type="text" id="mirror-answer-2" placeholder="Voer de code in" maxlength="10" class="mirror-input" autocomplete="off">
    <button id="mirror-submit-2" class="mirror-btn">Antwoord</button>
    <button id="mirror-hint-2" class="mirror-btn hint">Hint</button>
    <div id="mirror-feedback-2" class="mirror-feedback"></div>
    <div id="mirror-hint-text-2" class="mirror-hint-text"></div>
  </div>
</div>

<div class="room3-container3" id="room3-container3">
  <div id="timer">30:00</div>
  <div class="mirror-box">
    <input type="text" id="mirror-answer-3" placeholder="Voer de code in" maxlength="10" class="mirror-input" autocomplete="off">
    <button id="mirror-submit-3" class="mirror-btn">Antwoord</button>
    <button id="mirror-hint-3" class="mirror-btn hint">Hint</button>
    <div id="mirror-feedback-3" class="mirror-feedback"></div>
    <div id="mirror-hint-text-3" class="mirror-hint-text"></div>
  </div>
</div>
</div>

<script src="../js/app.js"></script>

</body>

</html>