<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Sign-up page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
  .signup-row {
    display: flex;
    min-height: 100vh;
  }

  .signup-col {
    flex: 50%;
    padding-top: 250px !important;
  }

  .hero-signup-col {
    background-color: #7d80ff !important;
    background-image: none !important;
    box-shadow: none !important;
  }

  .hero-text-small {
    text-shadow: none !important;
  }

  .cool-text-background {
    background-color: #262626;
    display: inline;
    padding: 3px 10px;
    border-radius: 15px;
  }

  .signup-form-col {
    padding-top: 250px;
  }

  .h2-signup {
    color: #7d80ff;
    position: relative;
    text-align: center;
  }

  .signup-table {
    margin: 0px auto;
    width: 250px;
  }

  .signup-input {
    width: 226px;
  }

  .terms-conditions-checkbox {
    float: left;
    margin-top: 5px;
  }

  .terms-conditions-text {
    margin: 0px 0px 15px 25px;
    margin-left: 25px;
    color: white;
    margin-bottom: 15px;
    font-size: smaller;
  }

  .to-sign-in {
    margin-top: 80px;
    text-align: center;
  }
  </style>
  <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>" />
</head>

<body>
  <?php include './components/Header.php' ?>
  <!--Hero element column start-->
  <section>
    <div class="signup-row">
      <div class="signup-col hero-mainpg hero-signup-col">
        <!--ADD OPTION TO GO BACK TO WEBSITE-->
        <h1>
          Welcome to
          <div class="cool-text-background"><span class="cool-text">Webify</span></div>
        </h1>
        <p class="hero-text-small" style="color: white;">For all website freelancing needs.</p>
      </div>
      <!--Hero element column end-->
      <!--signup form element start-->
      <div class="signup-col signup-form-col">
        <h2 class="h2-signup">
          Sign up to <span class="cool-text">Webify</span>
        </h2>

        <div class="signup-table">
          <form action="./datasave-user.php" method="post">
            <input class="signup-input input-field" type="text" id="firstname" name="firstname"
              placeholder="First name" />
            <input class="signup-input input-field" type="text" id="lastname" name="lastname" placeholder="Last-name" />
            <input class="signup-input input-field" type="email" id="email" name="email" placeholder="E-mail" />
            <input class="signup-input input-field" type="password" id="password" name="password"
              placeholder="Password" />
            <!--Add a tooltip for password requirements-->
            <input class="terms-conditions-checkbox white-text-small" type="checkbox" name="termsAndConditions"></input>
            <div class="terms-conditions-text">By signing up, I accept the terms and conditions of webify.</div>
            <div style="text-align: center; margin-top: 20px;">
              <input class="button-white" type="submit" name="Sign-up" value="Sign up now"></input>
            </div>
          </form>
          <div class="to-sign-in white-text-small">Already have an account? <a href="./sign-in.php"
              style="color: #b5bbff">Sign in</a></div>
          <!--Hover does not work for some reason-->
        </div>
        <!--signup form element end-->
      </div>
    </div>
  </section>
  <?php include "./components/Footer.php"?>
</body>

</html>