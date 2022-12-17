<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Freelancer onboarding success</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
  .info-page-row {
    display: flex;
  }

  .info-col {
    flex: 60%;
    margin: 0px 40px;
  }

  .image-col {
    flex: 40%;
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
  <link rel="stylesheet" href="../general.css?v=<?php echo time(); ?>" />
</head>

<body>
  <?php include '../components/Header.php' ?>
  <section>
    <div class='info-page-row'>
      <div class='info-col'>
        <h1>
          You have successfully become a <br />
          <span class="cool-text">Webify freelancer</span>
        </h1>
        <p class="white-text-small computer-font">
          Congratulations!<br><br>

          You have successfully completed the onboarding process. We are excited to have you join our community of
          talented freelancers.<br><br>

          To get started, you can now browse available projects for inspiration. Don't forget to update
          your profile and portfolio to increase your chances of getting hired.<br><br>

          Thank you for choosing Webify to find your next project. We look forward to working with you.<br><br>

          Much fun with coding,<br /><br />

          The webify team
        </p>
        <div style="display: flex; justify-content: center; align-items: center">
          <button class="primary button-white" type="button" onclick="window.location.href='./../profile.php';">
            Visit profile
          </button>
        </div>
      </div>
      <div class='image-col'>
        <img src="../pictures/codingdesk-unsplash.jpg" alt="Coding" width="100%" height="auto">
      </div>
    </div>
  </section>
</body>

</html>