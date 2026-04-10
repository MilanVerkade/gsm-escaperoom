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
</head>

<body>

<div class="room2-container1" id="room2-container1" style="position:relative;">
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>

</div>

<div class="room2-container2" id="room2-container2" style="position:relative;">
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>
</div>

<div class="room2-container3" id="room2-container3" style="position:relative;">
  <div id="timer" style="position:absolute; top:20px; right:40px; font-size:2em; font-weight:bold; color:#b00; background:rgba(255,255,255,0.7); padding:8px 20px; border-radius:10px; z-index:20;">30:00</div>
  <div class="klik-div3-1">
    <div id="overlay" class="overlay">
      <div class="popup">
        <img src="../Fotos/escaperoom2/afbeelding (1).png" alt="Foto" />
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
<script src="../js/room2.js"></script>
<script src="../js/app.js"></script>

</body>

</html>