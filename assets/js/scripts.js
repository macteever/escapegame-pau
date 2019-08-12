(function ($, root, undefined) {

	$(document).ready(function(){


   // RESIZE HEADER SCROLLTOP

	 $(window).on( "scroll", function() {
		 if ( $(window).scrollTop() > 80) {
			 $('body').addClass("fixed");
			 $('.site-branding').addClass('opacity0');
		 }else{
			 $('body').removeClass("fixed");
			 $('.site-branding').removeClass('opacity0');
		 }
	 });
	 $(window).on( "scroll", function() {
		 if ( $(window).scrollTop() > 200) {
			 $('.site-branding').addClass('d-none');
		 }else{
			 $('.site-branding').removeClass('d-none');
		 }
	 });

 		// APPARITION
			 var delay = 0;
			 $('.apparition-2').each(function () {
					 var $li = $(this);
					 setTimeout(function () {
							 $li.addClass('animation-fade-in');
					 }, delay += 150);
			 });

			 var delay1 = 0;
			 $('.apparition-3').each(function () {
					 var $li = $(this);
					 setTimeout(function () {
							 $li.addClass('animation-fade-up');
					 }, delay += 150);
			 });


    // MENU BURGER
      // Object variables for event handlers
      var triggers = ({
          menuBtn : $('#menu-btn')
      });

      triggers.menuBtn.click(function() {
        $("body").toggleClass("responsive");
        $(".nav-mobile").slideToggle("slow");
        $("#header-sticky").css('background-color','transparent');
        $(this).toggleClass('open');
        $(this).find("button").toggleClass('menu-open');

        });

      // ADD class anim with Delay
        $('#menu-btn').click(function() {
            if ( $('body').hasClass( "responsive" ) ) {
                $('.nav-mobile li').removeClass('animation-fade-out')
                var delay = 0;
                 $('.nav-mobile li').each(function() {
                   var $li = $(this);
                   setTimeout(function() {
                     $li.addClass('animation-fade-up');
                   }, delay+=100); // delay 100 ms
                 });
            }
            else {
                setTimeout(function() {
                    $('.nav-mobile li').removeClass('animation-fade-up');
                }, 800);
            }
        });
        $('ul>li>a').click(function() {
         // $('body').removeClass('responsive');
         $('.nav-mobile').css('display', 'none');
         $('#menu-btn > button').toggleClass('menu-open');
        });

		// START RESIZE
      $(window).on("load resize", function () {

			/* SLICK SLIDER CABINET */

			$('.home-tem-slider').slick({
			  infinite: true,
				arrows: false,
			  slidesToShow: 1,
			  slidesToScroll: 1,
			});

			$('.home-tem-prev').click(function(){
	      $('.home-tem-slider').slick('slickPrev');
	    });
			$('.home-tem-next').click(function(){
	      $('.home-tem-slider').slick('slickNext');
	    });


    }).resize();
		// END RESIZE


		// SMOOTH SCROLL
		$(document).on('click', 'a[href^="#"]', function (event) {
		    event.preventDefault();

		    $('html, body').animate({
		        scrollTop: $($.attr(this, 'href')).offset().top
		    }, 500);
		});

		});
})(jQuery, this);
