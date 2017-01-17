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
            Community Needs Questionnaire (optional)
            </h1>
            <p>
                To help provide better services and events in your region, we need to know about the lifestyle and health needs in the community. This questionnaire is <em>optional</em> and <em>anonymized</em>, and we will never share this information with other organisations.
            </p>
        </div>
        <div class="col-md-2">
            <img src='images/logo.png'>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Community Needs Questionnaire</h3>
                </div>
                <div class="panel-body">
                    <form class="form" role="form" action="home.php">
                        <div class="form-group">
                            <label for="friends">How often do you meet friends/family in a week?</label>
                            <select class="form-control" id="friends">
                                <option>1 - 2</option>
                                <option>3 - 4</option>
                                <option>Every day</option>
                                <option>Never</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mobility">Do you have any mobility issues?</label>
                            <br>
                            <label class="radio-inline"><input type="radio" name="mobility">Yes</label>
                            <label class="radio-inline"><input type="radio" name="mobility">No</label>
                        </div>

                        <div class="form-group">
                            <label for="fruit_and_veg">How many portions of fruit/veg do you have a day?</label>
                            <select class="form-control" id="fruit_and_veg">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8 or more</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="smoker">Do you smoke?</label>
                            <br>
                            <label class="radio-inline"><input type="radio" name="smoker">Yes</label>
                            <label class="radio-inline"><input type="radio" name="smoker">No</label>
                        </div>

                        <div class="form-group">
                            <label for="drinker">Do you drink alcohol?</label>
                            <br>
                            <label class="radio-inline"><input type="radio" name="drinker">Yes</label>
                            <label class="radio-inline"><input type="radio" name="drinker">No</label>
                        </div>

                        <div class="form-group">
                            <label for="units">How many units of alcohol do you drink in an average week?</label>
                            <select class="form-control" id="units">
                                <option>0</option>
                                <option>1 - 4</option>
                                <option>5 - 8</option>
                                <option>8 - 12</option>
                                <option>12 - 16</option>
                                <option>16 - 20</option>
                                <option>21 or more</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="lonely">Do you have feelings of loneliness?</label>
                            <br>
                            <label class="radio-inline"><input type="radio" name="mobility">Never</label>
                            <label class="radio-inline"><input type="radio" name="mobility">Rarely</label>
                            <label class="radio-inline"><input type="radio" name="mobility">Sometimes</label>
                            <label class="radio-inline"><input type="radio" name="mobility">Often</label>
                            <label class="radio-inline"><input type="radio" name="mobility">Always</label>
                        </div>

                        <button type="submit" value="Register" class="btn" id="submit">
                            Skip Questionnaire
                        </button>
                        <button type="submit" value="Register" class="btn btn-success" id="submit">
                            Confirm
                        </button>

                    </form>

                </div>
            </div>
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
