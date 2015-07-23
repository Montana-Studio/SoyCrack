(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		//SLIDE CALLBACK ACTION
		$('.tit-index-slide').animate({
	  		bottom:0,
	  		opacity:1
	  	}, 500);

		//SOCIAL SHARE
    	$('.prettySocial').prettySocial();

    	//AUTO PLAY HTML5 VIDEO
    	/*var media = $('.video-loop').not("[autoplay='autoplay']");
        var tolerancePixel = 40;

        function checkMedia(){
            // Get current browser top and bottom
            var scrollTop = $(window).scrollTop() + tolerancePixel;
            var scrollBottom = $(window).scrollTop() + $(window).height() - tolerancePixel;

            //if ($(window).scrollTop() > $(window).height() - 10) {
	            media.each(function(index, el) {
	                var yTopMedia = $(this).offset().top;
	                var yBottomMedia = $(this).height() + yTopMedia;

	                if(scrollTop < yBottomMedia && scrollBottom > yTopMedia){
	                    $(this).get(0).play();
	                } else {
	                    $(this).get(0).pause();
	                }
	            });
            //}
        }
        $(document).on('scroll', checkMedia);
		*/

		//HEADER SCROLL
		// Hide Header on on scroll down
		var didScroll;
		var lastScrollTop = 0;
		var delta = 250;
		var navbarHeight = $('.scroll-view').outerHeight();

		$(window).scroll(function(event){
		    didScroll = true;
		});

		setInterval(function() {
		    if (didScroll) {
		        hasScrolled();
		        didScroll = false;
		    }
		}, 250);

		function hasScrolled() {
		    var st = $('body').scrollTop();
		    
		    // Make sure they scroll more than delta
		    if(Math.abs(lastScrollTop - st) <= delta)
		        return;
		    
		    // If they scrolled down and are past the navbar, add class .nav-up.
		    // This is necessary so you never see what is "behind" the navbar.
		    if (st > lastScrollTop && st > navbarHeight){
		         // Scroll Down
		        $('.scroll-view').removeClass('nav-down').addClass('nav-up');

		    } else {
		        // Scroll Up
		        if(st + $(window).height() < $(document).height()) {
		            $('.scroll-view').removeClass('nav-up').addClass('nav-down');
		        }
		    }
		    
		    lastScrollTop = st;
		}

		//SEARCH CONTENT
		$('.btn_search').click(function(){
			$('.search-content').fadeIn(500,function(){
				$('.close').click(function(){
					$('.search-content').fadeOut(500);
				});
			});
		});
	});
	
})(jQuery, this);