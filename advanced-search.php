<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Advanced Search</h1>
	</div>
</div>
<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main role="main" class="container-fluid secondary">
<div class="row">
	<aside class="col-xs-12 col-sm-3 who-we-are-nav" id="asideFilter" role="navigation">
		<ul class="list-unstyled">
			<li>
				<a href="our-nonprofits.php" target="_self" title="View our Nonprofits" class="">Our Vetted Nonprofits</a>
			</li>
			<li>
				<a href="our-nonprofits.php?strCategory=nature" target="_self" title="View our Nature Nonprofits" class="">Nature Nonprofits</a>
			</li>
			<li>
				<a href="our-nonprofits.php?strCategory=culture" target="_self" title="View our Culture Nonprofits" class="hover">Culture Nonprofits</a>
			</li>
			<li>
				<a href="our-nonprofits.php?strCategory=education" target="_self" title="View our Education Nonprofits" class="">Education Nonprofits</a>
			</li>
			<li>
				<a href="our-nonprofits.php?strCategory=human-services" target="_self" title="View our Human Services Nonprofits">Human Services Nonprofits</a>
			</li>
		</ul>
	</aside>
	<section class="col-sm-8">
		<div class="col-sm-6">
			<h2>Quick Links</h2>
			<p>The links below provide an easy means of accessing our nonprofits based on their location, the populations they serve, where they work, etc. Find the link that&rsquo;s most helpful to you.</p>
			<ul class="list-unstyled">
				<li><a href="all-nonprofits.php?strSort=name">Nonprofits A-Z</a></li>
				<li><a href="/cfpdc/all-nonprofits.php?q=2014">2014-15 Nonprofits</a></li>
				<li><a href="/cfpdc/nonprofits-list.php?strCategory=%&amp;strSort=category">By Category</a></li>
				<li><a href="quicklinks-areas-served.php">By Areas Served</a></li>
				<li><a href="quicklinks-areas-served.php?which=hq" 2href="nonprofits-result.php?qcklink=4&amp;groupby=hq&amp;filterby=hq">By Headquarters Location</a></li>
				<li><a href="nonprofits-result.php?qcklink=5&amp;age=Infants,Pre-K">Serving Infants and Children</a></li>
				<li><a href="nonprofits-result.php?qcklink=6&amp;age=Youth,Adolescence,Young+Adult">Serving Youth Age 6 to 15</a></li>
				<li><a href="nonprofits-result.php?qcklink=7&amp;age=Adult">Serving Adults</a></li>
				<li><a href="nonprofits-result.php?qcklink=8&amp;age=Elderly">Serving the Elderly</a></li>
				<li><a href="nonprofits-result.php?qcklink=9&amp;schools=_">Working in Schools</a></li>
				<li><a href="nonprofits-result.php?qcklink=10&amp;international=_">Working Internationally</a></li>
				<li><a href="nonprofits-result.php?qcklink=11&amp;unitedway=_">United Way Member Agencies</a></li>
				<li><a href="nonprofits-result.php?qcklink=12&amp;cfc=_">Combined Federal Campaign Participants</a></li>
			</ul>
		</div>
		<div class="col-sm-6">
			<div class="well">
				<h3>Organization Search</h3>
				<p>Select (1) or more options below</p>
				<form onsubmit="return iso_doit()">
					<div class="input-group form-group">
						<label for="category">Category</label>
						<select class="category-select" id="category">
							<option value="NATURE">NATURE</option>
							<option value="CULTURE: Community Arts">CULTURE: Community Arts</option>
							<option value="CULTURE: Cultural Heritage">CULTURE: Cultural Heritage</option>
							<option value="CULTURE: Performing, Literary, and Visual Arts">CULTURE: Performing, Literary, and Visual Arts</option>
							<option value="EDUCATION: Enrichment">EDUCATION: Enrichment</option>
							<option value="EDUCATION: Literacy and Learning">EDUCATION: Literacy and Learning</option>
							<option value="EDUCATION: Schools">EDUCATION: Schools</option>
							<option value="HUMAN SERVICES: Children, Youth, and Families">HUMAN SERVICES: Children, Youth, and Families</option>
							<option value="HUMAN SERVICES: Community Development">HUMAN SERVICES: Community Development</option>
							<option value="HUMAN SERVICES: Girls and Women">HUMAN SERVICES: Girls and Women</option>
							<option value="HUMAN SERVICES: Health, Mental Health, and Aging">HUMAN SERVICES: Health, Mental Health, and Aging</option>
							<option value="HUMAN SERVICES: Hunger, Homelessness, and Housing">HUMAN SERVICES: Hunger, Homelessness, and Housing</option>
							<option value="HUMAN SERVICES: Legal Services and Justice Programs">HUMAN SERVICES: Legal Services and Justice Programs</option>
							<option value="HUMAN SERVICES: Life Skills, Training, and Employment">HUMAN SERVICES: Life Skills, Training, and Employment</option>
							<option value="HUMAN SERVICES: Nonprofit Support/Volunteerism">HUMAN SERVICES: Nonprofit Support/Volunteerism</option>
						</select>
					</div>
					<div class="input-group form-group">
						<label for="year">Year</label>
						<select class="year-select" id="year">
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
							<option>2009</option>
							<option>2008</option>
							<option>2007</option>
							<option>2006</option>
							<option>2005</option>
							<option>2004</option>
							<option>2003</option>
						</select>
					</div>
					<div class="input-group form-group">
						<label for="location">Location</label>
						<select class="location-select" id="location">
							<option>All Locations</option>
							<option>DC</option>
							<option>VA</option>
							<option>MD</option>
						</select>
					</div>
					<div class="input-group form-group">
						<label for="zip">Enter a Zipcode</label>
						<input type="text" class="form-control" id="zip" size="10">
					</div>
					<div class="input-group form-group">
						<label for="keyword">Keyword(s)</label>
						<input type="text" class="form-control" id="keyword" size="15">
					</div>
					<button type="submit" class="btn btn-primary">SEARCH</button>
				</form>
			</div>
		</div>
	</section>
</div>
</main>
<?php get_template('footer'); ?>