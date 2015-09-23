<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Saved Favorites</h1>
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
				<a href="all-news.php">All News</a>
			</li>
			<li>
				<a href="all-events.php">Events</a>
			</li>
			<li>
				<a href="how-to-give.php">How to Give</a>
			</li>
			<li>
				<a href="history.php">Donation History</a>
			</li>
			<li>
				<a href="javascript:void(0);" class="current">View Favorites</a>
			</li>
			<li>
				<a href="registry.php">Gift Registry</a>
			</li>
			<li>
				<a href="giftcards.php">Gift Cards</a>
			</li>
			<li>
				<a href="mycatalogue.php">My Catalogue</a>
			</li>
			<li>
				<a href="kids.php">Especially for Kids</a>
			</li>
			<li>
				<a href="donate.php">Donate Now / Decide Later</a>
			</li>
			<li>
				<a href="appreciated-stock.php">Appreciated Stock</a>
			</li>
			<li>
				<a href="corporate-sponsorship.php">Corporate Sponsorship</a>
			</li>
			<li>
				<a href="volunteer-opportunities.php">Volunteer Opportunities</a>
			</li>
		</ul>
	</aside>
	<section class="col-sm-8">
		<p>
		Interested in creating a list of Saved Favorites?  First, make sure you have created a free account (sign up at Create An Account on the left side of the screen).  Then, browse <a href="our-nonprofits.php">Our Nonprofits</a> and click the &ldquo;add to favorites&rdquo; link when you discover organizations that you find intriguing&mdash;as volunteer opportunities, candidates for a gift, pages you&rsquo;d like to print, or for any other reason.  At your Saved Favorites page you will be able to make multiple donations, add items to a gift registry, or create and then print your own, personalized Catalogue. But first, browse <a href="our-nonprofits.php">Our Nonprofits</a>, click the &ldquo;add to favorites&rdquo; link as you find things that interest you, and then return here when you&rsquo;re ready.
		</p>
		<p>
		<a href="favorites_process.php" class="needs-page" title="Visit the Saved Favorites page">View Saved Favorites</a>
		</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>