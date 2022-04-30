
<html>
<head>
<meta charset="utf-8">
<title>HandleLogin</title>
</head>
<?php

require_once("D:/xampp/htdocs/project/GamePRO/common/connect.php");
session_start();

if(isset($_POST['loginUser'])){
  $uname=$_POST['loginUser'];
  $password=$_POST['loginPassword'];
  
  $sql="SELECT * FROM users WHERE username='".$uname."'AND password='".$password."' LIMIT 1";
  
  $result=$conn->query($sql);
  
  if($result->num_rows > 0){ 
    while($row = $result->fetch_assoc()){
      $_SESSION["USERNAME"] = $row["fullname"];
      if($row["roleid"] == 1){
        echo "<script> 
        window.location.href='/project/GamePRO/decorator/url.php?myPage=admin';
        alert(\"Login Success\"); 
				</script>";
      }
      else{
        echo "<script> 
        window.location.href='/project/GamePRO/decorator/url.php?myPage=home';
        alert(\"Login Success\"); 
				</script>";
      }
    }
  }
  echo "<script> 
        window.location.href='/project/GamePRO/decorator/url.php?myPage=login';
        alert(\"Login Failed\"); 
				</script>";  
  $conn->close();
}
?>
<body>
</body>
</html>