<?php
require_once('../dbcon.php');

try {
  $stmt = $db_connection->query("SELECT * FROM riddles WHERE roomId = 3");
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
  <title>Escape Room 3</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="room3-container1" id="room3-container1" style="position:relative;">
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>

  <div style="position:absolute; bottom:40px; left:50%; transform:translateX(-50%); background:rgba(255,255,255,0.85); padding:24px 32px; border-radius:16px; box-shadow:0 2px 16px rgba(0,0,0,0.15); z-index:30; min-width:320px; text-align:center;">
    <input type="text" id="mirror-answer" placeholder="Voer de code in" style="font-size:1.2em; padding:6px 12px; width:120px; text-align:center;" maxlength="10">
    <button id="mirror-submit" style="font-size:1.1em; margin-left:10px;">Antwoord</button>
    <button id="mirror-hint" style="font-size:1.1em; margin-left:20px;">Hint</button>
    <div id="mirror-feedback" style="margin-top:10px; color:red; font-weight:bold;"></div>
    <div id="mirror-hint-text" style="margin-top:10px; color:#333; display:none; font-style:italic;"></div>
  </div>
</div>

<div class="room3-container2" id="room3-container2" style="position:relative;">
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>
</div>


<div class="room3-container3" id="room3-container3" style="position:relative;">
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>

  <div style="position:absolute; bottom:40px; left:50%; transform:translateX(-50%); background:rgba(255,255,255,0.85); padding:24px 32px; border-radius:16px; box-shadow:0 2px 16px rgba(0,0,0,0.15); z-index:30; min-width:320px; text-align:center;">
    <input type="text" id="mirror-answer" placeholder="Voer de code in" style="font-size:1.2em; padding:6px 12px; width:120px; text-align:center;" maxlength="10">
    <button id="mirror-submit" style="font-size:1.1em; margin-left:10px;">Antwoord</button>
    <button id="mirror-hint" style="font-size:1.1em; margin-left:20px;">Hint</button>
    <div id="mirror-feedback" style="margin-top:10px; color:red; font-weight:bold;"></div>
    <div id="mirror-hint-text" style="margin-top:10px; color:#333; display:none; font-style:italic;"></div>
  </div>

  <script src="../js/app.js"></script>
</div>

</body>

</html>