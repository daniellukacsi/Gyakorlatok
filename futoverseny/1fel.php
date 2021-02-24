<!--1.feladat-->
<?php
require_once 'config.php';
$adat=$db->query("SELECT year(now())-szulev as kor,count(fnev) as letszam from futo group by szulev");
$lista="";

while($sor=$adat->fetch()){
$lista.="<li>{$sor['kor']}  {$sor['letszam']} </li>";}
?>

<ul>
 <?=$lista?>
</ul>