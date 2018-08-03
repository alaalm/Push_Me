<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/foundation.min.css" rel="stylesheet">
    <link href="../css/SeN_FM.css" rel="stylesheet">
    <link href="../css/app.css" rel="stylesheet">
</head>
<?php include ("connect.php"); 
	session_destroy();
	echo '<script language="javascript">window.location.href ="LogIn.php"</script>';
?>
<body class="bColor-1 padding-10 ">
    <!-- Requests { -->
    <section class="row align-spaced bColor-1">
        <div class="small-12 columns">
            <img src="../image/Logo.PNG " style="max-height: 333px" class="margin Block Logo margin-top-90">
        </div>
    </section>
    <!-- Requests } -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>