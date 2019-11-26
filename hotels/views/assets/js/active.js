(function($) {
	'use strict';
	jQuery(document).on('ready', function(){

		// Preloader
        jQuery(window).on('load',function(){
			jQuery(".preloader").fadeOut(500);
        });

		// Header Sticky
        $(window).on('scroll', function() {
            if ($(this).scrollTop() >150){  
                $('.navbar-area').addClass("is-sticky");
            }
            else{
                $('.navbar-area').removeClass("is-sticky");
            }
        });

        // Mean Menu
        jQuery('.mean-menu').meanmenu({
            meanScreenWidth: "991"
        });

		// Main-Slides
        $('.main-slides').owlCarousel({
			loop: true,
			nav: true,
            dots: false,
			autoplayHoverPause: true,
            autoplay: true,
            smartSpeed: 500,
            animateOut: 'fadeOut',
            autoHeight:true,
            items: 1,
            navText: [
				"<i class='fa fa-angle-left'></i>",
				"<i class='fa fa-angle-right'></i>",
            ],
        });
        $(".main-slides").on("translate.owl.carousel", function(){
            $(".main-banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content .default-btn-one").removeClass("animated fadeInRight").css("opacity", "0");
        });
        $(".main-slides").on("translated.owl.carousel", function(){
            $(".main-banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content .default-btn-one").addClass("animated fadeInRight").css("opacity", "1");
        });
		
		// Testimonial Slides
		$('.testimonial-slider').owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			items: 1,
			dots: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true,
            navText: [
				"<i class='flaticon-left-arrow'></i>",
				"<i class='flaticon-right-arrow'></i>",
            ],

			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 1
				}
			},
        });

        // Image Slides
		$('.image-slider').owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			items: 1,
			dots: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true,
            navText: [
				"<i class='flaticon-left-arrow'></i>",
				"<i class='flaticon-right-arrow'></i>",
            ],
        });

        // Blog Slides
		$('.blog-slider').owlCarousel({
			loop: true,
			nav: false,
			items: 1,
			dots: true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true,

			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 3
				}
			},
        });

        // Destinations-slider
		$('.destinations-slider').owlCarousel({
			loop: true,
			nav: false,
            items: 1,
            margin: 15,
			dots: true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true,

			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 4
				}
			},
        });

        // Benefits-slider
		$('.benefits-slider').owlCarousel({
			loop: true,
			nav: false,
            items: 1,
            margin: 30,
			dots: true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true,

			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 3
				}
			},
        });
        
        // Video Popup
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
        });

        // Nice Select JS
        $('select').niceSelect();

        // Go to Top
        $(function(){
            // Scroll Event
            $(window).on('scroll', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 600) $('.go-top').addClass('active');
                if (scrolled < 600) $('.go-top').removeClass('active');
            });  
            // Click Event
            $('.go-top').on('click', function() {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
        });

        // FAQ Accordion
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function() {
                // Adds Active Class
                $(this).toggleClass('active');
                // Expand or Collapse This Panel
                $(this).next().slideToggle('fast');
                // Hide The Other Panels
                $('.accordion-content').not($(this).next()).slideUp('fast');
                // Removes Active Class From Other Titles
                $('.accordion-title').not($(this)).removeClass('active');
            });
        });

        // Popup Gallery
		$('.popup-btn').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });

        // MixItUp JS
        $('#Container').mixItUp();

        // Count Time 
        function makeTimer() {
            var endTime = new Date("September 30, 2020 17:00:00 PDT");			
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }
        setInterval(function() { makeTimer(); }, 1000);


	});
})(jQuery);