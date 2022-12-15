<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="general.css?v=<?php echo time(); ?>" >
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

            .projects-img-container {
                width: 90%;
                height: 100%;
                padding-top: 2%;
            }

            .projects-img {
                width: 100%;
                height: 90%;
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
                width: 30%;
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
            margin:2%;
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
            .editbox{
                background-color:#7d80ff; /* Distinct editbox colour */
                width:60%;
                padding:5%;
                border-radius:5%;
                color:black;

            }
            .edittext{
                font-weight:bold;
            }
            .small{
                padding:0px;
                margin:0px;
            }
            .inline{
                display:inline;
            }
        </style>
        <script>
      // removes alers showed if pagae refresed or exited if review is made
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }

      // defines the editbio variable
    
    
    // function to display the hidden element to edit the bio


    // function to display the hidden element to edit other data
    function editdata(){
        
        fname=document.getElementById("n8").innerHTML;
        document.getElementById("n5").innerHTML=fname;
        lname=document.getElementById("n9").innerHTML;
        document.getElementById("n6").innerHTML=lname;
        fname=document.getElementById("n10").innerHTML;
        document.getElementById("n7").innerHTML=fname;
        const editbio=document.getElementById("n2");
        bio=document.getElementById("n1").innerHTML;
        document.getElementById("n3").innerHTML=bio;
        editbio.style.display="block";
    }

      // function to cancel the editing of the bio
    function canceledit(){
        const editbio=document.getElementById("n2");
        editbio.style.display="none";
    }

    // function to cancel the editing of the other data
    function canceldataedit(){
        const editdata=document.getElementById("n4");
        editdata.style.display="none";
    }
    </script>
    </head>
    <body>
        <?php
        include './components/header.php';
        include '../private/initialize.php';

            $profile = explode(",",$_GET['profile']);
            $id = (int)$profile[0];

            $profile_features_query = $database->query("SELECT skill, fname, lname, points, reviews, intro, profilep, projects, fee
                FROM freelancer AS f, freelancerskill AS fs, skills AS s
                WHERE f.id = fs.freelancer_id
                AND fs.skill_id = s.skill_id
                AND f.id = $id
                ");
                
            $profile_features = $profile_features_query->fetch_assoc();

            $review = number_format($profile_features['points']/$profile_features['reviews'], 2);
        ?>
        <section class="main-area-profile-info">
            <div class="projects-description-area">
                <div class="projects-img-container">
                <button class="header-button button" onclick=editdata()>Edit</button>
                    <img src="<?php echo 'data:image/png;base64,'.base64_encode($profile_features['projects']).''; ?>" alt="Portfolio Image" class="projects-img">
                </div>
                <div class="description-container">
                    <h1>About:</h1>
                    <p id="n1"><?php echo $profile_features['intro']; ?></p>

                    <!-- Form to edit the bio -->
                    <div class="hidden" id="n2">
                    <div class="editbox">
                    <form action="changefldata.php">
                        <p class="edittext">Bio</p><textarea id="n3" class="input" rows=10 cols=100 name="intro"></textarea>
                        <p class="edittext">First name</p><textarea id="n5" class="input" rows=1 cols=10 name="fname"></textarea>
                        <p class="edittext">Last name</p><textarea id="n6" class="input" rows=1 cols=10 name="lname"></textarea>
                        <p class="edittext">Fee</p><textarea id="n7" class="input" rows=1 cols=10 name="fee"></textarea>
                        <button class="header-button button" type="submit" name="submit" value="Submit">Submit</button>
                        
                    </form>
                    <button class="header-button button inline" onclick=canceledit()>Cancel</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="profile-info-area">
                <div class="profile-picture-name">
                    <div class="profile-picture-container">
                        <img src="<?php echo 'data:image/png;base64,'.base64_encode($profile_features['profilep']).''; ?>" alt="Profile Picture" class="profile-picture">
                    </div>
                    <div class="first-last">
                        <p id="n8"><?php echo $profile_features['fname']; ?></p>
                        <p id="n9"><?php echo $profile_features['lname']; ?></p>
                    </div>
                </div>
                <div class="profile-info-fee-skills-offer">
                    <div class="profile-fee"><p class="inline">Fee: £<p id="n10" class="inline"><?php echo $profile_features['fee']; ?></p>/hr</p></div>
                    <div class="profile-skill"><p>Expertise: | <?php 
                        // make sure no duplicate skills, display all skills one by one with the loop
                        $skill_tracker = array();
                        while ($skill = $profile_features_query->fetch_assoc()){
                            if (!in_array($skill['skill'], $skill_tracker)) {
                                $skill_tracker[] = $skill['skill'];
                                echo $skill['skill'].' | ';
                            }
                        }?></p>
                    </div>
                </div>
                <div class="reviews-see-post">
                    <div class="reviews">
                        <p class="review-rating"> <img src="./pictures/reviewstr.png" alt="Reviews: " class="review-str"> <?php echo $review; ?>/5 | <?php echo $profile_features['reviews']; ?> Reviews</p>
                    </div>
                    <!-- Form to change other data about the freelancer-->
                   
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

        </section>
        <?php include "footer.php"?>
    </body>
</html>