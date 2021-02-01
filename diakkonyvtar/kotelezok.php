<?php
require_once "config.php";
$sel="";
$sql="select szerzo,cim,evfolyam from mu group by evfolyam ";

$stmt=$db->query($sql);
while($row=$stmt->fetch())
$sel.="<option value='{$row['cim']}'".isSelected($row['szerzo']).">{$row['evfolyam']}</option>";


function isSelected($id){
    if(isset($_GET['evfolyam']))
            return $id==$_GET['evfolyam'] ? "selected" : "";
    else return "";
}
?>

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
    <title>Kötelező olvasmányok</title>

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
<!--Kotelezok 2.feladat-->
<div class="container border">
    <h1>Kötelező olvasmányok</h1>
        <div class="">
            <form action="" method="GET"> 
            <div class="form-group">
            <select name="evfolyam" id="lista"><option value="0">valassz egy évfolyamot...</option>
                <?=$sel?>
            </select>
            </div>      
            </form>
        
        <div class="col-5 ">
        <b><?=$evfolyam?></b>  
        <table class="table table-bordered" id="table"></table>
        </div>
</body>
</html>