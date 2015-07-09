/*
 *  Scripts to load on page load via modernizr and yepnope with CDN's and local fallbacks
 *
 */

yepnope([
	'resources/libs/bootstrap/3.3.5/css/bootstrap.min.css',
	'resources/css/base.css', {
		load: 'timeout=100!https://code.jquery.com/jquery-1.11.3.min.js',
		complete: function() {
			if (!window.jQuery) {
				yepnope('resources/libs/jquery/jquery.js');
			}
		}
	}, {
		load: 'timeout=100!https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
		complete: function() {
			if (typeof($.fn.modal) === 'undefined') {
				yepnope('resources/libs/bootstrap/3.3.5/js/bootstrap.min.js');
			}
		}
	},

]);