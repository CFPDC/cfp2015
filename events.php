<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-xs-12 hidden-xs sort-display-menu-container event-sort">
			<div class="pull-right sort-display-menu">
				<div class="pull-left sort-by">
					<label for="sort-by-list" data-filter-group="sort-by-list">Sort By:</label>
					<label class="select-arrows">
						<select class="form-control input-lg sort-by-select" id="sort-by-list">
							<option value="all-events">All events</option>
							<option value="volunteer-events">Events needing volunteers</option>
						</select>
					</label>
				</div>
				<div class="display-group pull-left events-vol-desc">
					<img src="resources/images/icon-volunteer-opportunity-purple.gif" alt="Volunteer Icon">
					<label id="viewLabel">Volunteer Opportunity</label>
				</div>
			</div>
		</div>
	</div>
</div>
<main role="main" class="container secondary event-main">
<div class="row">
<h1 class="text-center event-h1 event-main">Events</h1>
	<div class="col-sm-12">
		<p>Explore this list of upcoming events&mdash;open houses, galas, informational evenings,volunteer opportunities&mdash;to find what interests you. Click the name of the event and then use our &ldquo;share&rdquo; utility to let your friends know what&rsquo;s happening.</p>
	</div>
</div>
<div class="row">
	<section>
		<div>
			<h2 class="events-h2 col-sm-12">Saturday, March 18, 2017</h2>
			<div class="col-sm-7">
				<h3 class="events-h3 clearfix"><a href="event-details.php">Giving Voice Award Gala</a></h3>
				<p><a href="more_info.php?id=94454&amp;tab=events" class="event-host">By Young Playwright's Theater</a></p>
				<p>Celebrate Young Playwrights&rsquo; Theater&rsquo;s work with our signature brand of eclectic elegance. Enjoy delicious hors d&rsquo;oeuvres and an open bar, bid on unique silent auction prizes and dance the night away in the beautiful Josephine Butler Parks Center! Most importantly, YPT&rsquo;s gala will once again highlight the inspiring voices of DC students, featuring readings by some of the wonderful young people we serve! We can&rsquo;t wait to share their work with you. The YPT Giving Voice Award recognizes extraordinary individuals who have exemplified YPT&rsquo;s spirit and vision by giving voice to the voiceless and inspiring others to realize their full potential. All proceeds to benefit YPT&rsquo;s programming, helping us inspire thousands of local students to discover the power and value of their voices and stories in the coming year, and beyond.</p>
			</div>
			<div class="col-sm-5">
				<div class="well details-wishlist">
					<h4 class="events-h4">Event Information</h4>
					<ul class="list-unstyled event-details-list">
						<li><span class="text-bold">When:</span> Saturday, March 18, 2017 (7:30 PM - 11:00 PM)</li>
						<li><span class="text-bold">Where:</span> Josephine Butler Parks Center, 2437 15th Streen NW, Washington, DC 20009</li>
						<li><span class="text-bold">Contact:</span> <a href="#">Jessica Wisser</a>, <a href="tel:202-387-9173" class="phone" title="call the Parkinson Foundation of the National Capital Area main office">(202) 387-9173</a></li>
						<li><span class="text-bold">For more information:</span> <a href="#">click here</a></li>
					</ul>
					<a href="events-calendar.php" class="btn btn-primary add-to-calendar">Add to Calendar</a>
					<!--part1-->
					<div class="addthis_sharing_toolbox" data-url="http://cfp-dc.org/aff"></div>
					<!--part2-->
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d7e615503d03f12" async="async"></script>
					<script type="text/javascript">
						var addthis_config = addthis_config||{};
						addthis_config.data_track_addressbar = false;
						addthis_config.data_track_clickback = false;
					</script>
				</div>
			</div>
		</div>
		<div>
			<h2 class="events-h2 col-sm-12">Saturday, March 28, 2017</h2>
			<div class="col-sm-7">
				<h3 class="events-h3 clearfix"><a title="Permanent link to this event listing"  href="event-details.php" class="needs-page">PFNCA Symposium</a> <img src="resources/images/icon-volunteer-opportunity-purple.gif" alt="Volunteer Icon"></h3>
				<p><a href="more_info.php?id=95708&amp;tab=events" class="event-host">By Parkinson Foundation of the National Capital Area</a></p>
				<p>The PFNCA Symposium is an all day educational program produced by the Parkinson Foundation of the National Capital Area&rsquo;s Medical Advisory Board to provide information and resources to live well with Parkinson&rsquo;s. Speakers include area physicians who specialize in Parkinson&rsquo;s.</p>
			</div>
			<div class="col-sm-5">
				<div class="well details-wishlist">
					<h4 class="events-h4">Event Information</h4>
					<ul class="list-unstyled event-details-list">
						<li><span class="text-bold">When:</span> Saturday, March 25, 2017 (08:30 AM &dash; 4:30 PM)</li>
						<li><span class="text-bold">Where:</span> Fairview Park Marriot, 3111 Fairview Park Dr, Falls Church, VA 22042</li>
						<li><span class="text-bold">Volunteer Info:</span> Assist with set up, registration, and general duties during the course of the event.</li>
						<li><span class="text-bold">Contact:</span> <a href="#">Banu Luu</a>, <a href="tel:703-734-1017" class="phone" title="call the Parkinson Foundation of the National Capital Area main office">703-734-1017</a></li>
						<li><span class="text-bold">For more information:</span> <a href="#">click here</a></li>
					</ul>
					<a href="events-calendar.php" class="btn btn-primary add-to-calendar">Add to Calendar</a>
					<!--part1-->
					<div class="addthis_sharing_toolbox" data-url="http://cfp-dc.org/aff"></div>
					<!--part2-->
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d7e615503d03f12" async="async"></script>
					<script type="text/javascript">
						var addthis_config = addthis_config||{};
						addthis_config.data_track_addressbar = false;
						addthis_config.data_track_clickback = false;
					</script>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>