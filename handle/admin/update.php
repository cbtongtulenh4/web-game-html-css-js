<?php
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/connect.php");
    echo $_POST['id'];
    if(isset($_POST['id'])){
        $sql = "UPDATE heros 
        SET name = '".$_POST['name']."',
            attribute = '".$_POST['attribute']."',
            image = '".$_POST['image']."', 
            information = '".$_POST['information']."' 
        WHERE id = ".$_POST['id']."";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location: ".$_SESSION["path"]."views/admin/listHero.php?page=1&value=alert&msg=success");
        }
    }
    $conn->close();
    header("location: ".$_SESSION["path"]."views/admin/listHero.php?page=1&value=alert&msg=fail");
?>