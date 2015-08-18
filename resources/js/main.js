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
if (($('.lt-ie9').length > 0) || ($('.ie9').length > 0)) {

}
/*** variables ***/
var $root = $('html, body');
var global = {
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

	}
};


//list view page
var listViewResults = {
	nonprofitCollapse: function() {
		$(".listing").each(function(index) {
			var npListing = $(this),
				npHeader = npListing.find('.media-heading'),
				npName = npHeader.clone() //clone the element
				.children() //select all the children
				.remove() //remove all the children
				.end() //again go back to selected element
				.text().trim().replace(/ /g, ''),
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
	},

};



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


//request-catalogue page

//namespace to keep form functions short
var formHandlers = {
	highlight: function(element, errorClass, validClass) {
		$(element.form).find("label[for=" + element.id + "]")
			.addClass("error");
		$(element.form).find("input[id=" + element.id + "]")
			.addClass("error");
		$(element.form).find("input[id=" + element.id + "], select[id=" + element.id + "]").closest('div')
			.addClass("error");
	},
	unHighlight: function(element, errorClass, validClass) {
		$(element.form).find("label[for=" + element.id + "]")
			.removeClass("error");
		$(element.form).find("input[id=" + element.id + "]")
			.removeClass("error");
		$(element.form).find("input[id=" + element.id + "], select[id=" + element.id + "]").closest('div')
			.removeClass("error");
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
}
$.validator.setDefaults({
	debug: true,
	errorElement: "strong",
	focusInvalid: false
});

var submitted = false;

//only accepts US phone numbers
$.validator.addMethod('phoneUS', function(phone_number, element) {
	phone_number = phone_number.replace(/\s+/g, "");
	return this.optional(element) || phone_number.length == 12 &&
		phone_number.match(/\d{10}|(([\(]?([0-9]{3})[\)]?)?[ \.\-]?([0-9]{3})[ \.\-]([0-9]{4}))$/);
}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Please specify a valid phone number');

//allows you to specify a zip code range to accept
$.validator.addMethod("ziprange", function(value, element) {
	return this.optional(element) || /^2[0101-4658]/.test(value);
}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Please enter a Virginia Zip Code');

$.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z]+$/i.test(value);
}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Letters only please');

$.validator.addMethod("letterswithbasicpunc", function(value, element) {
	return this.optional(element) || /^[a-z\-.,()'"\s]+$/i.test(value);
}, '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Letters or punctuation only please');

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
			required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter the verification field.',

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
			required: '<span class="fa fa-exclamation-circle Exclamation" aria-hidden="true" style="font-family: FontAwesome !important; font-size: 16px;"><span class="adobeBlank">Error icon</span></span> Important: Please enter the verification field.',

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

	/* list view */
	listViewResults.nonprofitCollapse();
	global.jumplink();
	global.navMenu();

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



	//non-profit page



});