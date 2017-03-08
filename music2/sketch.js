
var song, fft;
var sliderRate;
var sliderPan;
var sliderVol;

var volhistory = [];
var w;

var kon = "FuwaFuwaTime.mp3";
var kimi = "Sparkle.mp3";


function setup() {
  song = loadSound("Sparkle.mp3", loaded);
  console.log(width)
  createCanvas(displayWidth, displayHeight/1.5);
  colorMode(HSB);
  button = createButton("play");
  button.mousePressed(togglePlaying);
  fuwaButton = createButton("FuwaFuwaTime.mp3");
  sprkButton = createButton("Sparkle.mp3");

  //fuwaButton.mousePressed(loadSong("FuwaFuwaTime.mp3"));
  sprkButton.mousePressed(function(loadSprk){loadSong(kimi);});
  fuwaButton.mousePressed(function(loadFuwa){loadSong(kon);});

  sliderVol = createSlider(0, 100, 50);
  song.setVolume(.5);

  fft = new p5.FFT(0, 128);
  //amp.setInput(song);
  w = width / 128;
}



function togglePlaying(){
    if(!song.isPlaying()){
        song.play();
        button.html("pause");
    }else{
        song.pause();
        button.html("play")
    }
}

function loaded() {
  //song.play();
  console.log("song loaded");
}

function loadSong(name){
    song.stop();
    //songsetAttribute('src',theNewSource)
    //song = loadSong("Sparkle.mp3", loaded);
    song = loadSound(name, loaded);
}

function draw() {
  background(0);

  song.setVolume(sliderVol.value()/100);
  stroke(255);
  var spectrum = fft.analyze();
  for(var i = 0; i < spectrum.length; i++){
      var amp = spectrum[i];
      var y = map(amp, 0, 255, height, 0);
      fill(y, 255,255);
      rect(i*w*1.5, y, w*1.5, height - y);
  }
  //console.log(spectrum.length);
  stroke(255);
  noFill();

}
