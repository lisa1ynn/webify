<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Freelancer onboarding information</title>
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
    font-size: x-large;
  }

  .white-text-small {
    font-size: x-large !important;
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
          Become a<br />
          <span class="cool-text">Webify freelancer</span>
        </h1>
        <p class="white-text-small computer-font">
          Welcome to webify!<br /><br />

          We're excited to have you on board as one of our web development
          freelancers. Before you get started, please remember to be honest when
          filling out your profile information. This will help potential clients
          understand your expertise and what you can offer.<br /><br />

          In addition to your profile information, we also recommend providing
          examples of your work and any relevant references. This will give
          potential clients a better idea of your capabilities and help them make
          an informed decision when choosing a freelancer for their project.<br /><br />

          If you have any questions or need assistance, please don't hesitate to
          contact us. We're here to help you succeed on webify.<br /><br />

          Much fun with coding,<br /><br />

          The webify team
        </p>
        <div style="display: flex; justify-content: center; align-items: center">
          <button class="button-white computer-font" type="button"
            onclick="window.location.href='./freelancer-onboarding-form.html';">
            Create profile
          </button>
        </div>
      </div>
      <div class='image-col'>
        <img src="../pictures/coding-unsplash.jpg" alt="Coding" width="800" height="1100">
      </div>
    </div>
  </section>
</body>

</html>

</html>