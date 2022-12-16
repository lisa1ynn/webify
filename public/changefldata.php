<?php require_once './components/Header.php' ?>
<!DOCTYPE html>
<html>

<head>
  <title>Edit successful</title>
</head>

<body>

  <?php

        // Includes the initialize file
        include('../private/initialize.php');

        // Checks for database connection error
        if ($database->connect_error) {
                die("Connection failed: " . $database->connect_error);
        }

        // Taking all values from the form data(input) and the id from the session
        $firstname =  $_REQUEST['fname'];
        $lastname = $_REQUEST['lname'];
        $intro = $_REQUEST['intro'];
        $fee = $_REQUEST['fee'];
        $id = $_SESSION['userid'];



        // Inserts new user data into the freelancer table
        
                $sql = ("UPDATE freelancer
                SET fname = '$firstname', lname = '$lastname', intro = '$intro', fee = '$fee'
                WHERE id = '$id'");
        
        // Check for entry error
        if ($database->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $database->error;
          }

        $database->close();

        ?>
  <!--Button to sign in-->
<?php header("Location: profile.php")?>
  </form>



</body>

</html>