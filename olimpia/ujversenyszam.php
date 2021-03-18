<!--c.feladat-->
<?php
$msg="";
require_once "config.php";

   if(isset($_POST['beir'])){
       extract($_POST);
       $sql="insert into versenyszam values (null,'{$nev}','{$tipus}','{$nem}')";
       $stmt=$db->exec($sql);

if($stmt)
    $msg="Sikeres adatbeírás.";
else $msg="Nem sikerült";
   
}
?>

<div class="col-6">
    <form method="post">
        <h1>Új versenyszám felvétele:</h1>
        <label for="">név:</label>
        <input type="text" name="nev" id="" class="form-control">
        <label for="">Típus:</label>
        <input type="text" name="tipus" id="" class="form-control">
        <label for="">Nem:</label>
        <input type="text" name="nem" id="" class="form-control">
        <input type="submit" value="Beír" name="beir" class="btn btn-outline-primary">
    </form>
</div>

<div>
<?=$msg?>
</div>