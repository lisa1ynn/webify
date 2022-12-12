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
    background-color: #7d80ff;
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

  .signin-table {
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
    color: #b5bbff !important;
  }

  a:visited {
    color: #b5bbff !important;
  }
  </style>
  <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>" />
</head>

<body>
  <?php include './Header.php' ?>
  <!--Hero element column start-->
  <section>
    <div class="signin-row">
      <div class="signin-col hero-mainpg hero-signin-col">
        <!--ADD OPTION TO GO BACK TO WEBSITE-->
        <h1>
          Welcome to
          <div class="cool-text-background"><span class="cool-text">Webify</span></div>
        </h1>
        <p class="hero-text-small" style="color: white;">For all website freelancing needs.</p>
      </div>
      <!--Hero element column end-->
      <!--Signin form element start-->
      <div class="signin-col signin-form-col">
        <h2 class="h2-signin">
          Sign in to <span class="cool-text">Webify</span>
        </h2>

        <div class="signin-table">
          <form action="validate-user.php">
            <input class="signin-input input-field" type="email" id="email" name="email" placeholder="  E-mail" />
            <input class="signin-input input-field" type="password" id="password" name="password"
              placeholder="  Password" />
            <!--Add a error message if password is wrong-->
            <div style="text-align: end">
              <a href="#">Forgot Password?</a>
            </div>
            <input class="button-white" type="submit" name="Sign-in" value="Sign in now"></input>
          </form>
          <div class="to-sign-up white-text-small">No account, yet? <a href="./sign-up.php">Sign up</a></div>
          <!--Hover does not work for some reason-->
        </div>
      </div>
      <!--Signin form element end-->
    </div>
    </div>
  </section>
  <script>
  const urlParams = new URLSearchParams(window.location.search);
  const wrongPassword = urlParams.get('wrongPassword');

  if (wrongPassword) {
    const input = document.getElementById("password");

    input.className = input.className + " wrong-password"
  }
  </script>
</body>

</html>