<!--3.feladat-->
<?php
require_once 'config.php';

$msg="";

if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="insert into hajo values(null,'{$nev}','{$tipus}','{$utas}',{$dij})";
    $stmt=$db->exec($sql);

    if($stmt){
        $msg="Sikeres adatbeírás!!!";
    }
    else $msg="Sikertelen adatbeírás!!!";
}
?>
<!--Tartalom-->
<form method="post">
<div class="form-group">
    <label for="">Név:</label>
    <input type="text" name="nev" class="form-control">
</div>

<div class="form-group">
    <label for="">Típus:</label>
    <input type="text" name="tipus" class="form-control">
</div>

<div class="form-group">
    <label for="">Utasok száma:</label>
    <input type="number" name="utasok" class="form-control" min="1">
</div>

<div class="form-group">
    <label for="">Bérleti díj:</label>
    <input type="text" name="bdij" class="form-control">
</div>

<div class="form-group">
    <input type="submit" name="felvetel" value="Felvétel" class="btn btn-dark">
</div>
</form>

<div><?=$msg?></div>