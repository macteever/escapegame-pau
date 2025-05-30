	(function ($, root, undefined) {

	$(document).ready(function(){

		// MODAL OPENING IF NEW USER

		if(localStorage.getItem('popState') != 'shown'){
        $(".modal-opening").delay(2000).fadeIn();
        localStorage.setItem('popState','shown')
				$(window).on( "scroll", function() {
					if ( $(window).scrollTop() > 100) {
						$('.modal-opening').removeClass("apparition-3");
						$('.modal-opening').removeClass("animation-fade-up");

						$('.modal-opening').addClass("animation-fade-down");
						$('.modal-opening').fadeOut();
					}
				});

				$(".close-modal-opening").click(function(){
					$('.modal-opening').addClass('disappear');
				});
    }else {
				$(".modal-opening").hide();
    		$(".modal-opening").delay(2000).fadeOut();
    }


	// FAQ

	 $(document).ready(function(){
		 $(".faq-questions-content").click(function(){

			 $(this).find('.btn-question-faq').toggleClass("rotate-90");
			 $(this).find('.reponse-content').toggleClass('translate-reponse');
		 });
	 });

	 // Hide Header on on scroll down
		 var didScroll;
		 var lastScrollTop = 0;
		 var delta = 5;
		 var navbarHeight = $('header').outerHeight();

		 $(window).scroll(function(event){
				 didScroll = true;
		 });

		 setInterval(function() {
				 if (didScroll) {
						 hasScrolled();
						 didScroll = false;
				 }
		 }, 50);

		 function hasScrolled() {
				 var st = $(this).scrollTop();

				 // Make sure they scroll more than delta
				 if(Math.abs(lastScrollTop - st) <= delta)
						 return;

				 // If they scrolled down and are past the navbar, add class .nav-up.
				 // This is necessary so you never see what is "behind" the navbar.
				 if (st > lastScrollTop && st > navbarHeight){
						 // Scroll Down
						 $('header').removeClass('nav-down').addClass('nav-up');
				 } else {
						 // Scroll Up
						 if(st + $(window).height() < $(document).height()) {
								 $('header').removeClass('nav-up').addClass('nav-down');
						 }
				 }

				 lastScrollTop = st;
		 }

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

			$('.home-missions-row').slick({
			  infinite: true,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 5000,
				fade: true,
				dots: true,
			  slidesToShow: 1,
			  slidesToScroll: 1,
			});

			// Init fancyBox
			$().fancybox({
			  selector : '.slick-single .slick-slide:not(.slick-cloned)',
			  hash     : false
			});
			$('.slider-single').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
				infinite: true,
			  arrows: false,
				autoplay: true
			});

			$('.single-mission-prev').click(function(){
	      $('.slider-single').slick('slickPrev');
	    });
			$('.single-mission-next').click(function(){
	      $('.slider-single').slick('slickNext');
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
