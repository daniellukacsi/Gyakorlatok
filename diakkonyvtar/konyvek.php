<?php
require_once "config.php";
$tbl="";
$sql="select szerzo,cim,evfolyam from mu order by cim";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $tbl.="<tr><td>{$row['szerzo']}</td><td>{$row['cim']}</td><td>{$row['evfolyam']}</td></tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvek</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />                                       
    <script src="bootstrap/jquery.min.js"></script>
     <script src="bootstrap/bootstrap.min.js"></script>
     <script src="menu.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--Navigacio-->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">    
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuid" aria-controls="menuid" aria-expanded="false" aria-label="Toggle navigation">    
			<span class="navbar-toggler-icon"></span>    
		</button>    
		<span class="navbar-brand">Diákkönyvtár</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="konyvek.php">Könyvek</a></li>
			<li class="nav-item"><a class="nav-link" href="kotelezok.php">Kötelező olvasmányok</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Kölcsönzések</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Új könyv</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Évfolyam módosítás</a></li>
		</ul>
	</div>
</nav>  
<!--Tablazat 1.feladat-->
<h1>Könyvtári nyilvántartás</h1>
<div class="tbl-container">
<table class="table table-striped table-fixed ">
    <thead class="thad-dark">
        <th>Szerző</th><th>Cím</th><th>Darabszám</th>
</thead>
<tbody><?=$tbl?></tbody>
</table>
</div>
</body>
</html>