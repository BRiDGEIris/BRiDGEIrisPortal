<?php
include('login.php'); // Login Script
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>BRiDGEIRIS Portal Login Page</title>
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
		                    <h2 style="color:#FAFAD2"><u>BridgeIRIS Portal </u></h2>
                </div>
                </div>
            <div class="row">
                <div class="col-md-8">
                    <strong>Email: </strong>Dipankar.Sengupta@vub.ac.be
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+32-465833483
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
                    <h4 class="page-head-line">Please Login To Access The Portal </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <hr />
                     <h4> Login with <strong>BridgeIRIS Account  :</strong></h4>
                    <br />
                     <form action="" method="post">
						  <label>Enter User ID : </label>
							 <input id="name" name="username" placeholder="username" type="text" class="form-control" />
							 <label>Enter Password :  </label>
							 <input id="password" name="password" placeholder="**********" type="password" class="form-control" />
							 <hr />
							 <input name="submit" type="submit" value=" Login " class="btn btn-info">
									&nbsp;&nbsp
							<input type="reset" value="Reset" name="Reset" class="btn btn-info">
							<br><br>
							<span><b><?php echo $error; ?></b></span>
					</form>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                        You need to be registered to access the portal. To get access contact administrator.
                        <br />
                         <strong> About BridgeIRIS :</strong>
                        <ul>
                            <li>
                                Supports the requirements of Clinicians and Genetic Centers
                            </li>
                            <li>
                                Easy to use
                            </li>
                            <li>
                                Supports Genomic Data (Highlander), Clinical Data (CliniPhenome)
                            </li>
                            <li>
                                Tools to analyze the variants and pathological classification
                            </li>
                            <li>
								Access to database for Digenic Diseases (DIDA)
                            </li>
                        </ul>

                    </div>
                    <div class="alert alert-success">
                         <strong> Instructions To Use:</strong>
                        <ul>
                            <li>
                               Contact administrator for the details
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12" align = "center">
                    &copy; 2015 <a href="http://bridgeiris.ibsquare.be/" target="_blank"> BridgeIRIS </a> | Powered By : <a href="http://www.innoviris.be/" target="_blank">INNOVIRIS</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
