<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="col-xs-12 volunteer-event-h1">Parkinson Foundation of the National Capital Area</h1>
		<h2 class="col-xs-12 volunteer-text">Volunteer</h2>
	</div>
</div>
<main role="main" class="container-fluid secondary volunteer-event-main">
<div class="row">
	<section class="col-xs-12">
		<div class="col-sm-8 volunteer-details">
      		<div class="clearfix hero details">
      		  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
      		</div>
			<div class="row">
				<h3 class="all-caps">General Information</h3>
				<ul class="list-unstyled">
					<li><span class="text-bold block-text">Description of Volunteer Opportunities/Responsibilities:</span> Volunteers assis with PFNCA's annual Walk Off Parkinson's program (held each Fall) and at its annual educationsl Symposium (held each Spring). Volunteers also assist other times of the year with various projects including community outreach, administrative support, etc.</li>
					<li><span class="text-bold">Types of Volunteers Needed:</span> Adults; Teens (13 and up); Youth (12 and under); Families; Groups of more than 25 volunteers; Corporate volunteer groups</li>
					<li><span class="text-bold">Hours Needed:</span> Weekday Day; Weekday Evening Weekend Day</li>
					<li></li>
				</ul>
			</div>
			<div class="row">
				<h3 class="all-caps seeking-volunteers">Events seeking volunteers</h3>
				<h4 class="volunteer-h4">PFNCA Symposium</h4>
				<p class="bottom-padding">The PFNCA Symposium is an all day eduational program produced by the Parkinson Foundation of the National Capital Area's Medical Advisory Board to provide information and resources to live well with Parkinson's. Speakers include area physicians who specialize in Parkinson's.</p>
				<ul class="list-unstyled event-details-list">
					<li><span class="text-bold">When:</span> Saturday, March 25, 2017 (08:30 AM &dash; 4:30 PM)</li>
					<li><span class="text-bold">Where:</span> Fairview Park Marriot, 3111 Fairview Park Dr, Falls Church, VA 22042</li>
					<li><span class="text-bold">Volunteer Info:</span> Assist with set up, registration, and general duties during the course of the event.</li>
					<li><span class="text-bold">Contact:</span> <a href="#">Banu Luu</a>, <a href="tel:703-734-1017" class="phone" title="call the Parkinson Foundation of the National Capital Area main office">703-734-1017</a></li>
					<li><span class="text-bold">For more information:</span> <a href="#">click here</a></li>
				</ul>
				<a href="events-calendar.php" class="btn btn-primary add-to-calendar">Add to Calendar</a>
			</div>
		</div>
		<aside class="col-sm-4 col-lg-offset-1 col-lg-3 pull-right">
			<h3>Contact
			<span class="sr-only">
				Parkinson Foundation of the National Capital Area
			</span>
			</h3>
			<div class="well volunteer-contact clearfix">
				<h4>Casey Feffer<br>
				<small>Volunteer Coordinator</small></h4>
				<br/>
				<a href="mailto:cfeffer@parkinsonfoundation.org" class="email" title="Email the Parkinson Foundation of the National Capital Area">cfeffer@parkinsonfoundation.org</a>
				<address class="clearfix">
					<span class="street">
						8830 Cameron Street Suite 201
					</span>
					<span class="city-state">
						Silver Spring, MD 20910 <a href="maps.google.com" title="">Map</a>
					</span>
					<a href="tel:703-734-1017" class="phone" title="call the Parkinson Foundation of the National Capital Area main office">703-734-1017</a> <a href="parkinsonfoundation.org" class="pull-left" title="The Catalogue for Philanthropy's Website" target="_blank">parkinsonfoundation.org</a>
				</address>
				<a href="mailto:cfeffer@parkinsonfoundation.org" title="Email the Parkinson Foundation of the National Capital Area" class="btn btn-secondary email-button" id="email">Email</a>
			</div>
			<h3>About the Charity</h3>
			<div class="well charity-details">
				<p>
					It’s hard enough dealing with a serious illness; it’s even harder when you don’t know where to turn for support. A degenerative disorder of the central nervous system, Parkinson’s Disease strikes people of all ages, though the majority are in their 60s and up. While there is no cure, the Parkinson Foundation of the National Capital Area aims to improve the quality of life for those living with the disease, and their families. In addition to fostering a sense of community, PFNCA provides activities that are shown to slow the disease’s progression: exercise, yoga, and dance provide therapeutic movement, and a communications club and choir work on vocal cord strengthening. Additionally, it assists a network of more than 45 support groups. With services provided to more than 1,000 people annually – and the need continuing to grow — PFCNA is the only area organization that provides holistic programs year-round and helps those faced with the disease to take steps to slow its impact. Together, we can walk off Parkinson's.
				</p>
				<a href="nonprofit-detail.php" class="btn btn-primary learn-more">Learn More</a>
			</div>
			<h3>Share</h3>
			<div class="well share-details">
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
		</aside>
	</section>
</div>
</main>
<?php get_template('footer'); ?>
