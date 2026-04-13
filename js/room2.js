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

