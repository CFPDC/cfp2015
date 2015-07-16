/*** loading order
1. Setting variables
2. global functions for each page
3. page specific functions
***/

/*** variables ***/



/*** global functions ***/

$(function() {
	//.ready for global functions
	$('#myCarousel').carousel({
		pause: "hover"
	});

	//scroll spy for styleguide
	$('body').scrollspy({
		target: '.bs-docs-sidebar'
	})
	var nav = $(".push-down");
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 230) {
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