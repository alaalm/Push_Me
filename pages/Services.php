<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/foundation.min.css" rel="stylesheet">
    <link href="../css/SeN_FM.css" rel="stylesheet">
    <link href="../css/app.css" rel="stylesheet">
</head>
<?php include ("connect.php"); ?>

<body class="bColor-1 padding-20 ">
    <!--SErvices { -->
        <section class="row align-spaced">
		<form action="Services" method="post">
            <div class="columns small-12">
                <!-- Button { -->
                    <div class="row align-spaced">
                        <label class="Button pushMeButton columns small-10">
						<input type="number" placeholder="Number of minutes" name="mins">
                            <img src="../image/v.png" class="Block margin Logo ">
                            Order
                            <br>
                            Attach Your Picture
							<input type="file" name="pic" onchange="form.submit()"  />
                        </label>
		</form>		
                        <a class="Button pushMeButton columns small-10 margin-top-20" href="LogIn.php">
                            <img src="../image/Group1.png" class="Block margin Logo ">
                           Log In 
						   <br>
						   Service Providers
                        </a>
                    </div>
                <!-- Button } -->
            </div>
        </section>
		<?php 
	if($_POST["pic"]!=null){
	$sqluser = "INSERT INTO hakathon.recuest(ID,price,accepted,Latitude,Longitude,Minutes, Image2) VALUES (123,42,0,0.0,0.0".$_POST['mins'].",'".$_POST['pic']."');";
	mysql_query($sqluser);
	
	echo '<script language="javascript">window.location.href ="Wait.php"</script>';
}
	
	?>
    <!--SErvices } -->
	
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>