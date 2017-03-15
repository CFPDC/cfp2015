<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="col-xs-12 volunteer-event-h1">Alice Ferguson Foundation</h1>
		<h2 class="volunteer-text">Volunteer</h2>
	</div>
</div>
<main role="main" class="container-fluid secondary volunteer-event-main">
<div class="row">
	<section class="col-xs-12">
		<div class="col-sm-8 volunteer-details">
      		<div class="clearfix hero details">
      		  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
      		</div>
			<h3 class="all-caps">Events seeking volunteers</h3>
			<p class="bottom-padding">Alice Ferguson Foundation does not currently have any upcoming events in need of volunteers. To be notified of future events please contact Alice Ferguson Foundation via the information below</p>
			<h3 class="all-caps">General Information</h3>
			<p class="text-bold">Description of Volunteer Opportunities/Responsibilities:</p>
			<p>Invasive plant removal, trash clean-up and general farm maintenance.</p>
			<p class="text-bold">Types of Volunteers Needed:</p>
			<p>Adults; Teens (13 and up); Youth (12 and under); Families; Groups of more than 25 volunteers; Corporate volunteer groups</p>
			<p class="text-bold">Hours Needed:</p>
			<p>Weekday Day; Weekend Day</p>
		</div>
		<aside class="col-sm-4 col-lg-offset-1 col-lg-3 pull-right">
			<h3>Contact
			<span class="sr-only">
				Alice Ferguson Foundation
			</span>
			</h3>
			<div class="well volunteer-contact clearfix">
				<h4>Hannah Seligmann<br>
				<small>Volunteer Coordinator</small></h4>
				<br/>
				<a href="mailto:hseligmann@fergusonfoundation.org" class="email" title="Email the Alice Ferguson Foundation">hseligmann@fergusonfoundation.org</a>
				<address class="clearfix">
					<span class="street">
						2001 Bryan Point Road
					</span>
					<span class="city-state">
						Accokeek, MD 20607 <a href="maps.google.com" title="">Map</a>
					</span>
					<a href="tel:301-292-5665" class="phone" title="call the Alice Ferguson Foundation main office">310-292-5665</a> <a href="fergusonfoundation.org" class="pull-left" title="The Catalogue for Philanthropy's Website" target="_blank">fergusonfoundation.org</a>
				</address>
				<a href="mailto:hseligmann@fergusonfoundation.org" title="Email the Alice Ferguson Foundation" class="btn btn-secondary email-button" id="email">Email</a>
			</div>
			<h3>About the Charity</h3>
			<div class="well charity-details">
				<p>
					Thanks to the Alice Ferguson Foundation, there's a special place in Maryland where students from throughout the region can dig in the dirt, take a hike, and catch an unbeatable glimpse of the Potomac. That place is Hard Bargain Farm, which annually hosts nearly 6,000 K-8 students who come to interact with plants and animals about which many of them have &mdash; until now &mdash; only read. Nearly 4,000 students take part in Bridging the Watershed, a program that takes students to national and state parks in the Potomac Watershed where they learn, hands&dash;on, about how a watershed works and how to keep it clean. Another 14,000 volunteers at nearly 700 sites throughout the Watershed (in four states and the District) participate in a day&dash;long cleanup of the River as part of AFF's comprehensive Trash Free Potomac Watershed Initiative. Each year, AFF helps thousands of people connect with nature by milking a cow or picking up a piece of trash along the river. 
				</p>
				<a href="nonprofit-detail.php" class="btn btn-primary learn-more">Learn More</a>
			</div>
			<h3>Share</h3>
				<!--part1-->
	  			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d7e615503d03f12" async="async"></script>
				<script type="text/javascript">
					var addthis_config = addthis_config||{};
					addthis_config.data_track_addressbar = false;
					addthis_config.data_track_clickback = false;
				</script>
			</div>
		</aside>
	</section>
</div>
</main>
<?php get_template('footer'); ?>