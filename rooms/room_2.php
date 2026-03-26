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
<div class="room2-container1" id="room2-container1">

</div>

<div class="room2-container2" id="room2-container2">

</div>

<div class="room2-container3" id="room2-container3">

</div>

  <script src="../js/room2.js"></script>

</body>

</html>