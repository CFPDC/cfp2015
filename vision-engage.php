<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Engage</h1>
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
			<p class="lead">We will engage the best minds in our community, pooling their knowledge to evaluate applicant charities and help us select the very best.</p>
			
			<p>We all approach charitable giving with the best intentions, but the truth is that exercising due diligence before making a donation is no small endeavor. Donors are always encouraged to analyze a charity’s finances, examine its programs, visit the site, and talk to the leaders &hellip; but between work, family, and other commitments, who has the time?</p>
			<div class="well">
				<blockquote>
					&ldquo;The selection process for the Catalogue for Philanthropy is really rigorous, so being selected is truly an honor. It demonstrates that we are having an impact on the community &hellip; and it puts us in the limelight.&rdquo;
					<p class="testimonial">Mark Robbins <small>Executive Director, Yellow Ribbon Fund, &ldquo;Supporting Wounded Warriors and Their Families&rdquo;</small></p>
				</blockquote>
			</div>
			<p>This is why each year the Catalogue sets out to do the important work of vetting&ndash;so our donors don&rsquo;t have to. We do this by relying on a <a href="cfp-reviewers.php">&ldquo;community of knowledge&rdquo;</a> to evaluate our nonprofit applicants. Harnessing the brainpower of this community we can <a href="vetting.php">look beyond the traditional metrics of evaluation</a> and ask questions that people don&rsquo;t always think to ask, or know how to assess: What need is a charity meeting? Is it doing so with excellence? Are its finances sound? What impact, tangible or intangible, is it having on the community it serves? This is how we determine which nonprofits are truly among &ldquo;the best.&rdquo; </p>
			<p>In 2013, 74 charities across Greater Washington (out of 200+ applicants) earned this distinction in the Catalogue for Philanthropy.</p>
			<a class="forward pull-right" href="vision-create.php">Next: Create <span class="sr-only">Visit the Create page</span></a>
		</div>
		<div class="col-xs-12 col-md-3 pull-right hidden-xs hidden-sm">
			<img class="vision-image img-responsive" src="/resources/images/vision/engage-clear.png" alt="" aria-hidden="true">
			<img class="vision-image img-responsive" src="/resources/images/vision/info-engage.png" aria-hidden="true" alt="Image of a pie chart showing the breakdown of 2013-2014 charities by catagories">
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>