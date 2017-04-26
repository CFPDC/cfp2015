<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>

<div class="clearfix hero">
	<img src="http://lorempixel.com/1200/400/nature" alt="" aria-hidden="true" class="img-responsive">
</div>

<h1 class="text-center volunteer-h1">Volunteer</h1>

<main role="main" class="container-fluid secondary volunteer-main">
	
<div class="row text-center">
	<a href="volunteer-search.php" class="btn btn-primary btn-inverse show-volunteer-categories">
		Show Selected Categories
	</a>
</div>	
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
        <h3><label class="volunteer-label" for="checkbox1"> <input id="checkbox1" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Environment</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item nature-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox2">
        <input id="checkbox2" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Animals </label> </h3>
       
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item culture-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox3">
          <input id="checkbox3" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Arts &amp; Culture</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item culture-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox4">
          <input id="checkbox4" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
          COMMUNITY ARTS</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item education-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox5">
        <input id="checkbox5" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Schools</label> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item international-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox6">
          <input id="checkbox6" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
          International</label> </h3>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item education-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox7"><input id="checkbox7" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Learning</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox8"><input id="checkbox8" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
          Families</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox9"><input id="checkbox9" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Girls &amp; Women </label> </h3>
       
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox10"><input id="checkbox10" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Health</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox11"><input id="checkbox11" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Aging</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox12"><input id="checkbox12" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Hunger</label></h3>
        
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox13"><input id="checkbox13" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Homelessness</a> </label></h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> <label class="volunteer-label" for="checkbox14"><input id="checkbox14" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
          Legal</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> 
        <label class="volunteer-label" for="checkbox15"><input id="checkbox15" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
          Life Skills</label> </h3>
        
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 subcat-grid-item human-services-cat">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="resources/images/localImg.jpg" alt="">
      <div class="cap cap-volunteer text-center">
        <h3> 
        <label class="volunteer-label" for="checkbox16"><input id="checkbox16" type="checkbox">
          <span class="sr-only">
          Show only
          </span>
        Community</label> </h3>
        
      </div>
    </div>
  </div>
</div>
<div class="row text-center">
	<a href="volunteer-search.php" class="btn btn-primary btn-inverse show-volunteer-categories">
		Show Selected Categories
	</a>
</div>
</main>
<?php get_template('footer'); ?>