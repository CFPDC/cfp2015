/*** loading order
1. Setting variables
2. global functions for each page
3. page specific functions
***/
//ie8 test

Modernizr.load({
	test: Modernizr.textshadow,
	nope: ['resources/css/ie.css', 'assets/js/html5shiv.js', 'assets/js/respond.js', 'resources/js/ie.js']
});

/*** variables ***/
var $root = $('html, body'),
	liveTextRegion = $('#liveTextPolite').children('p');



var global = {
	globalImageCheck: function(img) {
		//call this in another function by naming variable. See homeImageCheck() for reference
		img.each(function() {
			if (this.naturalWidth === 0 || this.naturalHeight === 0 || this.complete === false) {
				$(this).attr('src', '../resources/images/clear.gif');
			}
		});
	},
	homeImageCheck: function() {
		var img = $('.subcategories .img-responsive');
		this.globalImageCheck(img);
	},
	jumplink: function() {
		$('.jumplink').on('click', function() {
			var target = $(this).attr('data-target');
			$(target).attr('tabindex', '0');
			$root.animate({
				scrollTop: $(target).offset().top
			}, 'slow');
			$(target).focus();
			return false;
		});

	},
	navMenu: function() {
		//add empty sub nav div for alignment purposes. This is needed if there is no dropdown.
		$('.nav-item.last').append('<div class="sub-nav hidden"></div>');
		$(".nav-primary-nav").accessibleMegaMenu({
			/* prefix for generated unique id attributes, which are required 
			   to indicate aria-owns, aria-controls and aria-labelledby */
			uuidPrefix: "accessible-megamenu",

			/* css class used to define the megamenu styling */
			menuClass: "nav-menu",

			/* css class for a top-level navigation item in the megamenu */
			topNavItemClass: "nav-item",

			/* css class for a megamenu panel */
			panelClass: "sub-nav",

			/* css class for a group of items within a megamenu panel */
			panelGroupClass: "sub-nav-group",

			/* css class for the hover state */
			hoverClass: "hover",

			/* css class for the focus state */
			focusClass: "focus",

			/* css class for the open state */
			openClass: "open"
		});

	},
	carouselPlayPause: function() {
		var button = $(this).attr('id');
	},
	addNonprofitNameToButton: function() {
		var nonprofitListing = $('.nonprofit-listing'),
			nonprofitName = $('.nonprofit-listing h2');
		nonprofitListing.each(function(index) {
			var nonprofit = $(this),
				nonprofitTitleRaw = nonprofit.find('.name').contents().filter(
					function() {
						return this.nodeType == 3;
					}),
				nonprofitChildRemove = nonprofitTitleRaw.text(),
				nonprofitTitle = nonprofitChildRemove.split(' ').join('_').trim(),
				learnMoreButton = nonprofit.find('.learn-more'),
				learnMoreButtonLink = learnMoreButton.attr('href'),
				donateButton = nonprofit.find('.donate-nonprofit'),
				donateButtonLink = donateButton.attr('href');
			//appand sr only info for each button and add parameter for 'donateButtonPrefill' function
			learnMoreButton.append('<span/>').children('span').addClass('sr-only').text(' about ' + nonprofitChildRemove);
			donateButton.append('<span/>').children('span').addClass('sr-only').text(' to ' + nonprofitChildRemove);
			//check each href of learn more and donate buttons to see if parameters exist
			if (learnMoreButtonLink.indexOf('?') != -1) {
				learnMoreButton.attr("href", learnMoreButtonLink + "&np_title=" + nonprofitTitle);
			} else {
				learnMoreButton.attr("href", learnMoreButtonLink + "?np_title=" + nonprofitTitle);
			}
			if (donateButtonLink.indexOf('?') != -1) {
				donateButton.attr("href", donateButtonLink + "&np_title=" + nonprofitTitle);
			} else {
				donateButton.attr("href", donateButtonLink + "?np_title=" + nonprofitTitle);
			}

		});

	},
	donateButtonPrefill: function() {
		//replace checkout page org name to the name of the org which the user clicks on by the substring '?np_title=, if none exists, then do nothing
		function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
				results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		function getQueryVariable(variable) {
			var query = window.location.search.substring(1);
			var vars = query.split("&");
			for (var i = 0; i < vars.length; i++) {
				var pair = vars[i].split("=");
				if (pair[0] == variable) {
					return pair[1];
				}
			}
			return (false);
		}
		var substringTitle = 'np_title',
			prodId = getParameterByName(substringTitle),
			prodIdInput = getParameterByName(substringTitle).split('_').join(' ').trim(),
			orgInput = $('#org-name'),
			orgInputValue = orgInput.val(),
			orgLabel = $("label[for='" + orgInput + "']"),
			substringAmount = getQueryVariable('np_amount'),
			amountId = substringAmount,
			amountIdInput = substringAmount,
			amountInput = $('#amount'),
			amountInputValue = amountId,
			amountLabel = $("label[for='" + amountInput + "']");
		if (window.location.search.indexOf(substringTitle) > -1) {

			if ($(orgInput)[0]) {
				$('<p class="np-selected-name" id="np-selected" />').insertBefore(orgInput).text(prodIdInput);
				$(orgInput).addClass('sr-only').attr({
					'tabindex': '-1',
					'value': prodIdInput
				}).siblings(orgLabel).attr('aria-describedby', 'np-selected');

			}
		} else if (orgInput.length && orgInput.val().length) {
			$('<p class="np-selected-name" id="np-selected" />').insertBefore(orgInput).text(orgInputValue);
			$(orgInput).addClass('sr-only').attr({
				'tabindex': '-1',
				'value': prodIdInput
			}).siblings(orgLabel).attr('aria-describedby', 'np-selected');

		} //if an amount is passed by parameter add a 'p' tag and with the value given and add the value to the input while hiding the input
		if (window.location.search.indexOf(amountId) > -1) {

			if ($(amountInput)[0]) {
				$('<p class="np-selected-name" id="np-selected-amount" />').insertBefore(amountInput).text('$' + amountIdInput);
				$(amountInput).addClass('sr-').attr({
					'tabindex': '-1',
					'value': amountIdInput
				}).siblings(amountLabel).attr('aria-describedby', 'np-selected-amount');
			}
		} else if (amountInput.length && amountInput.val().length) {
			$('<p class="np-selected-name" id="np-selected-amount" />').insertBefore(amountInput).text('$' + amountInputValue);
			$(amountInput).addClass('sr-').attr({
				'tabindex': '-1',
				'value': amountIdInput
			}).siblings(amountLabel).attr('aria-describedby', 'np-selected-amount');

		}


	},
	relatedCarousel: function() {
		//nonprofit details page carousel
		var carouselWidth = $('#carouselwrapper').width(),
			carouselItem = $('#related-carousel li');
		A11y.carousel();
		//dont make carousel unless page is specific width
		if (carouselWidth > 486) {

			if (carouselItem.parent().is('ul.item')) {
				carouselItem.unwrap();
			}
			do {
				$(carouselItem.slice(0, 3)).wrapAll('<ul class="item row" role="presentation "></ul>');
			} while ((carouselItem = carouselItem.slice(3)).length > 0);
			$('#related-carousel ul.item').first().addClass('active');
		} else {
			carouselItem.unwrap();
			carouselItem.wrapAll('<ul class="carousel-inner" role="list"></ul>');
			$('.left.carousel-control').hide();
			$('.right.carousel-control').hide();
		}
	}
};


//list view page
var listViewResults = {
	nonprofitCollapse: function() {
		$(".listing").each(function(index) {
			var npListing = $(this),
				npHeader = npListing.find('.media-heading'),
				npName = npHeader.clone().children().remove().end().text().trim().replace(/ /g, ''),
				npContent = npListing.find('.content');
			npContent.attr({
				'id': '_' + npName
			});
			npHeader.attr({
				'aria-controls': '_' + npName,
				'data-target': '#_' + npName,
				'tabindex': '0'
			});
		});
	}
};

/*** global functions ***/

//skip nav prevent hashtag in url
function globalSkipNav() {
	$(function() {
		$('.skip-navigation-link').each(function() {
			var focusedElement = $(this).attr('data-target');
			//set a tabindex of -1 to make the element focusable for the skip nav but is not focusable for tabbing on page, this is only needed if the target is not a normally focusable element like a div container.
			$(focusedElement).attr('tabindex', '-1');
		}).on('click', function(event) {
			var focusedElement = $(this).attr('data-target');

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

		if (!$(this).hasClass('active')) {
			$(this).toggleClass('active');
		}
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
A11y.ieDetect();
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
	//begin isotop script
var $grid = $('.grid');
//sort button functionality with isotope
$('.sort-by').on('click', 'button', function() {
	var sortByValue = $(this).attr('data-sort-by');
	$grid.isotope({
		sortBy: sortByValue
	});
	//update screen reader of sorting announcement
	liveTextRegion.text("Results sorted by " + sortByValue);
	setTimeout(function() {
		liveTextRegion.text('');
	}, 3000);
	//collapse the dropdown after selecting
	$('.sort-toggle').click();
});

//end isotop script


//checkout page checkbox toggle functions
var expressCheckout = $('.express-checkout-section'),
	checkoutButton = $('.checkout-section'),
	expressHeading = $('.express-checkout-heading'),
	checkoutHeading = $('.checkout-heading'),
	expressUser = $('.userName');

$('.checkout-form .toggle-check').on('click', function() {
	if ($(this).is(':checked')) {
		expressCheckout.show(); //show express checkout
		checkoutButton.hide(); //hide normal checkout button
		expressHeading.show(); //show express heading
		checkoutHeading.hide(); //hide normal heading

		setTimeout(function() {
			expressUser.focus(); //focus on name input after 1 millisecond
		}, 100);
	} else {
		expressHeading.hide(); //hide express heading
		checkoutHeading.show(); //show normal heading
		expressCheckout.hide(); //hide express checkout
		checkoutButton.show(); //show normal checkout button
	}
});
//request-catalogue page

//namespace to keep form functions short
var formHandlers = {
	highlight: function(element, errorClass, validClass) {
		$(element.form).find("label[for=" + element.id + "]").addClass("error");
		$(element.form).find("input[id=" + element.id + "]").addClass("error");
		$(element.form).find("input[id=" + element.id + "], select[id=" + element.id + "]").closest('div').addClass("error");
	},
	unHighlight: function(element, errorClass, validClass) {
		$(element.form).find("label[for=" + element.id + "]").removeClass("error");
		$(element.form).find("input[id=" + element.id + "]").removeClass("error");
		$(element.form).find("input[id=" + element.id + "], select[id=" + element.id + "]").closest('div').removeClass("error");
	},
	showError: function(errorMap, errorList) {
		if (submitted && errorList) {
			var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
				$errorFormClass = $errorFormClass1.split(' ')[0];

			//Reset and remove error messages if the form
			//has been validated once already
			var summary = "";
			$('label .error', $(this.currentForm)).remove();

			//Create our container if one doesnt already exits
			//better than an empty div being in the HTML source
			if ($('.' + $errorFormClass).length === 0) {
				$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
			}

			//Generate our error summary list
			for (this.error in errorList) {
				//get associated label text to be used for the error summary
				var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
				summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
			}

			//Output our error summary and place it in the error container
			//$('.' + $errorFormClass).html('<h4 class="error-heading"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ul class="summary-list">' + summary + '</ul>');

			//Focus on the error container
			//Alternatively, you might want to use the Validation default option (focusInvalid)
			$('.errors-' + $(this.currentForm).attr('class')).focus();

			//Move the focus to the associated input when error message link is triggered
			//a simple href anchor link doesnt seem to place focus inside the input
			$('.' + $errorFormClass + ' a').click(function() {
				$($(this).attr('href')).focus();
				return false;
			});

			//removes exclamation icon from error summary list
			if ($('.summary-list li a span').hasClass('Exclamation')) {
				$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
			}

			//removes adobeBlank text from error summary list
			$('.summary-list li a span span').remove('.adobeBlank');
		}
		this.defaultShowErrors();
		submitted = false;
	},
	errorPosition: function(error, element) {
		if (element.prop('nodeName').toLowerCase() === 'select') {
			if ($(element).parent().hasClass('custom-style')) {
				error.insertAfter($(element).parent('.custom-style'));
			} else {
				error.insertAfter(element);
			}
		} else {
			error.insertAfter(element);
		}
	}
};


$(function() {
	//.ready for global functions

	//check for missing images in the home page grid
	global.homeImageCheck();

	//Do initial check for media state
	var state = A11yResp.getScreenWidth();
	if (state !== 'desktop') {
		performMediaQueries(state);
	}

	$('#Mycarousel').carousel({
		pause: "hover"
	});
	$('#playButton').on('click', function() {
		$('#Mycarousel').carousel('cycle');
	});
	$('#pauseButton').on('click', function() {
		$('#Mycarousel').carousel('pause');
	});

	/*$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2015-09-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			eventStartEditable: true,
			events: [
				{
					title: 'All Day Event',
					start: '2015-02-01'
				},
				{
					title: 'Long Event',
					start: '2015-09-07',
					end: '2015-09-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-09-09T16:00:00',
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2015-09-11',
					end: '2015-09-13'
				},
				{
					title: 'Meeting',
					start: '2015-09-12T10:30:00',
					end: '2015-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2015-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2015-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2015-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2015-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2015-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2015-09-28'
				}
			]
		});*/

	globalSkipNav();
	homeSearchActiveToggle();
	searchPageActiveToggle();

	//scroll spy for styleguide
	$('body').scrollspy({
		target: '.bs-docs-sidebar'
	});
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

	//this is to find all pages pointing to prod links which we will need to change to relative to ensure each page is covered
	$('a').each(function() {
		var host = this.hostname;
		if (host === 'cfp-dc.org' || host === 'catalogueforphilanthropy-dc.org') {
			$(this).addClass('need-page');
		}
	});

	//bootstrap tooltips activated on page load
	$('[data-toggle="tooltip"]').tooltip({
		container: 'body'
	});

	/* list view */
	listViewResults.nonprofitCollapse();
	global.jumplink();
	global.navMenu();
	global.donateButtonPrefill();
	global.addNonprofitNameToButton();
	global.relatedCarousel();

	$('.carouselButtons button').on('click', function() {
		var button = $(this),
			buttonFocus = button.siblings(),
			liveText = $(this).siblings().text().trim();
		button.delay(500).addClass('hide').siblings().removeClass('hide');
		buttonFocus.focus();
		$('#liveTextPolite').children('p').html(liveText);
		liveTextRegion.text(liveText);
		setTimeout(function() {
			liveTextRegion.text('');
		}, 3000);
	});

	//make all anchor tags 'clickable' by enter key
	$('a').on('keydown', function(event) {
		if (event.keyCode === 13) {
			event.preventDefault();
			$(this).click();
		}
		return true;
	});


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



	//all form validation must be in .ready
	$.validator.setDefaults({
		debug: true,
		errorElement: "strong",
		focusInvalid: false
	});

	var submitted = false;
	//only accepts US phone numbers
	$.validator.addMethod('phoneUS', function(phone_number, element) {
		phone_number = phone_number.replace(/\s+/g, "");
		return this.optional(element) || phone_number.length == 12 && phone_number.match(/\d{10}|(([\(]?([0-9]{3})[\)]?)?[ \.\-]?([0-9]{3})[ \.\-]([0-9]{4}))$/);
	}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Please specify a valid phone number');

	//allows you to specify a zip code range to accept
	$.validator.addMethod("ziprange", function(value, element) {
		return this.optional(element) || (/^2[0101-4658]/).test(value);
	}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Please enter a Virginia Zip Code');

	$.validator.addMethod("lettersonly", function(value, element) {
		return this.optional(element) || (/^[a-z]+$/i).test(value);
	}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Letters only please');

	$.validator.addMethod("letterswithbasicpunc", function(value, element) {
		return this.optional(element) || (/^[a-z\-.,()'"\s]+$/i).test(value);
	}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Letters or punctuation only please');

	$.validator.addMethod('require-one', function(value, element) {
		return $('.require-one:checked').size() > 0;
	}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please check at least one box.');


	$('.request-catalogue').validate({
		focusCleanup: false,
		errorClass: 'error',
		rules: {
			fname: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			lname: {
				required: true,
				minlength: 2,
				letterswithbasicpunc: true
			},
			street: {
				required: true
			},
			city: {
				required: true,
				lettersonly: true
			},
			state: {
				required: true
			},
			zip: {
				required: true,
				digits: true,
				ziprange: true,
				minlength: 5,
				maxlength: 5
			},
			email: {
				required: true,
				email: true,
				minlength: 7
			},
			captcha_code: {
				required: true
			}
		},

		messages: {
			fname: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid first name'
			},
			lname: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				letterswithbasicpunc: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid last name'
			},
			street: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
			},
			city: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid city'
			},
			state: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
			},
			zip: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				digits: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid Virginia zip code',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				maxlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter no more than {0} characters.')
			},
			email: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
			},
			captcha_code: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter the verification code'
			}
		},

		//Create our error summary that will appear before the form
		showErrors: function(errorMap, errorList) {
			//formHandlers.showError(errorMap, errorList);
			if (submitted && errorList) {
				var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
					$errorFormClass = $errorFormClass1.split(' ')[0];

				//Reset and remove error messages if the form
				//has been validated once already
				var summary = "";
				$('label .error', $(this.currentForm)).remove();

				//Create our container if one doesnt already exits
				//better than an empty div being in the HTML source
				if ($('.' + $errorFormClass).length === 0) {
					$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
				}

				//Generate our error summary list
				for (this.error in errorList) {
					//get associated label text to be used for the error summary
					var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
					summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
				}

				//Output our error summary and place it in the error container
				$('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
				$('.' + $errorFormClass).addClass('col-xs-12');

				//Focus on the error container
				//Alternatively, you might want to use the Validation default option (focusInvalid)
				$('.errors-' + $(this.currentForm).attr('class')).focus();

				//Move the focus to the associated input when error message link is triggered
				//a simple href anchor link doesnt seem to place focus inside the input
				$('.' + $errorFormClass + ' a').on('click', function() {
					$($(this).attr('href')).focus();
					return false;
				});

				//removes exclamation icon from error summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
				}
				//remove required text from summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a:contains(" (required)")').each(function() {
						$(this).html($(this).html().split(" (required)").join(":"));
					});
				}
				//removes adobeBlank text from error summary list
				$('.summary-list li a span span').remove('.adobeBlank');
			}
			this.defaultShowErrors();
			submitted = false;
		},
		errorPlacement: function(error, element) {
			formHandlers.errorPosition(error, element);
		},
		highlight: function(element, errorClass, validClass) {
			formHandlers.highlight(element, errorClass, validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			formHandlers.unHighlight(element, errorClass, validClass);

		},

		invalidHandler: function(form, validator) {
			submitted = true;
		},

		//Removed the error summary upon successful completion of form
		submitHandler: function(form) {
			$('.errors-' + $(this.currentForm).attr('class')).remove();

			$(form).submit();
		}
	});

	//signup form
	$('.sign-up').validate({
		focusCleanup: false,
		errorClass: 'error',
		rules: {
			fname: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			lname: {
				required: true,
				minlength: 2,
				letterswithbasicpunc: true
			},
			password: {
				required: true
			},
			password2: {
				required: true,
				equalTo: '#password'
			},
			email: {
				required: true,
				email: true,
				minlength: 7
			},
			captcha_code: {
				required: true
			}
		},

		messages: {
			fname: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid first name'
			},
			lname: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				letterswithbasicpunc: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid last name'
			},

			password: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password'
			},
			password2: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password',
				equalTo: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Passwords do not match'
			},
			email: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
			},
			captcha_code: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter the verification code'
			}
		},

		//Create our error summary that will appear before the form
		showErrors: function(errorMap, errorList) {
			//formHandlers.showError(errorMap, errorList);
			if (submitted && errorList) {
				var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
					$errorFormClass = $errorFormClass1.split(' ')[0];

				//Reset and remove error messages if the form
				//has been validated once already
				var summary = "";
				$('label .error', $(this.currentForm)).remove();

				//Create our container if one doesnt already exits
				//better than an empty div being in the HTML source
				if ($('.' + $errorFormClass).length === 0) {
					$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
				}

				//Generate our error summary list
				for (this.error in errorList) {
					//get associated label text to be used for the error summary
					var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
					summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
				}

				//Output our error summary and place it in the error container
				$('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
				$('.' + $errorFormClass).addClass('col-xs-12');

				//Focus on the error container
				//Alternatively, you might want to use the Validation default option (focusInvalid)
				$('.errors-' + $(this.currentForm).attr('class')).focus();

				//Move the focus to the associated input when error message link is triggered
				//a simple href anchor link doesnt seem to place focus inside the input
				$('.' + $errorFormClass + ' a').on('click', function() {
					$($(this).attr('href')).focus();
					return false;
				});

				//removes exclamation icon from error summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
				}
				//remove required text from summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a:contains(" (required)")').each(function() {
						$(this).html($(this).html().split(" (required)").join(":"));
					});
				}

				//removes adobeBlank text from error summary list
				$('.summary-list li a span span').remove('.adobeBlank');
			}
			this.defaultShowErrors();
			submitted = false;
		},
		errorPlacement: function(error, element) {
			formHandlers.errorPosition(error, element);
		},
		highlight: function(element, errorClass, validClass) {
			formHandlers.highlight(element, errorClass, validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			formHandlers.unHighlight(element, errorClass, validClass);

		},

		invalidHandler: function(form, validator) {
			submitted = true;
		},

		//Removed the error summary upon successful completion of form
		submitHandler: function(form) {
			$('.errors-' + $(this.currentForm).attr('class')).remove();

			$(form).submit();
		}
	});
	//signup form
	$('.donor-form-container').validate({
		focusCleanup: false,
		errorClass: 'error',
		rules: {
			username1: {
				required: true,
				email: true,
				minlength: 7
			},
			password1: {
				required: true
			}
		},

		messages: {
			username1: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
			},
			password1: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password'
			}
		},

		//Create our error summary that will appear before the form
		showErrors: function(errorMap, errorList) {
			//formHandlers.showError(errorMap, errorList);
			if (submitted && errorList) {
				var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
					$errorFormClass = $errorFormClass1.split(' ')[0];

				//Reset and remove error messages if the form
				//has been validated once already
				var summary = "";
				$('label .error', $(this.currentForm)).remove();

				//Create our container if one doesnt already exits
				//better than an empty div being in the HTML source
				if ($('.' + $errorFormClass).length === 0) {
					$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
				}

				//Generate our error summary list
				for (this.error in errorList) {
					//get associated label text to be used for the error summary
					var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
					summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
				}

				//Output our error summary and place it in the error container
				$('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
				$('.' + $errorFormClass).addClass('col-xs-12');

				//Focus on the error container
				//Alternatively, you might want to use the Validation default option (focusInvalid)
				$('.errors-' + $(this.currentForm).attr('class')).focus();

				//Move the focus to the associated input when error message link is triggered
				//a simple href anchor link doesnt seem to place focus inside the input
				$('.' + $errorFormClass + ' a').on('click', function() {
					$($(this).attr('href')).focus();
					return false;
				});

				//removes exclamation icon from error summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
				}
				//remove required text from summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a:contains(" (your email address)")').each(function() {
						$(this).html($(this).html().split(" (your email address)").join(":"));
					});
				}

				//removes adobeBlank text from error summary list
				$('.summary-list li a span span').remove('.adobeBlank');
			}
			this.defaultShowErrors();
			submitted = false;
		},
		errorPlacement: function(error, element) {
			formHandlers.errorPosition(error, element);
		},
		highlight: function(element, errorClass, validClass) {
			formHandlers.highlight(element, errorClass, validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			formHandlers.unHighlight(element, errorClass, validClass);

		},

		invalidHandler: function(form, validator) {
			submitted = true;
		},

		//Removed the error summary upon successful completion of form
		submitHandler: function(form) {
			$('.errors-' + $(this.currentForm).attr('class')).remove();

			$(form).submit();
		}
	});

	//login form
	$('.login-form-container').validate({
		focusCleanup: false,
		errorClass: 'error',
		rules: {
			username2: {
				required: true,
				email: true,
				minlength: 7
			},
			password: {
				required: true
			}
		},

		messages: {
			username2: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
			},

			password: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a password'
			}
		},

		//Create our error summary that will appear before the form
		showErrors: function(errorMap, errorList) {
			//formHandlers.showError(errorMap, errorList);
			if (submitted && errorList) {
				var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
					$errorFormClass = $errorFormClass1.split(' ')[0];

				//Reset and remove error messages if the form
				//has been validated once already
				var summary = "";
				$('label .error', $(this.currentForm)).remove();

				//Create our container if one doesnt already exits
				//better than an empty div being in the HTML source
				if ($('.' + $errorFormClass).length === 0) {
					$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
				}

				//Generate our error summary list
				for (this.error in errorList) {
					//get associated label text to be used for the error summary
					var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
					summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
				}

				//Output our error summary and place it in the error container
				$('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
				$('.' + $errorFormClass).addClass('col-xs-12');

				//Focus on the error container
				//Alternatively, you might want to use the Validation default option (focusInvalid)
				$('.errors-' + $(this.currentForm).attr('class')).focus();

				//Move the focus to the associated input when error message link is triggered
				//a simple href anchor link doesnt seem to place focus inside the input
				$('.' + $errorFormClass + ' a').on('click', function() {
					$($(this).attr('href')).focus();
					return false;
				});

				//removes exclamation icon from error summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
				}
				//remove required text from summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a:contains(" (required)")').each(function() {
						$(this).html($(this).html().split(" (required)").join(":"));
					});
				}

				//removes adobeBlank text from error summary list
				$('.summary-list li a span span').remove('.adobeBlank');
			}
			this.defaultShowErrors();
			submitted = false;
		},
		errorPlacement: function(error, element) {
			formHandlers.errorPosition(error, element);
		},
		highlight: function(element, errorClass, validClass) {
			formHandlers.highlight(element, errorClass, validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			formHandlers.unHighlight(element, errorClass, validClass);

		},

		invalidHandler: function(form, validator) {
			submitted = true;
		},

		//Removed the error summary upon successful completion of form
		submitHandler: function(form) {
			$('.errors-' + $(this.currentForm).attr('class')).remove();

			$(form).submit();
		}
	});

	//subscribe form
	var checkboxes = $('.require-one');
	var checkbox_names = $.map(checkboxes, function(e, i) {
		return $(e).attr("name");
	}).join(" ");

	$('.subscribe-form').validate({
		focusCleanup: false,
		errorClass: 'error',
		groups: {
			checks: checkbox_names
		},
		rules: {
			email: {
				required: true,
				email: true,
				minlength: 7
			}
		},

		messages: {
			email: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
			}
		},

		//Create our error summary that will appear before the form
		showErrors: function(errorMap, errorList) {
			//formHandlers.showError(errorMap, errorList);
			if (submitted && errorList) {
				var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
					$errorFormClass = $errorFormClass1.split(' ')[0];

				//Reset and remove error messages if the form
				//has been validated once already
				var summary = "";
				$('label .error', $(this.currentForm)).remove();

				//Create our container if one doesnt already exits
				//better than an empty div being in the HTML source
				if ($('.' + $errorFormClass).length === 0) {
					$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
				}

				//Generate our error summary list
				for (this.error in errorList) {
					//get associated label text to be used for the error summary
					var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
					summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
				}

				//Output our error summary and place it in the error container
				$('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
				$('.' + $errorFormClass).addClass('col-xs-12');

				//Focus on the error container
				//Alternatively, you might want to use the Validation default option (focusInvalid)
				$('.errors-' + $(this.currentForm).attr('class')).focus();

				//Move the focus to the associated input when error message link is triggered
				//a simple href anchor link doesnt seem to place focus inside the input
				$('.' + $errorFormClass + ' a').on('click', function() {
					$($(this).attr('href')).focus();
					return false;
				});

				//removes exclamation icon from error summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
				}
				//remove required text from summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a:contains(" (required)")').each(function() {
						$(this).html($(this).html().split(" (required)").join(":"));
					});
				}

				//removes adobeBlank text from error summary list
				$('.summary-list li a span span').remove('.adobeBlank');
			}
			this.defaultShowErrors();
			submitted = false;
		},
		errorPlacement: function(error, element) {
			formHandlers.errorPosition(error, element);
		},
		highlight: function(element, errorClass, validClass) {
			formHandlers.highlight(element, errorClass, validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			formHandlers.unHighlight(element, errorClass, validClass);

		},

		invalidHandler: function(form, validator) {
			submitted = true;
		},

		//Removed the error summary upon successful completion of form
		submitHandler: function(form) {
			$('.errors-' + $(this.currentForm).attr('class')).remove();

			$(form).submit();
		}
	});

	//checkout form
	$('.checkout-form').validate({
		focusCleanup: false,
		errorClass: 'error',
		debug: true,
		rules: {
			name: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			amount: {
				required: true,
				minlength: 2,
				number: true
			},
			street: {
				required: true
			},
			city: {
				required: true,
				lettersonly: true
			},
			state: {
				required: true
			},
			zip: {
				required: true,
				digits: true,
				ziprange: true,
				minlength: 5,
				maxlength: 5
			},
			email: {
				required: true,
				email: true,
				minlength: 7
			}
		},

		messages: {
			name: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid name'
			},
			amount: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				number: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid dollar amount'
			},
			street: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
			},
			city: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid city'
			},
			state: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required'
			},
			zip: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				digits: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid Virginia zip code',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				maxlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter no more than {0} characters.')
			},
			email: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
			}
		},

		//Create our error summary that will appear before the form
		showErrors: function(errorMap, errorList) {
			//formHandlers.showError(errorMap, errorList);
			if (submitted && errorList) {
				var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
					$errorFormClass = $errorFormClass1.split(' ')[0];

				//Reset and remove error messages if the form
				//has been validated once already
				var summary = "";
				$('label .error', $(this.currentForm)).remove();

				//Create our container if one doesnt already exits
				//better than an empty div being in the HTML source
				if ($('.' + $errorFormClass).length === 0) {
					$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
				}

				//Generate our error summary list
				for (this.error in errorList) {
					//get associated label text to be used for the error summary
					var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
					summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
				}

				//Output our error summary and place it in the error container
				$('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
				$('.' + $errorFormClass).addClass('col-xs-12');

				//Focus on the error container
				//Alternatively, you might want to use the Validation default option (focusInvalid)
				$('.errors-' + $(this.currentForm).attr('class')).focus();

				//Move the focus to the associated input when error message link is triggered
				//a simple href anchor link doesnt seem to place focus inside the input
				$('.' + $errorFormClass + ' a').on('click', function() {
					$($(this).attr('href')).focus();
					return false;
				});

				//removes exclamation icon from error summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
				}
				//remove required text from summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a:contains(" (required)")').each(function() {
						$(this).html($(this).html().split(" (required)").join(":"));
					});
				}
				//removes adobeBlank text from error summary list
				$('.summary-list li a span span').remove('.adobeBlank');
			}
			this.defaultShowErrors();
			submitted = false;
		},
		errorPlacement: function(error, element) {
			formHandlers.errorPosition(error, element);
		},
		highlight: function(element, errorClass, validClass) {
			formHandlers.highlight(element, errorClass, validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			formHandlers.unHighlight(element, errorClass, validClass);

		},

		invalidHandler: function(form, validator) {
			submitted = true;
		},

		//Removed the error summary upon successful completion of form
		submitHandler: function(form) {
			$('.errors-' + $(this.currentForm).attr('class')).remove();

			$(form).submit();
		}
	});
	//blog reply form
	$('.comment-form').validate({
		focusCleanup: false,
		errorClass: 'error',
		rules: {
			author: {
				required: true,
				minlength: 2,
				lettersonly: true
			},
			email: {
				required: true,
				email: true,
				minlength: 7
			},
			comment: {
				required: true
			}
		},

		messages: {
			author: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.'),
				lettersonly: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid first name'
			},
			email: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: This field is required',
				email: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a valid email address.',
				minlength: $.validator.format('<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter at least {0} characters.')
			},
			comment: {
				required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter a comment'
			}
		},

		//Create our error summary that will appear before the form
		showErrors: function(errorMap, errorList) {
			//formHandlers.showError(errorMap, errorList);
			if (submitted && errorList) {
				var $errorFormClass1 = 'errors-' + $(this.currentForm).attr('class'),
					$errorFormClass = $errorFormClass1.split(' ')[0];

				//Reset and remove error messages if the form
				//has been validated once already
				var summary = "";
				$('label .error', $(this.currentForm)).remove();

				//Create our container if one doesnt already exits
				//better than an empty div being in the HTML source
				if ($('.' + $errorFormClass).length === 0) {
					$('<div class="' + $errorFormClass + '" tabindex="-1"/>').insertBefore($(this.currentForm));
				}

				//Generate our error summary list
				for (this.error in errorList) {
					//get associated label text to be used for the error summary
					var $errorLabel = $('label[for="' + $(errorList[this.error].element).attr('id') + '"]').text();
					summary += '<li><a href="#' + errorList[this.error].element.id + '">' + $errorLabel + ' ' + errorList[this.error].message.replace('Important: ', '') + '</a></li>';
				}

				//Output our error summary and place it in the error container
				$('.' + $errorFormClass).html('<h4 class="error-heading row"><span class="fa fa-exclamation" aria-hidden="true" style="font-family: FontAwesome !important"></span><span class="adobeBlank">Attention</span> Your information contains ' + this.numberOfInvalids() + ' errors</h4><ol class="summary-list">' + summary + '</ol>');
				$('.' + $errorFormClass).addClass('col-xs-12');

				//Focus on the error container
				//Alternatively, you might want to use the Validation default option (focusInvalid)
				$('.errors-' + $(this.currentForm).attr('class')).focus();

				//Move the focus to the associated input when error message link is triggered
				//a simple href anchor link doesnt seem to place focus inside the input
				$('.' + $errorFormClass + ' a').on('click', function() {
					$($(this).attr('href')).focus();
					return false;
				});

				//removes exclamation icon from error summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a span').removeClass('fa fa-exclamation-circle');
				}
				//remove required text from summary list
				if ($('.summary-list li a span').hasClass('Exclamation')) {
					$('.summary-list li a:contains(" (required)")').each(function() {
						$(this).html($(this).html().split(" (required)").join(":"));
					});
				}

				//removes adobeBlank text from error summary list
				$('.summary-list li a span span').remove('.adobeBlank');
			}
			this.defaultShowErrors();
			submitted = false;
		},
		errorPlacement: function(error, element) {
			formHandlers.errorPosition(error, element);
		},
		highlight: function(element, errorClass, validClass) {
			formHandlers.highlight(element, errorClass, validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			formHandlers.unHighlight(element, errorClass, validClass);

		},

		invalidHandler: function(form, validator) {
			submitted = true;
		},

		//Removed the error summary upon successful completion of form
		submitHandler: function(form) {
			$('.errors-' + $(this.currentForm).attr('class')).remove();

			$(form).submit();
		}
	});
});