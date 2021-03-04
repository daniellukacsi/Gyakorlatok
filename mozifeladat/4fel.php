<?php
require_once "config.php";

$sql="select mid,mozinev FROM mozi";
$eredmeny="";
$eredmeny2="";
$mozi="";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
  $eredmeny.="<option value='{$mid}'>{$mozinev}</option>";
}

if(isset($_POST['btn'])){
    $mid=$_POST['moziid'];
    $sql="SELECT mozinev as mozi,filmcim,szarmazas,mufaj from film a,hely b,mozi c WHERE a.fid=b.fid and b.mid=c.mid and c.mid={$mid}"; 
$stmt=$db->query($sql);

if($stmt->rowCount()==0){
    $mozi="Nincs film";
}

else{
    while($row=$stmt->fetch()){
        extract($row);
        $eredmeny2.="<li>{$filmcim} - {$szarmazas}- {$mufaj}</li>";
        }
    }
}
?>

<form method="post">
<select name="moziid">
<?=$eredmeny?>    
</select>

<input type="submit" name="btn" value="Mehet">
</form>

<h1><?=$mozi?></h1>
<ol><?=$eredmeny2?></ol>