<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/foundation.min.css" rel="stylesheet">
    <link href="../css/SeN_FM.css" rel="stylesheet">
    <link href="../css/app.css" rel="stylesheet">
</head>
<?php include ("connect.php"); ?>
<body class="bColor-1 padding-10 ">
    <!-- registration { -->
    <section class="row align-spaced bColor-1">
        <div class="small-12 columns">
            <div class="row align-spaced -0 padding-10 margin-top-20">
<div class="columns ">
                   <img class="Logo Block margin" style="max-height: 200px" src="../image/Group2.png">
               </div>
            </div>
			
			<form action="LogIn.php" method="post" >
            <!-- input { -->
            <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-20 ">
			
			<div class="align-self-middle columns font-size-20 left">
                    Email Address:
                </div>
				
                <input type="text" class="pushMeInput columns small-8"  name="mail">
                
            </div>

            <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-10 ">
			<div class="align-self-middle columns font-size-20 left">
                    Password:
                </div>
				
                <input type="password" class="pushMeInput columns small-8" name="pass" >

               


            </div>
            <!-- input } -->
            <!-- button {-->
            <div class="row align-spaced margin-top-20">
                <input type="submit"  class="button  Large small-5 columns pushMeButton padding-10" value="Log in"  >
                <a class="button  Large small-5 columns pushMeButton padding-10"href="Registration.php" >Register</a>
				</form>
			
            </div>
			 <?php

			 
if ($_SESSION['name']==null && $_POST['mail']!= null && $_POST['pass']!=null){
$regester ="SELECT * FROM hakathon.providor WHERE email=".$_POST['mail']." and password='".$_POST['pass']."';";

$result = mysql_query($regester);
		while ($row = mysql_fetch_assoc($result)){
		
		$_SESSION['mobile'] = $row['mobile'];
		$_SESSION['image'] = $row['image'];
		$_SESSION['name'] = $row['name'];
		}


}
if($_SESSION['name']!=null){ 
echo "welcome".$_SESSION['name'];
echo '<script language="javascript">window.location.href ="Requests.php"</script>';

}


 ?>
            <!-- button }-->
        </div>
    </section>
    <!-- registration } -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>