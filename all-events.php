<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Events and Volunteering</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<div class="col-xs-10 col-xs-offset-1 visible-xs filter-toggle-button">
		<button class="btn btn-primary center-block" data-toggle="collapse" data-target="#asideFilter" aria-expanded="false" aria-controls="asideFilter">Filter Results</button>
	</div>
</div>
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="javascript:void(0);" class="current">Events</a></li>
			<li><a href="volunteer-opportunities.php">Volunteer</a></li>
		</ul>
		<h3 class="search-event">Search for Events
		<small>(All fields are optional)</small>
		</h3>
		<form onsubmit="return iso_doit()">
			<div class="input-group form-group">
				<label for="category">Select A Category</label>
				<select class="category-select" id="category">
					<option>All Categories</option>
					<option>Nature</option>
					<option>Culture</option>
					<option>Education</option>
					<option>Human Services</option>
					<option>International</option>
				</select>
			</div>
			<div class="input-group form-group">
				<label for="location">Select A Location</label>
				<select class="location-select" id="location">
					<option>All Locations</option>
					<option>Maryland</option>
					<option>Virginia</option>
					<option>Washington D.C.</option>
				</select>
			</div>
			<div class="input-group form-group">
				<label for="keyword">Keyword</label>
				<input type="text" class="form-control" id="keyword" size="15">
			</div>
			<div class="input-group form-group">
				<label for="zip">Enter a Zipcode</label>
				<input type="text" class="form-control" id="zip" size="10">
			</div>
			<button type="submit" class="btn btn-primary">SEARCH FOR EVENTS</button>
		</form>
	</aside>
	<section class="col-sm-8">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="event-page-headings ">All Events</h2>
			</div>
			<div class="col-sm-4">
				<a href="#" class="btn btn-info all-event-button hidden"><span class="fa fa-calendar"></span> Check Our Event Calendar</a>
			</div>
		</div>
		<p>Explore this list of upcoming events&mdash;open houses, galas, informational evenings,volunteer opportunities&mdash;to find what interests you. Click the name of the event and then use our &ldquo;share&rdquo; utility to let your friends know what&rsquo;s happening.</p>
		<div class="event-day-container">
			<h3>Tuesday, September 08, 2015</h3>
			
		<article>	
			<h4><a href="event-details.php">Snapshot of Insight Memory Care Center</a></h4>
			<p><a href="more_info.php?id=94454&amp;tab=events">Insight Memory Care Center</a></p>
			<p>You are invited to IMCC&rsquo;s Snapshot, an overview and tour, to see firsthand the work we are doing. Coffee and pastries are provided. You will meet the Executive Director, Joel, and hear about our unique approaches and the innovative practices that IMCC provides to individuals with memory impairment and their caregivers. <button class="btn btn-link more-info-toggle" data-toggle="collapse" data-target="#more-info-insight-memory" aria-expanded="false" aria-controls="more-info-insight-memory">more event info</button></p>
			<div id="more-info-insight-memory" class="collapse selections more-info">
				<button class="btn btn-default event-add-to-calendar"><span class="fa fa-calendar"></span> Add to My Calendar</button>
				<p><strong>When:</strong> Tue Sep 8 2015 (09:00 AM - 10:00 AM) </p>
				<p><strong>Where:</strong> Linda and Lou Mazawey Education and Support Center, 3955 Pender Drive, Suite 100, Fairfax, VA 22030</p>
				<p><strong>Fee?</strong> no</p>
				<p><strong>Contact:</strong> <a href="mailto:robin.mcglothin@insightmcc.org" title="Send Robin McGlothin an email">Robin McGlothin</a>, <a href="tel:703-204-4664" title="call Robin McGlothin">(703) 204-4664</a></p>
				<p><strong>For more information:</strong> <a target="_blank" href="http://www.insightmcc.org/get-involved/events/event_calendar.html/event/2015/09/08/1441720800/imcc-snapshot" title="Click here to learn more infomation about this event">click here</a></p>
			</div>
		</article>
		<article>
			<h4><a title="Permanent link to this event listing"  href="event-details.php" class="needs-page">Open House at CityDance POP! in Tenleytown</a></h4>
			<p><a href="more_info.php?id=94774&amp;tab=events">CityDance Ensemble</a></p>
			<p>Try a FREE dance class at our CityDance POP! Open House September 8&dash;12! CityDance POP! introduces new genres and classes for all ages, including Mommy &amp; Me, Creative Movement, Pre&dash;Ballet, B&dash;boy, Jazz, Hip&dash;Hop, African, Break Dancing, Contemporary, Zumba and more! Conveniently located in Upper Northwest&mdash;just a few steps from the Tenley/AU-Metro Red Line stop&mdash;POP! is THE destination for high quality, fast&dash;paced fun Classes start Sept 14. Register early for 5% discount. View classes and RSVP at citydance.net Walk&dash;ins are welcome for Open House, but RSVP is encouraged. <button class="btn btn-link more-info-toggle" data-toggle="collapse" data-target="#more-info-city-dance" aria-expanded="false" aria-controls="more-info-city-dance">more event info</button></p>
			<div id="more-info-city-dance" class="collapse selections more-info">
				<button class="btn btn-default event-add-to-calendar"><span class="fa fa-calendar"></span> Add to My Calendar</button>
				<p><strong>When:</strong> Tue Sep 8 2015 (10:00 AM) </p>
				<p><strong>Where:</strong> 4435 Wisconsin Avenue NW, Washington, DC 20016 </p>
				<p><strong>Fee?</strong> no</p>
				<p><strong>Contact:</strong> <a href="mailto:Marketing.CityDance@gmail.com" title="Send CityDance an email.">CityDance</a>, <a href="tel:202-347-3909" title="call Robin McGlothin">(202) 347-3909 </a></p>
				<p><strong>For more information:</strong> <a target="_blank" href="http://www.insightmcc.org/get-involved/events/event_calendar.html/event/2015/09/08/1441720800/imcc-snapshot" title="Click here to learn more infomation about this event">click here</a></p>
			</div>
		</article>
	</div>
	<div>
		<h3>Thursday, September 10, 2015</h3>
		<article>
		<h4><a title="Permanent link to this event listing"  href="event-details.php" class="needs-page">Exhibition Opening Reception</a></h4>
		<p><a href="more_info.php?id=95708&amp;tab=events">McLean Project for the Arts</a></p>
		<p>Three new exhibitions are opening on Thursday, September 10. Make plans to attend the Opening Reception at McLean Project for the Arts (inside the McLean Community Center.) The exhibitions and reception are free and open to the public. Featured will be... Emerson Gallery: Robin Rose Presents Scriptonics: An Art for the Future Atrium Gallery: Equilibrium: Drawings by John Adams Ramp Gallery: Color Riffs: Paintings By Barbara Januszkiewicz <button class="btn btn-link more-info-toggle" data-toggle="collapse" data-target="#more-info-mclean-project" aria-expanded="false" aria-controls="more-info-mclean-project">more event info</button></p>
		<div id="more-info-mclean-project" class="collapse selections more-info">
			<button class="btn btn-default event-add-to-calendar"><span class="fa fa-calendar"></span> Add to My Calendar</button>
			<p><strong>When:</strong> Thu Sep 10 2015 (7:00 PM - 9:00 PM)  </p>
			<p><strong>Where:</strong> McLean Project for the Arts, 1234 Ingleside Ave, McLean, VA 22101 </p>
			<p><strong>Fee?</strong> no</p>
			<p><strong>Contact:</strong> <a href="mailto:Marketing.CityDance@gmail.com" title="Send CityDance an email.">CityDance</a>, <a href="tel:703-790-1953" title="call the McLean Project for the Arts">(703) 790-1953</a></p>
			<p><strong>For more information:</strong> <a target="_blank" href="http://www.insightmcc.org/get-involved/events/event_calendar.html/event/2015/09/08/1441720800/imcc-snapshot" title="Click here to learn more infomation about this event">click here</a></p>
		</div>
		</article>
	</div>
</section>
</div>
</main>
<?php get_template('footer'); ?>