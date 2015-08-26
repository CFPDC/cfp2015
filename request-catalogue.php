<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="col-xs-12 text-center">Request a Catalogue</h1>
  </div>
</div>
<div class="clearfix hero">
  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
  <section class="col-md-10 col-lg-8">
    <h2>Catalogue Request Form</h2>
    <p>
    Thank you for your interest! There are several ways you can access the Catalogue for Philanthropy.
    </p>
    <ol>
      <li>
        View the Catalogue online: Choose our interactive, <a href="http://en.calameo.com/read/0012788670d83233749da" title="View the Catalogue for Philanthropy catalogue online with an interative reader">digital edition</a> of the Catalogue if you like flipping the pages on your desktop or mobile device. Download the Catalogue as a <a href="http://www.cfp-dc.org/images/pdfs/Pdf2014/Catalogue2014dc.pdf" title="View the latest Catalogue for Philanthropy catalogue as a PDF">PDF</a>!
      </li>
      <li>
        Browse our charities: Explore our charities by name, city, populations served, and even by affiliations such as Combined Federal Campaign or United Way members. <a href="our-nonprofits.php" title="Browse our charities">Click here</a>.<br>
        <small>
        <span>
        Note:
        </span>
        2014-2015 Catalogue charities will be live on our website beginning November 1st.</small>
      </li>
      <li>
        Receive a Catalogue by mail: Fill out the form below to receive a copy. You may also  join our mailing list with the form below in order to receive an updated version each year. Our newest edition is released each year in early November.
      </li>
    </ol>
    <p>
    Please fill the following form in order to receive a catalogue by mail and to join our email list. We respect your privacy. Your information will never be shared.
    </p>
    <form class="two-column-form request-catalogue form-horizontal col-xs-12" action="/cfpdc/print_cat_request_dc.php" method="post">
      <fieldset>
        <legend class="sr-only">Fill and submit this form to receive the latest Catalogue for Philanthropy catalogue by mail.</legend>
        <div class="row">
          <div class="col-sm-6">
            <div class="two-line">
              <label for="fname">Your First Name<small> (required)</small></label>
              <input type="text" class="required" id="fname" maxlength="40" name="fname" aria-required="true">
            </div>
            <div class="two-line">
              <label for="lname">Your Last Name<small> (required)</small></label>
              <input type="text" id="lname" maxlength="40" name="lname" aria-required="true">
            </div>
            <div>
              <label for="Organization" class="organization-label">Your Organization</label>
              <input id="Organization" name="Organization" type="text">
            </div>
            <div class="user-type">
              <label for="who">You are a:</label>
              <select id="who" name="who" class="form-control" aria-required="true">
                <option value="" selected="">Select</option>
                <option value="non-profit">non-profit</option>
                <option value="donor">donor</option>
                <option value="foundation">foundation</option>
                <option value="giving circle">giving circle</option>
                <option value="corporate">corporate</option>
              </select>
            </div>
            <div class="checkbox">
              <div>
                <label class="checkbox-label" for="requests">
                  <input type="checkbox" id="requests" name="requests">
                Please send a catalogue by mail </label>
                <br>
                <label class="checkbox-label" for="mailing_list">
                  <input type="checkbox" id="mailing_list" name="mailing_list">
                Please add my contact information to your mailing list </label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="two-line">
              <label for="street">Street Address<small> (required)</small></label>
              <input type="text" id="street" maxlength="40" name="street" aria-required="true">
            </div>
            <div class="two-line">
              <label for="city">City<small> (required)</small></label>
              <input type="text" id="city" maxlength="40" name="city" aria-required="true">
            </div>
            <div class="two-wide clearfix">
              <div class="pull-right">
                <div class="two-line">
                  <label for="state">State<small> (required)</small></label>
                  <select class="form-control" id="state" name="state" aria-required="true">
                    <option value="" selected="">Select</option>
                    <optgroup label="Greater Washington Area">
                      <option value="DC">District of Columbia</option>
                      <option value="MD">Maryland</option>
                      <option value="VA">Virginia</option>
                    </optgroup>
                    <optgroup label="Other States">
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                  </select>
                </div>
                <div class="two-line">
                  <label class="zip-label" for="zip">Zip<small> (required)</small></label>
                  <input type="text" class="zip-code" id="zip" maxlength="5" name="zip" aria-required="true">
                </div>
              </div>
            </div>
            <div class="two-line">
              <label for="email">Email<small> (required)</small></label>
              <input type="email" id="email" name="email" aria-required="true">
            </div>
            <div>
              <label for="phone">Phone</label>
              <input type="text" id="phone" maxlength="14" name="phone" placeholder="000-000-0000">
            </div>
            
            <div class="request-questions">
              <div>
                <label for="how_learn">How did you hear about the Catalogue?</label>
                <select id="how_learn" name="how_learn" class="form-control">
                  <option value="" selected="">Select</option>
                  <option>Catalogue for Philanthropy charity</option>
                  <option>Received a Catalogue in the mail</option>
                  <option>Social media: Facebook/Twitter</option>
                  <option>Fundraising campaign </option>
                  <option>WAMU 88.5 FM</option>
                  <option>Washington CityPaper</option>
                  <option>Washingtonian Magazine</option>
                  <option>Washington Life Magazine</option>
                  <option>The Washington Post </option>
                  <option>Other media (news, magazine articles, etc.)</option>
                  <option>Web search</option>
                  <option>Word of mouth: friend/family/colleague</option>
                  <option>Other</option>
                </select>
              </div>
              <div>
                <label for="how_learn_other">If ‘Other’, please specify</label>
                <input type="text" id="how_learn_other" name="how_learn_other">
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="comments">
              <label for="notes">Comments</label>
              <textarea class="form-control" id="notes" name="notes" rows="6">Add a comment&hellip;
              </textarea>
            </div>
            <div class="text-left verify">
              <label for="captcha_code">Verify Code <small>(required)</small> <img id="i1" src="http://www.cfp-dc.org/cfpdc/captcha.php?1439404152298"></label>
              <input type="text" id="captcha_code" name="captcha_code" maxlength="4" aria-required="true">
            </div>
          </div>
          <div class="col-xs-12">
            <div class="submit-button">
              <input type="hidden" name="region" value="dc">
              <label class="sr-only" for="form-submit">Submit Your Request</label>
              <input type="submit" class="btn btn-primary" id="form-submit" value="Submit Request">
            </div>
          </div>
          
        </fieldset>
      </form>
    </section>
  </div>
  </main>
  <?php get_template('footer'); ?>