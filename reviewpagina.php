<?php
require_once('dbcon.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $beoordeling = $_POST['beoordeling'];
    $moeilijkheid = $_POST['moeilijkheid'];
    $review = $_POST['review'];

    $sql = "INSERT INTO review (beoordeling, moeilijkheid, review_text) VALUES (?, ?, ?)";
    
    try {
        $stmt = $db_connection->prepare($sql);
        $stmt->execute([$beoordeling, $moeilijkheid, $review]);
        header("Location: " . $_SERVER['PHP_SELF'] . "?status=success");
        exit(); 
    } catch (PDOException $e) {
        echo "Fout bij het plaatsen van review: " . $e->getMessage();
    }
}


?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review Pagina</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="review-container">
    <div class="review-form-wrapper">
      <h1 class="review-title">Review Pagina</h1>

      <form method="POST">
        <div class="form-group">
          <label for="beoordeling">Beoordeling (1/M 5)</label>
          <input type="number" id="beoordeling" name="beoordeling" min="1" max="5" placeholder="Voer beoordeling in..."
            required>
        </div>

        <div class="form-group">
          <label for="moeilijkheid">Moeilijkheid (1/M 10)</label>
          <input type="number" id="moeilijkheid" name="moeilijkheid" min="1" max="10"
            placeholder="Voer moeilijkheid in..." required>
        </div>

        <div class="form-group">
          <label for="review">Feedback</label>
          <textarea id="review" name="review" placeholder="Schrijf je feedback hier..." required></textarea>
        </div>

        <div class="button-group">
          <button type="submit" class="btn btn-submit">Review Plaatsen</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>