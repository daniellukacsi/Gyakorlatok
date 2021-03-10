<?php
$msg="";
require_once "config.php";

   if(isset($_POST['beir'])){
       extract($_POST);
       $sql="insert into tipusok values (null,'{$tipusnev}')";
       $stmt=$db->exec($sql);

if($stmt)
    $msg="Sikeres adatbeírás.";
else $msg="Nem sikerült";
   
}
?>

<div class="col-6">
    <form method="post">
        <label for="">Típusnév:</label>
        <input type="text" name="tipusnev" id="" class="form-control">
        <input type="submit" value="Beír" name="beir" class="btn btn-outline-primary">
    </form>
</div>

<div>
<?=$msg?>
</div>