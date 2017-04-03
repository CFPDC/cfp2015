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
		<div class="well">
			<h3 class="all-caps narrow-search">Narrow Your Choices</h3>
			<label class="volunteer-search-label" for="location">Where:</label>
			<select name="location" class="narrow-search" id="location" mode="checkbox">
				<option value="0">Select a location</option>
				<option value=".DC" data-region="DC">Washington D.C.</option>
				<option value=".MD" data-region="MD">Maryland</option>
				<option value=".VA" data-region="VA">Virginia</option>
			</select>
			<label class="volunteer-search-label" for="time">When:</label>
			<select name="time" class="narrow-search" id="time" mode="checkbox">
				<option value="0" data-time="0">Select a time</option>
				<option value=".eleven" data-time="11">Weekday Day</option>
				<option value=".two" data-time="2">Weekday Evening</option>
				<option value=".one" data-time="1">Weekend Day</option>
				<option value=".four" data-time="4">Weekend Evening</option>
			</select>
			<label class="volunteer-search-label" for="volunteers">Who:</label>
			<select name="volunteers" class="narrow-search" id="volunteers" mode="checkbox">
				<option value="9">Select a group size</option>
				<option value=".solo" data-who="solo">Myself</option>
				<option value=".group" data-who="group">My Group or Team</option>
				<option value=".family" data-who="family">My family (with Children)</option>
			</select>
		</div>
	</aside>
	<section class="col-sm-9">
		<p>RESULTS: 10</p>
		<p>Environment &amp; Animal Services <span class="fa fa-times-circle close" aria-hidden="true"></span></p>
		<p>Youth Education &amp; Enrichment <span class="fa fa-times-circle close" aria-hidden="true"></span></p>
		<h2 class="volunteer-search-h2">Environment &amp; Animal Services</h2>
		<div class="row grid">
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item VA solo eleven" data-time="11" data-region="VA" data-who="solo" data-category="Nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
					<div class="caption">
						<h2 class="name">Alice Ferguson Foundation</h2>
						<p>
							Connects people to nature through educations, stewardship, and advocacy.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Nature</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item two MD group" data-time="2" data-region="MD" data-who="group" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
					<div class="caption">
						<h2 class="name">Amazon Conservation Association</h2>
						<p>
							Protects biodiversity and communities in the southwestern Amazon rainforest.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Nature</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item two DC solo" data-time="2" data-region="DC" data-who="solo" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
					<div class="caption">
						<h2 class="name">Anacostia Watershed Society</h2>
						<p>
							Mobilizes the community to stop pollution, restore natural systems, and rebuild relationships to Anacostia River.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Nature</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item eleven MD family" data-time="11" data-region="MD" data-who="family" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
					<div class="caption">
						<h2 class="name">Arlington Outdoor Education Association Longer Name</h2>
						<p>
							Provides hands&dash;on environmental education to Arlington children.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Nature</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item one MD solo" data-time="1" data-region="MD" data-who="solo" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
					<div class="caption">
						<h2 class="name">Arlingtonians for a Clean Environment</h2>
						<p>
							Connects people to nature through educations, stewardship, and advocacy.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Nature</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item  eleven MD group" data-time="11" data-region="MD" data-who="group" data-category="nature">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
					<div class="caption">
						<h2 class="name">Audubon Naturalist Society</h2>
						<p>
							Protects biodiversity and communities in the southwestern Amazon rainforest.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Nature</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 class="volunteer-search-h2">Youth Education &amp; Enrichment</h2>
		<div class="row grid">
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item two DC group" data-time="2" data-region="DC" data-who="group" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/975.jpg">
					<div class="caption">
						<h2 class="name">Art Works Now Foundation</h2>
						<p>
							Connects people to nature through educations, stewardship, and advocacy.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Education</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item four DC solo" data-time="4" data-region="DC" data-who="solo" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/992.jpg">
					<div class="caption">
						<h2 class="name">Asian American LEAD Association</h2>
						<p>
							Protects biodiversity and communities in the southwestern Amazon rainforest.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Education</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 iso-item one DC family" data-time="1" data-region="DC" data-who="family" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1193.jpg">
					<div class="caption">
						<h2 class="name">Aspire! Afterschool Learning</h2>
						<p>
							Mobilizes the community to stop pollution, restore natural systems, and rebuild relationships to Anacostia River.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Education</small>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-sm-4 col-md-3 iso-item four DC family" data-time="4" data-region="DC" data-who="family" data-category="education">
				<div class="thumbnail">
					<img alt="" src="http://www.cfp-dc.org/images/dc/cropped/555.jpg">
					<div class="caption">
						<h2 class="name">BEST Kids Education Association Longer Name</h2>
						<p>
							Provides hands&dash;on environmental education to Arlington children.
						</p>
						<div class="bottom-align">
							<p>
								<a href="#" class="btn btn-secondary" role="button">Volunteer</a>
							</p>
							<p>
								<small>Education</small>
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