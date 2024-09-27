//Podcast codes

// cods fot btn animatios

// imports the Lottie library via Skypack
import lottieWeb from 'https://cdn.skypack.dev/lottie-web';

// variable for the button that will contain both icons
let playIconContainer = document.getElementById('pp-btn');
let muteIconContainer = document.getElementById('mute-icon');
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

animation.setSpeed(3);
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
animation.setSpeed(4);
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
let audio = document.querySelector('.podcastAudio');
let durationContainer = document.getElementById('Duration');
let seekSlider = document.getElementById('seek-slider');

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

// audio.addEventListener('loadedmetadata', () => {
//         displayDuration();
//         setSliderMax();
// })

if (audio.readyState > 0) {
    displayDuration();
    setSliderMax();

} else {
    audio.addEventListener('loadedmetadata', () => {
        displayDuration();
        setSliderMax();

    });
}


// set the curren time of podcast
const currentTimeContainer = document.getElementById('current-time');

// to show the progress bar change by audio progress
seekSlider.addEventListener('input', () => {

    if(!audio.paused) {
        cancelAnimationFrame(rAF);
        currentTimeContainer.textContent = calculateTime(seekSlider.value);
        audio.currentTime = seekSlider.value;
    }
});

// seekSlider.addEventListener('canplaythrough', () => {


//     if(!audio.paused) {
//         requestAnimationFrame(whilePlaying);

//         console.log(audio.currentTime);
//     }

// });

// control the volume of the podcast
let volumeSlider = document.getElementById('volume-control');
let outputContainer = document.getElementById('volume-output');

volumeSlider.addEventListener('input', (e) => {
  let value = e.target.value;
  outputContainer.textContent = value;
  audio.volume = value / 100;
});




