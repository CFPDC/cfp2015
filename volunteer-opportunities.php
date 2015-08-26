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
			<li><a href="all-events.php">Events</a></li>
			<li><a href="how-to-give.php">How to Give</a></li>
			<li><a href="javascript:void(0);" class="current">Volunteer Opportunities</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<p>Catalogue nonprofits are recruiting volunteers to help them run, organize, or participate in the following events. Identify an organization that interests you, and then call or email the contact person to find out what you can do to help out or join in. Click &ldquo;more event info&rdquo; to see the entire entry, including event details. Click the event name, and then &ldquo;share&rdquo; to let others know!</p>
	</section>
</div>
</main>
<?php get_template('footer'); ?>