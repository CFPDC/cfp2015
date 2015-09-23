<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Spreading the Word</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="about-us.php" class="current">About Us</a></li>
			<li><a href="cfp-team.php">Team</a></li>
			<li><a href="cfp-reviewers.php">Our Reviewers</a></li>
			<li><a href="sponsors.php">Sponsors</a></li>
			<li><a href="press.php">Press</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="vision-report.php">Vision Report</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<div class="col-xs-12 col-sm-9">
			<a href="about-us.php" class="back">About Us<span class="sr-only">Go back to the About Us page</span></a>
			<p>Each November, our print Catalogue goes out to 25,000 people and our website touches thousands more. Our corporate portals and partnerships reach people at work and our school portals reach children and their parents in the classroom and at home. The Catalogue&rsquo;s stamp of approval visible on nonprofit websites and elsewhere around town sends the message that Catalogue charities can be trusted. Spread the word!</p>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<img class="img-responsive" src="resources/images/production.jpg" width="400" height="300" alt="" aria-hidden="true">
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 pull-right">
			<img class="img-responsive best-of-badge-sharing" src="resources/images/logos/best-of-badge-14-15.gif" alt="Image showing Catalogue For Philanthropy as one of the best for 2014-2015">
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>
<!-- removed img closing tag -->