<?php
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/connect.php");
    if(isset($_POST["ids"])){
       if (is_array($_POST["ids"]) || is_object($_POST["ids"])){
          foreach($_POST["ids"] as $id){
             $sql = "DELETE FROM heros WHERE id='".$id."'";
             $conn->query($sql);
          }
       }
       else {
         $sql = "DELETE FROM heros WHERE id='".$_POST["ids"]."'";
         $conn->query($sql);
       }  
       $sql = "SET @num := 0;
       UPDATE heros SET id = @num:=(@num+1);
       ALTER TABLE heros AUTO_INCREMENT = 1; ";
       $conn->query($sql);
       $conn->close();
       header("location: ".$_SESSION["path"]."views/admin/listHero.php?page=1&value=alert&msg=success");
    }
    $conn->close();
    header("location: ".$_SESSION["path"]."views/admin/listHero.php?page=1&value=alert&msg=fail");

?>