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
    <!-- Requests { -->
    <section class="row align-spaced bColor-1">
        <div class="small-12 columns">
            <div class="row Center align-spaced tColor-2 font-size-30">
                <div class="columns small-12 bColor-0">
				
					<?php
					echo "Welcome ".$_SESSION['name'];
					if ($_SESSION['name'] == null){
						echo '<script language="javascript">window.location.href ="LogIn.php"</script>';
					}
					?>
					<br>
                    Requests
					
                </div>
            </div>
			<a class="button  Large small-5 columns pushMeButton padding-10"href="LogOut.php" >Log Out</a>
				

            <div class="row margin-top-40">
                <div class="columns small-12 padding-0">
                    <table class=" Center unstriped ">
                        <thead class="Center">
                            <th class="Center">
                                Costumer is this far:
                            </th>
                            <th class="Center">
                                Click to accept:
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    
                                        4 Minutes
                                    
                                </td>
                                <td>
								<a>
                                    Click Here
									</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                        15 Minutes
                                    
                                </td>
                                <td>
									<a>
                                    Click Here
									</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Requests } -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>