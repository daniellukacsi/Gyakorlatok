<!--1.feladat-->
<?php
require_once "config.php";

$sql="select id, nev FROM hajo order by nev";
$stmt=$db->query($sql);
$select="";
$eredmeny="";
$hajo="";

while($row=$stmt->fetch()){
    extract($row);
    $select.="<option value='{$id}'>{$nev}</option>";
}

if(isset($_POST['btn'])){
    $hid=$_POST['tid'];
    $sql="select round(((dij/utas)*szemely)*nap) as bevetel from hajo a, tura b where a.id=hajo_id AND a.id={$hid}";
    $stmt=$db->query($sql);

    if($stmt->rowCount()==0){
        $hajo="Nincs túra";
    }
    else{
        $row=$stmt->fetch();
        extract($row);
            $eredmeny="A hajó összes bevétele: <b>{$bevetel}</b> forint.";
    }
    
}
?>
<!--Tartalom-->
<h2>Válassz egy hajót!</h2>
<form method="post">
    <select name="tid"  class="custom-select custom-select-mb">
        <?=$select?>
    </select>
    <input type="submit" value="OK" name="btn" class="btn btn-dark mt-2">
</form>
    <div class="mt-2">
        <?=$eredmeny?> 
    </div>