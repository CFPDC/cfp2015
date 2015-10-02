<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Training and Educating</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main role="main" class="container-fluid secondary">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter" role="navigation">
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
		<a href="about-us.php" class="back">About Us<span class="sr-only">Go back to the About Us page</span></a>
		<p>You know the proverb: give a man a fish and you feed him for a day, teach him how to fish&hellip;At the Catalogue, we don&rsquo;t merely hand out fish. We create resources and run workshops throughout the year on fundraising, marketing, communications and more. We make sure that our charities know how to reach out and create relationships, and we partner with others to bring the best programs to our nonprofits&ndash;at no cost.</p>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<img class="img-responsive" src="resources/images/training.jpg" alt="" aria-hidden="true">
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>