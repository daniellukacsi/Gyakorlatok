<!--2.feladat-->
<?php
$msg="";
require_once "config.php";

   if(isset($_POST['beir'])){
       extract($_POST);
       $sql="insert into film values (null,'{$filmcim}','{$szarmazas}','{$mufaj}','{$hossz}')";
       $stmt=$db->exec($sql);

if($stmt)
    $msg="Sikeres adatbeírás.";
else $msg="Nem sikerült";

}
?>

<div class="col-6">
    <form method="post">
        <label for="">filmcím:</label>
        <input type="text" name="filmcim" id="" class="form-control" required>
        <label for="">Származás:</label> 
        <input type="text" name="szarmazas" id="" class="form-control" required>
        <label for="">Műfaj:</label> 
        <input type="text" name="mufaj" id="" class="form-control" required>
        <label for="">Hossz:</label> 
        <input type="text" name="hossz" id="" class="form-control" required>
        <input type="submit" value="Beír" name="beir" class="btn btn-outline-primary">
    </form>
</div>

<div>
<?=$msg?>
</div> 