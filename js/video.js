homepage = document.getElementById("container");
videoContainer = document.getElementById("video-container");
video = document.getElementById("video");
videoContainer.style.display = "none";
start = document.getElementById("start-button");

start.addEventListener("click", openVideo);

function openVideo() {
    homepage.style.display = "none";
    videoContainer.style.display = "block";
    video.play();
}

