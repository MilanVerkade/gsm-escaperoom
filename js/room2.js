const kamers = [
    document.getElementById("room2-container1"),
    document.getElementById("room2-container2"),
    document.getElementById("room2-container3")
];

function toonKamer(index) {
    kamers[0].style.display = "none";
    kamers[1].style.display = "none";
    kamers[2].style.display = "none";

    if (kamers[index]) {
        kamers[index].style.display = "block";
    }
}

if (localStorage.getItem('r2_riddle1_off') === 'true') {
    toonKamer(1); 
} else {
    toonKamer(0); 
}

const submit1 = document.getElementById('r2-submit-1');
const input1 = document.getElementById('r2-answer-1');

if (submit1) {
    submit1.onclick = function() {
        if (input1.value.trim() === '5') {
            toonKamer(1);
        } else {
            document.getElementById("r2-feedback-1").innerHTML = "Fout, probeer opnieuw!"
        }
    };
}

const lockInputs = [
    document.getElementById('lock-digit-1'),
    document.getElementById('lock-digit-2'),
    document.getElementById('lock-digit-3')
];

function checkSlot() {
    let code = lockInputs[0].value + lockInputs[1].value + lockInputs[2].value;
    if (code === '173') {
        document.getElementById('overlay5').style.display = 'none';
        toonKamer(2); 
    }
}

lockInputs.forEach(input => {
    input.oninput = checkSlot;
});

function toggleOverlay(id, status) {
    document.getElementById(id).style.display = status;
}

document.querySelector('.klik-div2-1').onclick = () => toggleOverlay('overlay5', 'flex');
document.querySelector('.klik-div3-1').onclick = () => toggleOverlay('overlay', 'flex');
document.querySelector('.klik-div3-2').onclick = () => toggleOverlay('overlay2', 'flex');
document.querySelector('.klik-div3-3').onclick = () => window.location.href = "room_3.php";

window.onclick = function(event) {
    if (event.target.className === 'overlay') { 
        event.target.style.display = "none";
    }
};

function toonHint(hintId) {
    const hint = document.getElementById(hintId);
    hint.style.display = (hint.style.display === 'block') ? 'none' : 'block';
}

if(document.getElementById('r2-hint-1')) {
    document.getElementById('r2-hint-1').onclick = () => toonHint('r2-hint-text-1');
}