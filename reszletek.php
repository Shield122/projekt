<?php
  require_once "config.php";
    $id=$_GET['id'];
    $sql="SELECT nev,leiras,erdekessegek,kep FROM allatok WHERE kategoriaid={$id}";
    $stmt=$db->query($sql);
    $str=""; 
    while($row=$stmt->fetch()){
         extract($row);
         $str.="<div class='row p-2 border '><h2 class='w-100 p-3'>{$nev}</h2>
                <div class='col-5 border '><img class='kepek img-fluid' src='image/allatok/{$kep}'></div>
                <div class='col-7'><p>{$leiras}</p><p>{$erdekessegek}</p></div>
                </div>";       
    }
?>

<div>
    <?=$str?>
</div>