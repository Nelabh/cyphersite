<?php include 'header.php' ; ?>
<body class="size-1140">
  <!-- TOP NAV WITH LOGO -->
  <?php include 'menu.php' ; ?>


  <section>
   <!-- CAROUSEL --> 
   <div id="carousel" style="padding-top: 12%">
    <div id="owl-demo" class="owl-carousel owl-theme"> 
     <div class="item">
      <img src="img/innovation.jpg" alt="">
      <div class="line"> 
       <div class="text hide-s">
        <div class="line"> 
          <div class="prev-arrow hide-s hide-m">
           <i class="icon-chevron_left"></i>
         </div>
         <div class="next-arrow hide-s hide-m">
           <i class="icon-chevron_right"></i>
         </div>
       </div> 
       <h2>Say Yes to Innovation !</h2>
       <p>Experience an out of box and an innovative architecture and design.</p>
     </div>
   </div>
 </div>
 <div class="item">
  <img src="img/second.jpg" alt="">
  <div class="line">
   <div class="text hide-s"> 
    <div class="line"> 
      <div class="prev-arrow hide-s hide-m">
       <i class="icon-chevron_left"></i>
     </div>
     <div class="next-arrow hide-s hide-m">
       <i class="icon-chevron_right"></i>
     </div>
   </div> 
   <h2>We totally understand you</h2>
   <p>Developing things with the objective of "Happy Customers".</p>
 </div>
</div>
</div>
<div class="item">
  <img src="img/third.jpg" alt="">
  <div class="line">
   <div class="text hide-s">
    <div class="line"> 
      <div class="prev-arrow hide-s hide-m">
       <i class="icon-chevron_left"></i>
     </div>
     <div class="next-arrow hide-s hide-m">
       <i class="icon-chevron_right"></i>
     </div>
   </div> 
   <h2>Usability is the key!</h2>
   <p>We here totally believe in developing things which are highly usable.</p>
 </div>
</div>
</div>
</div>
</div>
<div id="first-block">
  <div class="line">
   <h1>Amazing Responsive Design</h1>
   <p>Awesome and wonderful design is what we are expert in.</p>
   <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contact Us</a></div>
 </div>
</div>

</section>
<!-- FOOTER -->
<?php include 'footer.php'; ?>
<script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
 jQuery(document).ready(function($) {
  var theme_slider = $("#owl-demo");
  $("#owl-demo").owlCarousel({
    navigation: false,
    slideSpeed: 300,
    paginationSpeed: 400,
    autoPlay: 6000,
    addClassActive: true,
             // transitionStyle: "fade",
             singleItem: true
           });
  $("#owl-demo2").owlCarousel({
    slideSpeed: 300,
    autoPlay: true,
    navigation: true,
    navigationText: ["&#xf007","&#xf006"],
    pagination: false,
    singleItem: true
  });

            // Custom Navigation Events
            $(".next-arrow").click(function() {
              theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
              theme_slider.trigger('owl.prev');
            })     
          }); 
        </script>
      </body>
      </html>