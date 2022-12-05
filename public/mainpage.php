<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Archivo:500|Open+Sans:300,700" rel="stylesheet">
    <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>"/>
    <style>
      .freelancers-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(20rem, 2fr));
        grid-column-gap: 2rem;
        grid-row-gap: 2rem;
        padding-top: 5rem;
        place-items: center;
      }

      .individual-freelancer {
        border-radius: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 22rem;
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

      .show-more > h1 {
        color: #ffffff;
        font-weight: bold;
        font-size: xx-large;
        font-family: sans-serif;
        letter-spacing: 0.05em;
      }

      .filters-form , .current-search {
        color: #C0C0C0;
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
      }

      .filter-grid-struct {
        display: grid;
        grid-template-columns: 70% 20%;
        place-items: left;
      }

      input[type=checkbox] {
        visibility: hidden;
      }

      .filters-form > form > p {
        font-size: 1.5rem;
        font-weight: bold;
        margin-left: 10px;
      }

      .filters-form > label, input {
        margin-left: 20px;
      }

      .filter-grid-options > label:hover {
        color: #FF511C;
        font-weight: bold;
      }

      .filter-grid-options > label:focus {
        color: #FF511C;
        font-weight: bold;
      }

      .search-btn {
        padding: 10px;
        border-radius: 20px;
        background: #C0C0C0;
        border: none;
        color: #262626;
        float: right;
        font-weight: bold;
        width: 100%;
      }

      .search-btn:hover {
        background: #FF511C;
        color: white;
        box-shadow: 0px 2px 4px black;
      }

      .current-search {
        margin-left: 10px;
      }


    </style>
    <script>
      // removes alers showed if page is refreshed when filters are applied
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
    </script>
  </head>
  <body>

    <!--Imports menu bar on top-->
    <?php include './components/menubar.php'; ?>

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
    <!-- Filter Start -->
      <div id="filter-section" class="filters-form">
        <form id="filter-options-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <p>Select desired skills: </p>
          <div class="filter-grid-struct">
            <div class="filter-grid-options">
              <label for="skills_all" id='all' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_all" value="All" >All </label>
              <label for="skills_JavaScript" id='JS' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_JavaScript" value="JavaScript">JavaScript </label>
              <label for="skills_TypeScript" id='TS' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_TypeScript" value="TypeScript">TypeScript </label>
              <label for="skills_HTML" id='HTML' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_HTML" value="HTML">HTML </label>
              <label for="skills_CSS" id='CSS' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_CSS" value="CSS">CSS </label>
              <label for="skills_React" id='React' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_React" value="React">React </label>
              <label for="skills_PHP" id='PHP' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_PHP" value="PHP">PHP </label>
              <label for="skills_SQL" id='SQL' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_SQL" value="SQL">SQL </label>
              <label for="skills_AWS" id='AWS' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_AWS" value="AWS">AWS </label>
              <label for="skills_MongoDB" id='Mongo' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_MongoDB" value="MongoDB">MongoDB </label>
              <label for="skills_Ruby" id='Ruby' onclick="changeColor(id)"><input type="checkbox" name="skills[]" id="skills_Ruby" value="Ruby">Ruby </label>
            </div>
            <input type="submit" name="submit" value="Search" class="search-btn"/>
          </div>
          <script>
            function changeColor(id) {
              var text = document.getElementById(id)
              console.log(id)
              text.style.color = '#FF511C';
              text.style.fontWeight = 'bold';
            }
          </script>
        </form>
      </div>
  <!-- Filter End -->
        <?php
          include '../private/initialize.php';

          $users_skills = $database->query("SELECT skill, fname, lname, points, reviews, profilep, projects, fee, id
            FROM freelancer AS f, freelancerskill AS fs, skills AS s
            WHERE f.id = fs.freelancer_id
            AND fs.skill_id = s.id_skill
          ");

          $filter = array();

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach($_POST['skills'] as $skill) {
              $filter[] = $skill;
            }
          } else {
              $filter[] = 'All';
          }

          ?>
        <p class="current-search">Currently showing skills: | <?php
          foreach($filter as $skill) {
            echo $skill." | ";
          }
        ?></p>
        <div class="freelancers-container">
          <?php

          // track unique users
          $users_tracker = array();
          // adds freelancers from db to indivodual div elements
          while($user = $users_skills->fetch_assoc()){
            $user_row = $user;
            // get all users with desired skill
            if (in_array($user_row['skill'], $filter) || in_array('All', $filter)) {
            // need to check if user is unique
              if (!in_array($user_row['id'], $users_tracker)){
                // add unique users into tracker
                $users_tracker[] = $user_row['id'];
                // calculates #/5 stars
                $review = number_format($user_row['points']/$user_row['reviews'], 2);
                $id = $user_row['id'];
            ?>
                <div class="individual-freelancer" id="freelancer-individual" onclick="sendDataToPHPpage(<?php echo $id; ?>)">
                  <script>
                    // allows for individual freelancers to be shown
                    function sendDataToPHPpage(id) {
                      var identifier = id;
                      const src = "freelancer.php?profile="+identifier;
                      window.location.href=src;
                    }
                  </script>
                  <div class="freelancer-tbl-top" >
                    <img src="<?php echo 'data:image/png;base64,'.base64_encode($user_row['projects']).''; ?>" alt="Portfolio Image" class="freelance-img-projects">
                    <div class="user-name-picture-review-fee">
                      <div class="user-p-n">
                        <img src="<?php echo 'data:image/png;base64,'.base64_encode($user_row['profilep']).''; ?>" alt="Profile Picture" class="profile-p-tbl">
                        <p class="usern-tbl"><?php echo $user_row['fname']." ".$user_row['lname']; ?></p>
                      </div>
                      <div class="user-info">
                        <p class="review-rating"> <img src="./pictures/reviewstr.png" alt="Reviews: " class="review-str"> <?php echo $review; ?>/5</p>
                        <p class="price">Fee: £<?php echo $user_row['fee']; ?>/hr </p>
                      </div>
                    </div>
                    <div class="show-more">
                        <h1>. . .</h1>
                    </div>
                  </div>
                </div>
            <?php }}} mysqli_close($database); ?>
      </div>
    </section>
  </body>
</html>