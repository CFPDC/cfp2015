<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Donate Now / Decide Later</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="all-events.php">Events</a></li>
			<li><a href="mycatalogue.php">My Catalogue Account</a>
			<ul>
				<li><a href="sign-up.php">Create An Account</a></li>
				<li><a href="history.php">Giving History</a></li>
			</ul>
		</li>
		<li><a href="how-to-give.php">Ways to Give</a>
		<ul>
			<li><a href="giftcards.php">Gift Cards</a></li>
			<li><a href="javascript:void(0);" class="current">Donate Now / Decide Later</a></li>
			<li><a href="kids.php">Family Philanthropy</a></li>
			<li><a href="registry.php">Gift Registry</a></li>
			<li><a href="appreciated-stock.php">Appreciated Stock</a></li>
			<li><a href="corporate-sponsorship.php">Corporate Sponsorship</a></li>
		</ul>
	</li>
	<li><a href="volunteer-opportunities.php">Volunteer</a></li>
</ul>
</aside>
	<section class="col-sm-8">
		<p>Our Donate Now/Decide Later Fund allows you to make your tax-deductible  contribution to the Catalogue in November or December, and make your nonprofit selections after the busy holiday season is over. Just write &ldquo;DNDL&rdquo; in the designation box when you are going through the donation process. Then inform us in January who the recipients will be. Select <a href="checkout.php" class="text-bold" title="Visit the Donate page">DONATE NOW / DECIDE LATER</a> to begin the process. If you wish to contribute by mail, visit our <a href="contact.php" title="The Catalogue for Philanthropy contact information">contact page</a> for mailing information.</p>
		<p>When the holiday rush has settled down, and you have the leisure to make informed decisions, please write, call, or email (via our <a href="contact.php" title="The Catalogue for Philanthropy contact information">contact page</a>) and tell us which charities you have chosen. We will distribute your funds as you direct.</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>