<!DOCTYPE HTML>
<html>  
<body>
<?php include ("connect.php"); ?>
الصفحة الرئيسية

<?php if ($_SESSION['mobile']==null){ ?>
<form action="index.php" method="post">
mobile: <input type="text" name="mobile"><br>
password: <input type="password" name="password"><br>

<br><input type="submit" value="تسجيل دخول">
</form>

<?php

$regester ="SELECT * FROM hakathon.providor WHERE mobile=".$_POST['mobile']." and password='".$_POST['mobile']."';";

$result = mysql_query($regester);
		while ($row = mysql_fetch_assoc($result)){
		
		$_SESSION['mobile'] = $row['mobile'];
		$_SESSION['image'] = $row['image'];
		$_SESSION['name'] = $row['name'];
		}

echo "post mobile:".$_POST['mobile']."<br>";
echo "post passwrod".$_POST['password']."<br>";
echo " SESSION['mobile']".$_SESSION['mobile']."<br>";
}else{ echo "welcome".$_SESSION['name'];}
 ?>
<form action="customer.php" method="post">
<br><input type="submit" value="أطلب">
</form> 

</body>
</html>