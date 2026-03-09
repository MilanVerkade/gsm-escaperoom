homepage = document.getElementById("container");
videoContainer = document.getElementById("video-container");
video = document.getElementById("video");
videoContainer.style.display = "none";

function openVideo() {
    homepage.style.display = "none";
    videoContainer.style.display = "block";
    alert("Video will start in 10 seconds");
}

