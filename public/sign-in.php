<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Sign-in page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
  .signin-row {
    display: flex;
    min-height: 100vh;
  }

  .signin-col {
    flex: 50%;
    padding-top: 250px !important;
  }

  .hero-signin-col {
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

  .signin-form-col {
    padding-top: 250px;
  }

  .h2-signin {
    color: #7d80ff;
    position: relative;
    text-align: center;
  }

  .signin-form {
    margin: 0px auto;
    width: 250px;
  }

  .signin-input {
    width: 226px;
  }

  .to-sign-up {
    margin-top: 80px;
    text-align: center;
  }

  a:link {
    text-decoration: underline !important;
    font-size: smaller;
  }
  </style>
  <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>" />
</head>

<body>
  <!-- Include header -->
  <?php include './components/Header.php' ?>
  <section>
    <!-- Row with two columns: for hero and sign in form -->
    <div class="signin-row">
      <!-- Column with Hero element -->
      <div class="signin-col hero-mainpg hero-signin-col">
        <h1>
          Welcome to
          <div class="cool-text-background"><span class="cool-text">Webify</span></div>
        </h1>
        <p class="hero-text-small" style="color: white;">For all website freelancing needs.</p>
      </div>
      <!--Signin form element/ column start-->
      <div class="signin-col signin-form-col">
        <h2 class="h2-signin">
          Sign in to <span class="cool-text">Webify</span>
        </h2>
        <!--Signin form-->
        <div class="signin-form">
          <form method="post" action="validate-user.php">
            <!--Email input field-->
            <input class="signin-input input-field" type="email" id="email" name="email" placeholder="E-mail" />
            <!--Password input field-->
            <input class="signin-input input-field" type="password" id="password" name="password"
              placeholder="Password" />
            <!--Forgot password-->
            <div style="text-align: end">
              <a href="#" style="color: #b5bbff">Forgot Password?</a>
            </div>
            <!--Submit/ Signin button-->
            <div style="text-align: center; margin-top: 20px;">
              <input class="button-white" type="submit" name="submit" value="Sign in now"></input>
            </div>
            <!--Form end-->
          </form>
          <!--Link to signup if they already have account-->
          <div class="to-sign-up white-text-small">No account, yet? <a href="./sign-up.php" style="color: #b5bbff">Sign
              up</a></div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <script>
  // Creates a new variable to read the url, specifically to read the wrongPassword url appendix
  const urlParams = new URLSearchParams(window.location.search);
  const wrongPassword = urlParams.get('wrongPassword');
  // If the url includes wrongPassword=1, the class wrong-password is appended to the class of the password element
  if (wrongPassword) {
    const input = document.getElementById("password");

    input.className = input.className + " wrong-password"
  }
  </script>
</body>

</html>