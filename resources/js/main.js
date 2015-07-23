/*** loading order
1. Setting variables
2. global functions for each page
3. page specific functions
***/

/*** variables ***/



/*** global functions ***/
//jpanel menu global navigation 
var jPM = $.jPanelMenu({
	menu: '.mobile-nav',
	trigger: '.mobile-nav-toggle'
});

jPM.on();

//skip nav prevent hashtag in url
function globalSkipNav() {
	$(function() {
		$('.skip-navigation-link').each(function() {
			var focusedElement = $(this).attr('href');
			//set a tabindex of -1 to make the element focusable for the skip nav but is not focusable for tabbing on page, this is only needed if the target is not a normally focusable element like a div container.
			$(focusedElement).attr('tabindex', '-1');
		}).on('click', function(event) {
			var focusedElement = $(this).attr('href');

			//prevent the hash and element id to show in url
			event.preventDefault();

			// set focus to element for skip nav
			$(focusedElement).focus();
		});
	});
}

function homeSearchActiveToggle() {

	$('.home-search button').on('click', function() {
		var activeEl = this;
		$('.home-search button.active').not(this).removeClass('active');

		if (!$(this).hasClass('view-all-btn')) {
			$(this).toggleClass('active');
		}
		/*if ($('.home-search button').hasClass('active')) {
					console.log(this);
					this.removeClass('active');
				}
				$(this).addClass('active');*/
	});
}

$(function() {
	//.ready for global functions
	$('#myCarousel').carousel({
		pause: "hover"
	});
	$('#playButton').on('click', function() {
		$('#myCarousel').carousel('cycle');
	});
	$('#pauseButton').on('click', function() {
		$('#myCarousel').carousel('pause');
	});


	globalSkipNav();
	homeSearchActiveToggle();

	//scroll spy for styleguide
	$('body').scrollspy({
		target: '.bs-docs-sidebar'
	})
	var nav = $(".push-down");
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 105) {
			nav.addClass("scrolling");
		} else {
			nav.removeClass("scrolling");
		}
	});
});

/*** page specific functions ***/


//these all run at the same time but separate each into page specific sections for organization
$(function() {
	//home page


	//about page


	//contact page


	//non-profit pages

});