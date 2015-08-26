<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Inspire</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid search-results secondary" role="main">
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
	<section class="col-xs-12 col-sm-9">
			<div class="col-xs-12 col-md-3 pull-right hidden-xs hidden-sm">
				<img class="vision-image img-responsive" src="/resources/images/vision/inspire-clear.png" alt="" aria-hidden="true">
			</div>
			<div class="col-xs-12 col-md-9">
			<a href="vision-report.php" class="back">Back<span class="sr-only">Go back to the Vision Report page</span></a>
				<p class="lead">We will inspire in others a vivid sense of the value that local charities create every day and stimulate giving, here, where we live.</p>
				
				<p>We believe that there is too much talk about what charities fail to do&dash;about scandals, overhead, waste, and duplication. Our focus in 2013&dash;and for the decade before it&dash;was on spotlighting the value that our network of charities brings to this community. We want to inspire volunteering and giving, but we also want to change the way people think about the nonprofit sector. We survey our charities every other year (we don&rsquo;t want to burden them; we want to help them!) and here is what they reported in 2012:</p>
				<p class="lead vs-heading">496,411</p>
				<p class="inspire-p">acres of land/miles of rivers protected each year</p>
				<p class="lead vs-heading">3,486,871 </p>
				<p class="inspire-p">hours of tutoring/mentoring provided yearly to eager learners</p>
				<p class="lead vs-heading">957,570</p>
				<p class="inspire-p">people served in arts outreach programs</p>
				<p class="lead vs-heading">99,578</p>
				<p class="inspire-p">medical exams and referrals for the uninsured and underinsured</p>
				
				<p>We look forward to sharing our nonprofits&rsquo; impact &ldquo;by the numbers&rdquo; again in 2014. Stay tuned!</p>
				<a class="forward pull-right" href="vision-transform.php">Next: Transform <span class="sr-only">Visit the Transform page</span></a>
			</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>