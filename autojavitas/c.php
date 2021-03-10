<!--3.feladat-->
<?php
require_once 'config.php';
$adat=$db->query("SELECT szerelok.nev as sznev,sum(javitasok.javido) as osszido FROM szerelok,javitasok WHERE szerelok.szerelo_id=javitasok.szerelo_id GROUP BY szerelok.nev ORDER BY osszido desc");
$lista="";

while($sor=$adat->fetch()){
$lista.="<li>{$sor['sznev']}  {$sor['osszido']} </li>";}
?>

<ul>
 <?=$lista?>
</ul>