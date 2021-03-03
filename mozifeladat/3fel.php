<!--3.feladat-->
<?php
require_once 'config.php';
$adat=$db->query("select * from film order by hossz desc limit 10");
$adatok="";

while($sor=$adat->fetch()){
$adatok.="<tr><td>{$sor['filmcim']}</td><td>{$sor['szarmazas']}</td><td>{$sor['mufaj']}</td><td>{$sor['hossz']}</td></tr>";}
?>

<table class="table table-striped">
<thead>
<th>filmcim</th>
<th>szarmazas</th>
<th>mufaj</th>
<th>hossz</th>
</thead>
<tbody>
 <?=$adatok?>
</tbody>
</table>