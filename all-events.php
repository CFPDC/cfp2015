<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">All Events</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="javascript:void(0);" class="current">Events</a></li>
			<li><a href="how-to-give.php">How to Give</a></li>
			<li><a href="history.php">Donation History</a></li>
			<li><a href="favorites.php">View Favorites</a></li>
			<li><a href="registry.php">Gift Registry</a></li>
			<li><a href="giftcards.php">Gift Cards</a></li>
			<li><a href="mycatalogue.php">My Catalogue</a></li>
			<li><a href="kids.php">Especially for Kids</a></li>
			<li><a href="donate.php">Donate Now / Decide Later</a></li>
			<li><a href="appreciated-stock.php">Appreciated Stock</a></li>
			<li><a href="corporate-sponsorship.php">Corporate Sponsorship</a></li>
			<li><a href="volunteer-opportunities.php">Volunteer Opportunities</a></li>
		</ul>
	</aside>
	<section class="col-sm-8">
		<p class="lead">Explore this list of upcoming events&mdash;open houses, galas, informational evenings,volunteer opportunities&mdash;to find what interests you. Click the name of the event and then use our &ldquo;share&rdquo; utility to let your friends know what&rsquo;s happening.</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>