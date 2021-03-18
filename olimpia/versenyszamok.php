<!--a.feladat-->
<?php
require_once 'config.php';
$adat=$db->query("select nev,tipus,nem from versenyszam order by nev,tipus");
$adatok="";

while($sor=$adat->fetch()){
$adatok.="<tr><td>{$sor['nev']}</td><td>{$sor['tipus']}</td><td>{$sor['nem']}</td></tr>";}
?>

<table class="table table-striped">
<thead>
<th>Név</th>
<th>Típus</th>
<th>Nem</th>
</thead>
<tbody>
 <?=$adatok?>
</tbody>
</table>