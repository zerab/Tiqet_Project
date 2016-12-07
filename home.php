<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - Tiqet</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="col-md-12 header">
	<a href="home.html"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-home headericon"><br><span class="judul">Home</span></span></div></a>
	<a href="pesan.php"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-book headericon"><br><span class="judul">Pesan Tiket</span></span></div></a>
	<div class="col-md-3 header"></div>
	<div class="col-md-2 header"><img id="logo" src="Logo.png"></img></div>
	<div class="col-md-3 header"></div>
	<a href="login.php"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-user headericon"><br><span class="judul">Akun</span></span></div></a>
	<a href="logout.php"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-log-out headericon"><br><span class="judul">Keluar</span></span></div></a>
	</div>
	<center><div class="col-md-offset-1 col-md-2 user-container user-column plafon"><div class="glyphicon glyphicon-user large"></div><br><strong><?php session_start(); if(isset($_SESSION['username'])){$username = $_SESSION['username']; echo $username;} else {echo 'Anda belum masuk';}?></div></center>
	<div class="col-md-offset-1 col-md-7 user-container plafon"><h3>Kolom Pemesanan Tiket</h3></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>