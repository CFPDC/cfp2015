<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Events Calendar</h1>
	</div>
</div>
<main role="main" class="container-fluid secondary">
<div class="row event-details-row">
	<div class="col-sm-3">
		<a href="all-events.php" class="back back-to-events">Back to All Events</a>
	</div>
</div>
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter" role="navigation">
		<ul class="list-unstyled">
			<li>
				<a href="javascript:void(0);" class="current">Events</a>
			</li>
			<li>
				<a href="mycatalogue.php">My Catalogue Account</a>
				<ul>
					<li>
						<a href="sign-up.php">Create An Account</a>
					</li>
					<li>
						<a href="history.php">Giving History</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="how-to-give.php">Ways to Give</a>
				<ul>
					<li>
						<a href="giftcards.php">Gift Cards</a>
					</li>
					<li>
						<a href="donate.php">Donate Now / Decide Later</a>
					</li>
					<li>
						<a href="kids.php">Family Philanthropy</a>
					</li>
					<li>
						<a href="registry.php">Gift Registry</a>
					</li>
					<li>
						<a href="appreciated-stock.php">Appreciated Stock</a>
					</li>
					<li>
						<a href="corporate-sponsorship.php">Corporate Sponsorship</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="volunteer-opportunities.php">Volunteer</a>
			</li>
		</ul>
	</aside>
	<section class="col-sm-8">
		<div id="calendar" class="calendar-container fc">
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>