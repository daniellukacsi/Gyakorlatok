<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />                                       
    <script src="bootstrap/jquery.min.js"></script>
     <script src="bootstrap/bootstrap.min.js"></script>
     <script src="menu.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Diakkönyvtár</title>

</head>
<body><!--Főoldal-->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">    
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuid" aria-controls="menuid" aria-expanded="false" aria-label="Toggle navigation">    
			<span class="navbar-toggler-icon"></span>    
		</button>    
		<span class="navbar-brand">Diákkönyvtár</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=konyvek.php">Könyvek</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=kotelezok.php">Kötelező olvasmányok</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=">Kölcsönzések</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=">Új könyv</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=">Évfolyam módosítás</a></li>
		</ul>
	</div>
</nav>  

<main role="main" class="container p-2">
	<div class="jumbotron">
		<?php
		if(isset($_GET["p"])){
			include $_GET["p"];
		}
		else include("fooldal.php");
		?>
    </div>
</main>

</body>
</html>