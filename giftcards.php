<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Purchasing a Gift Card or E-Card</h1>
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
			<li><a href="how-to-give.php">How to Give</a></li>
			<li><a href="history.php">Donation History</a></li>
			<li><a href="favorites.php">View Favorites</a></li>
			<li><a href="registry.php">Gift Registry</a></li>
			<li><a href="javascript:void(0);" class="current">Gift Cards</a></li>
			<li><a href="mycatalogue.php">My Catalogue</a></li>
			<li><a href="kids.php">Especially for Kids</a></li>
			<li><a href="donate.php">Donate Now / Decide Later</a></li>
			<li><a href="appreciated-stock.php">Appreciated Stock</a></li>
			<li><a href="corporate-sponsorship.php">Corporate Sponsorship</a></li>
			<li><a href="volunteer-opportunities.php">Volunteer Opportunities</a></li>
		</ul>
	</aside>
	<section class="col-sm-8">
		<p>A Gift Card is a great (and convenient) way to let someone know that you care about your community and that you think they do too. <span class="red-text">As the holidays approach, we recommend E&dash;cards, which can be sent to you for printing and hand delivery, or sent to your recipients directly via email. Just remember to choose the e&dash;card option.</span> Family members, friends, teachers, employees, are all great gift card recipients! Once you purchase a card, in denominations of $25, $50, $100, $150 and up, we will send it to you or to your recipient&dash;either as an e&dash;card or as a hard card in beautiful packaging, with instructions about visiting the Catalogue website, and choosing the charity or charities of their choice. Gift cards are redeemed during the checkout process using the code on the back of the card. We aim to fill gift card orders promptly, especially during the holiday season. But do leave time for your card to arrive in the US mail. In order to arrive in time for the holidays, we recommend that gift cards requested by mail are purchased no later than Friday, December 19th.</p>
		<button class="btn btn-primary" id="gift-card">Purchase a Gift Card or E-Card</button>
		<img src="resources/images/giftcard.jpg" class="img-responsive hidden-xs hidden-sm gift-card-img" alt aria-hidden="true">
		<h2>Redeeming a Gift Card</h2>
		<p>If you have received a gift card, you can redeem it on this site. Choose Our Nonprofits from the links above, and browse charities by field, region, or other areas of interest. Check out the search options on the left side of your screen.</p>
		<p>Once you&rsquo;ve chosen the charity to which you wish to make your donation, follow these steps:</p>
		<ol>
			<li>Click the donate button on that charity&rsquo;s page.</li>
			<li>On the Add to Giving Cart page, enter the amount you wish to donate, and click Add to Giving Cart.</li>
			<li>Click Proceed to Checkout.</li>
			<li>Answer the donor account question, and click Continue.</li>
			<li>Enter your email address (if you haven&rsquo;t already provided it) and then at Redeeming a Gift Card? enter the redemption code on the back of your card and click Proceed to Confirmation Page.</li>
			<li>Click $0 Balance&ndash;Submit Order with Gift Card as Payment. </li>
			<li>You're done!</li>
		</ol>
		<p>If you will be making multiple donations, continue browsing and choosing until you have spent your card&rsquo;s value (the minimum donation amount is $25). Each time you click donate, you will add another charity to your giving cart. When you&rsquo;ve made all of your choices, click Proceed to Checkout, and then enter your redemption code in the appropriate place. Your gifts will be sent to the charities of your choice.</p>
		<p><strong>PLEASE NOTE</strong> that gift cards do not have declining balances. You must spend your entire card in one session. Enjoy!</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>