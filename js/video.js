homepage = document.getElementById("container");
nav = document.getElementById("nav");
videoContainer = document.getElementById("video-container");
video = document.getElementById("video");
videoContainer.style.display = "none";
start = document.getElementById("start-button");
start.addEventListener("click", openVideo);
    if (video.requestFullscreen) {  
        video.requestFullscreen();
    } else if (video.webkitRequestFullscreen) { /* Safari */
        video.webkitRequestFullscreen();
    }

function openVideo() {
    homepage.style.display = "none";
    nav.style.display = "none";
    videoContainer.style.display = "block";
    document.body.classList.add("video-playing");
    video.play();
    

}


