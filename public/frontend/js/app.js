/*
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
*/

/*=================================================
						NAVBAR
=================================================== */

	(function($) {

	    "use strict"; // Start of use strict
	    
	    // Smooth scrolling using jQuery easing
	    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	        if (target.length) {
	            $('html, body').animate({
	                scrollTop: (target.offset().top - 60)
	            }, 1000, "easeInOutExpo");
	            return false;
	        }
	    });

	    // Closes responsive menu when a scroll trigger link is clicked
	    $('.js-scroll-trigger').click(function() {
	        $('.navbar-collapse').collapse('hide');
	    });

	    // Activate scrollspy to add active class to navbar items on scroll
	    $('body').scrollspy({
	        target: '#mainNav',
	        offset: 82
	    });

	    //fixed navbar
	    var toggleAffix = function(affixElement, scrollElement, wrapper) {

	        var height = affixElement.outerHeight(),
	            top = wrapper.offset().top;

	        if (scrollElement.scrollTop() >= top) {
	            wrapper.height(height);
	            affixElement.addClass("affix");
	        } else {
	            affixElement.removeClass("affix");
	            wrapper.height('auto');
	        }

	    };

	    $('[data-toggle="affix"]').each(function() {
	        var ele = $(this),
	            wrapper = $('<div></div>');

	        ele.before(wrapper);
	        $(window).on('scroll resize', function() {
	            toggleAffix(ele, $(this), wrapper);
	        });

	        // init
	        toggleAffix(ele, $(window), wrapper);
	    });


	})(jQuery);

/*=================================================
					LOAD
=================================================== */ 

        function loadNextSeven() {
          let moveItems = $('#off-items-bucket .news-list-cont').slice(0,4);
          moveItems.hide().appendTo('#on-items-bucket').fadeIn('medium');
         }

        function isThisTheEnd() {
          let numberLeft = $('#off-items-bucket .news-list-cont').length;
          
          if(numberLeft == 0) {
            $('#load-more').hide();
          }
        }

        $(document).ready(function() {
            loadNextSeven();
            isThisTheEnd();
         });


        $('#load-more').click(function() {
          loadNextSeven();
          isThisTheEnd();
        });	