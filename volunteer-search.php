<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid volunteer-search">
    <div class="row">
        <h1 class="col-xs-12 col-sm-9 col-sm-offset-1 text-center volunteer-search-h1">Volunteer</h1>
        <div class="col-xs-12 col-sm-2 hidden-xs sort-display-menu-container">
            <div class="pull-right sort-display-menu">
                <div class="display-group pull-left">
                    <label id="viewLabel">Display As:</label>
                    <div class="btn-group vol-views" role="group" aria-label="viewLabel">
                        <button class="btn btn-sort grid-view" data-list="false" title="Display as a grid" data-toggle="tooltip" data-placement="top">
                            <span class="fa fa-th fa-2x">
                                <span class="sr-only">
                                    Display as a grid
                                </span>
                            </span>
                        </button>
                        <button class="btn btn-sort list-view" data-list="true" title="Display as a list" data-toggle="tooltip" data-placement="top">
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
        <aside class="col-sm-3" id="asideFilter">
            <div class="well vol-filters">
                <h3 class="all-caps narrow-search">Narrow Your Choices</h3>
                <label class="volunteer-search-label" for="location">Where:</label>
                <div class="dropdown">
                    <button id="vol-location" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select a location
                        <span class="caret" aria-hidden="true"></span>
                    </button>
                    <div class="dropdown-menu" id="vol-loc-list" aria-labelledby="vol-location">
                        <ul class="list-unstyled" data-group="loc">
                            <li class="all-areas"><label><input class="vol-filter-input all-loc-dca" data-filter-group="dca" type="checkbox">DC-CityWide</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC1">DC-1</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC2">DC-2</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC3">DC-3</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC4">DC-4</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC5">DC-5</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC6">DC-6</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC7">DC-7</label></li>
                            <li><label><input class="vol-filter-input dca" type="checkbox" data-filter-group="dca" data-filter=".DC8">DC-8</label></li>

                            <li class="all-areas"><label><input class="vol-filter-input all-loc-mda" data-filter-group="mda" type="checkbox">MD-StateWide</label></li>
                            <li><label><input class="vol-filter-input mda" type="checkbox" data-filter-group="mda" data-filter=".MDF">MD-Frederick County</label></li>
                            <li><label><input class="vol-filter-input mda" type="checkbox" data-filter-group="mda" data-filter=".MDH">MD-Howard County</label></li>
                            <li><label><input class="vol-filter-input mda" type="checkbox" data-filter-group="mda" data-filter=".MDM">MD-Montgomery County</label></li>
                            <li><label><input class="vol-filter-input mda" type="checkbox" data-filter-group="mda" data-filter=".MDP">MD-Prince George's County</label></li>

                            <li class="all-areas"><label><input class="vol-filter-input all-loc-vaa" data-filter-group="vaa" type="checkbox">VA-Statewide</label></li>
                            <li><label><input class="vol-filter-input vaa" type="checkbox" data-filter-group="vaa" data-filter=".VAAC">VA-Arlington County</label></li>
                            <li><label><input class="vol-filter-input vaa" type="checkbox" data-filter-group="vaa" data-filter=".VAFC">VA-Fairfax County</label></li>
                            <li><label><input class="vol-filter-input vaa" type="checkbox" data-filter-group="vaa" data-filter=".VALC">VA-Loudon County</label></li>
                            <li><label><input class="vol-filter-input vaa" type="checkbox" data-filter-group="vaa" data-filter=".VAPC">VA-Prince William County</label></li>
                            <li><label><input class="vol-filter-input vaa" type="checkbox" data-filter-group="vaa" data-filter=".VACA">VA-City of Alexandria</label></li>
                            <li><label><input class="vol-filter-input vaa" type="checkbox" data-filter-group="vaa" data-filter=".VACF">VA-City of Fairfax</label></li>
                            <li><label><input class="vol-filter-input vaa" type="checkbox" data-filter-group="vaa" data-filter=".VACFC">VA-City of Falls Church</label></li>

                            <li class="all-areas"><label><input class="vol-filter-input" type="checkbox" data-filter=".IN">Internationally</label></li>

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
                        <ul class="list-unstyled" data-group="time">
                            <li><label><input class="vol-filter-input" type="checkbox" data-filter-group="time" data-filter=".WDD">Weekday Day</label></li>
                            <li><label><input class="vol-filter-input" type="checkbox" data-filter-group="time" data-filter=".WDE">Weekday Evening</label></li>
                            <li><label><input class="vol-filter-input" type="checkbox" data-filter-group="time" data-filter=".WKDD">Weekend Day</label></li>
                            <li><label><input class="vol-filter-input" type="checkbox" data-filter-group="time" data-filter=".WKDE">Weekend Evening</label></li>
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
                        <ul class="list-unstyled" data-group="group">
                            <li><label><input class="vol-filter-input" type="checkbox" data-filter-group="group" data-filter=".solo">Myself</label></li>
                            <li><label><input class="vol-filter-input" type="checkbox" data-filter-group="group" data-filter=".group">My Group or Team</label></li>
                            <li><label><input class="vol-filter-input" type="checkbox" data-filter-group="group" data-filter=".family">My family (with Children)</label></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </aside>
        <section class="col-sm-9">
            <p>RESULTS: 10</p>
            <p><b>Categories:</b> <span>Environment &amp; Animal Services <button class="fa fa-times-circle close remove-opt" aria-hidden="true"><span class="sr-only">Remove Environment &amp; Animal Services</span></button></span>
                <span>Youth Education &amp; Enrichment <button class="fa fa-times-circle close remove-opt"><span class="sr-only">Remove Youth Education &amp; Enrichment</span></button></span></p>
            <div id="idcResults"></div>
            <grid-view>
                <h2 class="volunteer-search-h2">Environment &amp; Animal Services</h2>
                <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice asdfasdfasfasdf Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                     <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                      <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                       <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                         <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                          <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                           <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                             <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                              <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                               <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                 <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                  <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                   <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                    <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                     <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                      <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                       <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                        <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                         <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                          <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                           <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                            <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                             <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                              <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                               <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item VAAC solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/87.jpg">
                            <div class="caption">
                                <h2 class="name">Alice Ferguson Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDP group WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1381.jpg">
                            <div class="caption">
                                <h2 class="name">Amazon Conservation Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/225.jpg">
                            <div class="caption">
                                <h2 class="name">Anacostia Watershed Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDA family WDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/94.jpg">
                            <div class="caption">
                                <h2 class="name">Arlington Outdoor Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDH solo WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/527.jpg">
                            <div class="caption">
                                <h2 class="name">Arlingtonians for a Clean Environment</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item MDF group WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/95.jpg">
                            <div class="caption">
                                <h2 class="name">Audubon Naturalist Society</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--end first section-->
                <h2 class="volunteer-search-h2">Youth Education &amp; Enrichment</h2>
                 <!--row-->
                <div class="row grid">
                    <div class="col-xs-12 vol-listing iso-item DC1 group WDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/975.jpg">
                            <div class="caption">
                                <h2 class="name">Art Works Now Foundation</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC2 solo WKE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/992.jpg">
                            <div class="caption">
                                <h2 class="name">Asian American LEAD Association</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DC3 family WKDD">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/1193.jpg">
                            <div class="caption">
                                <h2 class="name">Aspire! Afterschool Learning</h2>
                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 vol-listing iso-item DCA family WKDE">
                        <div class="thumbnail">
                            <img alt="" src="http://www.cfp-dc.org/images/dc/cropped/555.jpg">
                            <div class="caption">
                                <h2 class="name">BEST Kids Education Association Longer Name</h2>

                                <div class="bottom-align">
                                    <p>
                                        <a href="#" class="btn btn-secondary btn-block" role="button">Volunteer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </grid-view>
            <list-view>
                <ul class="list-grid-volunteer list-unstyled">
                    <li class="vol-list-listing MDP group WDE"><a href="">Amazon Conservation Association</a></li>
                    <li class="vol-list-listing DC2 group WDD"><a href="">Anacostia Watershed Society</a></li>
                    <li class="vol-list-listing MDH solo WKDD"><a href="">Arlingtonians for a Clean Environment</a></li>
                    <li class="vol-list-listing MDF group WKDE"><a href="">Audubon Naturalist Society</a></li>
                    <li class="vol-list-listing DC2 solo WKE"><a href="">Asian American LEAD Association</a></li>
                    <li class="vol-list-listing VAAC solo WDD"><a href="">Alice Ferguson Foundation</a></li>

                </ul>
            </list-view>
        </section>
    </div>
</main>
<?php get_template('footer'); ?>