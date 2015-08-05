/*** loading order
1. Setting variables
2. global functions for each page
3. page specific functions
***/

/*** variables ***/



/*** global functions ***/
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

//results page change toggle view active class
function searchPageActiveToggle() {

	$('.display-group button').on('click', function() {
		var activeEl = this;
		$('.display-group button.active').not(this).removeClass('active');
		$(this).toggleClass('active');
	});
}


//load assets responsive for screen size detection
A11yResp.Core();
//Set media query
var lastDeviceState = A11yResp.getScreenWidth();
$(window).resize(_.debounce(function() {
	var state = A11yResp.getScreenWidth();
	if (state != lastDeviceState) {
		// Save the new state as current
		lastDeviceState = state;
		performMediaQueries(state);
	}
}, 20));

//Do custom Media query logic
function performMediaQueries(state) {
	if (state == 'screen-sm-max' || state == 'screen-xs-max' || state == 'screen-xs-min') {
		$('#asideFilter').addClass('collapse');
	} else {
		$('#asideFilter').removeClass('collapse');
	}
}

$(function() {
	//.ready for global functions

	//Do initial check for media state
	var state = A11yResp.getScreenWidth();
	if (state !== 'desktop') {
		performMediaQueries(state);
	}

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
	searchPageActiveToggle();

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

	//open collapsed sections of filtering on results/search page
	$(".category-toggle").click();

	//add unchecked to each results page filter section
	$('.select-all').attr("data-type", "uncheck");

});

/*** page specific functions ***/


//these all run at the same time but separate each into page specific sections for organization
$(function() {
	//bootstrap tooltips activated on page load
	$('[data-toggle="tooltip"]').tooltip({
		container: 'body'
	});

	//home page


	//about page


	//contact page


	//search/results page

	//when user clicks the select all link, check the appropriate checkboxes and update text
	$('.select-all').on('click', function() {
		var $this = $(this),
			listClass = $this.attr('data-list'),
			dataType = $this.attr("data-type");
		if (dataType === 'uncheck') {
			$this.attr("data-type", "check").text('Unselect All');
			$('.' + listClass).prop("checked", true);
		} else {
			$this.attr("data-type", "uncheck").text('Select All');
			$('.' + listClass).prop("checked", false);
		}
	});
	$('.sort-by a').on('click', function(e) {
		e.preventDefault();
		//add functionality to update url with parameter from data-sort into this --> &strSort=name
	});



	//non-profit pages

});