<?php
    require_once "config.php";
    $sql="select kep from allatok order by rand();";
    $stmt=$db->query($sql);
    $kepek="";
    while($row=$stmt->fetch()){
        extract($row);
        $kepek.="<div class='col-sm-6 col-md-4 col-lg-3 item'>
                <a href='image/allatok/{$kep}' data-lightbox='photos'>
                    <img class='img-fluid' src='image/allatok/{$kep}'>
                </a>
            </div>";
    }
    
?>
<div class="lightbox-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Lightbox Gallery</h2>
            <p class="text-center">Find the lightbox gallery for your project. click on any image to open gallary</p>
        </div>
        <div class="row photos">
            <?=$kepek?>
        </div>
    </div>
</div>