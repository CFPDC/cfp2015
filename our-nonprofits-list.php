<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="col-xs-12 text-center">Our Nonprofits</h1>
  </div>
</div>
<div class="clearfix">
  <img src="http://lorempixel.com/1200/400/sports" style="width:100%" alt="First slide">
</div>
<main class="container-fluid search-results" role="main">
<div class="row">
  <div class="col-xs-12 hidden-xs sort-display-menu-container">
    <div class="pull-right sort-display-menu">
      <button class="btn btn-link pull-left clearfix sort-toggle collapsed" data-toggle="collapse" data-target="#sortBy" aria-expanded="false" aria-controls="sortByCollapse">
      Sort By
      </button>
      <ul class="collapse sort-by list-unstyled dropdown-menu" id="sortBy">
        <li><a href="javascript:void(0);" data-sort="category">Category</a></li>
        <li><a href="javascript:void(0);" data-sort="name">Name</a></li>
        <li><a href="javascript:void(0);" data-sort="region">Region</a></li>
        <li><a href="javascript:void(0);" data-sort="year">Year</a></li>
      </ul>
      <div class="display-group pull-left">
        <label id="viewLabel">Display As:</label>
        <div class="btn-group" role="group" aria-label="viewLabel">
          <button class="btn btn-sort active" title="Display as a grid" data-toggle="tooltip" data-placement="top"><span class="fa fa-th fa-2x"><span class="sr-only">Display as a grid</span></span></button>
          <button class="btn btn-sort" title="Display as a list" data-toggle="tooltip" data-placement="top"><span class="fa fa-th-list fa-2x"><span class="sr-only">Display as a list</span></span></button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-10 col-xs-offset-1 visible-xs filter-toggle-button">
    <button class="btn btn-primary center-block" data-toggle="collapse" data-target="#asideFilter" aria-expanded="false" aria-controls="asideFilter">Filter Results</button>
  </div>
  <aside class="collapse col-xs-12 col-sm-3" id="asideFilter">
    <form onsubmit="return iso_doit()">
      <div class="input-group form-group form-group-lg">
        <input type="text" class="form-control" id="filtertext" si="30" placeholder="SEARCH NONPROFITS">
        <span class="input-group-btn">
        <button class="btn btn-gray btn-lg"><span class="fa fa-search"><span class="sr-only">Submit Search</span></span></button>
        </span>
      </div>
    </form>
    <h3>Filter Your Search</h3>
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#natureSearch" aria-expanded="false" aria-controls="natureSearch">
      Nature
      </button>
      <div class="collapse selections" id="natureSearch">
        <button class="btn btn-link select-all" data-list="natureSubCat">Select All</button>
        <ul class="list-unstyled">
          <li>
            <label for="animals">
              <input type="checkbox" id="animals" class="natureSubCat"> Animals (<span class="environ-count">4</span>)
            </label>
          </li>
          <li>
            <label for="environment">
              <input type="checkbox" id="environment" class="natureSubCat"> Environment (<span class="environ-count">3</span>)
            </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of nature section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#cultureSearch" aria-expanded="false" aria-controls="cultureSearch">
      Culture
      </button>
      <div class="collapse selections" id="cultureSearch">
        <button class="btn btn-link select-all" data-list="cultureSubCat">Select All</button>
        <ul class="list-unstyled">
          <li>
            <label for="kid-art">
              <input type="checkbox" id="kid-art" class="cultureSubCat"> Community Arts/Arts for Kids (<span class="kid-art-count">4</span>)
            </label>
          </li>
          <li>
            <label for="arts">
              <input type="checkbox" id="arts" class="cultureSubCat"> Arts &amp; Culture (<span class="arts-count">3</span>)
            </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of culture section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#educationSearch" aria-expanded="false" aria-controls="educationSearch">
      Education
      </button>
      <div class="collapse selections" id="educationSearch">
        <button class="btn btn-link select-all" data-list="educationSubCat">Select All</button>
        <ul class="list-unstyled">
          <li>
            <label for="enrichment">
              <input type="checkbox" id="enrichment" class="educationSubCat"> Educational Enrichment (<span class="kid-art-count">4</span>)
            </label>
          </li>
          <li>
            <label for="literacy">
              <input type="checkbox" id="literacy" class="educationSubCat"> Literacy &amp; Learning (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="schools">
              <input type="checkbox" id="schools" class="educationSubCat"> Schools (<span class="arts-count">3</span>)
            </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of education section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#humanServicesSearch" aria-expanded="false" aria-controls="humanServicesSearch">
      Human Services
      </button>
      <div class="collapse selections" id="humanServicesSearch">
        <button class="btn btn-link select-all" data-list="humanServicesSubCat">Select All</button>
        <ul class="list-unstyled">
          <li>
            <label for="Aging">
              <input type="checkbox" id="Aging" class="humanServicesSubCat"> Aging (<span class="kid-art-count">4</span>)
            </label>
          </li>
          <li>
            <label for="families">
              <input type="checkbox" id="families" class="humanServicesSubCat"> Children&sbquo; Youth &amp; Families (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="commDev">
              <input type="checkbox" id="commDev" class="humanServicesSubCat"> Community Development (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="women">
              <input type="checkbox" id="women" class="humanServicesSubCat"> Girls &amp; Women (<span class="kid-art-count">4</span>)
            </label>
          </li>
          <li>
            <label for="health">
              <input type="checkbox" id="health" class="humanServicesSubCat"> Health &amp; Mental Health (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="housing">
              <input type="checkbox" id="housing" class="humanServicesSubCat"> Homelessness &amp; Housing (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="hunger">
              <input type="checkbox" id="hunger" class="humanServicesSubCat"> Hunger (<span class="kid-art-count">4</span>)
            </label>
          </li>
          <li>
            <label for="justice">
              <input type="checkbox" id="justice" class="humanServicesSubCat"> Legal &amp; Justice Programs (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="training">
              <input type="checkbox" id="training" class="humanServicesSubCat"> Life Skills&sbquo; Training &amp; Employment (<span class="arts-count">3</span>)
            </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of Human Services section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#areasServed" aria-expanded="false" aria-controls="areasServed">
      Areas Served
      </button>
      <div class="collapse selections" id="areasServed">
        <button class="btn btn-link select-all" data-list="areasSubCat">Select All</button>
        <div class="collaspingSection">
          <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#marylandCollapse" aria-expanded="false" aria-controls="marylandCollapse">Maryland</button>
          <div class="collapse" id="marylandCollapse">
            <ul class="list-unstyled">
              <li>
                <label for="md-1">
                  <input type="checkbox" id="md-1" class="areasSubCat"> area 1 (<span class="md-1-count">4</span>)
                </label>
              </li>
              <li>
                <label for="md-2">
                  <input type="checkbox" id="md-2" class="areasSubCat"> area 2 (<span class="md-2-count">3</span>)
                </label>
              </li>
            </ul>
          </div>
        </div>
        <!-- end of MD -->
        <div class="collaspingSection">
          <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#virginiaCollapse" aria-expanded="false" aria-controls="virginiaCollapse">Virginia</button>
          <div class="collapse" id="virginiaCollapse">
            <ul class="list-unstyled">
              <li>
                <label for="va-1">
                  <input type="checkbox" id="va-1" class="areasSubCat"> area 1 (<span class="va-1-count">4</span>)
                </label>
              </li>
              <li>
                <label for="va-2">
                  <input type="checkbox" id="va-2" class="areasSubCat"> area 2 (<span class="va-2-count">3</span>)
                </label>
              </li>
            </ul>
          </div>
          <!-- end of VA -->
          <div class="collaspingSection">
            <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#dcCollapse" aria-expanded="false" aria-controls="dcCollapse">District of Columbia</button>
            <div class="collapse" id="dcCollapse">
              <ul class="list-unstyled">
                <li>
                  <label for="dc-1">
                    <input type="checkbox" id="dc-1" class="areasSubCat"> area 1 (<span class="cd-1-count">4</span>)
                  </label>
                </li>
                <li>
                  <label for="dc-2">
                    <input type="checkbox" id="dc-2" class="areasSubCat"> area 2 (<span class="dc-2-count">3</span>)
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of DC -->
          <div class="collaspingSection">
            <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#internationalCollapse" aria-expanded="false" aria-controls="internationalCollapse">International</button>
            <div class="collapse" id="internationalCollapse">
              <ul class="list-unstyled">
                <li>
                  <label for="int-1">
                    <input type="checkbox" id="int-1" class="areasSubCat"> area 1 (<span class="int-1-count">4</span>)
                  </label>
                </li>
                <li>
                  <label for="int-2">
                    <input type="checkbox" id="int-2" class="areasSubCat"> area 2 (<span class="int-2-count">3</span>)
                  </label>
                </li>
              </ul>
            </div>
            <!-- end of International -->
          </div>
        </div>
      </div>
    </div>
    <!-- end of Areas Served section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#populationsServed" aria-expanded="false" aria-controls="populationsServed">
      Populations Served
      </button>
      <div class="collapse selections" id="populationsServed">
        <button class="btn btn-link select-all" data-list="popsSubCat">Select All</button>
        <ul class="list-unstyled">
          <li>
            <label for="infants">
              <input type="checkbox" id="infants" class="popsSubCat"> Infants &amp; Children (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="teens">
              <input type="checkbox" id="teens" class="popsSubCat"> Youth Age 6 to 15 <span class="sr-only">years old</span> (<span class="arts-count">3</span>)
            </label>
          </li>
          <li>
            <label for="adults">
              <input type="checkbox" id="adults" class="popsSubCat"> Adults (<span class="kid-art-count">4</span>)
            </label>
          </li>
          <li>
            <label for="elderly">
              <input type="checkbox" id="elderly" class="popsSubCat"> Elderly (<span class="arts-count">3</span>)
            </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of Populations served section -->
  </aside>
  <section class="col-xs-12 col-sm-9">
    <div class="row search-list-view">
      <ul class="list-inline search-list-jumplinks col-xs-12">
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-a">A</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-b">B</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-c">C</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-d">D</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-e">E</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-f">F</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-g">G</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-h">H</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-i">I</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-j">J</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-k">K</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-l">L</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-m">M</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-n">N</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-o">O</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-p">P</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-q">Q</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-r">R</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-s">S</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-t">T</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-u">U</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-v">V</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-x">X</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-y">Y</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#letter-z">Z</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-1">1</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-2">2</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-3">3</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-4">4</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-5">5</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-6">6</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-7">7</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-8">8</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-9">9</a></li>
        <li><a class="jumplink" href="javascript:void(0)" data-target="#number-0">0</a></li>
      </ul>
      <div class="col-xs-12">
        <h2 class="title-section" id="letter-a">A</h2>
        <div class="media">
          <div class="media-left">
            <a data-target="#" title="link to Alice Ferguson Foundation details">
              <img class="media-object" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40167">
            </a>
          </div>
          <div class="media-body">
            <div class="clearfix">
              <h3 class="media-heading collapsed" data-toggle="collapse" aria-expanded="false">Alice Ferguson Foundation<br><small>Accokeek, MD</small></h3>
            </div>
            <div class="collapse content">
              <p>Thanks to the Alice Ferguson Foundation, there’s a special place in Maryland where students from throughout the region can dig in the dirt, take a hike, and catch an unbeatable glimpse of the Potomac. </p>
              <p><a data-target="#" class="btn btn-primary" role="button">Learn More<span class="sr-only"> about Alice Ferguson Foundation</span></a> <a href="#" class="btn btn-secondary" role="button">Donate <span class="sr-only"> to Alice Ferguson Foundation</span></a></p>
            </div>
          </div>
        </div>
        <h2 class="title-section" id="letter-b">B</h2>
        <div class="media">
          <div class="media-left">
            <a href="#" title="link to Beacon House details">
              <img class="media-object" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40203">
            </a>
          </div>
          <div class="media-body">
            <div class="clearfix">
              <h3 class="media-heading collapsed" data-toggle="collapse" aria-expanded="false">Beacon House<br><small>Washington, DC</small></h3>
            </div>
            <div class="collapse content">
              <p>Operating in the middle of a large, subsidized housing project in Ward 5 where students typically perform in the lowest quartile on standardized tests, Beacon House creates a culture of self-discipline and academic success for its children. </p>
              <p><a href="#" class="btn btn-primary" role="button">Learn More<span class="sr-only"> about Beacon House</span></a> 
              <a href="#" class="btn btn-secondary" role="button">Donate <span class="sr-only"> to Beacon House</span></a></p>
            </div>
          </div>
        </div>

        <h2 class="title-section" id="letter-c">C</h2>
        <div class="media">
          <div class="media-left">
            <a href="#" title="link to Beacon House details">
              <img class="media-object" src="http://photos.cfp-dc.org/gallery/main.php?g2_view=core.DownloadItem&g2_itemId=40225">
            </a>
          </div>
          <div class="media-body">
            <div class="clearfix">
              <h3 class="media-heading collapsed" data-toggle="collapse" aria-expanded="false">Capital Partners for Education<br><small>Washington, DC</small></h3>
            </div>
            <div class="collapse content">
              <p>In today's economy, receiving a college education has never been more important. Since 1993, Capital Partners for Education has helped motivated, low-income high school and college students from the DC region overcome the academic and social barriers that prevent them from attending and succeeding in the colleges of their choice.</p>
              <p><a href="#" class="btn btn-primary" role="button">Learn More<span class="sr-only"> about Capital Partners for Education</span></a> <a href="#" class="btn btn-secondary" role="button">Donate <span class="sr-only"> to Capital Partners for Education</span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of row -->
  </section>
</div>
</main>
<?php get_template('footer'); ?>