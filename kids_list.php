<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="text-center">Especially for Kids</h1>
  </div>
</div>
<div class="clearfix hero">
  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
  <div class="row">
    <aside class="col-sm-3 who-we-are-nav" id="asideFilter">
      <ul class="list-unstyled">
        <li>
          <a href="all-events.php">Events</a>
        </li>
        <li>
          <a href="mycatalogue.php">My Catalogue Account</a>
          <ul>
            <li>
              <a href="sign-up.php">Create An Account</a>
            </li>
            <li>
              <a href="history.php">Giving History</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="how-to-give.php">Ways to Give</a>
          <ul>
            <li>
              <a href="giftcards.php">Gift Cards</a>
            </li>
            <li>
              <a href="donate.php">Donate Now / Decide Later</a>
            </li>
            <li>
              <a href="javascript:void(0);" class="current">Family Philanthropy</a>
            </li>
            <li>
              <a href="registry.php">Gift Registry</a>
            </li>
            <li>
              <a href="appreciated-stock.php">Appreciated Stock</a>
            </li>
            <li>
              <a href="corporate-sponsorship.php">Corporate Sponsorship</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="volunteer-opportunities.php">Volunteer</a>
        </li>
      </ul>
    </aside>
    <section class="col-xs-12 col-sm-9">
      <p>
        Welcome to Especially for Kids! Scroll through our photos and descriptions until you find something that interests you. The list is sorted by category, but you can also sort it by location if you prefer to look in &ldquo;your own backyard.&rdquo; If you want to learn more, click the name of the organization to get to its page on the Catalogue website; sometimes there&rsquo;s even a video! Return to this page by clicking &ldquo;back to list.&rdquo;
      </p>
      <p>
        To make the fullest use of this portal, you will need to log in (or sign up to create a donor account if you don&rsquo;t have one). Once you do, you will see checkboxes next to each entry. As you and your child identify organizations that interest you, click the relevant boxes. When you&rsquo;re done, make sure to click Add Checked Items to My List and then View My List before you get ready to donate or to print your own mini&dash;catalogue. If you want to donate online click the Donate button. If you want to print first, click Print My Catalogue.
      </p>
      <p>
        Enjoy!
      </p>
      <a class="btn btn-primary" href="login.php">View or Add to My Kids List</a>
      <div class="col-xs-7 pull-right">
        <div class="pull-right">
          <button class="btn btn-link pull-left clearfix sort-toggle collapsed" data-toggle="collapse" data-target="#sortBy" aria-expanded="false" aria-controls="sortByCollapse"> Sort By </button>
          <ul class="collapse sort-by list-unstyled dropdown-menu normal category-sort" id="sortBy">
            <li>
              <button class="btn btn-link" data-sort-by="category">Category</button>
            </li>
            <li>
              <button class="btn btn-link" data-sort-by="name">Name</button>
            </li>
            <li>
              <button class="btn btn-link" data-sort-by="region">Region</button>
            </li>
            <li>
              <button class="btn btn-link" data-sort-by="year">Year</button>
            </li>
          </ul>
        </div>
      </div>
      <div class="row js-isotope grid" data-isotope-options='{ "layoutMode": "fitRows","itemSelector": ".iso-item", "getSortData": {"name": ".name", "category": ".category", "year": ".year", "region": ".region"}}'>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Nature</h2>
          <div class="media">
            <div class="hidden">
              <span class="region">
                MD
              </span>
              <span class="year">
                2008
              </span>
              <span class="category">
                nature
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=71852">Alice Ferguson Foundation</a></h3>
              <p>
                Thanks to the Alice Ferguson Foundation, there&rsquo;s a special place in Maryland where students from throughout the region can dig in the dirt, take a hike, and catch an unbeatable glimpse of the Potomac. That place is Hard Bargain Farm, which annually hosts nearly 6,000 K&dash;8 students who come to interact with plants and animals about which many of them &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Culture: Community Arts</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                VA
              </span>
              <span class="year">
                2010
              </span>
              <span class="category">
                culture
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=94559">The Art League</a></h3>
              <p>
                The philosophy of The Art League is simple: nurture the artist and you enrich the entire community. For seasoned artists and curious newcomers alike, the organization provides accessible exhibit space and a wide range of classes in virtually all visual arts disciplines. In collaboration with the court system, it also serves as home to Space of Her Own &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Culture: Performing, Literary, and Visual Arts</h2>
          <div class="media">
            <div class="hidden">
              <span class="region">
                MD
              </span>
              <span class="year">
                2009
              </span>
              <span class="category">
                culture
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=94149">Adventure Theatre MTC</a></h3>
              <p>
                The longest&dash;running professional theatre for children and families in the DC region, Adventure Theatre has begun a brand new act: in 2012, it merged with Musical Theater Center, uniting award&dash;winning children&rsquo;s productions with high&dash;quality musical theater education. Today, ATMTC enthralls 75,000 young people (and parents), cultivating the next &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Education: Enrichment</h2>
          <div class="media">
            <div class="hidden">
              <span class="region">
                DC
              </span>
              <span class="year">
                2014
              </span>
              <span class="category">
                education
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=95721">826DC</a></h3>
              <p>
                Co&dash;founded by writer Dave Eggers and educator Ninive Calegari, and named for its first home at 826 Valencia in San Francisco, 826DC is grounded in the belief that great leaps in learning happen when students receive the right kind of one&dash;on&dash;one attention. It recruits and trains volunteers who provide educational support and critically important &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Education: Literacy and Learning</h2>
          <div class="media">
            <div class="hidden">
              <span class="region">
                DC
              </span>
              <span class="year">
                2007
              </span>
              <span class="category">
                education
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=94669">AppleTree Institute for Education Innovation</a></h3>
              <p>
                Low&dash;income children stand to gain the most from high quality pre&dash;school education, but they are also the least likely to receive it. And this is true even though states predict the number of jail cells they will need by assessing the lack of reading proficiency in fourth graders. So you can see why AppleTree Institute is dedicated to closing the &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Education: Schools</h2>
          <div class="media">
            <div class="hidden">
              <span class="region">
                DC
              </span>
              <span class="year">
                2014
              </span>
              <span class="category">
                education
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=95742">Bishop John T Walker School for Boys</a></h3>
              <p>
                As the first African&dash;American Bishop of the Episcopal Diocese of Washington, The Right Rev John Thomas Walker took to heart his parents&rsquo; core belief that education is the door to opportunity. That same belief is at the heart of the Anacostia&dash;based school that now bears his name. The Bishop John T Walker School for Boys nurtures the spiritual, &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Human Services: Children, Youth, and Families</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                VA
              </span>
              <span class="year">
                2014
              </span>
              <span class="category">
                human-services
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=95704">The Arc of Northern Virginia</a></h3>
              <p>
                Virginia is ranked 47th in the nation for services for people with intellectual and developmental disabilities&ndash;an appalling statistic for the families in our region whose loved ones have autism, Down syndrome, cerebral palsy, rare chromosomal disorders, and other disabilities. Many of these residents&ndash;over 16,000, in fact&ndash;benefit from services &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Human Services: Community Development</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                VA
              </span>
              <span class="year">
                2014
              </span>
              <span class="category">
                human-services
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=95615">Bikes for the World</a></h3>
              <p>
                It took a lifelong cyclist working in international development to come up with the idea. Keith Oberg founded Bikes for the World in 2005 and since then the group has collected and shipped nearly 90,000 bicycles to low&dash;income residents in 12 developing countries and the US. With the help of churches, synagogues, high schools, scout troops, and others, &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Human Services: Girls and Women</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                DC
              </span>
              <span class="year">
                2008
              </span>
              <span class="category">
                human-services
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=84054">FAIR Girls</a></h3>
              <p>
                The International Labor Organization estimates that of the millions forced into the sex trade, 50% are children. Traffickers play on the vulnerability of young girls&ndash;and their communities often view these girls as criminals rather than victims. FAIR Girls was founded to speak for those who have been, or are at risk of being, trafficked. Through &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Human Services: Health, Mental Health, and Aging</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                DC
              </span>
              <span class="year">
                2005
              </span>
              <span class="category">
                human-services
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=94368">Aspire Counseling</a></h3>
              <p>
                It often feels like darkness to those at risk for mental illness: pain, social stigma, and barriers to service confront them daily. Aspire Counseling is committed to meeting the mental health needs of all Montgomery County residents, regardless of income. It provides therapy for all individuals, at every stage of life&ndash;when they become parents, battle &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Human Services: Hunger, Homelessness, and Housing</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                VA
              </span>
              <span class="year">
                2007
              </span>
              <span class="category">
                human-services
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=71653">Arlington Food Assistance Center</a></h3>
              <p>
                Fresh fruits and vegetables gleaned from a farm or garden, a half&dash;gallon of milk and a dozen eggs, meat, bread, and canned goods when the pantry is bare. This is what Arlington Food Assistance Center means to the nearly 8% of Arlington families living below the poverty line, and to others who simply can&rsquo;t afford the food they need. Serving 1600 &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Human Services: Legal Services and Justice Programs</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                DC
              </span>
              <span class="year">
                2009
              </span>
              <span class="category">
                human-services
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=94234">Mentoring Today</a></h3>
              <p>
                Youth at the secure residential treatment facility for young males (New Beginnings) have frequent arrests to their names&ndash;and some have up to 24 referrals to delinquency court. When they return home, poverty, violence, and staggering unemployment await them. So Mentoring Today targets 17&dash;19 year&dash;olds before, during, and after re&dash;entry. Through a &hellip;
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 iso-item">
          <h2>Human Services: Life Skills, Training, and Employment</h2>
          <div class="media">
            <div class="sr-only">
              <span class="region">
                MD
              </span>
              <span class="year">
                2012
              </span>
              <span class="category">
                human-services
              </span>
            </div>
            <div class="media-left">
              <a href="#"> <img class="media-object" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg"> </a>
            </div>
            <div class="media-body">
              <h3 class="media-heading name"><a target="_blank" href="nonprofit-detail.php?id=95035">Arts on the Block</a></h3>
              <p>
                Creative thought and innovation are crucial to the development of our communities&ndash;but too often young artists don’t have the chance to put them into practice. Arts on the Block recruits youth from areas with high crime rates and gang activity, and engages them in community&dash;building projects with professional artists. Apprentices in Pour Your ART Out &hellip;
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_template('footer'); ?>