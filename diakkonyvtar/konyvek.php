<?php
require_once "config.php";
$tbl="";
$sql="select szerzo,cim,evfolyam from mu order by cim";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $tbl.="<tr><td>{$row['szerzo']}</td><td>{$row['cim']}</td><td>{$row['evfolyam']}</td></tr>";
}
?>
<!--Tablazat 1.feladat-->
<h1>Könyvtári nyilvántartás</h1>
<div class="tbl-container">
<table class="table table-striped table-fixed ">
    <thead class="thad-dark">
        <th>Szerző</th><th>Cím</th><th>Darabszám</th>
</thead>
<tbody><?=$tbl?></tbody>
</table>
</div>
