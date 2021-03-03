<!--1.feladat-->
<?php
require_once 'config.php';
$adat=$db->query("select filmcim,hossz from film where szarmazas='magyar' order by filmcim");
$lista="";

while($sor=$adat->fetch()){
$lista.="<li>{$sor['filmcim']}  {$sor['hossz']} </li>";}
?>

<ul>
 <?=$lista?>
</ul>