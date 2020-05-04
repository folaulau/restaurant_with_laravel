$(document).ready(function() {
    console.log("landing page js is ready");
    $('#landingPageCarousel').carousel({
        interval: 2000
    });
  
    // menu filters
    $('#menu-flters li').on('click', function() {
        var value = $(this).attr('data-filter');
        $("#menu-flters li").removeClass('active');
        $(this).addClass('active');

        if(value=="*"){
            console.log("show all");
            $('.menu-item').show('1000');
        }else{
            console.log("show "+value);
            $(".menu-item").not(value).hide('3000');
            $('.menu-item').filter(value).show('3000');
        }
    });
});