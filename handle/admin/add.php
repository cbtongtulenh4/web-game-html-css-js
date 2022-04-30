<?php
    session_start();

    require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/connect.php");
    
    if(isset($_POST['name'])){
        $sql = "INSERT INTO heros(name, attribute, image, information) VALUES('".$_POST['name']."',
        '".$_POST['attribute']."', '".$_POST['image']."', '".$_POST['information']."')";
        if ($conn->query($sql) === TRUE) {
            $sql = "SET @num := 0;
            UPDATE heros SET id = @num:=(@num+1);
            ALTER TABLE heros AUTO_INCREMENT = 1; ";
            $conn->query($sql);
            $conn->close();
            header("location: ".$_SESSION["path"]."views/admin/listHero.php?page=1&value=alert&msg=success");
        }
    }
    $conn->close();
    header("location: ".$_SESSION["path"]."views/admin/listHero.php?page=1&value=alert&msg=fail");

?>