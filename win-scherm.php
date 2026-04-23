<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win scherm</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="winFoto">
<img src="Fotos/groen.png" alt="">
<img src="Fotos/winbrief.png" alt="">
<p id="eindtijd" class="eindtijd"></p>
</div>

<div class="review-btn-container">
    <button onclick="window.location.href='reviewpagina.php'" class="btn review-btn">Laat een review achter</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var storedSeconds = localStorage.getItem('timerSeconds');
    if (storedSeconds !== null) {
        var timeRemaining = parseInt(storedSeconds, 10);
        var totalTime = 20 * 60; // 20 minuten in seconden
        
        // Zorg ervoor dat de tijd niet negatief is als er iets fout gaat
        var timeElapsed = Math.max(0, totalTime - timeRemaining);
        
        var minElapsed = Math.floor(timeElapsed / 60);
        var secElapsed = timeElapsed % 60;
        
        var timeString = (minElapsed < 10 ? '0' : '') + minElapsed + ':' + (secElapsed < 10 ? '0' : '') + secElapsed;
        
        var displayElement = document.getElementById('eindtijd');
        if (displayElement) {
            displayElement.textContent = 'Eindtijd: ' + timeString;
        }
    } else {
        var displayElement = document.getElementById('eindtijd');
        if (displayElement) {
            displayElement.textContent = 'Eindtijd: --:--';
        }
    }
});
</script>
</body>
</html>
