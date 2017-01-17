<!DOCTYPE html>
<?php
    include "common.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$title?></title>

    <meta name="description" content="">
    <meta name="author" content="Thomas Lant">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php include "nav.php"; ?>
        </div>
    </div>

    <div class="row">
        <div class="page-header col-md-8">
            <h1>
            Health and Wellbeing
            </h1>
        </div>
        <div class="col-md-2">
            <img src='images/logo.png'>
        </div>
    </div>

    <div class="col-md-12">
        <h2>Meditation</h2>
        <p>Mediation can improve your concentration and mood, while also lowering stress and anxiety. Meditation for 65+ offers advice and classes throughout the UK</p>
        <button type="submit" value="Register" class="btn btn-success" id="submit">
            Visit the website
        </button>
    </div>

    <div class="col-md-12">
        <h2>Alcohol and Your Health</h2>
        <p>Wondering whether your drinking might have an impact on your health? Take our short quiz to see whether you're at risk.</p>
        <button type="submit" value="Register" class="btn btn-success" id="submit">
            Take the quiz
        </button>
    </div>

    <div class="col-md-12">
        <h2>Health Nurse Appointments</h2>
        <p>Your local council has a health nurse. Visit their website to book an appointment.</p>
        <button type="submit" value="Register" class="btn btn-success" id="submit">
            Visit the website
        </button>
    </div>

    <div class="col-md-12">
        <h2>Health Issue Advocacy</h2>
        <p>If you're concerned about a health issue, then this community group is here to help. Visit their website to find out more.</p>
        <button type="submit" value="Register" class="btn btn-success" id="submit">
            Visit the website
        </button>
    </div>

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
        crossorigin="anonymous"></script>
    <script type-"text/javascript">
    </script>
  </body>
</html>
