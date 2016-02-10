<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>BridgeIRIS Portal - Dashboard</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- URL CONFIG  -->
    <link href="web_config.conf" rel="stylesheet"/>
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

            <div class="left-div">
                <div align = "right" class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown"  align = "right">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <?php echo $login_session; ?>


                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>

                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="home.php">Dashboard</a></li>
                            <li><a href="ui.php">Search Patient</a></li>
                            <!--<li><a href="table.html">Data Tables</a></li> -->
                            <!--<li><a href="forms.php">Forms</a></li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>