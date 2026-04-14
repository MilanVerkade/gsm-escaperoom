room1 = document.getElementById("room2-container1");
room2 = document.getElementById("room2-container2");
room3 = document.getElementById("room2-container3");
openRoom1()

function openRoom1() {
    room1.style.display = "block";
    room2.style.display = "none";
    room3.style.display = "none";
}

function openRoom2() {
    room1.style.display = "none";
    room2.style.display = "block";
    room3.style.display = "none";
}

function openRoom3() {
    room1.style.display = "none";
    room2.style.display = "none";
    room3.style.display = "block";
}

// Container 1 setup
const answerInput1 = document.getElementById('r2-answer-1');
const submitBtn1 = document.getElementById('r2-submit-1');
const feedback1 = document.getElementById('r2-feedback-1');
const hintBtn1 = document.getElementById('r2-hint-1');
const hintText1 = document.getElementById('r2-hint-text-1');
const juisteCode1 = '5';

if (submitBtn1 && answerInput1 && feedback1) {
    submitBtn1.addEventListener('click', function () {
        if (answerInput1.value.trim() === juisteCode1) {
            openRoom2();
        } else {
            feedback1.style.color = 'red';
            feedback1.textContent = 'Fout, probeer opnieuw!';
        }
    });

    answerInput1.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') submitBtn1.click();
    });
}

if (hintBtn1 && hintText1) {
    hintBtn1.addEventListener('click', function () {
        hintText1.textContent = 'Combineer wat je op de muur ziet met het getal dat je ergens anders in de kamer vindt';
        hintText1.style.display = 'block';
    });
}

// r2
const klikDiv5 = document.querySelector('.klik-div2-1');
const overlay5 = document.getElementById('overlay5');
const popup5 = document.querySelector('.popup5');
overlay5.style.display = 'none'; // Verberg de overlay

// Wanneer je op de klikDiv klikt, toon de overlay
klikDiv5.addEventListener('click', () => {
    overlay5.style.display = 'flex'; // Toon de overlay
});

// Wanneer je op de overlay zelf (buiten de foto) klikt, sluit de overlay
overlay5.addEventListener('click', (event) => {
    // Als het doel van de klik buiten de foto ligt (en niet op de popup), sluit de overlay
    if (event.target === overlay5) {
        overlay5.style.display = 'none'; // Verberg de overlay
        event.stopPropagation();
    }
});

// Zorg ervoor dat klikken op de popup zelf het sluiten niet voorkomt
popup5.addEventListener('click', (event) => {
    event.stopPropagation(); // Voorkom dat de klik op de popup de overlay sluit
});

// Controleer de cijferslot code
const lockInputs = [
    document.getElementById('lock-digit-1'),
    document.getElementById('lock-digit-2'),
    document.getElementById('lock-digit-3')
];

function checkLock() {
    const code = lockInputs.map(input => input.value).join('');
    if (code === '173') {
        overlay5.style.display = 'none';
        openRoom3();
    }
}

lockInputs.forEach((input, index) => {
    input.addEventListener('input', (e) => {
        // Zorg dat we max 1 teken hebben per veld
        if (e.target.value.length > 1) {
            e.target.value = e.target.value.slice(-1);
        }
        
        // Auto-focus naar het volgende veld
        if (e.target.value.length === 1 && index < lockInputs.length - 1) {
            lockInputs[index + 1].focus();
        }
        
        checkLock();
    });
});

// r3
const klikDiv = document.querySelector('.klik-div3-1');
const klikDiv2 = document.querySelector('.klik-div3-2');
const klikDiv3 = document.querySelector('.klik-div3-3');
const overlay = document.getElementById('overlay');
const overlay2 = document.getElementById('overlay2');
const popup = document.querySelector('.popup');
const popup2 = document.querySelector('.popup2');
overlay.style.display = 'none'; 
overlay2.style.display = 'none'; 

klikDiv.addEventListener('click', () => {
    overlay.style.display = 'flex'; 
});

klikDiv2.addEventListener('click', () => {
    overlay2.style.display = 'flex'; 
});

overlay.addEventListener('click', (event) => {
    if (event.target === overlay) {
        overlay.style.display = 'none'; 
        event.stopPropagation();
    }
});

overlay2.addEventListener('click', (event) => {
    if (event.target === overlay2) {
        overlay2.style.display = 'none'; 
        event.stopPropagation();
    }
});

popup2.addEventListener('click', (event) => {
    event.stopPropagation(); 
});

popup.addEventListener('click', (event) => {
    event.stopPropagation(); 
});

klikDiv3.addEventListener('click', () => {
    window.location.href = "room_3.php";
});

// Hint knoppen logica
const hintBtnC2 = document.getElementById('hint-btn-c2');
const hintTextC2 = document.getElementById('hint-text-c2');
if(hintBtnC2 && hintTextC2) {
    hintBtnC2.addEventListener('click', () => {
        hintTextC2.style.display = (hintTextC2.style.display === 'none' || hintTextC2.style.display === '') ? 'block' : 'none';
    });
}

const hintBtnC3 = document.getElementById('hint-btn-c3');
const hintTextC3 = document.getElementById('hint-text-c3');
if(hintBtnC3 && hintTextC3) {
    hintBtnC3.addEventListener('click', () => {
        hintTextC3.style.display = (hintTextC3.style.display === 'none' || hintTextC3.style.display === '') ? 'block' : 'none';
    });
}

