<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Vetting and Selecting</h1>
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
					<a href="about-us.php" class="current">About Us</a>
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
					<a href="vision-report.php">Vision Report</a>
				</li>
			</ul>
		</nav>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<a href="about-us.php" class="back">About Us<span class="sr-only">Go back to the About Us page</span></a>
		<div class="media team-member">
			<div class="media-left">
				<span class="fa fa-pencil-square-o fa-4x apply-heading" aria-hidden="true"></span>
			</div>
			<div class="media-body">
				<h2 class="media-heading apply-heading">Apply
				<small>(January&dash;February)</small>
				</h2>
				<p>At the beginning of each year, more than 200 charitable organizations apply to be included in the Catalogue for Philanthropy. All applicants must have 501c3 status with budgets under $3 million, be located in Greater Washington (the District of Columbia and nearby Maryland and Virginia counties), and provide significant services in this region. <a href="apply.php">Click here</a> for details about our application.</p>
			</div>
		</div>
		<div class="media team-member">
			<div class="media-left">
				<span class="fa fa-group fa-4x review-heading" aria-hidden="true"></span>
			</div>
			<div class="media-body">
				<h2 class="media-heading review-heading">Assemble Review Team
				<small>(February&dash;March)</small>
				</h2>
				<p>Once applications are processed, over 100 reviewers from foundations, corporate giving programs, peer nonprofits, and the philanthropic advisory community are matched with applicants in the reviewers&rsquo; fields of expertise.</p>
			</div>
		</div>
		<div class="media team-member">
			<div class="media-left">
				<span class="fa fa-calculator fa-4x process-heading" aria-hidden="true"></span>
			</div>
			<div class="media-body">
				<h2 class="media-heading process-heading">Begin the Review Process
				<small>(March&dash;April)</small>
				</h2>
				<ul>
					<li><strong>Program Review:</strong> <a href="cfp-reviewers.php">Reviewers</a> judge applications based on their assessment of the need	each organization exists to meet, the quality of the programs it creates to meet those needs, its leadership and staffing, and the evidence of the organization&rsquo;s impact. Most applications	receive 5 to 8 reviews, some more than that.</li>
					<li><strong>Financial Review:</strong> A team of financial reviewers from Raffa, PC assesses the financial soundness of potential finalists.  Among other things, the team looks for reasonable year&dash;to&dash;year projections of expenses and revenue, appropriate ratios of administrative to program costs (though there is no absolute cut&dash;off), reasonable salaries, board participation in fundraising and development, and fiscal transparency.</li>
					<li><strong>Site Visits:</strong> All reviewers are asked if they have site visited an organization within the past three years. Positive site visits confirm positive reviews. Negative site visits generate a phone call. Any organization that has not been visited by our review team will be visited by Catalogue staff. </li>
				</ul>
			</div>
		</div>
		<div class="media team-member">
			<div class="media-left">
				<span class="fa fa-clipboard fa-4x vetted-heading" aria-hidden="true"></span>
			</div>
			<div class="media-body">
				<h2 class="media-heading vetted-heading">Create the Vetted List
				<small>(May)</small>
				</h2>
				<p>Our goal is to create a balanced list of great nonprofits in all fields: we don&rsquo;t want all of our nonprofits to serve one category&ndash;for example all arts organizations or all programs that serve the elderly. While final decisions are editorial, they are always guided by the rankings and comments of our review team!</p>
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>
<!-- Removed extra closing div tag right before closing section tag -->