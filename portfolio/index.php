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
              <img class="icon" src="wobb/img/2.jpg" alt="Browser Icon"/>
              <h1>MUSH CLOTHING</h1>
              <p>Mush Clothing is a website on magento framework (PHP) .<br/> Mush clothing is one of the UK's leading retail and online fashion boutiques. <br/>WTheyspecialise in men's and women's apparel, footwear, sunglasses, watches, <br/>handbags and  <br />accessories, featuring brands such as Stone Island, Armani Jeans, Guess, Moschino, Versace and Franklin & Marshall<a href="https://www.mushclothing.com/"></a></p>
            </div>
          </li>
          <li>
            <div class="slide" style="top-padding:12%">
              <img class="icon" src="wobb/img/1.jpg" alt="Browser Icon"/>
              <h1>NORTON BARRIE</h1>
              <p>Norton Barrie is the UK's leading menswear destination<br/> specialising in designer clothing including brands <br/>Hugo Boss, Zegna and Canali .<br/> This website is developed on magento framework of php.<br /><a href="http://www.nortonbarrie.co.uk/"></p>
            </div>
          </li>
          <li>
            <div class="slide" style="top-padding:12%">
              <img class="icon" src="wobb/img/3.jpg" alt="Browser Icon"/>
              <h1>BRANDS SCROLLER</h1>
              <p>Based on the Dribble shot Let you show awesome scroller of your brands, <br/>showing the customers brands <br/>you show in a very attractive way.<br /><a href="https://www.magentocommerce.com/magento-connect/brands-scroller.html"></a></p>
            </div>

            </li>


          <li>

            <div class="slide" style="top-padding:12%">
              <img class="icon" src="wobb/img/4.jpg" alt="Browser Icon"/>
              <h1>IMAGE SLIDER</h1>
              <p>Beautiful image slider for magento. <br/>Magento slider which is very easy to use.<br/> Special Price Offer. <br /><a href="https://www.magentocommerce.com/magento-connect/mag-image-slider.htmlhttps://dribbble.com/shots/1701001-GIF-Exercise"></a></p>
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