<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid volunteer-search">
	<div class="row">
		<h1 class="col-xs-12 col-sm-7 text-right volunteer-search-h1">Volunteer</h1>
		<div class="col-xs-12 col-sm-5 hidden-xs sort-display-menu-container">
			<div class="pull-right sort-display-menu">
				<div class="display-group pull-left">
					<label id="viewLabel">Display As:</label>
					<div class="btn-group" role="group" aria-label="viewLabel">
						<button class="btn btn-sort active" title="Display as a grid" data-toggle="tooltip" data-placement="top">
						<span class="fa fa-th fa-2x">
							<span class="sr-only">
								Display as a grid
							</span>
						</span>
						</button>
						<button class="btn btn-sort" title="Display as a list" data-toggle="tooltip" data-placement="top">
						<span class="fa fa-th-list fa-2x">
							<span class="sr-only">
								Display as a list
							</span>
						</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<main role="main" class="container-fluid secondary volunteer-search-main">
<div class="row">
	<aside class="col-xs-12 col-sm-3" id="asideFilter">
		<div class="well vol-filters">
			<h3 class="all-caps narrow-search">Narrow Your Choices</h3>
			<label class="volunteer-search-label" for="location">Where:</label>
			<div class="dropdown">
			  <button id="vol-location" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Select a location
			    <span class="caret" aria-hidden="true"></span>
			  </button>
			  <div class="dropdown-menu" id="vol-loc-list" aria-labelledby="vol-location">
			    <ul class="list-unstyled">
			    <li><label><input type="checkbox" data-filter=".DC">Washington D.C.</label></li>
			    <li><label><input type="checkbox" data-filter=".VA">Virginia</label></li>
			    <li><label><input type="checkbox" data-filter=".MD">Maryland</label></li>
			  </ul>
			  </div>
			</div>
			<label class="volunteer-search-label" for="time">When:</label>
			<div class="dropdown">
			  <button id="vol-time" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Select a time
			    <span class="caret" aria-hidden="true"></span>
			  </button>
			  <div class="dropdown-menu" id="vol-time-list" aria-labelledby="vol-time">
			    <ul class="list-unstyled">
			    <li><label><input type="checkbox" data-filter=".solo">Weekday Day</label></li>
			    <li><label><input type="checkbox" data-filter=".solo">Weekday Evening</label></li>
			    <li><label><input type="checkbox" data-filter=".solo">Weekend Day</label></li>
			    <li><label><input type="checkbox" data-filter=".solo">Weekend Evening</label></li>
			  </ul>
			  </div>
			</div>
			<label class="volunteer-search-label" for="volunteers">Who:</label>
			<div class="dropdown">
			  <button id="vol-group" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Select a group size
			    <span class="caret" aria-hidden="true"></span>
			  </button>
			  <div class="dropdown-menu" id="vol-group-list" aria-labelledby="vol-group"> 
			  <ul class="list-unstyled">
			    <li><label><input type="checkbox" data-filter=".solo">Myself</label></li>
			    <li><label><input type="checkbox" data-filter=".group">My Group or Team</label></li>
			    <li><label><input type="checkbox" data-filter=".family">My family (with Children)</label></li>
			  </ul>
			  </div>
			</div> 
		</div>
	</aside>
	<section class="col-sm-9">
		<p>RESULTS: 10</p>
		<p><b>Categories:</b> <span>Environment &amp; Animal Services <button class="fa fa-times-circle close remove-opt" aria-hidden="true"><span class="sr-only">Remove Environment &amp; Animal Services</span></button></span>
		<span>Youth Education &amp; Enrichment <button class="fa fa-times-circle close remove-opt"><span class="sr-only">Remove Youth Education &amp; Enrichment</span></button></span></p>
		<h2 class="volunteer-search-h2">Environment &amp; Animal Services</h2>
		<div class="row grid">
			<div class="col-xs-12 vol-listing iso-item VA solo eleven" data-time="11" data-region="VA" data-who="solo" data-category="Nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
					<div class="caption">
						<h2 class="name">Alice Ferguson Foundation</h2>
						<p>
							Connects people to nature through educations, stewardship, and advocacy.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item two MD group" data-time="2" data-region="MD" data-who="group" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
					<div class="caption">
						<h2 class="name">Amazon Conservation Association</h2>
						<p>
							Protects biodiversity and communities in the southwestern Amazon rainforest.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item two DC solo" data-time="2" data-region="DC" data-who="solo" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
					<div class="caption">
						<h2 class="name">Anacostia Watershed Society</h2>
						<p>
							Mobilizes the community to stop pollution, restore natural systems, and rebuild relationships to Anacostia River.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item eleven MD family" data-time="11" data-region="MD" data-who="family" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
					<div class="caption">
						<h2 class="name">Arlington Outdoor Education Association Longer Name</h2>
						<p>
							Provides hands&dash;on environmental education to Arlington children.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item one MD solo" data-time="1" data-region="MD" data-who="solo" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
					<div class="caption">
						<h2 class="name">Arlingtonians for a Clean Environment</h2>
						<p>
							Connects people to nature through educations, stewardship, and advocacy.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item  eleven MD group" data-time="11" data-region="MD" data-who="group" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
					<div class="caption">
						<h2 class="name">Audubon Naturalist Society</h2>
						<p>
							Protects biodiversity and communities in the southwestern Amazon rainforest.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 class="volunteer-search-h2">Youth Education &amp; Enrichment</h2>
		<div class="row grid">
			<div class="col-xs-12 vol-listing iso-item two DC group" data-time="2" data-region="DC" data-who="group" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/975.jpg">
					<div class="caption">
						<h2 class="name">Art Works Now Foundation</h2>
						<p>
							Connects people to nature through educations, stewardship, and advocacy.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item four DC solo" data-time="4" data-region="DC" data-who="solo" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/992.jpg">
					<div class="caption">
						<h2 class="name">Asian American LEAD Association</h2>
						<p>
							Protects biodiversity and communities in the southwestern Amazon rainforest.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item one DC family" data-time="1" data-region="DC" data-who="family" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1193.jpg">
					<div class="caption">
						<h2 class="name">Aspire! Afterschool Learning</h2>
						<p>
							Mobilizes the community to stop pollution, restore natural systems, and rebuild relationships to Anacostia River.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 vol-listing iso-item four DC family" data-time="4" data-region="DC" data-who="family" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/555.jpg">
					<div class="caption">
						<h2 class="name">BEST Kids Education Association Longer Name</h2>
						<p>
							Provides hands&dash;on environmental education to Arlington children.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>