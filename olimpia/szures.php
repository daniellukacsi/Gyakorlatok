<!--b.feladat-->
<?php
require_once "config.php";

$sql="select az,orszag from eredmeny group by orszag";
$eredmeny="";
$eredmeny2="";
$tipus="";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
  $eredmeny.="<option value='{$orszag}'>{$orszag}</option>";
}

if(isset($_POST['btn'])){
    $oid=$_POST['oid'];
    $sql="SELECT versenyzo.nev as neve, eredmeny.ev  as evszam     
    FROM versenyzo,eredmeny WHERE versenyzo.az=eredmeny.versenyzoaz and eredmeny.orszag='{$oid}' order by evszam";
    $stmt=$db->query($sql);

if($stmt->rowCount()==0){
    $tipus="Nincs Ilyen Versenyzo!";
}

else{
    while($row=$stmt->fetch()){
        extract($row);
        $eredmeny2.="<tr><td>{$neve}</td><td>{$evszam}</td></tr>";
        }
    }
}
?>

<form method="post">
<select name="oid">
<?=$eredmeny?>    
</select>

<input type="submit" name="btn" value="Kiír">
</form>

<h1><?=$tipus?></h1>
<table class="table table-striped">
<thead>
<th>neve</th>
<th>ev</th>
</thead>
<tbody>
<?=$eredmeny2?>
</tbody>
</table>