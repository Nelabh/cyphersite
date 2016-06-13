<!DOCTYPE html>



<?php include '../header.php' ; ?>

<body class="size-1140">
  <!-- TOP NAV WITH LOGO -->
  <?php include '../menu.php' ; ?>
<section>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">



<script src="assets/js/jquery-1.11.1.js"></script>

<script src="assets/js/table.js"></script>

<script src="assets/js/search.js"></script>

<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="assets/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="assets/css/animations.min.css" rel="stylesheet" />

         <div id="our-work">
            <div class="line" style="padding-top: 3%">
               <h2 class="section-title">Our Work</h2>
            
               <div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeIn">
        <img src="images/portfolio/11.jpg" alt="img01"/>
        <figcaption>
            <h2>HOSPITALS</h2>
            <p>State wise list of hospitals in India<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/12.png" alt="img01"/>
        <figcaption>
            <h2>TRANSPORT</h2>
            <p>State wise list of vehicles registered per year<br>
            <a href="images/portfolio/12.png" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/14.png" alt="img01"/>
        <figcaption>
            <h2>HOTELS</h2>
            <p>State wise list of hotels <br>
            <a href="images/portfolio/14.png" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/15.jpg" alt="img01"/>
        <figcaption>
            <h2>RAILWAYS</h2>
            <p>Railway Time Table<br>
            <a href="{{URL::asset('/railway')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/16.jpg" alt="img01"/>
        <figcaption>
            <h2>PINCODE </h2>
            <p>List of pincode directory with contacts <br>
            <a href={{URL::asset('/pincode')}} title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/17.jpg" alt="img01"/>
        <figcaption>
            <h2>IMPORTS</h2>
            <p>State wise list of imports in an year<br>
            <a href="{{URL::asset('/wholesale')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/18.jpg" alt="img01"/>
        <figcaption>
            <h2>HEALTH CENTRES</h2>
            <p>State wise list of Community Health Centres<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/19.png" alt="img01"/>
        <figcaption>
            <h2>BLOOD<BR>BANK</h2>
            <p>State wise list of Blood Bank Repositries<br>
            <a href="{{URL::asset('/information')}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
   
    
   </div>



            
            </div>
         </div>         
         
</section>
<?php include '../footer.php' ; ?>

     
   </body>
      </html>