<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Corporate Sponsorship</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
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
			<li><a href="donate.php">Donate Now / Decide Later</a></li>
			<li><a href="kids.php">Family Philanthropy</a></li>
			<li><a href="registry.php">Gift Registry</a></li>
			<li><a href="appreciated-stock.php">Appreciated Stock</a></li>
			<li><a href="javascript:void(0);" class="current">Corporate Sponsorship</a></li>
		</ul>
	</li>
	<li><a href="volunteer-opportunities.php">Volunteer Opportunities</a></li>
</aside>
	<section class="col-sm-8">
		<p class="lead">Companies committed to corporate social responsibility can get involved with the Catalogue for Philanthropy in the following ways:</p>
		<h2>Community Connections</h2>
		<p>Community Connections is a customizable, web&dash;based portal that connects employees with our network of over 350 vetted charities in Greater Washington, and facilitates their involvement with these charities as volunteers and donors.</p>
		<h2>Sponsorships and Corporate Match</h2>
		<p>We offer sponsorship and gift matching opportunities for those organizations looking to partner with the Catalogue and help us educate and empower our nonprofits through workshops and events.</p>
		<h2>Employee and Client Gifts</h2>
		<p>Looking for a unique way to celebrate the holidays or reward a job well done? Catalogue for Philanthropy gift cards are an innovative and inspiring way to celebrate your team’s hard work and accomplishments. With gift cards, your recipients get to make an impact where it matters most to them.</p>
		<p>If your company is interested in these opportunities, contact Barbara Harman, President, at <a href="mailto:bharman@cfp-dc.org" title="Send Barbara Harman an email">bharman@cfp-dc.org</a></p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>