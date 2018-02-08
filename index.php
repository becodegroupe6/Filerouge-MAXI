<?php
  define('View', 'View/');
  define('Controller', 'Controller/');
  define('Model', 'Model/');
  echo('eh yo!');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/grid.css">
  <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
  <title>Maxi</title>
</head>
<body>
       <header>
          <nav>
              <div class="row">
                   <img src="img/maxi.png" alt="maxi logo" class="logo-black">
                   <ul class="main-nav js--main-nav">
                     <li><a href="#features">Donate</a></li>
                     <li><a href="#works">How it works</a></li>
                     <li><a href="#cities">Why host </a></li>
                     <li><a href="#plans">FAQ</a></li>
                     <li><a href="#">Sign in</a></li>
                 </ul>
                 <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
             </div>
         </nav>
         <div class="hero-text-box">
                    <h1>Maxi <br>Connecting host communities to refugees</h1>
             <a class="btn btn-full js--scroll-to-plans" href="#"> Maxi-host</a>
             <a class="btn btn-ghost js--scroll-to-start" href="#">Maxi-refugee</a>
         </div>
       </header>


       <section class="section-features js--section-features" id="features">
           <div class="row">
               <h2>Everyone deserves a roof</h2>
               <p class="long-copy">
                   Bonjour! We are Maxi, a non-profit organisation based in Belgium that connects locals and refugees.
                   Every day people arrive in Belgium. In many cases, they do not have a place to sleep.
                   Our platform connects new arrivals to locals, who have an extra bed and would like to welcome them in their home for a night.
                   Find out how it works on this website. If you have any questions, we would be happy to hear from you!
               </p>
           </div>

           <div class="row js--wp-1">
               <div class="col span-1-of-4 box">
                   <i class="ion-ios-location-outline icon-big"></i>
                   <h3>find a host</h3>
               </div>
               <div class="col span-1-of-4 box">
                   <i class="ion-social-euro-outline icon-big"></i>
                   <h3>donate</h3>
               </div>
               <div class="col span-1-of-4 box">
                   <i class="ion-ios-people icon-big"></i>
                   <h3>meet-up volunteer</h>
               </div>
               <div class="col span-1-of-4 box">
                   <i class="ion-ios-telephone-outline icon-big"></i>
                   <h3>emergency</h3>
               </div>
           </div>
       </section>


       <section class="section-house">
           <ul class="house-showcase clearfix">
               <li>
                   <figure class="house-photo">
                       <img src="img/1.jpeg" alt="">
                   </figure>
               </li>
               <li>
                   <figure class="house-photo">
                       <img src="img/2.jpeg" alt="">
                   </figure>
               </li>
               <li>
                   <figure class="house-photo">
                       <img src="img/3.jpeg" alt="">
                   </figure>
               </li>
               <li>
                   <figure class="house-photo">
                       <img src="img/4.jpeg" alt="">
                   </figure>
               </li>
           </ul>

       </section>

       <section class="section-steps" id="works">
           <div class="row">
               <h2>How it works &mdash; Simple as 1, 2, 3</h2>
           </div>
           <div class="row">
               <div class="col span-1-of-2 steps-box">
                   <div class="works-step clearfix">
                       <div>1</div>
                       <p> sign up today</p>
                   </div>
                   <div class="works-step clearfix">
                       <div>2</div>
                       <p>select to be a guest or host</p>
                   </div>
                   <div class="works-step clearfix">
                       <div>3</div>
                       <p>Enjoy maxi company</p>
                   </div>

                   <a href="#" class="btn-app"><img src="img/download-app.svg" alt="App Store Button"></a>
                   <a href="#" class="btn-app"><img src="img/download-app-android.png" alt="Play Store Button"></a>
               </div>
           </div>
       </section>

       <section class="section-form">
          <div class="row">
              <h2>We're happy to hear your story</h2>
          </div>
          <div class="row">
              <form method="post" action="#" class="contact-form">
                  <div class="row">
                      <div class="col span-1-of-3">
                          <label for="name">Name</label>
                      </div>
                      <div class="col span-2-of-3">
                          <input type="text" name="name" id="name" placeholder="Your name" required>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col span-1-of-3">
                          <label for="email">Email</label>
                      </div>
                      <div class="col span-2-of-3">
                          <input type="email" name="email" id="email" placeholder="Your email" required>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col span-1-of-3">
                          <label for="find-us">How did you find us?</label>
                      </div>
                      <div class="col span-2-of-3">
                          <select name="find-us" id="find-us">
                              <option value="friends" selected>Friends</option>
                              <option value="search">Search engine</option>
                              <option value="ad">Becode</option>
                              <option value="other">Other</option>
                          </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col span-1-of-3">
                          <label>Newsletter?</label>
                      </div>
                      <div class="col span-2-of-3">
                          <input type="checkbox" name="news" id="news" checked> Yes, please
                      </div>
                  </div>
                  <div class="row">
                      <div class="col span-1-of-3">
                          <label>Drop us a line</label>
                      </div>
                      <div class="col span-2-of-3">
                          <textarea name="message" placeholder="Your message"></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col span-1-of-3">
                          <label>&nbsp;</label>
                      </div>
                      <div class="col span-2-of-3">
                          <input type="submit" value="maxi it!">
                      </div>
                  </div>

              </form>

          </div>
      </section>



               <footer>
                   <div class="row">
                       <div class="col span-1-of-2">
                           <ul class="footer-nav">
                               <li><a href="#">About us</a></li>
                               <li><a href="#">Blog</a></li>
                               <li><a href="#">Press</a></li>
                               <li><a href="#">iOS App</a></li>
                               <li><a href="#">Android App</a></li>
                           </ul>
                       </div>
                       <div class="col span-1-of-2">
                           <ul class="social-links">
                           <ul class="social-links">
                               <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                               <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                               <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                               <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </footer>


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
       <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
       <script src="vendors/js/jquery.waypoints.min.js"></script>
       <script src="resources/js/script.js"></script>

