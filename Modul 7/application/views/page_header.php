<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Informasi</title>
  <link rel="shortcut icon" href=" <?php echo base_url('assets/img/logo.png'); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.navbar-red {
    	background-color: #b01116;
    	color: #fff;
		}
	  .navbar-red .navbar-brand {
    	color: #fff;
	  }
	  .navbar-red .navbar-nav > li > a {
    	color: #fff;
	  }
    .navbar-red .navbar-nav > li > a:hover,
    .navbar-red .navbar-nav > li > a:focus {
      background-color: #ee1c25;
      color: #fff;
    }
	  .box {
		  margin-top: 80px;
      margin-bottom: 20px;
		  padding: 10px;
		  background-color: #fff	;
		  border-radius: 5px;
	  }
	  body {
		  background-color: #D8D8D8;
	  }
  </style>
</head>
<body>
<nav class="navbar navbar-red navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $data['kampus']; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
      <li><a href="<?php echo base_url('web/mahasiswa'); ?>">Mahasiswa</a></li>
      <li><a href="<?php echo base_url('web/jurusan'); ?>">Jurusan</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right text-center">
      <li class="dropdown pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Akun
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?php echo $data['nim']; ?></a></li>
          <li><a href="#"><?php echo $data['nama']; ?></a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
