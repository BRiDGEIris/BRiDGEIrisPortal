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
    <title>BridgeIRIS Portal - Search Patient</title>
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
						<strong>Email: </strong>admin@bridgeiris.com
						&nbsp;&nbsp;
						<strong>Support: </strong>+32-465833483
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

									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
											<span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
										</a>
										 <div class="dropdown-menu dropdown-settings">
													<div class="media">
														<a class="media-left" href="#">
															<img src="assets/img/Dip2.jpg" alt="" class="img-rounded" />
														</a>
														<div class="media-body">
															<h4 class="media-heading">Dipankar</h4>
															<h5>Doctor</h5>

														</div>
													</div>
													<hr />
													<h5><strong>Personal Bio : </strong></h5>
													Testing I am a doctor!
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
                            <li><a  href="index.html">Dashboard</a></li>
                            <li><a class="menu-top-active" href="ui.html">Search Patient</a></li>
                            <!--<li><a href="table.html">Data Tables</a></li> -->
                            <li><a href="forms.html">Forms</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
<hr>

<?php
    // database credentials
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "uz_clinical_db";

	$ontid = $_POST['ontid'];

	// Create connection with the database
	$db = mysql_connect($servername, $username, $password);
	    if (!$db) {
	        die('Could not connect to db: ' . mysql_error());
	    }

   mysql_select_db($database,$db);
   $result = mysql_query("SELECT * FROM PATIENT P, patient_ontology o, sample s WHERE o.ONT_KEYWORD Like '%$ontid%' AND P.PATIENT_ID = S.PATIENT_ID AND P.PATIENT_ID = o.PATIENT_ID", $db);

    //Create an array
    $json_response = array();

    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $row_array['SAMPLE_ID'] = $row['SAMPLE_ID'];
        $row_array['PHENOTYPE_TERM'] = $row['ONT_KEYWORD'];

        //push the values in the array
        array_push($json_response,$row_array);
    }
    #echo json_encode($json_response);

    //Close the database connection
    fclose($db);

    //Create the JSON file and write
    $fp = fopen ('sampledata.json','w');
    fwrite ($fp, json_encode($json_response));
    fclose($fp);

?>

<h3 align>JSON FILE</h3>
<p align><a href = "sampledata.json">Download JSON File</a></p>
<br>

<br><br><br><br><br><br><br><br><br><br>
<hr>
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