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
            <div class="row align-spaced bColor-0 padding-10 margin-top-20">
                <div class="columns ">
                    <img src="../image/Layer2.png" class="Logo Block margin ">
                </div>
                <div class="columns small-8 tColor-1 font-size-30 align-self-middle"> Push Me</div>
            </div>
			<form action="Registration.php" method="post">
            <!-- input { -->
            <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-20 ">
			<div class="align-self-middle columns font-size-20 left">
                    Name:
                </div>
                <input type="text" class="pushMeInput columns small-8" name="name">

            </div>

            <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-10 ">
				<div class="align-self-middle columns font-size-20 left">
                    Email:
                </div>
				
                <input type="text" class="pushMeInput columns small-8" name="mail">

            </div>

            <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-10 ">
				<div class="align-self-middle columns font-size-20 left">
                    National ID:
                </div>
                <input type="number" class="pushMeInput columns small-8" name="NID">

            </div>

            <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-10 ">
			
			                <div class="align-self-middle columns font-size-20 left">
            Mobile phone:
                </div>
				
                <input type="number" class="pushMeInput columns small-8" name="mobile">


            </div>

            <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-10 ">
			    <div class="align-self-middle columns font-size-20 left">
                    Password:
                </div>
                <input type="password" class="pushMeInput columns small-8" name="pass">

            </div>
            <!-- input } -->
            <!-- button {-->
                <div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-10 ">
				<div class="align-self-middle columns font-size-20 left">
				Attach Personal Picture
				</div>
                    <input type="file" class="button bColor-0 tColor-2 Large small-5 columns pushMeButton" name="Picture" >
				</div>
				<div class="row align-spaced bColor-0 tColor-2 align-middle padding-10 margin-top-10 ">
				<div class="align-self-middle columns font-size-20 left">
				Attach ID scan
				</div>
                    <input type="file" class="button bColor-0 tColor-2 Large small-5 columns pushMeButton" name = "IDScan" >
				</div>
				<br>
                    <input type="submit" class="button bColor-0 tColor-2 Large small-8 columns pushMeButton" value="Register">
					</form>
                </div>
            <!-- button }-->
        </div>
    </section>
	<?php


if( $_POST['name']!= null&& $_POST['mail']!= null&&$_POST['NID'] != null && $_POST['mobile'] != null && $_POST['pass'] != null && $_POST['Picture'] != null && $_POST['IDScan'] != null){
		
	$sqluser = "INSERT INTO heroku_b5e473d9b007cb2.providor(name, email, mobile, password, ID, personalPicture, IDscan)
VALUES ('".$_POST['name']."','".$_POST['mail']."',".$_POST['mobile'].",'".$_POST['pass']."',".$_POST['NID'].",'".$_POST['Picture']."','".$_POST['IDScan']."');";
 mysql_query($sqluser);
     echo '<script language="javascript">window.location.href ="LogIn.php"</script>';
}

if ($_SESSION['name']!=null){
	echo '<script language="javascript">window.location.href ="Requests.php"</script>';
}

?>
    <!-- registration } -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>
