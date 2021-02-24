<!--5.feladat-->
<?php
require_once 'config.php';

$adat=$db->query("SELECT fnev from futo where szulev>2003");
$lista="";
while($sor=$adat->fetch()){
$lista.="<li>{$sor['fnev']}</li>";}
?>


<ul>
 <?=$lista?>
</ul>