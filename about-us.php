<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">About The Catalogue For Philanthropy</h1>
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
	<section class="col-xs-12 col-sm-8">
		<p class="lead">The Catalogue for Philanthropy takes the guesswork out of giving by identifying the best community-based charities in Washington D.C. and nearby Maryland and Virginia.</p>
		<div class="row">
			<div class="col-sm-12 col-md-7">
				<p>We do this by identifying the best community-based charities in Greater Washington and spreading the word through our annual Catalogue (distributed to more than 25,000 people!), website, social media, partnerships and events throughout the year.</p> </br>
				<p>The Catalogue for Philanthropy's commitment to strengthening our community of nonprofits runs deep. From vetting charity applicants to creating educational and awareness-building programs, select the links below to learn how we do it all.</p>
			</div>
			<div class="col-sm-12 col-md-5">
				<figure class="embed-responsive embed-responsive-16by9">
					<iframe src="https://player.vimeo.com/video/110540179" class="embed-responsive-item" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<figcaption class="cfp-video-caption"><a href="http://vimeo.com/110540179">Give Like a Local</a> from <a href="http://vimeo.com/user9318152">Catalogue for Philanthropy: GW</a> on <a href="https://vimeo.com">Vimeo</a>.</figcaption>
				</figure>
			</div>
		</div>
		<div class="row">
			<ul class="about-list list-unstyled col-sm-12">
				<li><a href="vetting.php">Vetting:</a> An overview of our application</li>
				<li><a href="storytelling.php">Storytelling:</a> Communicating the mission and impact of our nonprofits</li>
				<li><a href="training.php">Training:</a> An overview of the educational seminars and marketing resources we provide to our charities</li>
				<li><a href="sharing.php">Sharing:</a> Using print and digital media to connect citizens with our charities</li>
			</ul>
		</div>
	</div>
</section>
</main>
<?php get_template('footer'); ?>