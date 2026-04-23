room1 = document.getElementById("room3-container1");
room2 = document.getElementById("room3-container2");
room3 = document.getElementById("room3-container3");
openRoom1();

function openRoom1() {
    if (localStorage.getItem('r3_riddle1_off') === 'true') {
        openRoom2();
        return;
    }
    room1.style.display = "block";
    room2.style.display = "none";
    room3.style.display = "none";
}

function openRoom2() {
    if (localStorage.getItem('r3_riddle2_off') === 'true') {
        openRoom3();
        return;
    }
    room1.style.display = "none";
    room2.style.display = "block";
    room3.style.display = "none";
}

function openRoom3() {
    if (localStorage.getItem('r3_riddle3_off') === 'true') {
        window.location.href = "../win-scherm.php";
        return;
    }
    room1.style.display = "none";
    room2.style.display = "none";
    room3.style.display = "block";
}

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

