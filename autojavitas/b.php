<?php
require_once "config.php";

$sql="select tipus_id,tipusnev from tipusok";
$eredmeny="";
$eredmeny2="";
$tipus="";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
  $eredmeny.="<option value='{$tipus_id}'>{$tipusnev}</option>";
}

if(isset($_POST['btn'])){
    $autoid=$_POST['tipusid'];
    $sql="SELECT autosok.nev as autosoknev, autosok.rendszam as rendszam, tipusok.tipusnev 
    FROM autosok,tipusok WHERE autosok.tipuskod=tipusok.tipus_id AND tipusok.tipus_id={$autoid}"; 
    $stmt=$db->query($sql);

if($stmt->rowCount()==0){
    $tipus="Nincs Ilyen Tulaj!";
}

else{
    while($row=$stmt->fetch()){
        extract($row);
        $eredmeny2.="<li>{$autosoknev} - {$rendszam}</li>";
        }
    }
}
?>

<form method="post">
<select name="tipusid">
<?=$eredmeny?>    
</select>

<input type="submit" name="btn" value="Kiír">
</form>

<h1><?=$tipus?></h1>
<ul><?=$eredmeny2?></ul>