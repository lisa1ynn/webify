<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        body {
            margin: 0px;
            background-color: #262626;
        }
    </style>
    <body>
    <?php 
    // only allow freelancers to edit their profile, users do not need this feature at this point
    if ($_SESSION['userType'] === 'freelancer'){
        include 'editfreelancer.php';
    } else {?>
        <script> 
        if (window.confirm("This profile is not a freelancer profile.")) {
            window.location.href = "./mainpage.php";
        }
        </script>
    <?php }
    
    ?>
    </body>
</html>