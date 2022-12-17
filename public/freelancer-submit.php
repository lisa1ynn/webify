<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
//IMAGE UPLOADS

$target_dir = "./freelancer-uploads/";

//PROFILE PICTURE

$target_file_profilepic = $target_dir . basename($_FILES["profilepicture"]["name"]);
$uploadOK_profilepic = 1;
$imageFileType_profilepic = strtolower(pathinfo($target_file_profilepic, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["profilepicture"]["tmp_name"]);
  if ($check !== false) {
    echo "Profile picture file is an image - " . $check["mime"] . "." . "<br />";
    $uploadOK_profilepic = 1;
  } else {
    echo "Profile picture file is not an image.<br />";
    $uploadOK_profilepic = 0;
  }
}

// Check file size
if ($_FILES["profilepicture"]["size"] > 5000000) {
  echo "Sorry, your profile picture file is too large.<br />";
  $uploadOK_profilepic = 0;
}

// Allow certain file formats
if (
  $imageFileType_profilepic != "jpg" && $imageFileType_profilepic != "png" && $imageFileType_profilepic != "jpeg"
) {
  echo "Sorry, only JPG, JPEG & PNG files are allowed.<br />";
  $uploadOK_profilepic = 0;
}

//Check if there is an error
if ($_FILES["profilepicture"]["error"] > 0) {
  echo "Error: " . -$_FILES["profilepicture"]["error"] . "<br />";
  $uploadOK_profilepic = 0;
}


// Check if $uploadOK_profilepic is set to 0 by an error
if ($uploadOK_profilepic == 0) {
  echo "Sorry, your profile picture file was not uploaded.<br />";
  // if everything is ok, try to upload file
} else {
  $profilePicture = $_FILES["profilepicture"]["tmp_name"];
  $profilePictureContent = addslashes(file_get_contents($profilePicture));
  if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file_profilepic)) {
    echo "The file " . htmlspecialchars(basename($_FILES["profilepicture"]["name"])) . " has been uploaded.<br />";
  } else {
    echo "Sorry, there was an error uploading your profile picture file.<br />";
  }
}

//THUMBNAIL

$target_file_thumbnail = $target_dir . basename($_FILES["thumbnail"]["name"]);
$uploadOK_thumbnail = 1;
$imageFileType_thumbnail = strtolower(pathinfo($target_file_thumbnail, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
  if ($check !== false) {
    echo "Thumbnail file is an image - " . $check["mime"] . "." . "<br />";
    $uploadOK_thumbnail = 1;
  } else {
    echo "Thumbnail file is not an image.<br />";
    $uploadOK_thumbnail = 0;
  }
}

// Check file size
if ($_FILES["thumbnail"]["size"] > 500000) {
  echo "Sorry, your thumbnail file is too large.<br />";
  $uploadOK_thumbnail = 0;
}

// Allow certain file formats
if (
  $imageFileType_thumbnail != "jpg" && $imageFileType_thumbnail != "png" && $imageFileType_thumbnail != "jpeg"
) {
  echo "Sorry, only JPG, JPEG & PNG files are allowed. (Thumbnail)<br />";
  $uploadOK_thumbnail = 0;
}

//Check if there is an error
if ($_FILES["thumbnail"]["error"] > 0) {
  echo "Error: " . -$_FILES["thumbnail"]["error"] . "<br />";
  $uploadOK_thumbnail = 0;
}


// Check if $uploadOK_thumbnail is set to 0 by an error
if ($uploadOK_thumbnail == 0) {
  echo "Sorry, your thumbnail file was not uploaded.<br />";
  // if everything is ok, try to upload file
} else {
  $thumbnailPicture = $_FILES["thumbnail"]["tmp_name"];
  $thumbnailPictureContent = addslashes(file_get_contents($thumbnailPicture));
  if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file_thumbnail)) {
    echo "The file " . htmlspecialchars(basename($_FILES["thumbnail"]["name"])) . " has been uploaded.<br />";
  } else {
    echo "Sorry, there was an error uploading your thumbnail file.<br />";
  }
}

//DATABASE CONNECTION

include '../private/initialize.php';

if ($database->connect_error) {
  die("Connection failed: " . $database->connect_error);
}

//ADD FREELANCER TO DATABASE

//Get user data from user table
$idStr = $_SESSION['userid'];
$id = (int)$idStr;
$user_array_query = $database->query("SELECT * FROM users WHERE userID = $id"); // fixed
$user_array = $user_array_query->fetch_assoc();

//Put all neccessary data into variables
$fname = $user_array['fname'];
$lname = $user_array['lname'];
$email = $user_array['email'];
$password = $user_array['password'];

$profilepic_pic = $profilePictureContent;
$thumbnail_pic = $thumbnailPictureContent;
$description = $_POST['description'];
$fee = (int)$_POST['fee'];
$skillsArray = $_POST['skills'];
$proficientSkill = $_POST['proficientSkill'];


//Add all freelancer data into database
$sql = "INSERT INTO freelancer (fname, lname, email, password, profilep, intro, projects, fee, proficientSkill) VALUES ('$fname', '$lname', '$email', '$password', '$profilepic_pic', '$description', '$thumbnail_pic', '$fee', '$proficientSkill')";


if ($database->query($sql) === TRUE) {
  echo "New images added successfully";
} else {
  echo "Error: "
    . $sql . "<br>" . $database->error;
}

// add skills to user
$getNewUser = "SELECT id FROM freelancer WHERE email='$email'";
$userIdQuery = $database->query($getNewUser);
$userIdGet = $userIdQuery->fetch_assoc();
$userIdStr = $userIdGet['id'];
$userId = (int)$userIdStr;

// insert skills
foreach ($skillsArray as $skill) {
  $skillToInteger = (int)$skill;
  $insertQuery = "INSERT INTO freelancerskill (freelancer_id, skill_id) VALUES ($userId, $skillToInteger)";
  $database->query($insertQuery);
}

// delete from users table to avoid conflict 
$deleteUser = "DELETE FROM users WHERE userID = '$id'";
$database->query($deleteUser);

// reasign session variables
$_SESSION["userType"] = 'freelancer';
$_SESSION["userid"] = $userId;
// takes freelancer to end-of-onboarding page
header("Location: ./freelancer-onboarding-success.php");

$database->close();
