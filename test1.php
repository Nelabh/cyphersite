<?php
	include('header.php');
	include('menu.php');
?>
<script type="text/javascript" src="http://localhost/cyphersite/owl-carousel/owl.carousel.js"></script>
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
<body class="size-1140">


<!-- Static Content -->
<div id="first-block">
  <div class="line">
   <h1>Amazing Responsive Design</h1>
   <p>Awesome and wonderful design is what we are expert in.</p>
   <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contact Us</a></div>
 </div>
</div>

<?php include('footer.php'); ?>

</body>
