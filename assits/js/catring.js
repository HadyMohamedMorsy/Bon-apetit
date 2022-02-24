let video = document.getElementById('video');
let autoele = document.getElementById('autoVideo');
video.addEventListener('click',function(){
    
    video.style.display = "none";
    autoele.play();

    autoele.setAttribute("controls" , "controls");
})