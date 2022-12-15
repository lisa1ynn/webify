<!DOCTYPE html>
<html>

<head>
	<title>login check</title>
</head>

<body>

	<p>Hello</p>
	<?php
	include('../private/initialize.php');

	if ($database->connect_error) {
		die("Connection failed: " . $database->connect_error);
	}

	// Taking values from the form data(input)
	// Taking values from the form data(input)

	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	
	// 2 sperate queries so that we can check if the user if a freelancer or a normal user
	// SQL query for the password of the email entered
	$sqlUser = "SELECT * FROM users WHERE email='$email'";
	$resultUser = $database->query($sqlUser);

	$sqlFreel = "SELECT * FROM freelancer WHERE email='$email'";
	$resultFreel = $database->query($sqlFreel);

	if ($resultUser->num_rows > 0) {
		// Checking if the passwords match
			$rowU = $resultUser->fetch_assoc();
			if ($password === $rowU["password"]) {
				session_start();
				// all of this to session variables -> get user id to be able to display right profile page
				// userType -> Distinc between freelancer and normal user for profile page purposes
				// username -> in case we want to display name somewhere for the user
				$_SESSION['userid'] = $rowU["userID"];
				$_SESSION['userType'] = 'user';
				$_SESSION['username'] = $rowU["fname"];

				header("Location: mainpage.php");

			} else {
				header("Location: sign-in.php?wrongPassword=1");
			};

	// check for freelancer
	} else if ($resultFreel->num_rows > 0) {
			$rowF = $resultFreel->fetch_assoc();
			if ($password === $rowF["password"]) {
				session_start();
				$_SESSION['userid'] = $rowF["id"];
				$_SESSION['userType'] = 'freelancer';
				$_SESSION['username'] = $rowF["fname"];

				header("Location: mainpage.php");
				
			} else {
				header("Location: sign-in.php?wrongPassword=1");
			};
		}
	// nothing found
	else {
		echo 'did not work';
		echo $email;
	}

	

	?>





</body>

</html>