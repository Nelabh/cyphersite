   <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>CONTACT US: <strong>+918826789578</strong> | <strong>cyphersolz@gmail.com</strong></p>
                  <p style="color: #fff;font-size: 0.75em;opacity: 0.5;position: relative;top: 2px;float:right;"><a style = "color:#fff;" href="http://cyphertextsolutions.com/marketplace" target="_blank">MarketPlace</a></p>
               </div>
               <div class="s-12 m-6 l-6">
                  <!--div class="social right">
                     <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>
                  </div-->
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>Cyphertext</strong>Solution</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Menu</p>
                  <ul class="right">
                  <?php if($_SERVER['REQUEST_URI'] == '/cyphersite/'){ ?>
                     <li class="active-item"><a href="http://localhost/cyphersite/">Home</a></li>
                  <?php }
                  else
                     {  ?>
                     <li><a href="http://localhost/cyphersite/">Home</a></li>
                     <?php } ?>

                  <?php if($_SERVER['REQUEST_URI'] == '/cyphersite/features/'){ ?>
                     <li class="active-item"><a href="http://localhost/cyphersite/features">Features</a></li>
                  <?php }
                  else
                     {  ?>
                     <li><a href="http://localhost/cyphersite/features">Features</a></li>
                     <?php } ?>
                  <?php if($_SERVER['REQUEST_URI'] == '/cyphersite/about-us/'){ ?>
<li class="active-item"><a href="http://localhost/cyphersite/about-us">About Us</a></li>
                  <?php }
                  else
                     {  ?>
                     <li><a href="http://localhost/cyphersite/about-us">About Us</a></li>
                     <?php } ?>
                  <?php if($_SERVER['REQUEST_URI'] == '/cyphersite/our-work/'){ ?>
<li class="active-item"><a href="http://localhost/cyphersite/our-work">Our Work</a></li>
                  <?php }
                  else
                     {  ?>
                     <li><a href="http://localhost/cyphersite/our-work">Our Work</a></li>
                     <?php } ?>

                  <?php if($_SERVER['REQUEST_URI'] == '/cyphersite/services/'){ ?>

<li class="active-item"><a href="http://localhost/cyphersite/services">Services</a></li>
                  <?php }
                  else
                     {  ?>
                     <li><a href="http://localhost/cyphersite/services">Services</a></li>
                     <?php } ?>                    
                  <?php if($_SERVER['REQUEST_URI'] == '/cyphersite/contact/'){ ?>

<li class="active-item"><a href="http://localhost/cyphersite/contact">Contact</a></li>
                  <?php }
                  else
                     {  ?>
                     <li><a href="http://localhost/cyphersite/contact">Contact</a></li>
                     <?php } ?>

                  </ul>
               </div>
            </div>
         </nav>
      </header>