<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Storytelling</h1>
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
		<p>We take a 3000&dash;word application and turn it into a compelling 170&dash;word story&ndash;with imagery that brings it to life. We convey, in a human voice, the need that a charity meets, the programs that are at the core of what they do, and the impact they have on the community. Most small nonprofits don&rsquo;t have the communications staff to do this work for them. Telling their stories, in words and images, is what we do.</p>
		<p>Each charity&rsquo;s page on our website reflects its story &hellip; and so much more. We provide a platform for our charities to share volunteer opportunities, video, social media, and custom wish lists so you can see the real impact your gift will have.</p>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<img class="img-responsive" src="resources/images/storytelling.jpg" alt="" aria-hidden="true">
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>