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

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

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
            Events in your area
            </h1>
            <p>
            Hi <em><?=$user?></em>, we have your region set as <em><?=$region?></em>. If that's not right, <a href="#">click here</a>.
            </p>
        </div>
        <div class="col-md-2">
            <img src='images/logo.png'>
        </div>
    </div>

    <div class="col-md-6">
        <h2>Activities and Events</h2>
        <p>Local activities and events in <em><?=$region?></em></p>
        <ul>
            <li>Knitting club</li>
            <li>Friday choir group</li>
            <li>Montly matinée</li>
            <li>Festival of lights</li>
        </ul>
        <form action="events.php">
            <button type="submit" value="Register" class="btn btn-success" id="submit">
                Find out more
            </button>
        </form>
    </div>

    <div class="col-md-6">
        <h2>Health and Wellbeing</h2>
        <p>Feeling under the weather or a bit blue? Let us help you find the right services.</p>
        <ul>
            <li>NHS Health check</li>
            <li>Meditation groups/li>
            <li>Health quizes</li>
            <li>Advocacy and support groups</li>
        </ul>
        <form action="health.php">
            <button type="submit" value="Register" class="btn btn-success" id="submit">
                Find out more
            </button>
        </form>
    </div>

    <div class="col-md-6">
        <h2>Volunteering</h2>
        <p>Volunteer to help other members and your local community:</p>
        <ul>
            <li><?=$region?> park community garden</li>
            <li>RSPCA store volunteering</li>
            <li>Driver required for Dorothy's grocery run!</li>
        </ul>
        <button type="submit" value="Register" class="btn" id="submit">
            Find out more
        </button>
    </div>

    <div class="col-md-6">
        <h2>Learning and Skills Exchange</h2>
        <p>Find out about local classes, or help teach other members some new tricks!</p>
        <ul>
            <li>Wordpress for beginners class</li>
            <li>Making the most of your smartphone</li>
            <li>Spanish for holiday-makers</li>
        </ul>
        <button type="submit" value="Register" class="btn" id="submit">
            Find out more
        </button>
    </div>
 
    <div class="col-md-6">
        <h2>Companion</h2>
        <p>Lend an ear and make new friends!</p>
        <ul>
            <li>Silver line</li>
            <li>Buddy text messaging</li>
        </ul>
        <button type="submit" value="Register" class="btn" id="submit">
            Find out more
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
    $(function() {
        $('#birthdate').datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
  </body>
</html>
