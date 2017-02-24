
var song, fft;
var sliderRate;
var sliderPan;
var sliderVol;

var volhistory = [];
var w;

function setup() {
  console.log(width)
  createCanvas(displayWidth, displayHeight/1.5);
  colorMode(HSB);
  song = loadSound("FuwaFuwaTime.mp3", loaded);
  button = createButton("play");
  button.mousePressed(togglePlaying)
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
