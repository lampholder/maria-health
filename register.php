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
            Register now to hear about activities in your area!
            </h1>
        </div>
        <div class="col-md-2">
            <img src='images/logo.png'>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Register</h3>
                </div>
                <div class="panel-body">
                    <form class="form" role="form">
                        <div class="form-group">
                            <label for="first_name">First name:</label>
                            <input type="text" id="first_name" class="form-control" placeholder="First name" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last name:</label>
                            <input type="text" id="last_name" class="form-control" placeholder="Last name" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <label for="birthdate">Date of birth:</label>
                            <input type="date" id="birthdate" class="form-control" placeholder="1980-01-01" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="phone" id="mobile" class="form-control" placeholder="07890123456" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <label for="postcode">Postcode:</label>
                            <input type="text" id="postcode" class="form-control" placeholder="W4 4AJ" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <label for="password1">Password:</label>
                            <input type="password" id="password1" class="form-control" placeholder="" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <label for="password2">Re-enter password:</label>
                            <input type="password" id="password2" class="form-control" placeholder="" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" value="Register" class="btn btn-success" id="submit">
                            Register
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
