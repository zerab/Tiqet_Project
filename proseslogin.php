<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
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
	<div class='col-md-3 header'></div>
	<a href='login.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-user headericon'><br><span class='judul'>Akun</span></span></div></a>
	<a href='logout.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-log-out headericon'><br><span class='judul'>Keluar</span></span></div></a>
	</div>
	<div class='col-md-6 col-md-offset-3 berhasil'>Username belum terdaftar :(<br><a href='login.php'><button class='utama'>Kembali</div></a>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
   
    <script src='js/bootstrap.min.js'></script>
  </body>
</html>";
   } else {
     if($pass <> $hasil['password']) {
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
	<div class='col-md-3 header'></div>
	<a href='login.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-user headericon'><br><span class='judul'>Akun</span></span></div></a>
	<a href='logout.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-log-out headericon'><br><span class='judul'>Keluar</span></span></div></a>
	</div>
	<div class='col-md-6 col-md-offset-3 berhasil'>Password anda salah :(<a href='login.php'><button class='utama'>Kembali</div></a>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
   
    <script src='js/bootstrap.min.js'></script>
  </body>
</html>";
     } else {
       $_SESSION['username'] = $hasil['username'];
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
	<div class='col-md-3 header'></div>
	<a href='login.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-user headericon'><br><span class='judul'>Akun</span></span></div></a>
	<a href='logout.php'><div class='col-md-1 header menus'><span class='glyphicon glyphicon-log-out headericon'><br><span class='judul'>Keluar</span></span></div></a>
	</div>
	<div class='col-md-6 col-md-offset-3 berhasil'>Login berhasil.<br>Selamat datang, <strong> $username !<br><a href='home.php'><button class='utama'>Menuju Halaman Utama</div></a>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
   
    <script src='js/bootstrap.min.js'></script>
  </body>
</html>";
     }
   }
?>