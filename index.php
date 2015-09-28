<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<h1 class="sr-only">Catalogue for Philanthropy: Greater Washington Area Home page</h1>
<div id="myCarousel" class="carousel slide clearfix hero" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="">
    </li>
    <li data-target="#myCarousel" data-slide-to="1" class="active">
    </li>
    <li data-target="#myCarousel" data-slide-to="2" class="">
    </li>
  </ol>
  <div class="carouselButtons">
    <button id="pauseButton" type="button" class="btn btn-link btn-xs">
    <span class="fa fa-pause fa-2x">
    <span class="sr-only">
    Pause the carousel
    </span>
    </span>
    </button>
    <button id="playButton" type="button" class="btn btn-link btn-xs hide">
    <span class="fa fa-play-circle fa-2x">
    <span class="sr-only">
    Play the carousel
    </span>
    </span>
    </button>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left">
    </span>
  </a>
  <div class="carousel-inner">
    <div class="item">
      <img src="http://lorempixel.com/1200/500/animals" class="img-responsive" alt="" aria-hidden="true">
      <div class="container">
        <div class="carousel-caption col-sm-4 col-md-3">
          <p class="h1">Slide 1</p>
          <p>
          Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.
          </p>
          <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
          </p>
        </div>
      </div>
    </div>
    <div class="item active">
      <img src="http://lorempixel.com/1200/500/nature" class="img-responsive" alt="" aria-hidden="true">
      <div class="container">
        <div class="carousel-caption col-sm-4 col-md-3">
          <p class="h1">Slide 2</p>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus.
          </p>
          <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
          </p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1200/500/abstract" class="img-responsive" alt="" aria-hidden="true">
      <div class="container">
        <div class="carousel-caption col-sm-4 col-md-3">
          <p class="h1">Slide 3</p>
          <p>
          Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.
          </p>
          <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right">
    </span>
  </a>
</div>
<main class="container-fluid" role="main">
<div class="row">
  <p class="lead text-center home-lead-text col-sm-8 col-sm-offset-2">
  Donec metus ex, maximus vel dolor vel, pellentesque dictum diam. Maecenas feugiat nulla sem, vel ultrices nisi fringilla in. Sed ac rutrum purus. Donec libero massa, pulvinar eget elit et, accumsan porttitor orci.
  </p>
  <hr class="col-sm-4 col-sm-offset-4">
</div>
<div class="row subcategory-section">
  <h2 class="center-block text-center clearfix">NONPROFITS</h2>
  <ul class="nav nav-pills home-search col-sm-12 text-center">
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
      <button class="btn btn-link view-all-btn">View All</button>
    </li>
  </ul>
</div>
<div class="row subcategories">
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="-dc.org/gallerm&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Environment</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Animals</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Arts &amp; Culture</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="#">
          <span class="sr-only">
          Show only
          </span>
          COMMUNITY ARTS/<br>
        ARTS FOR KIDS</a> </h3>
      </div>
    </div>
  </div>
</div>
<!-- Second row -->
<div class="row subcategories">
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Schools</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="#">
          <span class="sr-only">
          Show only
          </span>
          Educational <br>
        Enrichment</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Literacy &amp; Learning</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="#">
          <span class="sr-only">
          Show only
          </span>
          Children&sbquo; Youth <br>
        Families</a> </h3>
      </div>
    </div>
  </div>
</div>
<!-- third row -->
<div class="row subcategories">
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Girls &amp; Women</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Health &amp; Mental Health</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Aging</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Hunger</a> </h3>
      </div>
    </div>
  </div>
</div>
<!-- Fourth row -->
<div class="row subcategories">
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        Homelessness &amp; Housing</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="#">
          <span class="sr-only">
          Show only
          </span>
          Legal &amp;<br>
        Justice Programs</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3 class="multi-line"> <a href="#">
          <span class="sr-only">
          Show only
          </span>
          Life Skills&sbquo;<br>
        Training &amp; Employment</a> </h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumb">
      <img class="img-responsive" aria-hidden="true" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40157" alt="...">
      <div class="cap text-center">
        <h3> <a href="#">
          <span class="sr-only">
          Show only
          </span>
        COMMUNITY Development</a> </h3>
      </div>
    </div>
  </div>
</div>
<!-- end of subcategories -->
<div class="row text-center home-how-help-section">
  <div>
    <h3>How to Help</h3>
    <p class="col-sm-10 col-sm-offset-1">
    Ut non ex eget augue euismod tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean nec ultrices ex. Donec porta rhoncus ipsum, sed gravida urna posuere commodo.
    </p>
    <div class="col-sm-8 col-sm-offset-2">
      <a class="btn btn-primary pull-left" href="#">Donate to a Nonprofit</a> <a class="btn btn-secondary pull-right" href="volunteer-opportunities.php">Volunteer Opportunities</a>
    </div>
  </div>
</div>
</main>
<?php get_template('footer'); ?>