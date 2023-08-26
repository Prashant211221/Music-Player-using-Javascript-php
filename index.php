<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dhun</title>

    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="icon" href="img/favicon.png" />

    <link rel="icon" type="image/png" href="images/logo.png"/>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />

    <meta property="og:title" content="Dhun - Your own Music Player" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
  </head>
  <body>
 

    <nav>
      <ul>
        <li class="brand">
          <img src="images/dhunlogo.png" alt="Dhun" />
        </li>
        <li><a href="index.php">Home</a></li>
        <li>About</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>

    <div class="container">
      <div class="songList">
        <h1>Dhun-Just Play </h1>
        <div class="songItemContainer">
          <div class="songItem">
            <img alt="1" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:32</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="2" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:32</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="3" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:24</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="4" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >04:16</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="5" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:13</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="6" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:27</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="7" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:11</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="8" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:36</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="9" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >04:44</span>
            </span>
          </div>
          <div class="songItem">
            <img alt="10" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >04:51</span>
            </span>          
          </div>
          <div class="songItem">
            <img alt="11" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >06:41
              </span>
            </span>
          </div>
        <div class="songItem">
            <img alt="12" />
            <span class="songName"></span>
            <span class="songListPlay">
              <span class="timestamp"
                >03:52
             </span>
          </span>
        </div>
     <div class="songItem">
          <img alt="13" />
          <span class="songName"></span>
          <span class="songListPlay">
              <span class="timestamp"
                 >03:51
          </span>
          </span>
     </div>
    <div class="songItem">
      <img alt="14" />
      <span class="songName"></span>
      <span class="songListPlay">
          <span class="timestamp"
             >04:57
          ></span>
        </span>
     </div>
</div>
        
  </div>
      <div class="songBanner"></div>
    </div>

    <div class="bottom">
      <div class="divslider">
        <div class="divknob"></div>
      </div>
      


      <div class="slider_container">


        <div class="current-time">00:00</div>
        <input
          type="range"
          name="range"
          id="myProgressBar"
          value="0"
          min="0"
          max="100"
        />
        
        <div class="total-duration">00:00</div>
        
      </div>
      
      <div class="icons">
        <!-- fontawesome icons -->
        <i class="fa-solid fa-2x fa-backward" id="previous"></i>
        <i class="fa-solid fa-2x fa-circle-play" id="masterPlay"></i>
        <i class="fa-solid fa-2x fa-forward" id="next"></i>
      </div>
      
      <div class="songInfo">
        <img src="GIFs/playing.gif" id="gif" alt="" width="42px" />
        <span id="masterSongName"></span>
      </div>
      
      </div>
      
    </div>

    <script
      src="https://kit.fontawesome.com/bf4140a385.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>