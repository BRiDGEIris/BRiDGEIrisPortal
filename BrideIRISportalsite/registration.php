<?php
 // Registration Script
include('db_config.php');

if (isset($_POST['submit']))
 {
   if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['regpwd']))
   {
    $error = "Please ensure that you have filled all the requisite values"."<br><br><br>";
   }
  else
  {
	// Create connection with the database
	$connection = mysql_connect($servername, $dbuser, $dbpassword);
	if (!$connection)
	 {die('Could not connect to db: ' . mysql_error());}

	//Post Params
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['regpwd'];

	// Selecting Database
		$db = mysql_select_db($database, $connection);

	//INSERT
		 $query = "INSERT INTO login"."(name, email, username, password)"."VALUES ('$name', '$email', '$username', '$password')";
		 $result = mysql_query($query);

		if(! $result )
		{
		  echo '<a href = "registration.php">RETURN</a>'.'<br><br>';
		  die('Could not enter data: ' . mysql_error());
		}
		else
		{
		$query1 = "SELECT * FROM login WHERE username = '$username'";
		$result1 = mysql_query($query1);
			while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
			   {
				$success = "<center><h4>User Registered to Access Portal for Username:<font color = 'red'>".$row[username] ."</font></h2><br></center>";
			   }
			}
		mysql_close($conn);
	}
 }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>BRiDGEIRIS Portal Registration Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>BridgeIRIS Portal - Registration</title>
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

    <link rel="STYLESHEET" type="text/css" href="assets/css/pwdwidget.css" />
	<script src="assets/js/pwdwidget.js" type="text/javascript"></script>

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
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://bridgeiris.ibsquare.be/">

                    <img src="assets/img/ib2_logo.jpg" />
                </a>

            </div>

            <div align = "right" class="left-div">
                <i class="fa fa-user-plus login-icon" ></i>
        </div>
            </div>
        </div>
    <!-- LOGO HEADER END-->

    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Registration Form - BRiDGEIris Portal </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                  <h4> Fill up the form to create a new user for the portal. </strong></h4> <br>
                    <span><b><?php echo $success; ?></b></span>
					<span><b><?php echo $error; ?></b></span>
					<div id="form_container">
					<form id='register' action="" method="post">

					<label for='name' >Your Full Name*: </label>
					<input type='text' name='name' id='name' maxlength="80" class="form-control2"  />

					<label for='email' >Email Address*:</label>
					<input type='email' name='email' id='email' maxlength="50" class="form-control2"  />

					<label for='username' >User ID*:</label>
					<input type='text' name='username' id='username' maxlength="10" class="form-control2" />

					<label for='regpwd'>Password:</label> <br />
					<div class='pwdwidgetdiv' id='thepwddiv'></div>
					<script  type="text/javascript" >
					var pwdwidget = new PasswordWidget('thepwddiv','regpwd');
					pwdwidget.MakePWDWidget();
					</script>
					<noscript>
					<div><input type='password' id='regpwd' name='regpwd' class="pwdwidgetdiv"/></div>
					</noscript> <br>

					<!-- <label for='password' >Retype Password*:</label>
					<input type='password' name='repassword' id='repassword' maxlength="50" class="form-control" /> <br> -->


					<input name="submit" type="submit" value="Register" class="btn btn-info">
							&nbsp;&nbsp
					<input type="reset" value="Reset" name="Reset" class="btn btn-info">
					<br><br>

					</form>
					</div>

					</div>
                </div>

			</div>
        </div>
    </div>
    <?php include('footer.php');?>
</html>
