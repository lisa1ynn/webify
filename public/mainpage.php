<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./general.css" />
    <style>

      .freelancers-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(20rem, 2fr));
        grid-column-gap: 2rem;
        grid-row-gap: 2rem;
        padding-top: 5rem;
      }

      .individual-freelancer {
        border-radius: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
      }

      .freelancer-tbl-top {
        border-radius: 100px;
        background: #262626;
        border: solid;
        border-color: black;
        display: grid;
        place-items: center;
        width: 100%;
      }

      .freelancer-tbl-top:hover {
        background-color: #7D80FF;
        box-shadow: 0px 5px 10px black;
      }

      .freelance-img-projects {
        width: 350px;
        height: 250px;
        border-radius: 90px;
        justify-self: center;
        border-bottom: solid;
        border-color: black;
      }

      .user-name-picture-review-fee {
        display: grid;
        grid-template-columns: 50% 50%;
        width: 90%;
        padding-bottom: 10%;
        padding-top: 5%;
      }

      .user-p-n {
        display: grid;
        grid-template-columns: 50% 50%;
        padding: 4%;
        justify-self: center;
        grid-column-gap: 5px;
      }

      .profile-p-tbl {
        width: 40px;
        height: 40px;
        border-radius: 100%;
        margin: 0 auto;
        margin-top: 15px;
      }

      .usern-tbl {
        color: white;
        text-align: left;
        font-weight: bold;
      }

      .user-info {
        justify-self: center;
        padding-bottom: 10%;
        padding-left: 15%;
        color: white;
        font-weight: bold;
        display: grid;
        grid-template-rows: 20px 20px;
        margin-top: 8px;
      }

      .review-str {
        width: 15px;
        height: 15px;
      }

      .review-rating {
        text-align: left;
      }

      .price {
        text-align: right;
        padding-right: 40px;
      }

      .freelancer-tbl-top:hover > .show-more {
        text-shadow: 1px 2px 4px black;
      }

      .hero-mainpg {
        width: 100%;
        position: relative;
        text-align: center;
        padding-top: 10%;
        z-index: 1;
        box-shadow: 0px 0.5px 2px black;
        padding-bottom: 20px;
      }     

      .hero-text-small {
        color: #9a9a9a;
        padding-top: 20px;
        text-decoration: underline;
        text-underline-offset: 1.5rem;
        letter-spacing: 0.3em;
        font-family: arial;
        font-size: small;
      }
      h1 {
        color: #ffffff;
        font-weight: bold;
        font-size: xx-large;
        font-family: sans-serif;
        letter-spacing: 0.05em;
      }

    </style>
  </head>
  <body>
    <!--menu bar start-->
    <?php include './components/menubar.php'; ?>
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
      <div id="filter-section">
        

      </div>
      <div class="freelancers-container">
        <?php
          include '../private/initialize.php';?>
          <?php 
          // still in the progress of making these work as a filter mechanism based on user filter options
          $users = $database->query("SELECT * FROM freelancer");
          $skills_identified = $database->query("SELECT * FROM freelancerskill");
          $skills = $database->query("SELECT * FROM skills");
          $filter = array("JavaScript", "PHP");
          if ("SELECT * FROM skills, freelancerskills AND SELECT id FROM freelancer IF 
          freelancer.id = freelancerskill.freelancer_id AND
          freelancerskill.skill_id = skills.skill_id AND
          skills.skill = 'JavaScript'") {

          
          while($user = $users->fetch_assoc()){
            $user_row = $user;
            $review = number_format($user_row['points']/$user_row['reviews'], 2);
            ?>
          <div class="individual-freelancer" >
            <div class="freelancer-tbl-top" >
              <img src="<?php echo 'data:image/png;base64,'.base64_encode($user_row['projects']).''; ?>" alt="Portfolio Image" class="freelance-img-projects">
              <div class="user-name-picture-review-fee">
                <div class="user-p-n">
                  <img src="<?php echo 'data:image/png;base64,'.base64_encode($user_row['profilep']).''; ?>" alt="Profile Picture" class="profile-p-tbl">
                  <p class="usern-tbl"><?php echo $user_row['fname']." ".$user_row['lname']; ?></p>
                </div>
                <div class="user-info">
                  <p class="review-rating"> <img src="./pictures/reviewstr.png" alt="Reviews: " class="review-str"> <?php echo $review; ?>/5</p>
                  <p class="price">Fee: £<?php echo $user_row['fee']; ?> </p>
                </div>
              </div>
              <div class="show-more">
                <!-- make dots to show image preview of different projects -->
                  <h1>. . .</h1>
              </div>
            </div>
          </div>
          <?php }} mysqli_close($database); ?>
      </div>
    </section>
  </body>
</html>
