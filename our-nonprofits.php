<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="col-xs-12 text-center">Our Nonprofits</h1>
  </div>
</div>
<main role="main" class="container-fluid search-results">
<div class="row">
  <div class="col-xs-12 hidden-xs sort-display-menu-container">
    <div class="pull-right sort-display-menu">
      <div class="pull-left sort-by">
        <label for="sort-by-list" data-filter-group="sort-by-list">Sort By:</label>
        <select class="form-control input-lg sort-by-select" id="sort-by-list">
          <option value="category">Category</option>
          <option value="name">Name</option>
          <option value="region">Region</option>
          <option value="year">Year</option>
        </select>
      </div>
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
  <div class="col-xs-10 col-xs-offset-1 visible-xs filter-toggle-button">
    <button class="btn btn-primary center-block" data-toggle="collapse" data-target="#asideFilter" aria-expanded="false" aria-controls="asideFilter">Filter Results</button>
  </div>
  <aside class="col-xs-12 col-sm-3" id="asideFilter">
    <form onsubmit="return iso_doit()">
      <div class="input-group form-group form-group-lg">
        <input type="text" class="form-control" id="filtertext" si="30" placeholder="SEARCH NONPROFITS">
        <span class="input-group-btn">
        <button class="btn btn-gray btn-lg">
        <span class="fa fa-search">
        <span class="sr-only">
        Submit Search
        </span>
        </span>
        </button>
        </span>
      </div>
    </form>
    <h3>Filter Your Search</h3>
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#natureSearch" aria-expanded="false" aria-controls="natureSearch"> Nature </button>
      <div class="collapse selections" id="natureSearch">
        <button class="btn btn-link select-all" data-type="unchecked" data-list="natureSubCat" data-paramName="strCategory-nature" data-paramValue="nature">Select All</button>
        <ul class="list-unstyled normal">
          <li>
            <label for="animals">
              <input type="checkbox" id="animals" class="natureSubCat filter-parameter" data-paramName="strCategory-nature" data-paramValue="nature-animals">
              Animals (
              <span class="environ-count">
              4
              </span>
            ) </label>
          </li>
          <li>
            <label for="environment">
              <input type="checkbox" id="environment" class="natureSubCat filter-parameter" data-paramName="strCategory-nature" data-paramValue="nature-environment">
              Environment (
              <span class="environ-count">
              3
              </span>
            ) </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of nature section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#cultureSearch" aria-expanded="false" aria-controls="cultureSearch"> Culture </button>
      <div class="collapse selections" id="cultureSearch">
        <button class="btn btn-link select-all" data-type="unchecked" data-list="cultureSubCat" data-paramName="strCategory-culture" data-paramValue="culture">Select All</button>
        <ul class="list-unstyled normal">
          <li>
            <label for="kid-art">
              <input type="checkbox" id="kid-art" class="cultureSubCat filter-parameter" data-paramName="strCategory-culture" data-paramValue="culture-community-arts">
              Community Arts/Arts for Kids (
              <span class="kid-art-count">
              4
              </span>
            ) </label>
          </li>
          <li>
            <label for="arts">
              <input type="checkbox" id="arts" class="cultureSubCat filter-parameter" data-paramName="strCategory-culture" data-paramValue="culture-arts-culture">
              Arts &amp; Culture (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of culture section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#educationSearch" aria-expanded="false" aria-controls="educationSearch"> Education </button>
      <div class="collapse selections" id="educationSearch">
        <button class="btn btn-link select-all" data-type="unchecked" data-list="educationSubCat" data-paramName="strCategory-education" data-paramValue="education">Select All</button>
        <ul class="list-unstyled normal">
          <li>
            <label for="enrichment">
              <input type="checkbox" id="enrichment" class="educationSubCat filter-parameter" data-paramName="strCategory-education" data-paramValue="education-enrichment">
              Educational Enrichment (
              <span class="kid-art-count">
              4
              </span>
            ) </label>
          </li>
          <li>
            <label for="literacy">
              <input type="checkbox" id="literacy" class="educationSubCat filter-parameter" data-paramName="strCategory-education" data-paramValue="education-literacy">
              Literacy &amp; Learning (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="schools">
              <input type="checkbox" id="schools" class="educationSubCat filter-parameter" data-paramName="strCategory-education" data-paramValue="education-schools">
              Schools (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of education section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#humanServicesSearch" aria-expanded="false" aria-controls="humanServicesSearch"> Human Services </button>
      <div class="collapse selections" id="humanServicesSearch">
        <button class="btn btn-link select-all" data-type="unchecked" data-list="humanServicesSubCat" data-paramName="strCategory-human-services" data-paramValue="human-services">Select All</button>
        <ul class="list-unstyled normal">
          <li>
            <label for="Aging">
              <input type="checkbox" id="Aging" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-aging">
              Aging (
              <span class="kid-art-count">
              4
              </span>
            ) </label>
          </li>
          <li>
            <label for="families">
              <input type="checkbox" id="families" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-children-youth">
              Children&sbquo; Youth &amp; Families (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="commDev">
              <input type="checkbox" id="commDev" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-community-development">
              Community Development (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="women">
              <input type="checkbox" id="women" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-girls-women">
              Girls &amp; Women (
              <span class="kid-art-count">
              4
              </span>
            ) </label>
          </li>
          <li>
            <label for="health">
              <input type="checkbox" id="health" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-health">
              Health &amp; Mental Health (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="housing">
              <input type="checkbox" id="housing" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-homelessness">
              Homelessness &amp; Housing (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="hunger">
              <input type="checkbox" id="hunger" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-hunger">
              Hunger (
              <span class="kid-art-count">
              4
              </span>
            ) </label>
          </li>
          <li>
            <label for="justice">
              <input type="checkbox" id="justice" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-legal">
              Legal &amp; Justice Programs (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="training">
              <input type="checkbox" id="training" class="humanServicesSubCat filter-parameter" data-paramName="strCategory-human-services" data-paramValue="human-services-life-skills">
              Life Skills&sbquo; Training &amp; Employment (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of Human Services section -->
    <div>
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#areasServed" aria-expanded="false" aria-controls="areasServed"> Areas Served </button>
      <div class="collapse selections" id="areasServed">
        <button class="btn btn-link select-all" data-type="unchecked" data-list="areasSubCat" data-paramName="strCategory-areas" data-paramValue="areas-served">Select All</button>
        <div class="collaspingSection">
          <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#marylandCollapse" aria-expanded="false" aria-controls="marylandCollapse">Maryland</button>
          <div class="collapse" id="marylandCollapse">
            <ul class="list-unstyled normal">
              <li>
                <label for="md-1">
                  <input type="checkbox" id="md-1" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="md-1">
                  area 1 (
                  <span class="md-1-count">
                  4
                  </span>
                ) </label>
              </li>
              <li>
                <label for="md-2">
                  <input type="checkbox" id="md-2" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="md-2">
                  area 2 (
                  <span class="md-2-count">
                  3
                  </span>
                ) </label>
              </li>
            </ul>
          </div>
        </div>
        <!-- end of MD -->
        <div class="collaspingSection">
          <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#virginiaCollapse" aria-expanded="false" aria-controls="virginiaCollapse">Virginia</button>
          <div class="collapse" id="virginiaCollapse">
            <ul class="list-unstyled normal">
              <li>
                <label for="va-1">
                  <input type="checkbox" id="va-1" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="va-1">
                  area 1 (
                  <span class="va-1-count">
                  4
                  </span>
                ) </label>
              </li>
              <li>
                <label for="va-2">
                  <input type="checkbox" id="va-2" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="va-2">
                  area 2 (
                  <span class="va-2-count">
                  3
                  </span>
                ) </label>
              </li>
            </ul>
          </div>
          <!-- end of VA -->
          <div class="collaspingSection">
            <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#dcCollapse" aria-expanded="false" aria-controls="dcCollapse">District of Columbia</button>
            <div class="collapse" id="dcCollapse">
              <ul class="list-unstyled normal">
                <li>
                  <label for="dc-1">
                    <input type="checkbox" id="dc-1" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="dc-1">
                    area 1 (
                    <span class="cd-1-count">
                    4
                    </span>
                  ) </label>
                </li>
                <li>
                  <label for="dc-2">
                    <input type="checkbox" id="dc-2" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="dc-2">
                    area 2 (
                    <span class="dc-2-count">
                    3
                    </span>
                  ) </label>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of DC -->
          <div class="collaspingSection">
            <button class="btn btn-link state-collapse" data-toggle="collapse" data-target="#internationalCollapse" aria-expanded="false" aria-controls="internationalCollapse">International</button>
            <div class="collapse" id="internationalCollapse">
              <ul class="list-unstyled normal">
                <li>
                  <label for="int-1">
                    <input type="checkbox" id="int-1" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="int-1">
                    area 1 (
                    <span class="int-1-count">
                    4
                    </span>
                  ) </label>
                </li>
                <li>
                  <label for="int-2">
                    <input type="checkbox" id="int-2" class="areasSubCat filter-parameter" data-paramName="strCategory-areas" data-paramValue="int-2">
                    area 2 (
                    <span class="int-2-count">
                    3
                    </span>
                  ) </label>
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
      <button class="btn btn-link category-toggle" data-toggle="collapse" data-target="#populationsServed" aria-expanded="false" aria-controls="populationsServed"> Populations Served </button>
      <div class="collapse selections" id="populationsServed">
        <button class="btn btn-link select-all" data-type="unchecked" data-list="popsSubCat" data-paramName="strCategory-population" data-paramValue="pop-served">Select All</button>
        <ul class="list-unstyled normal">
          <li>
            <label for="infants">
              <input type="checkbox" id="infants" class="popsSubCat filter-parameter" data-paramName="strCategory-population" data-paramValue="pop-served-infants">
              Infants &amp; Children (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="teens">
              <input type="checkbox" id="teens" class="popsSubCat filter-parameter" data-paramName="strCategory-population" data-paramValue="pop-served-kids">
              Youth Age 6 to 15
              <span class="sr-only">
              years old
              </span>
              (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
          <li>
            <label for="adults">
              <input type="checkbox" id="adults" class="popsSubCat filter-parameter" data-paramName="strCategory-population" data-paramValue="pop-served-adults">
              Adults (
              <span class="kid-art-count">
              4
              </span>
            ) </label>
          </li>
          <li>
            <label for="elderly">
              <input type="checkbox" id="elderly" class="popsSubCat filter-parameter" data-paramName="strCategory-population" data-paramValue="pop-served-elderly">
              Elderly (
              <span class="arts-count">
              3
              </span>
            ) </label>
          </li>
        </ul>
      </div>
    </div>
    <!-- end of Populations served section -->
  </aside>
  <section class="col-xs-12 col-sm-9">
    <!--<div class="row grid">-->
    <div class="row grid nonprofits">
      <div class="col-xs-12 iso-item nonprofit-listing" data-year="2008" data-region="VA" data-category="culture">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/165.jpg">
          <div class="caption">
            <h2 class="name">Bowen McCauley Dance Company<br>
            <small class="city">Arlington, VA</small></h2>
            <p class="sr-only iso-hidden">
            2014 CULTURE: Performing, Literary, and Visual Arts
            </p>
            <p>
            Founded in 1996 by dancer, teacher, and choreographer Lucy Bowen McCauley, whose dual training in music and dance is the hallmark of her choreography, Bowen McCauley Dance Company is known for its live music, talented corps of dancers, and rich collaborations with outstanding designers and musicians.
            </p>
            <div class="bottom-align">
              <p>
              <a href="#" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="checkout.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Culture</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 iso-item nonprofit-listing" data-year="2014" data-region="MD" data-category="nature">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
          <div class="caption">
            <h2 class="name" >Alice Ferguson Foundation<br>
            <small class="city">Accokeek, MD</small></h2>
            <p class="sr-only iso-hidden">
            2014 CULTURE: Performing, Literary, and Visual Arts
            </p>
            <p>
            Thanks to the Alice Ferguson Foundation, there’s a special place in Maryland where students from throughout the region can dig in the dirt, take a hike, and catch an unbeatable glimpse of the Potomac. That place is Hard Bargain Farm, which annually hosts nearly 6,000 K-8 students who come to interact with plants and animals about which many of them.
            </p>
            <div class="bottom-align">
              <p>
              <a href="#" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="checkout.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Nature</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 iso-item nonprofit-listing" data-year="2014" data-region="DC" data-category="nature">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/217.jpg">
          <div class="caption">
            <h2 class="name">DC Greens<br>
            <small class="city">Washington, DC</small></h2>
            <p>
            Here is a troubling statistic: one in five children aged 10-17 is overweight or obese in our nation’s capital, making it third in the country for childhood obesity. DC Greens comes at this tough problem from multiple angles. First, it unites educators and nonprofits from all eight wards of the city, bringing them together to raise awareness and develop.
            </p>
            <div class="bottom-align">
              <p>
              <a href="#" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="checkout.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Nature</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 iso-item nonprofit-listing" data-year="2010" data-region="DC" data-category="culture">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/162.jpg">
          <div class="caption">
            <h2 class="name">United States Capitol Historical Society<br>
            <small class="city">Washington, DC</small></h2>
            <p class="sr-only iso-hidden">
            2010 CULTURE: Performing, Literary, and Visual Arts
            </p>
            <p>
            Recent surveys reveal a woeful lack of historical education in the United States – and this is true even for DC students who live in a city with a wealth of learning opportunities. But many have never even visited the Capitol. The non-partisan (and non-governmental) US Capitol Historical Society is committed to turning things around.
            </p>
            <div class="bottom-align">
              <p>
              <a href="#" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="donate.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Culture</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 iso-item nonprofit-listing" data-year="2011" data-region="MD" data-category="nature">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/233.jpg">
          <div class="caption">
            <h2 class="name" >Rock Creek Conservancy <br>
            <small class="city">Bethesda, MD</small></h2>
            <p>
            One of the largest forested urban parks on earth, Rock Creek Park is nestled within the Rock Creek Watershed, which spreads over 77-square miles and is home to nearly 500,000 people.
            </p>
            <div class="bottom-align">
              <p>
              <a href="#" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="checkout.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Nature</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 iso-item nonprofit-listing" data-year="2014" data-region="DC" data-category="education">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/266.jpg">
          <div class="caption">
            <h2 class="name">Latin American Montessori Bilingual Public Charter School<br>
            <small class="city">Washington, DC</small></h2>
            <p>
            A unique charter school for children ages 3 to 5th grade, Latin American Montessori Bilingual creates a nurturing, empowering environment both for non-native-English speakers (who might elsewhere be penalized for their lack of fluency) and English-dominant ones (who might otherwise not benefit from learning a new language).
            </p>
            <div class="bottom-align">
              <p>
              <a href="#" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="checkout.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Education</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 iso-item nonprofit-listing" data-year="2014" data-region="DC" data-category="education">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/196.jpg">
          <div class="caption">
            <h2 class="name">The Posse Foundation<br>
            <small class="city">Washington, DC</small></h2>
            <p>
            The Posse Foundation identifies public high school students with extraordinary academic and leadership potential who might otherwise be overlooked in the college admissions process, and places them in multicultural teams (“posses”) of ten students that act as support systems on campus and beyond.
            </p>
            <div class="bottom-align">
              <p>
              <a href="commit.php?test=123" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="checkout.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Education</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 iso-item nonprofit-listing clearfix" data-year="2014" data-region="MD" data-category="human-services">
        <div class="thumbnail">
          <img src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
          <div class="caption">
            <h2 class="name" >KEEN Greater DC (Kids Enjoy Exercise Now)<br>
            <small class="city">Bethesda, MD</small></h2>
            <p>
            It was clear from the beginning: children, teenagers, and young adults with profound disabilities&mdash;autism, cerebral palsy, Down syndrome, developmental disabilities, and other severe health problems&mdash;needed some help. Existing organizations focused on medical, vocational, and occupational needs, but none offered exercise and recreational programs designed especially for young people with severe developmental and physical disabilities.
            </p>
            <div class="bottom-align">
              <p>
              <a href="#" class="btn btn-primary learn-more" role="button">Learn More</a> <a href="checkout.php" class="btn btn-secondary donate-nonprofit" role="button">Donate</a>
              </p>
              <p>
              <small>Human Services</small>
              </p>
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