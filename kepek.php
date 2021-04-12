<?php
  require_once "config.php";
    $sql="SELECT nev,kep FROM allatok ";
    $stmt=$db->query($sql);
    $str=""; 
    while($row=$stmt->fetch()){
         extract($row);
         $str.= "<div class='hero-item portfolio-item set-bg' data-setbg='image/allatok/{$kep}'>
         <a href='portfolio.html' class='hero-link'>
           <h2>{$nev}</h2>
         </a>
       </div>";
    }
?>

    <div class='hero-section'>
      <div class='hero-slider owl-carousel'>
          <?=$str?>
      </div>
    </div>