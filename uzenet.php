<?php
    require_once "config.php";
    extract($_POST);
    $sql="Insert into uzenetek values (null, '{$email}', '{$message}', '{$name}', '{$subject}');";
    $stmt=$db->exec($sql);
    if($stmt){
        echo '<script> 
            alert("Köszönjük a visszajelzést!");
                window.location.href="index.php?p=contact.php";
        </script>';
    }
?>