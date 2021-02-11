<!--3.feladat-->
<?php
require_once "config.php";

$sql="SELECT tanar_id,nev FROM tanar";
$stmt=$db->query($sql);
$e_eredmeny="";
$m_eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $e_eredmeny.="<option value='{$tanar_id}'>{$nev}</option>";
}

if(isset($_POST['button'])){
    $tid=$_POST['tid'];
    $sql="select b.datum,b.kezdesido,c.nev from tanar a,tanitasi_alkalom b,tanitvany c where a.tanar_id=b.tanar_id and b.tanitvany_id=c.tanitvany_id and a.tanar_id={$tid};";
    $stmt=$db->query($sql);

    while($row=$stmt->fetch()){
    extract($row);

    $m_eredmeny.="<tr><td>{$datum}</td><td>{$kezdesido}</td><td>{$nev}</td></tr>";
}
}
?>
<form method="post">
        <select name="tid">
            <?=$e_eredmeny?>
        </select>
    <input type="submit" value="OK" name="button">
</form>
    <table>
    <thead>
        <th>Dátum</th>
        <th>Időpont</th>
        <th>Név</th>
    </thead>
    <tbody>
        <?=$m_eredmeny?>
    </tbody>
    </table>