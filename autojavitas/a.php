<!--a.feladat-->
<?php
require_once 'config.php';
$adat=$db->query("SELECT szerelok.nev,javitasok.datum,javitasok.javido,javitasok.iranyar,autosok.rendszam from szerelok
inner join javitasok on szerelok.szerelo_id = javitasok.szerelo_id
inner join autosok on javitasok.autos_id = autosok.autos_id
order by javitasok.datum");
$adatok="";

while($sor=$adat->fetch()){
$adatok.="<tr><td>{$sor['nev']}</td><td>{$sor['datum']}</td><td>{$sor['javido']}</td><td>{$sor['iranyar']}</td><td>{$sor['rendszam']}</td></tr>";}
?>

<table class="table table-striped">
<thead>
<th>Név</th>
<th>Dátum</th>
<th>Javidő</th>
<th>Irányár</th>
<th>Rendszám</th>
</thead>
<tbody>
 <?=$adatok?>
</tbody>
</table>