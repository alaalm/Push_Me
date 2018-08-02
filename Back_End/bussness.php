<!DOCTYPE HTML>
<html>  
<body>

صفحة مقدم الخدمة
<?php include ("connect.php");?>
<form action="bussness.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
mobile :<input type="number" name="mobile"><br>
password:<input type="password" name="pass"><br>
ID: <input type="number" name="ID"><br>
pictcher:<input type="file" name="fileToUpload" id="fileToUpload"><br>
    
<br><input type="submit">
</form>
<?php


if( $_POST['name']!= null&& $_POST['email']!= null&&$_POST['mobile'] != null  && $_POST['pass'] != null && $_POST['ID'] != null){
		
	$sqluser = "INSERT INTO hakathon.providor(name, email, mobile, password, ID, image)
VALUES ('".$_POST['name']."','".$_POST['email']."',".$_POST['mobile'].",'".$_POST['pass']."',".$_POST['ID'].",2);";
 mysql_query($sqluser);
}



?>
</body>
</html>