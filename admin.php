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
    <button id="btn-raadsel1" onclick="toggleRiddle(1)">Raadsel 1 Aan/Uit</button>
    <button id="btn-raadsel2" onclick="toggleRiddle(2)">Raadsel 2 Aan/Uit</button>
    <button id="btn-raadsel3" onclick="toggleRiddle(3)">Raadsel 3 Aan/Uit</button>
    <br><br>
    <ol>
        <li id="raadsel1">Op de muur staat: 16 → 4, 12 → 3, 8 → 2 ? →> ?. In de kamer vind je een tandwiel met het getal 20 erin gekrast. Een briefje zegt: "De tijd werd niet gestopt… hij werd verkleind.</li>
        <li id="raadsel2">Wacht niet op de zon, maar volg het pad van de lantaarn buiten. Het licht valt achtereenvolgens op de plekken waar de meester zijn gereedschap liet vallen</li>
        <li id="raadsel3">De lift komt pas in beweging als het gewicht exact is.</li>
    </ol>
    <h2>Kamer 3:</h2>
    <button id="btn-raadsel3_1" onclick="toggleRiddle3(1)">Raadsel 1 Aan/Uit</button>
    <button id="btn-raadsel3_2" onclick="toggleRiddle3(2)">Raadsel 2 Aan/Uit</button>
    <button id="btn-raadsel3_3" onclick="toggleRiddle3(3)">Raadsel 3 Aan/Uit</button>
    <br><br>
    <ol>
        <li id="raadsel3_1">Een grote, vuile spiegel waar met een vetkrijtje of onzichtbare inkt op is geschreven."Alleen als je mij recht in de ogen kijkt, zie je de waarheid die achter je ligt."</li>
        <li id="raadsel3_2">Een rommelig bureau met een openstaande kalender op "Oktober". Er staan cirkels om de 3e, 10e, 17e en 24e. Op een koffiemok in de hoek staat groot het getal +2.</li>
        <li id="raadsel3_3">Een lade met gereedschap. Er liggen 3 schroevendraaiers, 5 tandwielen en 2 pincetten. Op de bodem van de lade staat gekrast: S x T + P.</li>
    </ol>

    <script>
        window.onload = function() {
            // Check state for Kamer 2 riddles
            for (let i = 1; i <= 3; i++) {
                let state = localStorage.getItem('r2_riddle' + i + '_off');
                let el = document.getElementById("raadsel" + i);
                let btn = document.getElementById("btn-raadsel" + i);
                if (state === 'true') {
                    if(el) { el.style.textDecoration = "line-through"; el.style.color = "red"; }
                    if(btn) btn.innerText = "Raadsel " + i + " is UIT (Zet Aan)";
                } else {
                    if(el) { el.style.textDecoration = "none"; el.style.color = ""; }
                    if(btn) btn.innerText = "Raadsel " + i + " is AAN (Zet Uit)";
                }
            }

            // Check state for Kamer 3 riddles
            for (let i = 1; i <= 3; i++) {
                let state = localStorage.getItem('r3_riddle' + i + '_off');
                let el = document.getElementById("raadsel3_" + i);
                let btn = document.getElementById("btn-raadsel3_" + i);
                if (state === 'true') {
                    if(el) { el.style.textDecoration = "line-through"; el.style.color = "red"; }
                    if(btn) btn.innerText = "Raadsel " + i + " is UIT (Zet Aan)";
                } else {
                    if(el) { el.style.textDecoration = "none"; el.style.color = ""; }
                    if(btn) btn.innerText = "Raadsel " + i + " is AAN (Zet Uit)";
                }
            }
        };

        function toggleRiddle(num) {
            let currentState = localStorage.getItem('r2_riddle' + num + '_off');
            let newState = (currentState === 'true') ? 'false' : 'true';
            localStorage.setItem('r2_riddle' + num + '_off', newState);

            let el = document.getElementById("raadsel" + num);
            let btn = document.getElementById("btn-raadsel" + num);
            if (newState === 'true') {
                btn.innerText = "Raadsel " + num + " is UIT (Zet Aan)";
            } else {
                btn.innerText = "Raadsel " + num + " is AAN (Zet Uit)";
            }
        }

        function toggleRiddle3(num) {
            let currentState = localStorage.getItem('r3_riddle' + num + '_off');
            let newState = (currentState === 'true') ? 'false' : 'true';
            localStorage.setItem('r3_riddle' + num + '_off', newState);

            let el = document.getElementById("raadsel3_" + num);
            let btn = document.getElementById("btn-raadsel3_" + num);
            if (newState === 'true') {
                btn.innerText = "Raadsel " + num + " is UIT (Zet Aan)";
            } else {
                btn.innerText = "Raadsel " + num + " is AAN (Zet Uit)";
            }
        }
    </script>
</body>
</html>