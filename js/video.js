homepage = document.getElementById("container");
video = document.getElementById("video");
video.style.display = "none";

function openVideo() {
    homepage.style.display = "none";
    document.getElementById("video").style.display = "block";
    alert("Video will start in 10 seconds");
}

