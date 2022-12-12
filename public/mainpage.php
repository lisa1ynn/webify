<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Webify home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>" />
  <style>
  .freelancers-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    grid-column-gap: 2rem;
    grid-row-gap: 5rem;
  }

  .individual-freelancer {
    border-radius: 100px;
    display: flex;
    justify-self: center;
  }

  .freelancer-tbl-top {
    border-radius: 100px;
    background: #262626;
    border: solid;
    border-color: black;
  }

  .freelancer-tbl-top:hover {
    background-color: #7D80FF;
    box-shadow: 0px 5px 10px black;
  }

  .freelance-img-projects {
    width: 300px;
    height: 200px;
    border-radius: 100px;
    justify-self: center;
  }

  .user-p-n {
    display: grid;
    grid-template-columns: 1fr 2fr;
    padding: 4%;
    justify-self: center;
  }

  .profile-p-tbl {
    width: 40px;
    height: 40px;
    border-radius: 100%;
    margin: 0 auto;
  }

  .usern-tbl {
    color: white;
    text-align: left;
    font-weight: bold;
  }

  .reviews {
    border-radius: 100px;
    justify-self: center;
    padding-bottom: 10%;
    padding-left: 15%;
    color: white;
  }

  .review-str {
    width: 15px;
    height: 15px;

  }

  .review-rating {
    text-align: left;
    font-weight: bold;
  }
  </style>
</head>

<body>
  <!--menu bar start-->
  <header class="top-bar-container">
    <img class="logo-bar" src="" alt="Logo" />
    <div class="navigation-bar">
      <li><a class="nav-item" href="#experts">Hire</a></li>
      <li><a class="nav-item" href="#how works">Purpose</a></li>
      <li><a class="nav-item" href="#about">About</a></li>
      <li><a class="nav-item" href="#contact">Contact</a></li>
    </div>
    <div class="login-button">
      <a href="./freelancer-onboarding/freelancer-onboarding-info.php" class="login-btn">Become a freelancer</a>
    </div>
    <div class="login-button">
      <a href="./sign-in.php" class="login-btn">Login</a>
    </div>
  </header>
  <!--menu bar end-->
  <!--Hero element start-->
  <section class="hero-mainpg">
    <!--Span element used to make the gradient text effect-->
    <h1>Welcome to <span class="cool-text">Webify</span></h1>
    <p class="hero-text-small">Professional Development Re-imagined.</p>
    <!--Tells user to scroll down for more info-->
    <div class="scroll-down-container">
      <p class="scroll-down-arrow">⌄<br />⌄<br />⌄</p>
    </div>
  </section>
  <!--Hero end-->
  <section>
    <div class="freelancers-container">
      <?php
      include '../private/initialize.php';

      $result = $database->query("SELECT * FROM freelancer;");

      while ($row = $result->fetch_assoc()) {
        $array = $row;
        $review = number_format($array['points'] / $array['reviews'], 2);

      ?>
      <div class="individual-freelancer">
        <div class="freelancer-tbl-top">
          <img src="<?php echo 'data:image/png;base64,' . base64_encode($array['projects']) . ''; ?>"
            alt="Portfolio Image" class="freelance-img-projects">
          <div class="user-p-n">
            <img src="<?php echo 'data:image/png;base64,' . base64_encode($array['profilep']) . ''; ?>"
              alt="Profile Picture" class="profile-p-tbl">
            <p class="usern-tbl"><?php echo $array['fname'] . " " . $array['lname']; ?></p>
          </div>
          <div class="reviews">
            <p class="review-rating"><img src="./pictures/reviewstr.png" alt="Reviews: " class="review-str">
              <?php echo $review; ?> </p>
          </div>
        </div>
      </div>

      <?php }
      mysqli_close($database); ?>
    </div>
  </section>
</body>

</html>