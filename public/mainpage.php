<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Archivo:500|Open+Sans:300,700" rel="stylesheet">
  <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>" />
  <style>
  .freelancers-container {
    display: flex;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 2fr));
    flex-wrap: wrap;
    grid-column-gap: 2rem;
    grid-row-gap: 2rem;
    padding-top: 5rem;
    font-size: 0.9rem;
    justify-content: flex-start;
    margin-left: 80px;
    margin-right: 50px;
  }

  .individual-freelancer {
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 20rem;
  }

  .freelancer-tbl-top {
    border-radius: 50px;
    background: #8888;
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
    width: 20rem;
    height: 250px;
    border-radius: 45px;
    justify-self: center;
    border-bottom: solid;
    border-color: black;
  }

  .user-name-picture-review-fee {
    display: grid;
    grid-template-columns: 50% 50%;
    width: 90%;
    padding-bottom: 1%;
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
    margin-top: 5px;
  }

  .usern-tbl {
    color: white;
    text-align: left;
    font-weight: bold;
  }

  .user-info {
    justify-self: center;
    padding-left: 15%;
    color: white;
    font-weight: bold;
    display: grid;
    grid-template-rows: 20px 20px;
    margin-top: 2px;
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

  .show-more {
    color: white;
    font-size: 0.7rem;
    margin-bottom: 50px;
    width: 80%;
    text-align: justify;
    word-break: keep-all;
    display: inline;
  }

  .show-more-underline:hover {
    text-decoration: underline;
  }

  .filters-form,
  .current-search {
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

  .filters-form>form>p {
    font-size: 1.5rem;
    font-weight: bold;
    margin-left: 10px;
  }

  .filters-form>label,
  input {
    margin-left: 20px;
  }

  .filter-grid-options>label:hover {
    color: #FF511C;
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

  .navigation-buttons {
    width: 100%;
    display: flex;
    margin-top: 80px;
    margin-bottom: 280px;
    justify-content: center;
    align-items: center;
    margin-left: 12px;
    font-size: 0.8rem;
  }
  .navigation-home, .navigation-shwo16, .navigation-shwo8, .navigation-next {
    margin-right: 10px;
    width: 60px;
    text-align: center;
    box-shadow: 0px 2px 4px black;
  }

  .navigation-home, .navigation-shwo16, .navigation-shwo8 {
    background-color: #FF511C;
    border: solid #FF511C;
    padding: 18px;
    border-radius: 20px;
  }
  .navigation-home:hover, .navigation-shwo16:hover, .navigation-shwo8:hover {
    color: #FF511C;
    background-color: #262626;
  }

  .navigation-next {
    background-color: #7D80FF;
    border: solid #7D80FF;
    padding: 18px;
    border-radius: 20px;
  }

  .navigation-next:hover {
    color: #7D80FF;
    background-color: #262626;
  }

  </style>
  <script>
  // removes alerts showed if page is refreshed when filters are applied
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  </script>
</head>

<body>

  <!--Imports menu bar on top-->
  <?php include './components/Header.php';
  // initializes the database for the rest of the page
  include '../private/initialize.php';

  // page pagination
  $items_per_page = 8;
  // checks how many items in page
  $shown_items = 0;
  // records index to start counting from and to show from
  $start_index = 0;

  if (isset($_GET['view16'])) {
    // show 16
    $items_per_page = 16;
  } else if (isset($_GET['view8'])) {
    // show 8
    $items_per_page = 8;
  } else {
    $items_per_page = 8;
  }

  if (isset($_GET['changePage']) && $_GET['changePage'] === 'next') {
    // next page
    $start_index = $items_per_page;
  } else if (isset($_GET['changePage']) && $_GET['changePage'] === 'back') {
    // start
    $start_index = 0;
  }

  ?>

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
  <?php
  // query to get data for filters section
  $skills_query_filter = $database->query("SELECT * FROM skills")

  ?>
  <section>
    <!-- Filter Start -->
    <div id="filter-section" class="filters-form">
      <!-- Once search is clicked, sends data localhost to be used -->
      <form id="filter-options-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" for='filter'>
        <p>Filter desired skills: </p>
        <!-- Grid to display all filters in one column and search in another -->
        <div class="filter-grid-struct">
          <!-- This one contains all filters to be used -->
          <div class="filter-grid-options">
            <label for="skills_all" id='all' onclick="changeColor(id, 'skills_all')"><input type="checkbox"
                name="skills[]" id="skills_all" value="All">All </label>
            <?php
            // to generate all skill filters to match db
            while ($skill_row = $skills_query_filter->fetch_assoc()) {
              $skill_id = $skill_row['skill_id']; ?>
            <label for="skills_<?php echo $skill_row['skill']; ?>" id='<?php echo $skill_id; ?>'
              onclick="changeColor(id, 'skills_<?php echo $skill_row['skill']; ?>')">
              <input type="checkbox" name="skills[]" id="skills_<?php echo $skill_row['skill']; ?>"
                value="<?php echo $skill_row['skill']; ?>">
              <?php echo $skill_row['skill']; ?></label>
            <?php } ?>
          </div>
          <input type="submit" name="submit" value="Search" class="search-btn" />
        </div>
        <script>
        // changes colour of clikced filters to make them noticable to user
        function changeColor(id, idInput) {
          var text = document.getElementById(id)
          var tick = document.getElementById(idInput)
          if (tick.checked === false) {
            text.style.color = '#C0C0C0';
            text.style.fontWeight = 300;
          } else {
            text.style.color = '#FF511C';
            text.style.fontWeight = 'bold';
          }
        }
        </script>
      </form>
    </div>
    <!-- Filter End -->
    <?php
    // inner join table to get skills that each user has and each users features
    $users_skills = $database->query("SELECT skill, fname, lname, points, reviews, profilep, projects, fee, id, intro
            FROM freelancer AS f, freelancerskill AS fs, skills AS s
            WHERE f.id = fs.freelancer_id
            AND fs.skill_id = s.skill_id
          ");

    // filters from section above will be stored in this
    $filter = array();
    // stores filters
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // checks if filter is empty, puts default All
      if (isset($_POST['skills'])) {
        // if filter contains 'All', just display All
        if (!in_array('All', $_POST['skills'])) {
          // sorts all skills in filter into array for later use
          foreach ($_POST['skills'] as $skill) {
            $filter[] = $skill;
          }
        } else {
          $filter[] = 'All';
        }
      } else {
        $filter[] = 'All';
      }
    } else {
      $filter[] = 'All';
    }

    ?>
    <!-- Shows user which filters they have selected to be shown -->
    <p class="current-search">Currently showing skills: | <?php
      if (!in_array('All', $filter)) {
        foreach ($filter as $skill) {
          echo $skill . " | ";
        }
      } else {
        echo " All | ";
      }
      ?></p>
    <div class="freelancers-container">
      <?php

      // track unique users
      $users_tracker = array();
      $showUsers = array();
      // adds freelancers from db to indivodual div elements
      while ($user_row = $users_skills->fetch_assoc()) {
        $id = $user_row['id'];
        if (!in_array($id, $showUsers)) {
          $showUsers[] = $id;
        }
        $showUsersRange = array_slice($showUsers, $start_index, ($start_index + $items_per_page));

        // query for advanced filter option -> only shows users w all matching skills on filter
        $query = "SELECT skill, id
            FROM freelancer AS f, freelancerskill AS fs, skills AS s
            WHERE f.id = fs.freelancer_id
            AND fs.skill_id = s.skill_id
            AND id = '$id'";

        $individual_skills_to_use_for_filter = $database->query($query);

        // array for comparison of skills to filter
        $skills_to_compare = array();

         $items_shown = 0;

        // puts all individual user skills into array
        while ($check_the_skills = $individual_skills_to_use_for_filter->fetch_assoc()) {
          $skills_to_compare[] = $check_the_skills['skill'];
        }

        // had errors with just while loop methid, this removes any duplicates in the array -> fixed error
        $skills_to_compare_unique = array_unique($skills_to_compare);

        // get all users with desired skill
        if ((count(array_intersect($skills_to_compare_unique, $filter)) === count($filter)) || in_array('All', $filter)) {
          if (($shown_items < $items_per_page)) {
            // need to check if user is unique
            if (!in_array($id, $users_tracker) && in_array($id, $showUsersRange)) {
              // add unique users into tracker
              $users_tracker[] = $id;
              $shown_items += 1;
              // calculates #/5 stars
              if ($user_row['reviews'] != 0) {
                $review = number_format($user_row['points'] / $user_row['reviews'], 2);
              } else {
                $review = 0;
              }
      ?>
      <a onclick="sendDataToPHPpage(<?php echo $id; ?>)" href="#">
        <div class="individual-freelancer" id="freelancer-individual">
          <script>
          // allows for individual freelancers to be shown, sends data to another php page
          function sendDataToPHPpage(id) {
            var identifier = id;
            const src = "freelancer.php?profile=" + identifier;
            window.location.href = src;
          }
          </script>
          <div class="freelancer-tbl-top">
            <img src="<?php echo 'data:image/png;base64,' . base64_encode($user_row['projects']) . ''; ?>"
              alt="Portfolio Image" class="freelance-img-projects">
            <div class="user-name-picture-review-fee">
              <div class="user-p-n">
                <img src="<?php echo 'data:image/png;base64,' . base64_encode($user_row['profilep']) . ''; ?>"
                  alt="Profile Picture" class="profile-p-tbl">
                <p class="usern-tbl"><?php echo $user_row['fname'] . " " . $user_row['lname']; ?></p>
              </div>
              <div class="user-info">
                <p class="review-rating"> <img src="./pictures/reviewstr.png" alt="Reviews: " class="review-str">
                  <?php echo $review; ?>/5</p>
                <p class="price">Fee: £<?php echo $user_row['fee']; ?>/hr </p>
              </div>
            </div>
            <div class="show-more">
              <?php
                    // for displaying part of freelancers about section
                    $introAll = $user_row['intro'];
                    $showmore = '';
                    if (strlen($introAll) > 110) {
                      for ($inx = 0; $inx < 110; $inx ++) {
                        $showmore .= $introAll[$inx];
                      }
                    } else {
                      $showmore = $introAll;
                    }
                    ?>
              <p class="show-more-text"><?php echo $showmore; ?> . . . <span class="show-more-underline">Show
                  more</span></p>
            </div>
          </div>
        </div>
      </a>
      <?php }
        }
      }
      }
      mysqli_close($database); ?>
    </div>
    <div class='navigation-buttons'>
      <a class="navigation-home" href='mainpage.php?changePage=back'>START</a>
      <a class="navigation-shwo16" href='mainpage.php?view16=16'>SHOW 16</a>
      <a class="navigation-shwo8" href='mainpage.php?view8=8'>SHOW 8</a>
      <a class="navigation-next" href='mainpage.php?changePage=next'>NEXT</a>
    </div>
    
  </section>
  <?php include "./components/footer.php" ?>
</body>
</html>