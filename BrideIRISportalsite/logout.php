<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
//header("Location: bridgeiris.php"); // Redirecting To Home Page
$logout = "You have successfully logged off. To access the database, kindly login again.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>BRiDGEIRIS Logout Page</title>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	    <meta name="description" content="" />
	    <meta name="author" content="" />
	    <!--[if IE]>
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <![endif]-->
	    <title>BridgeIRIS Portal - Login</title>
	    <!-- BOOTSTRAP CORE STYLE  -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	    <!-- FONT AWESOME ICONS  -->
	    <link href="assets/css/font-awesome.css" rel="stylesheet" />
	    <!-- CUSTOM STYLE  -->
	    <link href="assets/css/style.css" rel="stylesheet" />
	     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

<body>
	<header>
		<div class="container">
			<div class="row" align = "center">
			<div class="col-md-12">
							<h2 style="color:#FAFAD2"><u>BRiDGEIris Portal </u></h2>
				</div>
				</div>
			<div class="row">
				<div class="col-md-8">
					<strong>Email: </strong>Didier.Croes@uzbrussel.be
					&nbsp;&nbsp;
					<strong>Support: </strong>+32-24779051
				</div>
			</div>
		</div>
	</header>

	<hr>
	<span><b><center><?php echo $logout; ?></b></center></span>
	<h3><center><a href = "index.php">BRiDGEIRIS Portal</a><center><h3>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




 <?php include('footer.php');?>
</html>