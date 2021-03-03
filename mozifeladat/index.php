<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mozi Feladat</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css" />         
</head>

<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mozi Feladat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Főoldal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=1fel.php">1.feladat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=2fel.php">2.feladat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="index.php?p=3fel.php">3.feladat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="index.php?p=4fel.php">4.feladat</a>
			</li>
		</ul>
  </div>

</nav>


    <div class="tartalom">
		<?php
		if(isset($_GET["p"])){
			include $_GET["p"];
		}
		else include("fooldal.php");
		?>
    </div>

	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>  
</body>
</html>             