<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Convene</h1>
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
			<p class="lead">We will convene these two communities, nonprofits and donors, with the goal of making them one.</p>
			
			<p>On December 9th, the Catalogue for Philanthropy celebrated its 11th year at Inspiration to Action 2013. With over 300 friends and supporters in attendance, the event took place at the Shakespeare Theatre&rsquo;s Sidney Harman Hall. Some of Washington&rsquo;s best small charities mingled with Catalogue supporters during a cocktail hour, where they watched members of Chess Challenge play competitive games (with life&dash;size pieces), and were treated to the sights of beautiful art from Art Enables and the sounds of classical music from DC Youth Orchestra Program. In the theater, Joy of Motion Dance Center, Miriam&rsquo;s Kitchen, The Barker Foundation and Horton&rsquo;s Kids moved and inspired the audience with stories and performances showcasing their work. A dinner and auction followed the theater performances, resulting in $100,000 raised for the Catalogue to strengthen and expand its mission in Greater Washington.</p>
			<div class="well">
				<blockquote>
					&ldquo;Thank you so much for the amazing evening last week. I spent much of the evening with goose bumps after hearing the stories.&rdquo;
					<p class="testimonial">Alex Ashbrook <small> D.C. Hunger Solutions</small></p>
				</blockquote>
			</div>
			<a class="forward pull-right" href="vision-collaborate.php">Next: Collaborate <span class="sr-only">Visit the Collaborate page</span></a>
		</div>
		<div class="col-xs-12 col-md-3 pull-right hidden-xs hidden-sm">
			<img class="vision-image img-responsive" src="/resources/images/vision/convene-clear.png" alt="" aria-hidden="true">
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>