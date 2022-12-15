<?php
//IMAGE UPLOADS

$target_dir = "freelancer-uploads/";

//PROFILE PICTURE

$target_file_profilepic = $target_dir . basename($_FILES["profilepicture"]["name"]);
$uploadOK_profilepic = 1;
$imageFileType = strtolower(pathinfo($target_file_profilepic, PATHINFO_EXTENSION));

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
if ($_FILES["profilepicture"]["size"] > 500000) {
  echo "Sorry, your profile picture file is too large.<br />";
  $uploadOK_profilepic = 0;
}

// Allow certain file formats
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
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
  if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file_profilepic)) {
    echo "The file " . htmlspecialchars(basename($_FILES["profilepicture"]["name"])) . " has been uploaded.<br />";
  } else {
    echo "Sorry, there was an error uploading your profile picture file.<br />";
  }
}

//THUMBNAIL

$target_file_thumbnail = $target_dir . basename($_FILES["thumbnail"]["name"]);
$uploadOK_thumbnail = 1;
$imageFileType = strtolower(pathinfo($target_file_thumbnail, PATHINFO_EXTENSION));

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
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
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
  if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file_thumbnail)) {
    echo "The file " . htmlspecialchars(basename($_FILES["thumbnail"]["name"])) . " has been uploaded.<br />";
  } else {
    echo "Sorry, there was an error uploading your thumbnail file.<br />";
  }
}

//DATABASE CONNECTION

include '.../private/initialize.php';

if ($database->connect_error) {
  die("Connection failed: " . $database->connect_error);
}

$profilepic_name = $_FILES['profilepicture']['name'];
$profilepic_size = $_FILES['profilepicture']['size'];

$thumbnail_name = $_FILES['thumbnail']['name'];
$thumbnail_size = $_FILES['thumbnail']['size'];

$description = $_POST['description'];


$sql = "INSERT INTO freelancer (profilepic, intro, projects) 
        VALUES ('$profilepic_name', '$description', '$thumbnail_name')";

if ($database->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: "
    . $sql . "<br>" . $database->error;
}

$database->close();