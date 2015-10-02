<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Family Philanthropy</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main role="main" class="container-fluid secondary">
<div class="row">
	<aside class="col-sm-3 who-we-are-nav" id="asideFilter" role="navigation">
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
						<a href="javascript:void(0);" class="current">Family Philanthropy</a>
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
		We have assembled a list of charities that work to save our environment, introduce kids to the arts, help the hungry and homeless, and aid children in need. We think all of them would be particularly appealing to children. Our list contains pictures as well as the first few lines of the story&mdash;just enough to get kids interested. (Clicking the name of the organization gets you the whole story.) Once your children have identified organizations to which they would like to contribute, they will be able to print their own personal Catalogues, and thumb through them until they decide what inspires them most. Please log in if you would like to introduce your child to philanthropy and print an Especially for Kids Catalogue.
		</p>
		<p>
		<a href="kids_list.php" class="needs-page" title="View the Especially for Kids page">View Especially for Kids</a>
		</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>