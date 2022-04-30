<html>
<head>
<meta charset="utf-8">
<title>Register</title>
</head>

<?php
    session_start();

    require_once($_SERVER['DOCUMENT_ROOT'].$_SESSION["path"]."common/connect.php");
    
    if(isset($_POST['username'])){
        $sql = "INSERT INTO users(username, password, fullname, status, roleid, email) VALUES('".$_POST['username']."',
        '".$_POST['password']."', '".$_POST['fullname']."', 1, 2, '".$_POST['email']."')";

        if ($conn->query($sql) === TRUE) {
           $sql = "SET @num := 0;
           UPDATE heros SET id = @num:=(@num+1);
           ALTER TABLE heros AUTO_INCREMENT = 1; ";
           $conn->query($sql);
           $conn->close();
           echo "<script> 
            window.location.href='/project/GamePRO/decorator/url.php?myPage=login';
            alert(\"Register Success\"); 
		    </script>";
        }    
    }
    echo "<script> 
        window.location.href='/project/GamePRO/views/login/login.php#register-acc';
        alert(\"Register Failed\"); 
	</script>";
    $conn->close();
    

?>
<body>
</body>
</html>