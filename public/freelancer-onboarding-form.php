<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Freelancer onboarding form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../general.css?v=<?php echo time(); ?>" />
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

  .freelancer-form {
    margin: 0;
  }

  .form-row {
    height: 70px;
  }

  .form-cell-label {
    vertical-align: top;
  }

  .form-cell-input {
    vertical-align: top;
    padding-left: 30px;
  }

  .image-input {
    background-color: #7d80ff;
    width: 100%;
    font-size: medium;
  }

  .button-white {
    padding: 6px 12px !important;
    margin-top: 30px;
    font-size: large;
    margin: 40px 15px;
  }

  .primary {
    background-color: #7d80ff !important;
    color: #daddff !important;
    border-color: #daddff !important;
  }

  .form-label {
    color: white;
    font-size: large;
  }

  .freelancer-input-field {
    width: 100%;
    font-size: large;

  }

  .skills {
    padding: 3px;
  }
  </style>
</head>

<body>
  <!-- Include header -->
  <?php include '../public/components/Header.php' ?>
  <section>
    <!-- Row with two columns: for main content and image -->
    <div class='info-page-row'>
      <div class='info-col'>
        <h1 style="margin-bottom: 50px;">
          Your<br />
          <span class="cool-text">information</span>
        </h1>
        <!-- Table to format the form -->
        <table class="freelancer-form">
          <!-- Form with action to start freelancer-submit.php to submit data to database and save images-->
          <form action="freelancer-submit.php" method="POST" enctype="multipart/form-data">
            <!-- Profile picture input-->
            <tr class="form-row">
              <td class="form-cell-label">
                <label class="form-label" for="profilepicture">Profile picture: </label>
              </td>
              <td class="form-cell-input">
                <input class="image-input" type="file" id="profilepicture" name="profilepicture"
                  accept="image/png, image/jpeg" required>
              </td>
            </tr>
            <!-- Tumbnail input-->
            <tr class="form-row">
              <td class="form-cell-label">
                <label class="form-label" for="thumbnail">Thumbnail: </label>
              </td>
              <td class="form-cell-input">
                <input class="image-input" type="file" id="thumbnail" name="thumbnail"
                  accept="image/png, image/jpeg, image/jpg" required>
              </td>
            </tr>
            <!-- Description textarea input-->
            <tr class="form-row">
              <td class="form-cell-label"><label class="form-label" for="description">Description: </label>
              </td>
              <td class="form-cell-input">
                <textarea class="freelancer-input-field" style="margin-bottom: 40px;" name="description"
                  id="description" rows="6" cols="80" required></textarea>
              </td>
            </tr>
            <!-- Fee input -->
            <tr class="form-row">
              <td class="form-cell-label"><label class="form-label" for="fee">Fee (£/hr): </label>
              </td>
              <td class="form-cell-input">
                <input class="freelancer-input-field" type="number" name="fee" id="fee" min="1" required></input>
              </td>
            </tr>
            <!-- Skills checkbox input -->
            <tr class="form-row">
              <td class="form-cell-label"><label class="form-label" for="image">Skills: </label>
              </td>
              <td class="form-cell-input">
                <div class="image-input skills">
                  <?php
                  // Put skills onto database
                  include '../private/initialize.php';

                  $skillsQuery = $database->query("SELECT * FROM skills");
                  while ($skill = $skillsQuery->fetch_assoc()) { ?> <label><input type="checkbox" name="skills[]"
                      id="skills_<?php echo $skill['skill']; ?>"
                      value="<?php echo $skill['skill_id']; ?>"><?php echo $skill['skill']; ?></label>

                  <?php } ?>
                </div>
              </td>
            </tr>
            <!-- Most proficient skill radio button input -->
            <tr class="form-row">
              <td class="form-cell-label"><label class="form-label" for="image">Most experience: </label>
              </td>
              <td class="form-cell-input">
                <div class="image-input skills">
                  <?php
                  // get most proficient skill onto database
                  include '../private/initialize.php';
                  $skillsQuery = $database->query("SELECT * FROM skills");
                  while ($proficientSkill = $skillsQuery->fetch_assoc()) { ?> <label><input type="radio"
                      name="proficientSkill" id="proficientSkill_<?php echo $proficientSkill['skill']; ?>"
                      value="<?php echo $proficientSkill['skill']; ?>"><?php echo $proficientSkill['skill']; ?></label>
                  <?php } ?>
                </div>
              </td>
            </tr>
            <!-- Buttons -->
            <tr class="form-row">
              <td colspan="2" class="form-cell-label" style="text-align: center;">
                <!-- Button to go back to info page -->
                <button class="button-white" type="button"
                  onclick="window.location.href='./freelancer-onboarding-info.php';">
                  Back
                </button>
                <!-- Button to go back to submit form -->
                <input class="primary button-white" type="submit" id="submit" name="submit" value="Next" />
              </td>
            </tr>
          </form>
        </table>
      </div>
      <!-- Column for image -->
      <div class='image-col'>
        <img src="./pictures/coder-guy-unsplash.jpg" alt="Coding" width="100%" height="auto">
      </div>
    </div>
  </section>
</body>