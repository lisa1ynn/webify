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

	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	// SQL query for the password of the email entered
	$sql = "SELECT password FROM users WHERE email='$email'";
	$result = $database->query($sql);

	if ($result->num_rows > 0) {
		// Checking if the passwords match
		while ($row = $result->fetch_assoc()) {
			if ($password == $row["password"]) {
				header("Location: mainpage.php");
			} else {
				header("Location: sign-in.html?wrongPassword=1");
			};
		}
	} else {
		echo "0 results";
	}


	$database->close();

	?>





</body>

</html>