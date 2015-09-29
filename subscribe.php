<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="col-xs-12 text-center">Subscribe to Our Newsletter</h1>
  </div>
</div>
<div class="clearfix hero">
  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main role="main" class="container-fluid secondary">
<div class="row">
  <section class="col-md-10 col-lg-8">
    <h2>Sign Up<span class="sr-only"> for a Catalogue for Philanthropy account</span></h2>
    <p>
    The Catalogue for Philanthropy wants to keep you updated about our events, nonprofit successes, and other news. We value your <a href="privacy.php" title="View The Cataloge for Philanthropy's privacy policy">privacy</a> and promise not to send you copious amounts of email! We look forward to staying in touch.
    </p>
    <div class="row">
      <form class="one-column-form subscribe-form form-horizontal col-xs-12 col-sm-6" action="/cfpdc/stay-in-touch.php" method="post" novalidate="novalidate">
        <fieldset>
          <legend class="sr-only">Fill and submit this form to receive the latest Catalogue for Philanthropy catalogue emails and/or newsletter.</legend>
          
          <div>
            <label for="fname">Your First Name</label>
            <input type="text" id="fname" maxlength="40" name="fname">
          </div>
          <div>
            <label for="lname">Your Last Name</label>
            <input type="text" id="lname" maxlength="40" name="lname">
          </div>        
          <div>
            <label for="email">Email<small> (required)</small></label>
            <input type="email" id="email" name="email" aria-required="true">
          </div>
          <div>
            <label for="how_learn">How did you hear about the Catalogue?</label>
            <select id="how_learn" name="how_learn" class="form-control">
              <option value="">Select</option>
              <option value="Catalogue for Philanthropy charity">Catalogue for Philanthropy charity</option>
              <option value="Received a Catalogue in the mail">Received a Catalogue in the mail</option>
              <option value="Social media: Facebook/Twitter">Social media: Facebook/Twitter</option>
              <option value="Fundraising campaign ">Fundraising campaign </option>
              <option value="WAMU 88.5 FM">WAMU 88.5 FM</option>
              <option value="Washington CityPaper">Washington CityPaper</option>
              <option value="Washingtonian Magazine">Washingtonian Magazine</option>
              <option value="Washington Life Magazine">Washington Life Magazine</option>
              <option value="The Washington Post ">The Washington Post </option>
              <option value="Other media (news, magazine articles, etc.)">Other media (news, magazine articles, etc.)</option>
              <option value="Web search">Web search</option>
              <option value="Word of mouth: friend/family/colleague">Word of mouth: friend/family/colleague</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div>
            <label for="how_learn_other"><span class="sr-only">If </span>Other<span class="sr-only"> was chosen please provide source:</span></label>
            <input type="text" id="how_learn_other" maxlength="40" name="how_learn_other">
          </div>
          <div class="checkbox clearfix">
            <div class="clearfix">
              <p id="checkboxDescriptor">Please keep me posted:<span class="sr-only"> select at least one option</span></p>
              <label class="checkbox-label" for="requests">
                <input class="require-one" type="checkbox" id="opt_in_fields_0" name="opt_in_fields[]" value="emails" aria-describedby="checkboxDescriptor" aria-required="true">
              Send me occasional emails</label>
              <br>
              <label class="checkbox-label" for="mailing_list">
                <input class="require-one" type="checkbox" id="opt_in_fields_1" name="opt_in_fields[]" value="newsletter" aria-describedby="checkboxDescriptor" aria-required="true">
              Send me the catalogue newsletter</label>
            </div>
          </div>
          <div>
            <label for="referredby_userid">Who referred you?<span class="sr-only"> if so by who?</span></label>
            <input type="text" id="referredby_userid" maxlength="40" name="referredby_userid">
          </div>
          <div class="comments">
            <label for="notes">Message to CFP Staff</label>
            <textarea class="form-control" id="notes" name="notes" rows="6">Add a comment&hellip;
            </textarea>
          </div>
          <div class="text-left verify">
            <label for="captcha_code">Verify Code <small>(required)</small> <img id="i1" src="http://www.cfp-dc.org/cfpdc/captcha.php?1439404152298"></label>
            <input type="text" id="captcha_code" name="captcha_code" maxlength="4" aria-required="true">
          </div>
          <div class="submit-button">
            <input type="hidden" name="region" value="dc">
            <label class="sr-only" for="form-submit">Submit Your Request</label>
            <input type="submit" class="btn btn-primary" id="form-submit" value="Submit Request">
          </div>
          
        </fieldset>
      </form>
    </div>
  </section>
</div>
</main>
<?php get_template('footer'); ?>
<!-- added space between aria-describedBy and aria-required -->