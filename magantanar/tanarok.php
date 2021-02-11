<!--1.feladat-->
<?php
require_once 'config.php';

$sql="SELECT nev,telefon,email from tanitvany order by nev";
$stmt=$db->query($sql);
$lista="";

while($row=$stmt->fetch()){
extract($row);
$lista.="<li>{$nev} - {$telefon} - {$email} </li>";}
?>




<ol>
 <?=$lista?>

</ol>


