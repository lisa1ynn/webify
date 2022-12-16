<!DOCTYPE html>
<html>

<head>
  <title>Sign-Up Complete</title>
</head>

<body>

  <p>Sign-up successful, click below to sign in</p>
  <?php

        // Includes the initialize file
        include('../private/initialize.php');

        // Checks for database connection error
        if ($database->connect_error) {
                die("Connection failed: " . $database->connect_error);
        }

        // Taking all 4 values from the form data(input)
        $firstname =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        // Checking if the email is already taken by another user
        $selectusers = mysqli_query($database, "SELECT * FROM users WHERE email = '$email'");
        $selectfreel = mysqli_query($database, "SELECT * FROM freelancer WHERE email = '$email'");
        if (mysqli_num_rows($selectusers)) {
                echo "Go back, this email address is already used!";
                exit;
        } elseif (mysqli_num_rows($selectfreel)){
                echo "Go back, this email address is already used!";
                exit;
        }  
        else
        // Inserts new user data into the users table
        {
                $sql = "INSERT INTO users (fname, lname, email, password)
	VALUES ('$firstname', '$lastname', '$email', '$password')";
        }
        // Check for entry error
        if ($database->query($sql) === TRUE) {
                echo "New record created successfully";
        } else {
                echo "Error: " . $sql . "<br>" . $database->error;
        }

        $database->close();

        ?>
  <!--Button to sign in-->
  <form action="./sign-in.php">
    <input type="submit" value="Sign in">
    </input>
  </form>



</body>

</html>