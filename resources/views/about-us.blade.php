@include('layouts.landing.header')
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
</div>
<script src="/js/landing_page.js"></script>
@include('layouts.landing.footer')