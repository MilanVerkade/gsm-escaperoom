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
<div class="room3-container1" id="room3-container1">

</div>

<div class="room3-container2" id="room3-container2">

</div>

<div class="room3-container3" id="room3-container3">

  <script src="../js/app.js"></script>

</body>

</html>