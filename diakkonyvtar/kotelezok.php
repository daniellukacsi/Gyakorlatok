<?php
require_once "config.php";
$sel="";
$sql="select szerzo,cim,evfolyam from mu group by evfolyam ";

$stmt=$db->query($sql);
while($row=$stmt->fetch())
$sel.="<option value='{$row['cim']}'".isSelected($row['szerzo']).">{$row['evfolyam']}</option>";


function isSelected($id){
    if(isset($_GET['evfolyam']))
            return $id==$_GET['evfolyam'] ? "selected" : "";
    else return "";
}
?>
<div class="container border">
    <h1>Kötelező olvasmányok</h1>
        <div class="">
            <form action="" method="GET"> 
            <div class="form-group">
            <select name="evfolyam" id="lista"><option value="0">valassz egy évfolyamot...</option>
                <?=$sel?>
            </select>
            </div>      
            </form>
        
        <div class="col-5 ">
        <b><?=$evfolyam?></b>  
        <table class="table table-bordered" id="table"></table>
        </div>