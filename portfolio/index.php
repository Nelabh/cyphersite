<!DOCTYPE html>
<?php include '../header.php' ; ?>
 <body class="size-1140">
 <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="wobb/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="wobb/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="wobb/css/slideshow.css" />
    <script src="wobb/js/snap.svg-min.js"></script>
    <script src="wobb/js/modernizr.custom.js"></script>
    
  <!-- TOP NAV WITH LOGO -->
  <?php include '../menu.php' ; ?>
<div id="slideshow" class="slideshow">
        <ul>
          <li>
            <div class="slide" style="top-padding:12%">
              <img class="icon" src="wobb/img/icons/browser.svg" alt="Browser Icon"/>
              <h1>Wobbly Slideshow Effect</h1>
              <p>Based on the Dribble shot <br /><a href="https://dribbble.com/shots/1701001-GIF-Exercise">GIF Exercise</a> by <a href="https://dribbble.com/SergeyValiukh">Sergey Valiukh</a></p>
            </div>
          </li>
          <li>
            <div class="slide">
              <img class="icon" src="wobb/img/icons/heart.svg" alt="Heart Icon"/>
              <blockquote>
                <p>Never fear quarrels, but seek hazardous adventures.</p>
              </blockquote>
              <p>Alexandre Dumas</p>
            </div>
          </li>
          <li>
            <div class="slide">
              <img class="icon" src="wobb/img/icons/letter.svg" alt="Letter Icon"/>
              <blockquote>
                <p>If you don't know where you are going, any road will get you there.</p>
              </blockquote>
              <p>Lewis Carroll</p>
            </div>
          </li>
          <li>
            <div class="slide">
              <img class="icon" src="wobb/img/icons/football.svg" alt="Football Icon"/>
              <blockquote>
                <p>Procrastination is the art of keeping up with yesterday.</p>
              </blockquote>
              <p>Don Marquis</p>
            </div>
          </li>
          <li>
            <div class="slide">
              <img class="icon" src="wobb/img/icons/match.svg" alt="Match Icon"/>
              <blockquote>
                <p>I'm an idealist. I don't know where I'm going, but I'm on my way.</blockquote>
              <p>Carl Sandburg</p>
            </div>
          </li>
          <li>
            <div class="slide">
              <img class="icon" src="wobb/img/icons/watch.svg" alt="Watch Icon"/>
              <blockquote>
                <p>I refuse to join any club that would have me as a member.</blockquote>
              <p>Groucho Marx</p>
            </div>
          </li>
          <li>
            <div class="slide">
             
              <div class="related">
                <p>If you enjoyed this demo you might also like:</p>
                <a href="http://tympanus.net/Tutorials/PagePreloadingEffect/">
                  <img src="wobb/img/related/PagePreloadingEffect.png" />
                  <h3>Page Preloading Effect</h3>
                </a>
                <a href="http://tympanus.net/Development/ButtonComponentMorph/">
                  <img src="wobb/img/related/MorphingButtons.png" />
                  <h3>Morphing Buttons</h3>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
<?php include '../footer.php' ; ?>     
        <script src="wobb/js/classie.js"></script>
    <script src="wobb/js/sliderFx.js"></script>
    <script>
      (function() {
        new SliderFx( document.getElementById('slideshow'), {
          easing : 'cubic-bezier(.8,0,.2,1)'
        } );
      })();
    </script>
  
   </body>
      </html>