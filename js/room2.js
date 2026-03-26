room1 = document.getElementById("room2-container1");
room2 = document.getElementById("room2-container2");
room3 = document.getElementById("room2-container3");
openRoom3()

function openRoom1() {
    room1.style.display = "block";
}

function openRoom2() {
    room1.style.display = "none";
    room2.style.display = "block";
}

function openRoom3() {
    room1.style.display = "none";
    room2.style.display = "none";
    room3.style.display = "block";
}