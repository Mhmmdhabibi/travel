<link rel="stylesheet" href="login-css.css">

<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Responsive Login Form</h2>
    </div>
    <div class="row clearfix">
      <div class="col_half">
        <div class="row clearfix create_account">
          <div>
            <a href="#">Create an Account</a>
          </div>
        </div>
      </div>
      <div class="col_half last">
        <form action="index.login">
          <div class="input_field">
            <span>
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="input_field">
            <span>
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <input class="button" type="submit" value="Sign in">
          <div class="row clearfix bottom_row">
            <div class="col_half remember_me">
              <input name="" type="checkbox" value="">
              Remember me
            </div>
            <div class="col_half forgot_pw">
              <a href="#">Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <p class="credit">
    <a href="http://www.designtheway.com/responsive-login-form/" target="_blank">Design the way</a>
  </p>
</div>
