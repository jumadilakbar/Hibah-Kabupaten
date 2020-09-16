<!doctype html>
<html>
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  </style>

</head>
<body>
	<div class="container">

		<nav class="navbar navbar-expand-sm bg-info navbar-dark">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="<?php echo base_url().'index.php/admin'?>">LOGO-BIMA</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"></li>
		      <li><a class="nav-link" href="<?php echo base_url().'index.php/admin'?>">DASHBOARD</a></li>
		      <li><a class="nav-link" href="<?php echo base_url().'index.php/admin/pengajuan'?>">PENGAJUAN</a></li>
		      <li><a class="nav-link" href="<?php echo base_url().'index.php/admin/master_data'?>">Master Data</a></li>
		      <li><a class="nav-link" href="<?php echo base_url().'index.php/admin/Laporan'?>">LAPORAN</a></li>
		      <li><a class="nav-link" href="<?php echo base_url().'index.php/login/logout'?>">Logout</a></li>

		    </ul>
		  </div>
		</nav>
