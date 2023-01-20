<?php
session_start();
if (isset($_POST['submit'])) {

    include('../pages/DbFunction.php');
    $obj = new DbFunction();
    $_SESSION['login'] = $_POST['id'];
    $obj->login($_POST['id'], $_POST['password']);
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .img-container {
            text-align: center;
            display: block;
        }
    </style>
    <title>ACADEMIA - Login</title>
</head>
<style>
    body {
        background-image: url('https://images.unsplash.com/photo-1516642898673-edd1ced08e87?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: #FFFFFF;
    }
</style>

<body>
    <span class="img-container"><img src="/SRMS/images/black.svg" alt="..." height="120px"></span>
    <h3 align="center" style="color:black">A STUDENT RECORD MAINTENANCE SYSTEM</h3>
    <div class="container">
        <br><br><br><br>

        <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title" style="color:black">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Login ID" id="id" name="id" type="text" autofocus autocomplete="off">
                            </div>
                            <div class="form-group my-2">
                                <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="login" name="submit" class="btn btn-lg btn-dark btn-block">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../dist/jquery-1.3.2.js" type="text/javascript"></script>
    <script src="../dist/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(function() {
            jQuery("#id").validate({
                expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                message: "Should be a valid id"
            });
            jQuery("#password").validate({
                expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                message: "Should be a valid password"
            });

        });
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>