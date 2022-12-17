<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../general.css">
</head>

<body>
  <header class='header'>
    <nav class='header-nav'>
      <ul class='header-ul'>
        <li class='header-li cool-text'><a href='/Projects/webify/public/mainpage.php'>Webify</a></li>
      </ul>
      <?php
      if (isset($_SESSION["userType"])) { ?>
      <ul class='header-ul-links-in'>
        <li class='header-li header-link'><a href='/Projects/webify/public/mainpage.php'>Home</a></li>
        <li class='header-li header-link'><a href='/Projects/webify/public/about.php'>About</a></li>
        <li class='header-li header-link'><a href='/Projects/webify/public/contact.php'>Contact</a></li>
      </ul>
      <?php } else { ?>
      <ul class='header-ul-links'>
        <li class='header-li header-link'><a href='/Projects/webify/public/mainpage.php'>Home</a></li>
        <li class='header-li header-link'><a href='/Projects/webify/public/about.php'>About</a></li>
        <li class='header-li header-link'><a href='#contact'>Contact</a></li>
      </ul>
      <?php } ?>
      <ul class='header-ul'>
        <?php
        // user logged in -> can access profile
        if (isset($_SESSION["userType"]) && $_SESSION["userType"] === 'freelancer') {
          echo "<li class='header-li header-button'><a href='/Projects/webify/public/profile.php'>Profile</a></li>";
          echo "<li class='header-li header-button'><a href='/Projects/webify/public/logout.php'>Log out</a></li>";
        } else if (isset($_SESSION["userType"]) && $_SESSION["userType"] === 'user') {
          echo "<li class='header-li header-button'><a href='/Projects/webify/public/freelancer-onboarding/freelancer-onboarding-info.php'>Become a freelancer</a></li>";
          echo "<li class='header-li header-button'><a href='/Projects/webify/public/logout.php'>Log out</a></li>";
        } else {
          // allow login and signup
          echo "<li class='header-li header-button'><a href='/Projects/webify/public/sign-in.php'>Login</a></li>";
          echo "<li class='header-li header-button'><a href='/Projects/webify/public/sign-up.php'>Sign up</a></li>";
        }
        ?>
      </ul>
    </nav>
  </header>
</body>

</html>