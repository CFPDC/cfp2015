<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Transform</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main role="main" class="container-fluid secondary">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<nav role="navigation">
			<ul class="list-unstyled">
				<li>
					<a href="about-us.php">About Us</a>
				</li>
				<li>
					<a href="cfp-team.php">Team</a>
				</li>
				<li>
					<a href="cfp-reviewers.php">Our Reviewers</a>
				</li>
				<li>
					<a href="sponsors.php">Sponsors</a>
				</li>
				<li>
					<a href="press.php">Press</a>
				</li>
				<li>
					<a href="testimonials.php">Testimonials</a>
				</li>
				<li>
					<a href="vision-report.php" class="current">Vision Report</a>
				</li>
			</ul>
		</nav>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<div class="col-xs-12 col-md-9">
			<a href="vision-report.php" class="back">Back<span class="sr-only">Go back to the Vision Report page</span></a>
			<p class="lead">We will transform this community, turning watchers into doers, and bystanders into givers.</p>
			
			<p>Engaging donors and increasing resources for our charities&ndash;fuel for their growth&ndash;are central Catalogue objectives. We do this by creating engaging volunteer opportunities (more than 200 events posted in 2013!), and multiple opportunities to give&ndash;easily.</p>
			<p>In 2012&dash;13 donations were up 8%&mdash;the first year that Catalogue giving returned to its pre-recession levels and the first year that we broke the $3mm mark for a single year: $3,035,335. Each year, the Catalogue also tracks donations that come in during a snapshot period&ndash;the &ldquo;giving season&rdquo;&ndash;November 1 to February 1. In 2013-2014, the Catalogue raised close to 1.7MM for our charities during that 3&dash;month period, a 10 percent increase over donations from the prior year (not including a one&dash;time matching grant), and a 22 percent increase over the 2011&ndash;2012 giving season. In total, the Catalogue has raised over $28 million since its inception in 2003.</p>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<img class="img-responsive" src="resources/images/vision/info-twitter-v3.png" alt="image showing CFP tweets">
				</div>
			</div>
			<p class="img-above">So&hellip; what&rsquo;s next? The Catalogue for Philanthropy aims to be as well known in the Washington region as the Red Cross is during an emergency. An ambitious goal.  But we also want to see our model spread. Everywhere we go people tell us that &ldquo;there should be a Catalogue for Philanthropy in every region in the country&rdquo; and&hellip; we agree!  The trick is getting there.  The Catalogue relies on the <a href="sponsors.php">support of passionate, community&dash;minded people</a> to keep our vision alive.  Join the movement! Support the Catalogue for Philanthropy in 2014.</p>
		</div>
		<div class="col-xs-12 col-md-3 pull-right hidden-xs hidden-sm">
			<img class="vision-image img-responsive" src="/resources/images/vision/transform-clear.png" alt="" aria-hidden="true">
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>