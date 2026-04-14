<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
       <div id="nav">
 <nav>
  <ul>
    <li><a href="index.php">&#8592;</a></li>

  </ul>
 </nav>
</div>
    <h1>Admin</h1>
    <h2>Kamer 1:</h2>
    <p>Niet beschikbaar</p>
    <h2>Kamer 2:</h2>
    <button onclick="toggleRiddle(1)">Raadsel 1 Aan/Uit</button>
    <button onclick="toggleRiddle(2)">Raadsel 2 Aan/Uit</button>
    <button onclick="toggleRiddle(3)">Raadsel 3 Aan/Uit</button>
    <br><br>
    <ol>
        <li id="raadsel1">Op de muur staat: 16 → 4, 12 → 3, 8 → 2 ? →> ?. In de kamer vind je een tandwiel met het getal 20 erin gekrast. Een briefje zegt: "De tijd werd niet gestopt… hij werd verkleind.</li>
        <li id="raadsel2">Wacht niet op de zon, maar volg het pad van de lantaarn buiten. Het licht valt achtereenvolgens op de plekken waar de meester zijn gereedschap liet vallen</li>
        <li id="raadsel3">De lift komt pas in beweging als het gewicht exact is.</li>
    </ol>
    <h2>Kamer 3:</h2>
    <ol>
        <li></li>
        <li></li>
        <li></li>
    </ol>

    <script>
        const raadsel1 = document.getElementById("raadsel1");
        const raadsel2 = document.getElementById("raadsel2");
        const raadsel3 = document.getElementById("raadsel3");

        function toggleRiddle(num) {
            let el = document.getElementById("raadsel" + num);
            if (el.style.display === "none") {
                el.style.display = "list-item"; // of 'block'
            } else {
                el.style.display = "none";
            }
        }
    </script>
</body>
</html>