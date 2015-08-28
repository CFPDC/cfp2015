<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Vision Report </h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="cfp-team.php">Team</a></li>
			<li><a href="cfp-reviewers.php">Our Reviewers</a></li>
			<li><a href="sponsors.php">Sponsors</a></li>
			<li><a href="press.php">Press</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="vision-report.php" class="current">Vision Report</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-8">
	<div class="row">
		<p class="col-lg-10 lead">At the Catalogue for Philanthropy, we are agents for change, dedicated to the following goals. We will:</p>
		</div>
		<div class="vision-report">
		<div class="row">
			<div class="col-sm-6 col-md-3 col-lg-3 first">
				<a href="vision-engage.php" class="thumbnail vision engage"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3">
				<a href="vision-create.php" class="thumbnail vision create"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 end">
				<a href="vision-empower.php" class="thumbnail vision empower"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 first">
				<a href="vision-expand.php" class="thumbnail vision expand"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3">
				<a href="vision-educate.php" class="thumbnail vision educate"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 end">
				<a href="vision-convene.php" class="thumbnail vision convene"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 first">
				<a href="vision-collaborate.php" class="thumbnail vision collaborate"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3">
				<a href="vision-inspire.php" class="thumbnail vision inspire"></a>
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3">
				<a href="vision-transform.php" class="thumbnail vision transform"></a>
			</div>
		</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>