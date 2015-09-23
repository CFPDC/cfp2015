<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">My Catalogue</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li>
				<a href="all-events.php">Events</a>
			</li>
			<li>
				<a href="javascript:void(0);" class="current">My Catalogue Account</a>
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
		<p>
		If you like holding something in your hands and want to print your own Catalogue you can do that here. Browse our nonprofits, click &ldquo;add to favorites&rdquo; when you find the ones that interest you most, and then visit the View Favorites section where you can choose the Add to My Catalogue option. Return to this section, and the nonprofits you select will be turned into a pdf that you can view and print. To get started you'll need to Create an Account (it&rsquo;s free, of course) and build a favorites list. Then you&rsquo;ll be ready to go!
		</p>
		<p>
		<a href="sign-up.php" class="needs-page" title="Visit the Create An Account Page">Create My Catalogue</a>
		</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>