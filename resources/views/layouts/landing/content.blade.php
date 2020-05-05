@include('layouts.landing.header')
{{-- carousel --}}
<div id="landingPageCarousel" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100 carousel-img" src="/img/landing_page_carousel_1.jpg" alt="First slide">
         <div class="carousel-caption d-none d-md-block">
            <h5>My Caption Title (1st Image)</h5>
            <p>The whole caption will only show up if the screen is at least medium size.</p>
         </div>
      </div>
      <div class="carousel-item">
         <img class="d-block w-100 carousel-img" src="/img/landing_page_carousel_2.jpg" alt="Second slide">
         <div class="carousel-caption d-none d-md-block">
            <h5>My Caption Title (1st Image)</h5>
            <p>The whole caption will only show up if the screen is at least medium size.</p>
         </div>
      </div>
      <div class="carousel-item">
         <img class="d-block w-100 carousel-img" src="/img/landing_page_carousel_3.jpg" alt="Third slide">
         <div class="carousel-caption d-none d-md-block">
            <h5>My Caption Title (1st Image)</h5>
            <p>The whole caption will only show up if the screen is at least medium size.</p>
         </div>
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>
<div class="container">
   {{-- about us --}}
   <section id="about-us" class="landing-page-section">
      <div class="row">
         {{-- 
         <div class="col-6 col-sm-6" style="background-image: url('img/landing_page_about_us.jpg');">
            <h3>asdfads</h3>
         </div>
         --}}
         <div class="col-6 col-sm-6">
            <img src='img/landing_page_about_us.jpg' alt="" class="img-fluid"/>
         </div>
         <div class="col-6 col-sm-6">
            <div class="section-title">
               <h2>About Us</h2>
            </div>
            <div>
               Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </div>
         </div>
      </div>
   </section>
   {{-- book table --}}
   <section id="book-table" class="landing-page-section">
      <div class="section-title">
         <h2>Book a <span>Table</span></h2>
         <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>
      <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
         <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
               <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
               <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
               <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
               <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
               <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
               <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
               <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
               <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
               <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
               <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
               <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
               <div class="validate"></div>
            </div>
         </div>
         <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
         </div>
         <div class="row">
            <div class="col-sm">
               <button type="button" class="btn btn-outline-primary">Book</button>
            </div>
         </div>
      </form>
   </section>
   {{-- special menau --}}
   <section id="special-menu" class="landing-page-section">
      <div class="section-title">
         <h2>Check our tasty Menu</h2>
      </div>
      <div class="row">
         <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
               <li data-filter="*" class="active btn btn-outline-primary">Show All</li>
               <li data-filter=".filter-starters" class=" btn btn-outline-primary">Starters</li>
               <li data-filter=".filter-salads" class=" btn btn-outline-primary">Salads</li>
               <li data-filter=".filter-specialty" class=" btn btn-outline-primary">Specialty</li>
            </ul>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
               <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
               Lorem, deren, trataro, filede, nerada
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
               <a href="#">Bread barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
               Lorem, deren, trataro, filede, nerada
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
               <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
               A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
               <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
               Lorem, deren, trataro, filede, nerada
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
               <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
               Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
               <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
               Lorem, deren, trataro, filede, nerada
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
               <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
               Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
               <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
               Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
         </div>
         <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
               <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
               Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
         </div>
      </div>
      {{-- end of menu-container --}}
   </section>
   {{-- contact us --}}
   <section id="contact-us" class="landing-page-section">
      <div class="section-title">
         <h2><span>Contact</span> Us</h2>
         <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>
      <div class="map">
         <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-6 info">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h4 style="display: inline">Location:</h4>
            <p>157 William St<br>New York, NY 10038,</p>
         </div>
         <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <h4 style="display: inline">Open Hours:</h4>
            <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
         </div>
         <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <h4 style="display: inline">Email:</h4>
            <p>info@example.com<br>contact@example.com</p>
         </div>
         <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h4 style="display: inline">Call:</h4>
            <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
         </div>
      </div>
      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
         <div class="form-row">
            <div class="col-md-6 form-group">
               <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
               <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
               <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
               <div class="validate"></div>
            </div>
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
            <div class="validate"></div>
         </div>
         <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
         </div>
         <div class="row">
            <div class="col-sm">
               <button type="button" class="btn btn-outline-primary">Send Message</button>
            </div>
         </div>
      </form>
   </section>
</div>
<script src="/js/landing_page.js"></script>
@include('layouts.landing.footer')