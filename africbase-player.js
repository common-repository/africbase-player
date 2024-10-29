var button = document.getElementById("button");
var audio = document.getElementById("africbaseaudio");

africbaseplay.addEventListener("click", function(){
  if(audio.paused){
    audio.play();
    africbaseplay.innerHTML = "Pause";
  } else {
    audio.pause();
    africbaseplay.innerHTML = "Play";
  }
});

var timer;
var percent = 0;
var africbase = document.getElementById("africbaseaudio");
africbase.addEventListener("playing", function(_event) {
  var duration = _event.target.duration;
  advance(duration, audio);
});
africbase.addEventListener("pause", function(_event) {
  clearTimeout(timer);
});
var advance = function(duration, element) {
  var progress = document.getElementById("africbase-progress");
  increment = 10/duration
  percent = Math.min(increment * element.currentTime * 10, 100);
  progress.style.width = percent+'%'
  startTimer(duration, element);
}
var startTimer = function(duration, element){ 
  if(percent < 100) {
    timer = setTimeout(function (){advance(duration, element)}, 100);
  }
  
  }
