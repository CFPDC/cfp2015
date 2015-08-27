<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Volunteer Opportunities</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<ul class="list-unstyled">
			<li><a href="javascript:void(0);" class="current">Events</a></li>
			<li><a href="how-to-give.php">How to Give</a></li>
			<li><a href="volunteer-opportunities.php">Volunteer Opportunities</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<p>Explore this list of upcoming events&mdash;open houses, galas, informational evenings,volunteer opportunities&mdash;to find what interests you. Click the name of the event and then use our &ldquo;share&rdquo; utility to let your friends know what&rsquo;s happening.</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>