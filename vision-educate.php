<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Educate</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/" alt="First slide">
</div>
<main class="container-fluid search-results secondary" role="main">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter">
		<ul style="list-style: none;">
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="cfp-team.php">Team</a></li>
			<li><a href="cfp-reviewers.php">Our Reviewers</a></li>
			<li><a href="sponsors.php">Sponsors</a></li>
			<li><a href="press.php">Press</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="vision-report.php" class="current">Vision Report</a></li>
		</ul>
	</aside>
	<section class="col-xs-12 col-sm-9">
		<div class="row">
			<p><a href="vision-report.php" class="back">Back<span class="sr-only">Go back to the Vision Report page</span></a></p>
			<div class="col-xs-12 col-sm-3 pull-right">
				<img class="vision-image img-responsive" src="/resources/images/vision/educate-clear.png">
			</div>
			<div class="col-xs-12 col-sm-9">
				<p class="lead">We will educate donors about the essential work that community&dash;based nonprofits perform.</p>
				<p>Though her day job may be President and Editor of the Catalogue for Philanthropy, Barbara Harman&rsquo;s passion for philanthropy extends well beyond the walls of the CFP. From sharing the stories of our charities, to evaluating the nonprofit evaluators, Barbara&rsquo;s dedication to educating donors about the work of community&dash;based nonprofits has made her a sought&dash;after speaker and writer. In 2013 she offered the keynote address at George Washington University&rsquo;s 5th annual Women &amp; Philanthropy Forum, spoke at an AFP panel on impact evaluation with Jacob Harold of Guidestar, and lead a discussion on powerful storytelling at the America’s Charities Membership Assembly.</p>
				
				<p>This year the Catalogue was excited to announce that Barbara became a featured blogger for Huffington Post, where she
					wrote <a href="http://www.huffingtonpost.com/barbara-harman/charitable-giving-inequality_b_4519397.html">&ldquo;Season of Getting, Season of Giving,&rdquo;</a> an exploration of income inequality and the role that philanthropy&ndash;and
				the Catalogue for Philanthropy&ndash;has in narrowing the gap.</p>
				<p>On the heels of her 2012 recognition as one of Washington Business Journal&rsquo;s &ldquo;Women Who Mean Business,&rdquo;
					Washingtonian Magazine acknowledged Barbara as one of the Most Powerful Women in Washington in 2013. The
					magazine featured her as one of 12 leaders in the nonprofit sector, and recognized her for &ldquo;shaping the dialogue about
					which small Washington charities are best&rdquo; as well as for her work as Executive Director of the Harman Family
				Foundation. (No, we don&rsquo;t know how she does it all &hellip; but we&rsquo;re impressed!).</p>
				<a class="forward pull-right" href="vision-convene.php">Next: Convene <span class="sr-only">Visit the Convene page</span></a>
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>