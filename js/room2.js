room1 = document.getElementById("room2-container1");
room2 = document.getElementById("room2-container2");
room3 = document.getElementById("room2-container3");
openRoom3()

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

// Haal de elementen op
const klikDiv = document.querySelector('.klik-div3-1');
const overlay = document.getElementById('overlay');
const popup = document.querySelector('.popup');

// Wanneer je op de klikDiv klikt, toon de overlay
klikDiv.addEventListener('click', () => {
    overlay.style.display = 'flex'; // Toon de overlay
});

// Wanneer je op de overlay zelf (buiten de foto) klikt, sluit de overlay
overlay.addEventListener('click', (event) => {
    // Als het doel van de klik buiten de foto ligt, sluit de overlay
    if (event.target === overlay) {
        overlay.style.display = 'none'; // Verberg de overlay
    }
});