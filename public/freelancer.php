<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./general.css">
        <link href="https://fonts.googleapis.com/css?family=Archivo:500|Open+Sans:300,700" rel="stylesheet">
        <style>
            body {
                margin: 0px;
                background-color: #262626;
                color: #C0C0C0;
                font-family: 'Open Sans', sans-serif;
                font-weight: 300;
            }

            h1, h2, h3, h4, h5, h6 {
                font-family: 'Archivo', sans-serif;
                font-weight: 500;
            }
            @media screen and (max-width: 935px) {
              .main-area-profile-info {
                  display: flex;
                  flex-direction: column;
                  width: 100%;
                  height: 100%;
                  
              }
            }

            @media screen and (min-width: 935px) {
              .main-area-profile-info {
                  display: flex;
                  flex-direction: row;
                  width: 100%;
                  height: 100%;
                  grid-template-columns: 60% 40%;
              }
            }

            .projects-description-area {
                display: grid;
                grid-template-rows: 70% 25%;
                place-items: center;
                height: 90%;
                row-gap: 2rem;
            }

            .contact {
                display: block;
                margin-top:50%;
                grid-template-rows: 30% 5%;
                place-items: center;
                height: 50%;
                position:relative;
                left:-20%;
            }

            .projects-img-container {
                width: 90%;
                height: 100%;
                padding-top: 2%;
                margin-right: 30px;
            }

            .projects-img {
                width: 800px;
                height: 600px;
                border-radius: 30px;
                box-shadow: 0px 8px 10px #151515;
            }

            .description-container {
                width: 90%;
                border-radius: 20px;
                margin-bottom: 2%;
            }

            .description-container > h1 {
                padding-top: 1%;
                padding-left: 2%;
                font-size: 32px;
                font-weight: bold;
            }

            .description-container > p {
                font-size: 20px;
                padding: 2%;
            }

            .profile-info-area {
                height: 100%;
                display: flex;
                flex-direction: column;
                grid-template-rows: 30% 40% 30%;
                border: solid #FF511C;
                border-radius: 20px;
                padding-left: 1%;
                margin-top: 2%;
                margin-bottom: 2%;
                margin-right: 2%;
                box-shadow: 0px 8px 15px #151515;
                grid-row-gap: 5%;
                width: 100%;
                padding-right: 100px;
            }

            .profile-picture-name {
                display: grid;
                grid-template-columns: 50% 50%;
                place-items: center;
            }

            .profile-picture-container {
                height: 90%;
                width: 90%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 1rem;
            }

            .profile-picture {
                height: 150px;
                width: 150px;
                border-radius: 100%;
                box-shadow: 0px 5px 10px #151515;
            }

            .first-last {
                font-size: 2rem;
                font-weight: bold;
                text-align: left;
                padding-left: 20px;
            }

            .profile-fee {
                font-size: 1.5rem;
                font-weight: bold;
                margin-left: 1.5rem;
            }

            .profile-skill {
                margin-left: 1.5rem;
            }

            .reviews-see-post {
                height: 100%;
            }

            .reviews {
                margin-left: 1.5rem;
            }

            .post-review {
                margin-left: 1.5rem;
            }

            .review-str {
                width: 15px;
                height: 15px;
            }

            .post-review {
                margin-bottom: 10px;
                padding-bottom: 5px;
            }

            .choose-rating-dropdown {
                background-color: #FF511C;
                color: #C0C0C0;
                padding: 2px;
            }

            .choose-rating-dropdown:hover {
                font-weight: bold;
                text-shadow: 0px 1px 2px black;
            }


            .submit-btn-review {
                color: #C0C0C0;
                background-color: #FF511C;
                padding: 2px;
                border: none;
                border-radius: 20px;
                width: 8rem;
                border: solid #FF511C;
            }

            .submit-btn-review:hover {
                background-color: #262626;
                color: #FF511C;
            }
            .button{
            margin-left:4%;
            padding:1%;
            }
            
            .input {
            background-color: #daddff;
            margin-bottom: 15px;
            border-radius: 15px;
            padding: 2px 10px;
            }
            .hidden{
                display:none; /* Hides the element*/
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 2%; /* Location of the box */
                padding-left:10%; 
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            .message{
                background-color:#7d80ff; /* Distinct editbox colour */
                width:60%; /* The position of the editbox */
                padding:5%; /* size of the box */
                border-radius:5%; /* Nice round corners */
                color:black; /* text colour black */
                margin-top:5%; /* extra margin so that full editbox is shown */
  }

  .edittext {
    font-weight: bold;
    /* makes the font bold */

  }

  .inline {
    display: inline;
    /* displays some elements in the same line, that otherwise default to a new block */
  }
  </style>
  <script>
  // removes alers showed if pagae refresed or exited if review is made
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  // function to display the hidden element to send the message
  function sendmessage() {

    const message = document.getElementById("n2"); // defines the editbio variable
    message.style.display = "block";
  }

  // function to cancel the editing of the bio
  function cancelmessage() {
    const message = document.getElementById("n2");
    message.style.display = "none"; // The display CSS value is again none, hiding the element
  }
  </script>
</head>

<body>
  <?php
    include './components/Header.php';
    include '../private/initialize.php';

    $profile = explode(",", $_GET['profile']);
    $id = (int)$profile[0];

    $profile_features_query = $database->query("SELECT skill, fname, lname, points, reviews, intro, profilep, projects, fee, proficientSkill, email
                FROM freelancer AS f, freelancerskill AS fs, skills AS s
                WHERE f.id = fs.freelancer_id
                AND fs.skill_id = s.skill_id
                AND f.id = $id
                ");

    $profile_features = $profile_features_query->fetch_assoc();

    if ($profile_features['reviews'] > 0) {
        $review = number_format($profile_features['points'] / $profile_features['reviews'], 2);
    } else {
        $review = 0;
    }
    ?>
  <section class="main-area-profile-info">
    <div class="projects-description-area">
      <div class="projects-img-container">
        <img src="<?php echo 'data:image/png;base64,' . base64_encode($profile_features['projects']) . ''; ?>"
          alt="Portfolio Image" class="projects-img">
      </div>
      <div class="description-container">
        <h1>About:</h1>
        <p><?php echo $profile_features['intro']; ?></p>
      </div>
    </div>
    <div class="profile-info-area">
      <div class="profile-picture-name">
        <div class="profile-picture-container">
          <img src="<?php echo 'data:image/png;base64,' . base64_encode($profile_features['profilep']) . ''; ?>"
            alt="Profile Picture" class="profile-picture">
        </div>
        <div class="first-last">
          <p><?php echo $profile_features['fname']; ?></p>
          <p><?php echo $profile_features['lname']; ?></p>
        </div>
      </div>
      <div class="profile-info-fee-skills-offer">
        <div class="profile-fee">
          <p>Fee: £<?php echo $profile_features['fee']; ?>/hr</p>
        </div>
        <div class="profile-skill">
          <p>Expertise: | <?php
                                    // make sure no duplicate skills, display all skills one by one with the loop
                                    $skill_tracker = array();
                                    while ($skill = $profile_features_query->fetch_assoc()) {
                                        if (!in_array($skill['skill'], $skill_tracker)) {
                                            $skill_tracker[] = $skill['skill'];
                                            echo $skill['skill'] . ' | ';
                                        }
                                    } ?></p>
            <p>Proficient at: <?php echo $profile_features['proficientSkill']; ?></p>
            <p>Contact at: <?php echo $profile_features['email']; ?></p>
        </div>
      </div>

      <!-- Add link to portfolio onto info section -->

      <div class="reviews-see-post">
        <div class="reviews">
          <p class="review-rating"> <img src="./pictures/reviewstr.png" alt="Reviews: " class="review-str">
            <?php echo $review; ?>/5 | <?php echo $profile_features['reviews']; ?> Reviews</p>
        </div>
        <div class="post-review">
          <form class="review-submit-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <select id="review-rating" name="review" class='choose-rating-dropdown'>
              <option value=1>1</option>
              <option value=2>2</option>
              <option value=3>3</option>
              <option value=4>4</option>
              <option value=5 selected>5</option>
            </select>
            <input type="submit" value="Submit review" class="submit-btn-review">
          </form>
          <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $user_review = $_POST['review'];
                        if (!empty($user_review)) {
                            $points = (int)$profile_features['points'] + (int)$user_review;
                            $new_reviews = (int)$profile_features['reviews'] + 1;
                            $database->query("UPDATE freelancer SET points='$points', reviews='$new_reviews' WHERE id=$id");
                        }
                    }
                    ?>
        </div>
      </div>
    </div>
    <!-- <div class="contact">
      <button class="header-button button" style="padding:10%;" onclick=sendmessage()>Contact</button>
    </div>
    Form to send the message, different div tags are needed, to blur out the background and to present a nice field
    <div class="hidden" id="n2">
      <div class="message">
        <form action="changefldata.php"> -->
          <!-- data is sent to another file, which sends it to the DB for the update -->
          <!-- <p class="edittext">Message for the freelancer</p><textarea id="n3" class="input" rows=10 cols=80
            name="intro"></textarea>
          <button class="header-button button inline" type="button" onclick=cancelmessage()>Cancel</button>
          <button class="header-button button" type="submit" name="submit" value="Submit">Submit</button>
        </form>
      </div>
    </div> -->
  </section>
  <?php include "./components/footer.php" ?>
</body>
</html>