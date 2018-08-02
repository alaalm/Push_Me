<!DOCTYPE HTML>
<html>  
<body>
عرض الطلبات
<?php
include 'connect.php';



if ($_SESSION['mobile']!= null){
	
	
echo '<table border="1" style="width:40%;  text-align: center; background-color= red;">';

	$fetch="SELECT * FROM hakathon.recuest;";


$result = mysql_query($fetch);
		
		echo '<tr>';
	while ($row = mysql_fetch_assoc($result)){
	
	echo '<td><img src="'.$row['Image'].'"  style="width:304px;height:228px"></td>';
	echo '</tr><tr>';
	echo '<td><a href="main.php?mid='.$row['IDm'].'"> '.$row['Namem'].'</a> </td>';
	echo '</tr>';
	}
	echo '</table>'; 
	
	echo '</center>';

	if (!$result){
		$message= ' Invalid query :'.mysql_error()."\n";
		$message .= ' whole query :'.$insertValues;
		
		die($message);
		}
}else{echo"your mobile or password is wrong!!";}
?>
</body>
</html>