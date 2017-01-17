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
            Events in <?=$region?>
            </h1>
            <p>
            Hi <em><?=$user?></em>, we have your region set as <em><?=$region?></em>. If that's not right, <a href="#">click here</a>.
            </p>
        </div>
        <div class="col-md-2">
            <img src='images/logo.png'>
        </div>
    </div>

    <div class="col-md-12">
        <h2>Friday choir group</h2>
        <p>Justin Morris runs a Friday choir covering hits from the 60s, 70s and 80s!</p>
        <ul>
            <li>Date: every Friday</li>
            <li>Time: 2:00pm</li>
            <li>Cost: £3 each to cover hall hire</li>
            <li>Location: Putney Hall</li>
        </ul>
        <button type="submit" value="Register" class="btn btn-success" id="submit">
            Click to join
        </button>
    </div>

    <div class="col-md-12">
        <h2>Monthly Matinée</h2>
        <p>Abi Arranson has organised a special rate for a monthly West End matinee. A week before each performance, Abi confirms whether you would like to attend via a text message.</p>
        <ul>
            <li>Date: first Tuesday of the month</li>
            <li>Time: between 1 - 4pm</li>
            <li>Cost: Varies; normall £15-30</li>
            <li>Location: Brightlights community centre</li>
        </ul>
        <button type="submit" value="Register" class="btn btn-success" id="submit">
            Click to join
        </button>
    </div>

    <div class="col-md-12">
        <h2>Festival of Lights</h2>
        <p>Dorothy Jennings is organising a meetup to visit the Festival of Lights. </p>
        <ul>
            <li>Date: Tuesday 27th January</li>
            <li>Time: 4:00pm</li>
            <li>Cost: £5 entrance fee</li>
            <li>Location: Meet at the south east entrance of Putney Park</li>
        </ul>
        <button type="submit" value="Register" class="btn btn-success" id="submit">
            Click to join
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
