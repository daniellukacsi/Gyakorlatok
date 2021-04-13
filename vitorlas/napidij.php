<!--1.feladat-->
<?php
require_once "config.php";

$sql="SELECT nev, tipus, ROUND(dij/utas) AS dij FROM hajo ORDER BY nev";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<tr><td>{$nev}</td><td>{$tipus}</td><td>{$dij} Ft/Személy</td></tr>";
}
?>
<h2>Az 1 főre jutó napi bérleti díjak</h2>
<table class="table table-striped table-light">
    <thead class="thead-dark">
        <th>Hajó neve</th><th>Típusa</th><th>Díja</th>
    </thead>
    <tbody>
        <?=$eredmeny?>
    </tbody>
</table>