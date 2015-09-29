<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="col-xs-12 text-center">Create An Account</h1>
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
    When you sign up, you gain access to a wide range of benefits found in the <a href="how-to-give.php" title="The Catalogue for Philanthropy How to Give page">How to Give</a> section of our website.</p>
    <form class="two-column-form sign-up form-horizontal col-xs-12" action="account.php?i=0-0" method="post">
      <fieldset>
        <legend class="sr-only">Fill and submit this form to open a Catalogue for Philanthropy account.</legend>
        <div class="row">
          <div class="col-sm-6">
            <div class="two-line">
              <label for="fname">Your First Name<small> (required)</small></label>
              <input type="text" id="fname" maxlength="40" name="fname" aria-required="true">
            </div>
            <div class="two-line">
              <label for="lname">Your Last Name<small> (required)</small></label>
              <input type="text" id="lname" maxlength="40" name="lname" aria-required="true">
            </div>
            <div class="two-line">
              <label for="password" class="password-label">Password<small> (required)</small></label>
              <input id="password" maxlength="20" name="password" type="password" aria-required="true">
            </div>
            <div class="two-line">
              <label for="password2" class="password2-label">Confirm Password<small> (required)</small></label>
              <input id="password2" maxlength="20" name="password2" type="password" aria-required="true">
            </div>
            <div class="two-line">
              <label for="email">Email<small> (required)</small></label>
              <input type="email" id="email" name="email" aria-required="true">
            </div>
            <div class="user-type">
              <label for="who">You are a:</label>
              <select id="who" name="who" class="form-control">
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
                <p id="checkboxDescriptor">Please keep me posted:</p>
                <label class="checkbox-label" for="requests">
                  <input type="checkbox" id="opt_in_fields_0" name="opt_in_fields[]" value="emails" aria-describedby="checkboxDescriptor">
                Send me occasional emails</label>
                <br>
                <label class="checkbox-label" for="mailing_list">
                  <input type="checkbox" id="opt_in_fields_1" name="opt_in_fields[]" value="newsletter" aria-describedby="checkboxDescriptor">
                Send me the catalogue newsletter</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div>
              <label for="street">Street Address</label>
              <input type="text" id="street" maxlength="40" name="street">
            </div>
            <div>
              <label for="city">City</label>
              <input type="text" id="city" maxlength="40" name="city">
            </div>
            <div class="two-wide clearfix">
              <div class="pull-right">
                <div>
                  <label for="state">State</label>
                  <select class="form-control" id="state" name="state">
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
                <div>
                  <label class="zip-label" for="zip">Zip</label>
                  <input type="text" class="zip-code" id="zip" maxlength="5" name="zip">
                </div>
              </div>
            </div>
            <div class="user-type">
              <label for="county">County</label>
              <select id="county" name="county" class="form-control">
                <option value="">Select</option>
                <option value="n/a">N/A</option>
                <option value="DC: District Of Columbia">DC: District Of Columbia</option>
                <option value="MD: Montgomery County">MD: Montgomery County</option>
                <option value="MD: Prince George's County">MD: Prince George's County</option>
                <option value="MD: Frederick County">MD: Frederick County</option>
                <option value="VA: Arlington County">VA: Arlington County</option>
                <option value="VA: Fairfax County">VA: Fairfax County</option>
                <option value="VA: Loudoun County">VA: Loudoun County</option>
                <option value="VA: Prince William County">VA: Prince William County</option>
                <option value="VA: City Of Alexandria">VA: City Of Alexandria</option>
                <option value="VA: City Of Fairfax">VA: City Of Fairfax</option>
                <option value="VA: City Of Falls Church">VA: City Of Falls Church</option>
              </select>
            </div>
            <div class="user-type">
              <label for="dc_ward">Ward</label>
              <select id="dc_ward" name="dc_ward" class="form-control">
                <option value="">Select</option>
                <option value="n/a">N/A</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div>
              <label for="phone">Phone</label>
              <input type="text" id="phone" maxlength="14" name="phone" placeholder="000-000-0000">
            </div>
            <div>
              <label for="organization" class="organization-label">Organization</label>
              <input id="organization" name="organization" type="text">
            </div>
          </div>
          <div class="col-xs-12">
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
        </div>
      </fieldset>
    </form>
  </section>
</div>
</main>
<?php get_template('footer'); ?>
<!-- Removed extra closing p tag from first paragraph -->