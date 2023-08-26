console.log("Welcome to Dhun");
let songIndex = 0;
let audioElement = new Audio("songs/1.mp3");
let masterPlay = document.getElementById("masterPlay");
let myProgressBar = document.getElementById("myProgressBar");
let gif = document.getElementById("gif");
let masterSongName = document.getElementById("masterSongName");
let songItems = Array.from(document.getElementsByClassName("songItem"));
let currTime = document.querySelector(".current-time");
let totalDuration = document.querySelector(".total-duration");

let songs = [
  {
    songName: "Faded",
    filePath: "songs/1.mp3",
    coverPath: "covers/1.jpg",
  },
  {
    songName: "Never gonna give you up",
    filePath: "songs/2.mp3",
    coverPath: "covers/2.jpg",
  },
  {
    songName: "Khali bali",
    filePath: "songs/3.mp3",
    coverPath: "covers/3.jpg",
  },
  {
    songName: "tunak tunak tu",
    filePath: "songs/4.mp3",
    coverPath: "covers/4.jpg",
  },
  {
    songName: "Count on you",
    filePath: "songs/5.mp3",
    coverPath: "covers/5.jpg",
  },
  {
    songName: "nattu nattu",
    filePath: "songs/6.mp3",
    coverPath: "covers/6.jpg",
  },
  {
    songName: "Animal",
    filePath: "songs/7.mp3",
    coverPath: "covers/7.jpg",
  },
  {
    songName: "Believer",
    filePath: "songs/8.mp3",
    coverPath: "covers/8.jpg",
  },
  {
    songName: "wavin flag",
    filePath: "songs/9.mp3",
    coverPath: "covers/9.jpg",
  },
  {
    songName: "The Search",
    filePath: "songs/10.mp3",
    coverPath: "covers/10.jpg",
  },
  {
    songName: "Nadan Parinde",
    filePath: "songs/11.mp3",
    coverPath: "covers/11.jpg",
  },
  {
    songName: "Malhari",
    filePath:"songs/12.mp3",
    coverPath:"covers/12.jpeg"
    
  },
  {
    songName: "Senorita",
    filePath: "songs/13.mp3",
    coverPath: "covers/13.jpg",
  },
  {
    songName: "Till I collapse",
    filePath: "songs/14.mp3",
    coverPath: "covers/14.jpg",
  },
];

songItems.forEach((element, i) => {
  console.log(element, i);
  element.getElementsByTagName("img")[0].src = songs[i].coverPath;
  element.getElementsByClassName("songName")[0].innerHTML = songs[i].songName;
});

function pauseall() {
  songItems.forEach((elements, i) => {
    var element1 = document.getElementById(i);
      element1.classList.remove("fa-circle-pause");
      element1.classList.add("fa-circle-play");
  });
}

function startplay() {
  newsong = document.getElementById(songIndex);
}