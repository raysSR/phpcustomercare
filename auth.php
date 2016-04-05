<?php
session_start();

if (isset($_SESSION['usernamecustomer'])){
header("location:index.php");?>
 <?php
} else{ }?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form  class="form-signin" method="post" method="post"class="form-signin" role="form">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="form-signin-heading">Please sign in</h2>
                </div>
                <div class="panel-body">
                     <?php
                         
                            if (@$_POST['masuk']) 
                            { 
                                include 'proses.php'; 
                            }
                        else
                        {
                            echo"<br/>";
                        }
                        ?>
                    <label for="inputusername" class="sr-only">username</label>
                    <input type="text" name ="usernamecustomer" id="inputusername" class="form-control" placeholder="Masukkan Username" required autofocus>        <br/>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name ="password" id="inputPassword" class="form-control" placeholder="Masukkan Password" required>
                    <div class="checkbox">
                      <br>
                    </div>
                    <input type="submit" class="btn btn-lg btn-primary btn-block" name="masuk"  value="Masuk">
                </div>
            </div>
            
          </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
