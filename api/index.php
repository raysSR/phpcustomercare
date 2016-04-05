
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dist/css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Customer Care</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
             <!--/ul class="nav navbar-nav">
              <li class="active">
               <li><a href="index.php">Komplain belum ditanggapi</a></li>
                <li><a href="index.php?modules&konten=ditanggapi">Komplain sudah ditanggapi</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">  <span class="sr-only">(current)</span></a></li>
              <li><a href="logout.php"> Logout</a></li>
            
            </ul>-->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <?php
        $komplain=simplexml_load_file('komplain.xml');
        echo"<table class='table table-bordered'>";
        echo"<tr>";
            echo"<th>Status</th>";
            echo"<th>Tanggal Komplain</th>";
            echo"<th>Layanan yang dikomplain</th>";
            echo"<th>Isi Komplain</th>";
            echo"<th>Username Customer</th>";
            echo"<th>Tanggal Tanggapan</th>";
            echo"<th>Usename Admin</th>";
            echo"<th>Isi Tanggapan</th>";
        echo"</tr>";
        for ($awal=0; $awal < sizeof($komplain); $awal++){
            echo"<tr>";
            echo"<td>".$komplain->komplain[$awal]->status."</td>";
            echo"<td>".$komplain->komplain[$awal]->tglkomplain."</td>";
            echo"<td>".$komplain->komplain[$awal]->layananygdikomplain."</td>";
            echo"<td>".$komplain->komplain[$awal]->isikomplain."</td>";
            echo"<td>".$komplain->komplain[$awal]->usernamecustomer."</td>";
            echo"<td>".$komplain->komplain[$awal]->tgltanggapan."</td>";
            echo"<td>".$komplain->komplain[$awal]->usernameadmin."</td>";
            echo"<td>".$komplain->komplain[$awal]->isitanggapan."</td>";
            echo"</tr>";
        }
        
        echo"</table>";
       ?>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
