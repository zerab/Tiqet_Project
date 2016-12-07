<?php
   require_once("koneksi.php");
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $level = $_POST['level'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
  
   if($query->num_rows != 0) {
     echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Landing Page - Tiqet</title>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet'>

	<style>

</style>
  </head>
  <body>
    <div class='col-md-12 header'>
	<a href='home.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-home headericon'><br><span class='judul'>Home</span></span></div></a>
	<a href='pesan.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-book headericon'><br><span class='judul'>Pesan Tiket</span></span></div></a>
	<div class='col-md-3 header'></div>
	<div class='col-md-2 header'><img id='logo' src='Logo.png'></img></div>
	<div class='col-md-5 header'></div>
	</div>
	<div class='col-md-6 col-md-offset-3 login'>Username sudah terdaftar  :(<br><br><a href='daftar.php'><button class='utama'>Kembali</div></a>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
   
    <script src='js/bootstrap.min.js'></script>
  </body>
</html>
				";
   } else {
     if(!$username || !$pass || !$level) {
       echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Landing Page - Tiqet</title>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet'>

	<style>

</style>
  </head>
  <body>
    <div class='col-md-12 header'>
	<a href='home.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-home headericon'><br><span class='judul'>Home</span></span></div></a>
	<a href='pesan.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-book headericon'><br><span class='judul'>Pesan Tiket</span></span></div></a>
	<div class='col-md-3 header'></div>
	<div class='col-md-2 header'><img id='logo' src='Logo.png'></img></div>
	<div class='col-md-5 header'></div>
	</div>
	<div class='col-md-6 col-md-offset-3 login'>Terdapat data yang kosong   :(<br><br><a href='daftar.php'><button class='utama'>Kembali</div></a>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
   
    <script src='js/bootstrap.min.js'></script>
  </body>
</html>
				";
     } else {
       $data = "INSERT INTO user VALUES (NULL, '$nama', '$email', '$username', '$pass', '$level')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Landing Page - Tiqet</title>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet'>

	<style>

</style>
  </head>
  <body>
    <div class='col-md-12 header'>
	<a href='home.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-home headericon'><br><span class='judul'>Home</span></span></div></a>
	<a href='pesan.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-book headericon'><br><span class='judul'>Pesan Tiket</span></span></div></a>
	<div class='col-md-3 header'></div>
	<div class='col-md-2 header'><img id='logo' src='Logo.png'></img></div>
	<div class='col-md-5 header'></div>
	</div>
	<div class='col-md-6 col-md-offset-3 login'>Pendaftaran berhasil!<br><br><a href='login.php'><button class='utama'>Login</div></a>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
   
    <script src='js/bootstrap.min.js'></script>
  </body>
</html>
				";
       } else {
         echo "
				<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Landing Page - Tiqet</title>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/style.css' rel='stylesheet'>

	<style>

</style>
  </head>
  <body>
    <div class='col-md-12 header'>
	<a href='home.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-home headericon'><br><span class='judul'>Home</span></span></div></a>
	<a href='pesan.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-book headericon'><br><span class='judul'>Pesan Tiket</span></span></div></a>
	<div class='col-md-3 header'></div>
	<div class='col-md-2 header'><img id='logo' src='Logo.png'></img></div>
	<div class='col-md-5 header'></div>
	</div>
	<div class='col-md-6 col-md-offset-3 login'>Pendaftaran gagal   :(<br><br><a href='daftar'><button class='utama'>Kembali</div></a>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
   
    <script src='js/bootstrap.min.js'></script>
  </body>
</html>
				";
       }
     }
   }
?>
