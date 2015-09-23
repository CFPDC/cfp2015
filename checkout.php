<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="col-xs-12 text-center">Checkout</h1>
  </div>
</div>
<div class="clearfix hero">
  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
  <div class="row">
    <section class="col-md-10 col-lg-8">
      <div class="checkout-heading">
        <h2>Checkout</h2>
        <p>
          Quisque id eleifend ipsum. Donec sit amet ligula pretium, consectetur ligula a, mollis ligula.
        </p>
      </div>
      <div class="express-checkout-heading" id="express-checkout-heading-section" style="display: none;">
        <h2>Express Checkout</h2>
        <p>
          Aliquam fermentum erat eu suscipit, quis finibus felis commodo. Sed sagittis suscipit sagittis. Sed vulputate consectetur ornare.
        </p>
      </div>
      <div class="row">
        <form class="two-column-form checkout-form form-horizontal col-xs-12" action="account.php?i=0-0" method="post">
          <fieldset>
            <legend class="sr-only">Fill and submit this form to open a Catalogue for Philanthropy account.</legend>
            <div class="row">
              <div class="col-sm-6">
                <div class="two-line">
                  <label for="org-name">Organization</label>
                  <!-- add readonly to this input if input is prepopulated-->
                  <input type="text" id="org-name" maxlength="60" class="nonprofit-name" name="org-name" value="">
                </div>
                <div class="two-line">
                  <label for="amount">Amount
                    <span class="sr-only">
                      in dollars
                    </span>
                    <small> (required)</small></label>
                  <input type="text"  id="amount" maxlength="10" name="amount" placeholder="10.00" aria-required="true">
                </div>
                <div class="two-line">
                  <label for="designation">Designation</label>
                  <input type="text" id="designation" name="designation" maxlength="40">
                </div>
                <div class="two-line">
                  <label for="dedication">Dedication</label>
                  <input type="text" id="dedication" name="dedication" maxlength="40">
                </div>
                <div class="checkbox left">
                  <div>
                    <label class="checkbox-label" for="is_anonymous">
                      <input type="checkbox" id="is_anonymous"  name="is_anonymous" value="express">
                      Anonymous Donation</label>
                    <br>
                    <label class="checkbox-label" for="express-check">
                      <input type="checkbox" id="express-check" class="toggle-check" name="express-check" value="express">
                      Express Checkout
                      <button class="btn btn-link info-tooltip" data-toggle="tooltip" title="tooltip to explain what express checkout is...">
                      <span class="fa fa-info-circle">
                      </span>
                      </button>
                    </label>
                  </div>
                </div>
                <div class="submit-button checkout-section">
                  <label class="sr-only" for="form-submit">Checkout</label>
                  <input type="submit" class="btn btn-primary" id="form-submit" value="Checkout">
                </div>
              </div>
              <div class="col-sm-6 express-checkout-section" style="display: none;">
                <div>
                  <label for="name">Your Name</label>
                  <input type="text" class="userName" id="name" maxlength="40" name="name" aria-describedby="express-checkout-heading-section">
                </div>
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
                      <input type="text" data-mask="99999" class="zip-code" id="zip" maxlength="5" name="zip">
                    </div>
                  </div>
                </div>
                <div class="radio left">
                  <div>
                    <p id="checkboxDescriptor">
                      Recurrence
                    </p>
                    <label for="recurring_period_0">
                      <input type="radio" name="optionsRadios" id="recurring_period_0" value="O" aria-describedby="checkboxDescriptor">
                      One-time</label>
                    <br>
                    <label for="recurring_period_1">
                      <input type="radio" name="optionsRadios" id="recurring_period_1" value="M" aria-describedby="checkboxDescriptor">
                      Monthly</label>
                    <label for="recurring_period_2">
                      <input type="radio" name="optionsRadios" id="recurring_period_2" value="Q" aria-describedby="checkboxDescriptor">
                      Quarterly</label>
                  </div>
                </div>
                <div class="two-line">
                  <label for="email">Email<small> (required)</small></label>
                  <input type="email" id="email" name="email" aria-required="true">
                </div>
                <div class="submit-button">
                  <label class="sr-only" for="form-submit-express">Express Checkout</label>
                  <input type="submit" class="btn btn-primary" id="form-submit-express" value="Express Checkout">
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </section>
  </div>
</main>
  <?php get_template('footer'); ?>

  <!--missing closing div tag in fieldset -->