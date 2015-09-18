<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="text-center">Purchasing a Gift Card or E-Card</h1>
  </div>
</div>
<div class="clearfix hero">
  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid secondary" role="main">
<div class="row">
  <aside class="col-sm-3 who-we-are-nav" id="asideFilter">
    <ul class="list-unstyled">
      <li><a href="all-events.php">Events</a></li>
      <li><a href="mycatalogue.php">My Catalogue Account</a>
      <ul>
        <li><a href="sign-up.php">Create An Account</a></li>
        <li><a href="history.php">Giving History</a></li>
      </ul>
    </li>
    <li><a href="how-to-give.php">Ways to Give</a>
    <ul>
      <li><a href="javascript:void(0);" class="current">Gift Cards</a></li>
      <li><a href="donate.php">Donate Now / Decide Later</a></li>
      <li><a href="kids.php">Family Philanthropy</a></li>
      <li><a href="registry.php">Gift Registry</a></li>
      <li><a href="appreciated-stock.php">Appreciated Stock</a></li>
      <li><a href="corporate-sponsorship.php">Corporate Sponsorship</a></li>
    </ul>
  </li>
  <li><a href="volunteer-opportunities.php">Volunteer</a></li>
</ul>
</aside>
<section class="col-sm-8">
<h2 id="purchase-gift-card-heading">Purchase A Gift Card</h2>
<p><a href="javascript:void(0);"> A note about gift card expiration</a></p>
<form class="gift-card-form one-column-form form-horizontal" id="gift-card-form" action="account.php?i=0-0" method="post">
  <div class="col-sm-6 col-xs-12">
    <p><strong>Step 1: Choose card value:</strong></p>
    <!-- <div class="radio-select"> -->
    <div class="radio">
      <label for="recurring_period_0">
        <input type="radio" name="amount" id="recurring_period_0" value="O" aria-describedby="checkboxDescriptor">
      $25</label>
    </div>
    <div class="radio">
      <label for="recurring_period_1">
        <input type="radio" name="amount" id="recurring_period_1" value="M" aria-describedby="checkboxDescriptor">
      $50</label>
    </div>
    <div class="radio">
      <label for="recurring_period_2">
        <input type="radio" name="amount" id="recurring_period_2" value="Q" aria-describedby="checkboxDescriptor">
      $75</label>
    </div>
    <div class="radio">
      <label for="recurring_period_3">
        <input type="radio" name="amount" id="recurring_period_3" value="Q" aria-describedby="checkboxDescriptor">
      $100</label>
    </div>
    <div class="radio">
      <label for="recurring_period_4">
        <input type="radio" name="amount" id="recurring_period_4" value="Q" aria-describedby="checkboxDescriptor">
      $150</label>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" name="amount">
          </span>
          <input type="text" placeholder="Denominations of $50" name="denomination" class="form-control">
          <span class="sr-only">Please enter denominations of $50</span>
          </div><!-- /input-group -->
        </div>
      </div>
      <!-- </div> -->
      <p>Step 2 : Choose delivery method:</p>
      <!-- <div class="radio-select"> -->
      <div class="radio">
        <label for="recurring_period_5">
          <input type="radio" name="send" id="recurring_period_5" value="M" aria-describedby="checkboxDescriptor">
          Mail to Me <em><a href="login.php">Login first to pre-fill your address below</a></em></label>
        </div>
        <div class="radio">
          <label for="recurring_period_6">
            <input type="radio" name="send" id="recurring_period_6" value="Q" aria-describedby="checkboxDescriptor">
          Mail to Recipient</label>
        </div>
        <div class="radio">
          <label for="recurring_period_7">
            <input type="radio" name="send" id="recurring_period_7" value="Q" aria-describedby="checkboxDescriptor">
          Pick up <em><a href="javascript:void(0);">What does this mean?</a></em></label>
        </div>
        <div class="radio">
          <label for="recurring_period_8">
            <input type="radio" name="send" id="recurring_period_8" value="Q" aria-describedby="checkboxDescriptor">
          E&dash;Card</label>
        </div>
        <!-- </div> -->
       <p>Enter Card Mailing Address</p>
        <div class="two-line">
            <label for="name">Your Name<small> (required)</small></label>
            <input type="text" class="userName" id="name" maxlength="40" name="name" aria-describedby="purchase-gift-card-heading">
          </div>
          <div class="two-line">
            <label for="street">Street Address<small> (required)</small></label>
            <input type="text" id="street" maxlength="40" name="street">
          </div>
           <div class="two-line">
            <label for="city">City<small> (required)</small></label>
            <input type="text" id="city" maxlength="40" name="city">
          </div>
          <div class="two-wide clearfix">
              <div>
                <div>
                  <label for="state">State<small> (required)</small></label>
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
                  <label class="zip-label" for="zip">Zip<small> (required)</small></label>
                  <input type="text" class="zip-code" id="zip" maxlength="5" name="zip">
                </div>
              </div>
            </div>
          <p><strong>Step 3: Add the name of the gift card recipient and the name of the gift card sender (as it will appear on the card):</strong></p>
        <div class="two-line">
          <label for="to">To:</label>
          <input type="text" id="to" name="to" aria-required="true">
        </div>
        <div class="two-line">
          <label for="from">From</label>
          <input type="text" id="from" name="from" aria-required="true">
        </div>
        <div class="personal-message">
          <label for="personal-message"><strong>Personal Message</strong> (20 word limit; examples are Happy Holidays from Aunt Anne and Uncle Joe, or Happy Birthday with love from all of us)</label>
          <textarea class="form-control" id="personal-message" name="personal-message" maxlength="50"></textarea>
        </div>
        <div class="submit-button">
          <label class="sr-only" for="form-submit-express">Add to Giving Cart</label>
          <input type="submit" class="btn btn-primary" id="form-submit-express" value="Add to Giving Cart">
        </div>
    </div>
  </form>
  <div class="col-sm-5 col-xs-12 gift-card-p">
    <img src="resources/images/GiftCard.jpg" class="img-responsive hidden-xs hidden-sm gift-card-img" alt aria-hidden="true">
    <p>Just follow the easy steps to purchase a gift card or e&dash;card. Your purchase will be safely stowed in your Giving Cart until you are ready to check out. Please note that mailed gift cards are packaged inside elegant Catalogue notecards with a To and From section that includes your name and your recipient&rsquo;s name, an Amount line, and your Personal Message. Instructions for redeeming gift cards are on their reverse sides. E&dash;cards also include messaging but &hellip; no packaging!</p>
    <p>If you are purchasing a Gift Card through a special partnership between the Catalogue and your company, please check with your employer for directions about how the company&rsquo;s program works.</p>
  </div>
</section>
</div>
</main>
<?php get_template('footer'); ?>