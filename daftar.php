<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar - Tiqet</title>

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
	<a href="home.php"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-home headericon"><br><span class="judul">Home</span></span></div></a>
	<a href="pesan.php"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-book headericon"><br><span class="judul">Pesan Tiket</span></span></div></a>
	<div class="col-md-3 header"></div>
	<div class="col-md-2 header"><img id="logo" src="Logo.png"></img></div>
	<div class="col-md-3 header"></div>
	<a href="login.php"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-user headericon"><br><span class="judul">Akun</span></span></div></a>
	<a href="keluar.php"><div class="col-md-1 header menus"><span class="glyphicon glyphicon-log-out headericon"><br><span class="judul">Keluar</span></span></div></a>
	</div>
	<div class="col-md-6 col-md-offset-3 daftar"><div class="separator"><strong>Selamat datang di Tiqet!</strong><br>Silahkan isi data untuk mendaftar.</div>
	<form class="form-horizontal" method="post" action="prosesdaftar.php">
  <div class="form-group">
    <label for="inputName" class="col-md-2 col-md-offset-1 control-label">Nama</label>
    <div class="col-md-8">
      <input type="text" class="form-control form-style" id="inputNama" name="nama" placeholder="Nama">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-md-2 col-md-offset-1 control-label">Email</label>
    <div class="col-md-8">
      <input type="email" class="form-control form-style" id="inputEmail" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputUsername" class="col-md-2 col-md-offset-1 control-label">Username</label>
    <div class="col-md-8">
      <input type="text" class="form-control form-style" id="inputUsername" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">Password</label>
    <div class="col-md-8">
      <input type="password" class="form-control form-style" id="inputPassword" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="level" class="col-sm-2 col-md-offset-1 control-label">Level</label>
    <div class="col-md-3">
      <select class="form-control form-style" id="level" name="level"><option>User</option><option>Admin</option><option>Staff</option></select>	
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-offset-1 col-md-12">
      <button type="submit" class="btn btn-default col-md-10 fixedbtn medium">Daftar</button>
    </div>
  </div>
<div class="col-md-12 small">Sudah mempunyai akun? <strong class="buat"><a href="login.php">Masuk disini.</a></strong></div>
	</form></div>
	<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:akun.php'); }
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

