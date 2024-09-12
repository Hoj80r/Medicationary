// ask page codes

const askEmail = document.getElementById('askEmailInput');
const askPhone = document.getElementById('askPhoneInput');
const askSubBtn = document.getElementById('askSubBtn')

askSubBtn.addEventListener('click',function () {

    if (askEmail.value != ''){
        askPhone.removeAttribute('required');
    }else{
        askPhone.setAttribute('required','');
    };
});






//Podcast codes

// cods fot btn animatios

// imports the Lottie library via Skypack
import lottieWeb from 'https://cdn.skypack.dev/lottie-web';

// variable for the button that will contain both icons
const playIconContainer = document.getElementById('pp-btn');
const muteIconContainer = document.getElementById('mute-icon');
let playState = 'play';
let muteState = 'unmute';
let rAF = null;

const whilePlaying = () => {
  seekSlider.value = Math.floor(audio.currentTime);
  currentTimeContainer.textContent = calculateTime(seekSlider.value);
  rAF = requestAnimationFrame(whilePlaying);
}

// loads the animation that transitions the play icon into the pause icon into the referenced button, using Lottie’s loadAnimation() method
const animation = lottieWeb.loadAnimation({
  container: playIconContainer,
  path: '../animations/play.json',
  renderer: 'svg',
  loop: false,
  autoplay: false,
  name: "Demo Animation",
});

animation.setSpeed(2);
animation.goToAndStop(70 , false);


// adds an event listener to the button so that when it is clicked, the the player toggles between play and pause
playIconContainer.addEventListener('click', () => {
  if(playState === 'play') {
    audio.play();
    animation.playSegments([1, 72], true);
    requestAnimationFrame(whilePlaying);
    playState = 'pause';
  } else {
    audio.pause();
    animation.playSegments([72, 1], true);
    cancelAnimationFrame(rAF);
    playState = 'play';
  }
});

// the animation of mute btn
const muteAnimation = lottieWeb.loadAnimation({
    container: muteIconContainer,
    path: '../animations/mute.json',
    renderer: 'svg',
    loop: false,
    autoplay: false,
    name: "Mute Animation",
});

muteAnimation.goToAndStop(24, true);

muteIconContainer.addEventListener('click', () => {
    if(muteState === 'unmute') {
        muteAnimation.playSegments([25,1], true);
        audio.muted = true ;
        muteState = 'mute';
    } else {
        muteAnimation.playSegments([1, 25], true);
        muteState = 'unmute';
        audio.muted = false ;
    }
});

// the player codes
const audio = document.querySelector('.podcastAudio');
const durationContainer = document.getElementById('Duration');
const seekSlider = document.getElementById('seek-slider');



// Transfer sec into min + sec
const calculateTime = (secs) => {
    const minutes = Math.floor(secs / 60);
    const seconds = Math.floor(secs % 60);
    const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
    return `${minutes}:${returnedSeconds}`;
}

// set the duration time
const displayDuration = () => {
    durationContainer.textContent = calculateTime(audio.duration);
}

// change the max value of range inpute to become the same with audio duration
const setSliderMax = () => {
    seekSlider.max = Math.floor(audio.duration);
}

// to shoe how much of the audio has been loaded
const displayBufferedAmount = () => {
    const bufferedAmount = Math.floor(audio.buffered.end(audio.buffered.length - 1));
}

if (audio.readyState > 0) {
    displayDuration();
    setSliderMax();
    displayBufferedAmount();
} else {
    audio.addEventListener('loadedmetadata', () => {
        displayDuration();
        setSliderMax();
        displayBufferedAmount();
    });
}

audio.addEventListener('progress', displayBufferedAmount);

// set the curren time of podcast
const currentTimeContainer = document.getElementById('current-time');

seekSlider.addEventListener('input', () => {
  currentTimeContainer.textContent = calculateTime(seekSlider.value);
  if(!audio.paused) {
    cancelAnimationFrame(rAF);
  }
});

// to show the progress bar change by audio progress
seekSlider.addEventListener('change', () => {
    audio.currentTime = seekSlider.value;
    if(!audio.paused) {
        cancelAnimationFrame(rAF);
      }
  });

  audio.addEventListener('timeupdate', () => {
    seekSlider.value = Math.floor(audio.currentTime);
  });

// control the volume of the podcast
const volumeSlider = document.getElementById('volume-control');
const outputContainer = document.getElementById('volume-output');

volumeSlider.addEventListener('input', (e) => {
  const value = e.target.value;

  outputContainer.textContent = value;
  audio.volume = value / 100;
});




