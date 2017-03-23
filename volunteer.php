<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>

<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>

<h1 class="text-center volunteer-h1">VOLUNTEER</h1>

<main role="main" class="container-fluid secondary volunteer-main">
		
<div class="row subcategory-section">
  <ul class="nav nav-pills home-search volunteer-search col-sm-12 text-center">
    <li role="presentation">
      <button class="btn btn-link nature-btn">Nature</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link culture-btn">Culture</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link education-btn">Education</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link human-services-btn">Human Services</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link international-btn">International</button>
    </li>
    <li role="presentation">
      <button class="btn btn-link view-all-btn">View All</button>
    </li>
  </ul>
</div>
<div class="row subcategories volunteer-subcategories">
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item nature-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-nature=nature-environment" title="Show all Environment related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Environment</a> </h3>
        <input id="checkbox1" type="checkbox"><label class="volunteer-label" for="checkbox1">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item nature-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-nature=nature-animals" title="Show all Animals related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Animals</a> </h3>
        <input id="checkbox2" type="checkbox"><label class="volunteer-label" for="checkbox2">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item culture-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-culture=culture-arts-culture" title="Show all Arts &amp; Culture related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Arts &amp; Culture</a> </h3>
        <input id="checkbox3" type="checkbox"><label class="volunteer-label" for="checkbox3">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item culture-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-culture=culture-community-arts" title="Show all COMMUNITY ARTS/ARTS FOR KIDS related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          COMMUNITY ARTS/<br>
        ARTS FOR KIDS</a> </h3>
        <input id="checkbox4" type="checkbox"><label class="volunteer-label" for="checkbox4">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item education-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-education=education-schools" title="Show all Schools related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Schools</a> </h3>
        <input id="checkbox5" type="checkbox"><label class="volunteer-label" for="checkbox5">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item international-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-international=international-programs" title="Show all Educational Enrichment related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          International <br>
        Programs</a> </h3>
        <input id="checkbox6" type="checkbox"><label class="volunteer-label" for="checkbox6">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item education-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-education=education-literacy" title="Show all Literacy &amp; Learning related nonprofits"> 
          <span class="sr-only">
          Show only
          </span>
        Literacy &amp; Learning</a> </h3>
        <input id="checkbox7" type="checkbox"><label class="volunteer-label" for="checkbox7">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-human-services=human-services-children-youth" title="Show all Children&sbquo; Youth Families related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          Children&sbquo; Youth <br>
        Families</a> </h3>
        <input id="checkbox8" type="checkbox"><label class="volunteer-label" for="checkbox8">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-girls-women" title="Show all Girls &amp; Women related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Girls &amp; Women</a> </h3>
        <input id="checkbox9" type="checkbox"><label class="volunteer-label" for="checkbox9">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-health" title="Show all Health &amp; Mental Health related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Health &amp; Mental Health</a> </h3>
        <input id="checkbox10" type="checkbox"><label class="volunteer-label" for="checkbox10">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-aging" title="Show all Aging related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Aging</a> </h3>
        <input id="checkbox11" type="checkbox"><label class="volunteer-label" for="checkbox11">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-hunger" title="Show all Hunger related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Hunger</a> </h3>
        <input id="checkbox12" type="checkbox"><label class="volunteer-label" for="checkbox12">Select</label>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <a href="our-nonprofits.php?strCategory-human-services=human-services-homelessness" title="Show all Homelessness &amp; Housing related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Homelessness &amp; Housing</a> </h3>
        <input id="checkbox13" type="checkbox"><label class="volunteer-label" for="checkbox13">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3 class="multi-line"> <a href="our-nonprofits.php?strCategory-human-services=human-services-legal" title="Show all Legal &amp; Justice Programs related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          Legal &amp;<br>
        Justice Programs</a> </h3>
        <input id="checkbox14" type="checkbox"><label class="volunteer-label" for="checkbox14">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3 class="multi-line"> 
        <a href="our-nonprofits.php?strCategory-human-services=human-services-life-skills" title="Show all Life Skills, Training &amp; Employment related nonprofits">
          <span class="sr-only">
          Show only
          </span>
          Life Skills&sbquo;<br>
        Training &amp; Employment</a> </h3>
        <input id="checkbox15" type="checkbox"><label class="volunteer-label" for="checkbox15">Select</label>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> 
        <a href="our-nonprofits.php?strCategory-human-services=human-services-community-development" title="Show all Community Development related nonprofits">
          <span class="sr-only">
          Show only
          </span>
        Community Development</a> </h3>
        <input id="checkbox16" type="checkbox"><label class="volunteer-label" for="checkbox16">Select</label>
      </div>
    </div>
  </div>
</div>
<div class="row text-center">
	<button class="btn btn-primary show-volunteer-categories">
		Show Selected Categories
	</button>
</div>
</main>
<?php get_template('footer'); ?>