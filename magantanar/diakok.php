<!--2.feladat-->
<?php
require_once 'config.php';

$sql="SELECT nev,telefon,email,tantargynev from tanar inner join tantargy on tanar.tantargy_id=tantargy.tantargy_id";
$stmt=$db->query($sql);
$lista="";

while($row=$stmt->fetch()){
extract($row);
$lista.="<li>{$nev} - {$telefon} - {$email} - {$tantargynev}</li>";}
?>




<ul>
 <?=$lista?>

</ul>