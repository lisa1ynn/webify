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
	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
	

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
	} else {
		echo 'did not work';
	}

	

	?>





</body>

</html>