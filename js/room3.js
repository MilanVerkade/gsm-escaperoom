room1 = document.getElementById("room3-container1");
room2 = document.getElementById("room3-container2");
room3 = document.getElementById("room3-container3");
openRoom3();

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
const klikDiv2 = document.querySelector('.klik-div3-2');
const klikDiv3 = document.querySelector('.klik-div3-3');
const overlay = document.getElementById('overlay');
const overlay2 = document.getElementById('overlay2');
const popup = document.querySelector('.popup');
const popup2 = document.querySelector('.popup2');
overlay.style.display = 'none'; // Verberg de overlay
overlay2.style.display = 'none'; // Verberg de overlay

// Wanneer je op de klikDiv klikt, toon de overlay
klikDiv.addEventListener('click', () => {
    overlay.style.display = 'flex'; // Toon de overlay
});

// Wanneer je op de klikDiv klikt, toon de overlay
klikDiv2.addEventListener('click', () => {
    overlay2.style.display = 'flex'; // Toon de overlay
});

// Wanneer je op de overlay zelf (buiten de foto) klikt, sluit de overlay
overlay.addEventListener('click', (event) => {
    // Als het doel van de klik buiten de foto ligt (en niet op de popup), sluit de overlay
    if (event.target === overlay) {
        overlay.style.display = 'none'; // Verberg de overlay
        event.stopPropagation();
    }
});

// Wanneer je op de overlay2 zelf (buiten de foto) klikt, sluit de overlay
overlay2.addEventListener('click', (event) => {
    // Als het doel van de klik buiten de foto ligt (en niet op de popup), sluit de overlay
    if (event.target === overlay2) {
        overlay2.style.display = 'none'; // Verberg de overlay
        event.stopPropagation();
    }
});

// Zorg ervoor dat klikken op de popup zelf het sluiten niet voorkomt
popup2.addEventListener('click', (event) => {
    event.stopPropagation(); // Voorkom dat de klik op de popup de overlay sluit
});

// Zorg ervoor dat klikken op de popup zelf het sluiten niet voorkomt
popup.addEventListener('click', (event) => {
    event.stopPropagation(); // Voorkom dat de klik op de popup de overlay sluit
});

klikDiv3.addEventListener('click', () => {
    window.location.href = "room_3.php";
});

