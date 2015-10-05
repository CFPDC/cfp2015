<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Appreciated Stock</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main role="main" class="container-fluid secondary">
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter">
		<nav role="navigation">
			<ul class="list-unstyled">
				<li>
					<a href="all-events.php">Events</a>
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
					<a href="how-to-give.php" class="active-parent">Ways to Give</a>
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
							<a href="javascript:void(0);" class="current">Appreciated Stock</a>
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
		</nav>
	</aside>
	<section class="col-sm-8">
		<p class="lead">
			Donating appreciated stock can be a tax&dash;wise way to conduct your charitable giving. Investors Capital Inc., a member of NASD &amp; SIPC, handles gifts of stock for Catalogue donors. Here’s how it works:
		</p>
		<ul class="list-unstyled">
		<li class="stock">
			<strong>Step One:</strong> Complete and SIGN the <a href="http://www.cfp-dc.org/email_content/PDF/CFPDC%20Letter%20of%20Authorization%20to%20Transfer%20Stock.pdf" target="_blank" title="Letter of Authorization">Letter of Authorization</a> and send it to your broker.
		</li>
		<li class="stock">
			<strong>Step Two:</strong> Email a copy of the Letter of Authorization to Emma Bloksberg&dash;Fireovid at <a href="mailto: emmabf@cfp-dc.org" title="Email Emma Bloksberg-Fireovid">emmabf@cfp-dc.org</a>. Once you do this, we will advise our broker to watch for the transfer and to liquidate the stock when it is received into our account. PLEASE NOTE: there is NO IDENTIFYING INFORMATION attached to a stock transfer, so alerting us is CRUCIAL.
		</li>
		<li class="stock">
			<strong>Step Three:</strong> We will tell you the amount of the liquidation after fees: this is the sum you will have to distribute. Please remember that stock prices can vary tremendously even in a single day, and certainly in the day or two that it takes to receive and sell your shares, so there is often a difference between the value on the day it was contributed and its value when liquidated. The liquidation amount may be lower, or higher, than when you made the transfer. The proceeds of the sale, after fees, is what you will have to distribute.
		</li>
		<li class="stock">
			<strong>Step Four:</strong> We will contact you to discuss distribution of your funds.
		</li>
		<li class="stock">
			The Catalogue charges no fee for this service, but our broker does charge a modest fee, which will be deducted from the total amount raised by the sale of securities.
		</li>
		<li class="stock">
			Your contribution of stock to the Catalogue for Philanthropy is a charitable gift and is deductible (according to IRS tax laws) in the calendar year in which the donation is made. Please contact your tax advisor for more information.
		</li>
		<li class="stock">
			Please feel free to call or email us with questions.
		</li>
	</ul>
	</section>
</div>
</main>
<?php get_template('footer'); ?>