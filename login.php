<?php
include('includes/functions.php');
?>
<?php get_template('header', 'Title of homepage'); ?>
<div class="container-fluid">
  <div class="row">
    <h1 class="col-xs-12 text-center">Account Login</h1>
  </div>
</div>
<div class="clearfix hero">
  <img src="http://lorempixel.com/1200/500/nature" alt="" aria-hidden="true" class="img-responsive">
</div>
<main class="container-fluid search-results secondary" role="main">
<div class="row">
  <section class="col-xs-12 login-form">
    <div class=" well well-lg col-md-5 col-lg-4">
      <h2><span class="sr-only">Log in form for </span>Donors</h2>
      <p class="sr-only">If you are not a donor, skip to the <a data-target="#nonprofit-form" href="javascript:void(0);" class="jumplink">catalogue nonprofit login</a>.</p>
      <form class="donor-form-container form-horizontal"  id="donor-form" method="post" action="http://www.catalogueforphilanthropy-dc.org/admin/login.php?from=09website">
        <fieldset>
          <legend class="sr-only">Use this form to login if you are a donor.</legend>
          <div class="form-group form-group-lg">
            <label for="username1">Username<small> (your email address)</small></label>
            <input type="email" class="required form-control" id="username1" maxlength="40" name="username1" aria-required="true">
          </div>
          <div class="form-group form-group-lg">
            <label for="password1">Password</label>
            <input type="password" class="required form-control" id="password1" maxlength="20" name="password1" aria-required="true">
          </div>
          <div class="form-group form-group-lg">
            <label for="remember-me-nonprofit">
              <input type="checkbox" id="remember-me-nonprofit" name="remember-me-nonprofit" value="remember-me"> Remember me
            </label>
            <ul class="list-unstyled">
            <li><a href="request_password_link.php" title="Reset your catalogue nonprofit account password">Forgot your password?</a></li>
            <li><a href="sign-up.php" title="Create a catalogue nonprofit account password">Need an account?</a></li>
          </ul>
          </div>
          <div class="form-group form-group-lg submit-button">
            <input type="hidden" name="Step" value="Step2">
            <label class="sr-only" for="form-submit">Sign in</label>
            <input type="submit" class="btn btn-primary btn-lg submit-button" id="form-submit1" value="Sign in">
          </div>
        </fieldset>
      </form>
    </div>
    <div class="well well-lg col-md-5 col-lg-4">
      <h2><span class="sr-only">Log in form for </span>Catalogue Nonprofits</h2>
      <form class="login-form-container form-horizontal"  id="nonprofit-form" method="post" action="http://cfp-dc.org/admin/login.php?from=09website">
        <fieldset>
          <legend class="sr-only">Use this form to login if you are a nonprofit.</legend>
          <div class="form-group form-group-lg">
            <label for="username2">Username<small> (your email address)</small></label>
            <input type="password" class="required form-control" id="username2" maxlength="40" name="username2" aria-required="true">
          </div>
          <div class="form-group form-group-lg">
            <label for="password">Password</label>
            <input type="password" class="required form-control" id="password" maxlength="20" name="password" aria-required="true">
          </div>
          <div class="form-group form-group-lg">
            <label for="remember-me-nonprofit">
              <input type="checkbox" id="remember-me-nonprofit" name="remember-me-nonprofit" value="remember-me"> Remember me
            </label>
            <ul class="list-unstyled">
            <li><a href="request_password_link.php" title="Reset your catalogue nonprofit account password">Forgot your password?</a></li>
            <li><a href="sign-up.php" title="Create a catalogue nonprofit account password">Need an account?</a></li>
            </ul>
          </div>
          <div class="form-group submit-button-container">
            <input type="hidden" name="region" value="dc">
            <label class="sr-only" for="form-submit">Sign in</label>
            <input type="submit" class="btn btn-primary btn-lg submit-button" id="form-submit" value="Sign in">
          </div>
        </fieldset>
      </form>
    </div>
  </section>
</div>
</main>
<?php get_template('footer'); ?>