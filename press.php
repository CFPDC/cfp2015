<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Press</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/" alt="First slide">
</div>
<main class="container-fluid search-results secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<ul style="list-style: none;">
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="cfp-team.php">Team</a></li>
			<li><a href="cfp-reviewers.php">Our Reviewers</a></li>
			<li><a href="sponsors.php">Sponsors</a></li>
			<li><a href="press.php" class="current">Press</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="vision-report.php">Vision Report</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<p class="lead">For information about the Catalogue, please contact:</p>
		<p>Barbara Harman, </br>
		President and Editor  </br>
		<a href="tel:202-955-6538" class="phone" title="call The Catalogue for Philanthropy's main office">202-955-6538</a> </br>
		<a href="mailto:bharman@cfp-dc.org" title="contact Barbara Harman">bharman@cfp-dc.org</a></p>
		<p class="lead">In the News:</p>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="longlist embed-responsive-item" src="more_info.php"></iframe>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>