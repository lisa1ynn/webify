<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Contact us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
  .contact {
    margin: 0px 40px;
  }

  .input-field {
    margin-bottom: 30px;
    width: 300px;
  }

  .message-input-field {
    height: 100px !important;
    margin: 0 !important;
  }

  .button-white {
    padding: 6px 12px !important;
    margin-top: 30px;
    font-size: large;
  }

  .primary {
    background-color: #7d80ff !important;
    color: #daddff !important;
    border-color: #daddff !important;
  }

  .white-text-small {
    font-size: large !important;
  }
  </style>
  <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>" />
</head>

<body>
  <!--Include header-->
  <?php include './components/Header.php' ?>
  <section>
    <div class='contact'>
      <h1 class="cool-text">
        CONTACT US
      </h1>
      <p class="white-text-small computer-font">
        Thank you for visiting our website. If you have any questions or would like to get in touch with us, please use
        the following contact information or fill out the form below and we will get back to you as soon as possible.
      </p>

      <h2 style="color: white">Our Team:</h2>

      <!--Team information-->
      <ul class="white-text-small computer-font">
        <li>Ann Marie (Founder and CEO)</li>
        <li>Emil (Lead Developer)</li>
        <li>Alexander (Design Lead)</li>
        <li>Leon (Project Manager)</li>
        <li>Lisa (Content Specialist)</li>
      </ul>

      <!--Contact information-->
      <p class="white-text-small computer-font"><b>Phone:</b> +44 (123) 456-7890</p>
      <p class="white-text-small computer-font"><b>Email:</b> info@webify.com</p>
      <p class="white-text-small computer-font"><b>Address:</b> 123 Main Street, Suite 200, London, UK 12345</p>

      <hr>

      <h2 style="color: white">Contact Form:</h2>

      <!--Contact form-->
      <form action="contact.php" method="post">
        <label class="white-text-small computer-font" for="name">Name:</label><br>
        <input class="input-field" type="text" id="name" name="name" required><br>
        <label class="white-text-small computer-font" for="email">Email:</label><br>
        <input class="input-field" type="text" id="email" name="email" required><br>
        <label class="white-text-small computer-font" for="message">Message:</label><br>
        <textarea class="message-input-field input-field" id="message" name="message" required></textarea><br>
        <input class="button-white" type="submit" value="Submit">
      </form>

      <?php
      // Check if the form was submitted
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Process the form data (save to database)
        include '../private/initialize.php';

        if ($database->connect_error) {
          die("Connection failed: " . $database->connect_error);
        }

        $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($database->query($sql) === TRUE) {
          echo "<p class='white-text-small computer-font' style='color: #7d80ff'>Message sent successfully</p>";
        } else {
          echo "Error: "
            . $sql . "<br>" . $database->error;
        }

        $database->close();
      }
      ?>

      <p class="white-text-small computer-font">We look forward to hearing from you!</p>


      </p>
  </section>
  <?php include './components/Footer.php' ?>
</body>

</html>