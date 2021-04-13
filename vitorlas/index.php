<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vitorlás feladat</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css" />    
    <link rel="stylesheet" href="vitorlas.css">     
    <script src="script.js"></script>
</head>
<!--4.feladat-->
<!--b.rész-->
<style>
a{
    text-decoration: none;
    color: black;
}
a:hover{
    background-color:darkslategrey;
    color: white;
}
</style>
<!--4.feladat-->
<!--c.rész-->
<script>
window.addEventListener('load',Menu)

function Menu(){
    let array=document.links;
    let userUrl=document.URL;
    for (let index = 0; index < array.length; index++) {
        if(array[index].href == userUrl){
            document.links[index].style.color = "green";
        }    
    }
}
</script>

<body>
<!--Navigáció-->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">Vitorlás</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Főoldal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=napidij.php">Napidíj személyre</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=bevetelek.php">Bevételek</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="index.php?p=ujhajo.php">Új hajó felvétele</a>
			</li>
		</ul>
  </div>
</nav>

<!--Tartalom-->
    <div class="tartalom bg-light">
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