<?php
include('session.php');
include('submit_digest.php');
if (isset($_POST['submit']))
{
echo "<head>
<link href='assets/css/bootstrap.css' rel='stylesheet' />
<link href='assets/css/font-awesome.css' rel='stylesheet' />
<link href='assets/css/style.css' rel='stylesheet' />
</head>
<body>
    <header>
	<div class='container'>
				<div class='row' align = 'center'>
				<div class='col-md-12'>
								<h2 style='color:#FAFAD2'><u>BridgeIRIS Portal </u></h2>
					</div>
					</div>
				<div class='row'>
					<div class='col-md-8'>
						<strong>Email: </strong>Dipankar.Sengupta@vub.ac.be
						&nbsp;&nbsp;
						<strong>Support: </strong>+32-465833483
					</div>
		</div></header>
		</body>"."<br><br>";

echo "<a href = 'ui.php'>RETURN: New Search</a><br>";
echo "<h2><u>PATIENT SAMPLES AVAILABLE IN CLINIPHENOME</u></h2>";

 if (empty($_POST['ontid']))
  {
	$error = "Please enter a ontology name to search for Patients.";
  }
 else
  {
   	// Create connection with the database
   	$connection = mysql_connect($servername, $dbuser, $dbpassword);
   	if (!$connection) {
   	die('Could not connect to db: ' . mysql_error());
   	}

   	$ontid = $_POST['ontid'];

   	// Selecting Database
   	$db = mysql_select_db($database, $connection);

   	 //Create an array
    $json_response = array();

	if ($_POST['ontid'])
	{
   	//SELECT
   	$query = "SELECT *, CASE WHEN s.BIOBANK_ID = 5 THEN 'EUR' WHEN s.BIOBANK_ID = 1 THEN 'EUR' ELSE '1000Genome' END AS ETHNICITY FROM patient p, patient_ontology o, sample s, biobank b WHERE o.ONT_KEYWORD Like '%$ontid%' AND o.PATIENT_ID = p.PATIENT_ID AND p.PATIENT_ID = s.PATIENT_ID AND s.BIOBANK_ID = b.BIOBANK_ID AND b.BIOBANK_ID";
   	$result = mysql_query($query);

   	 if (mysql_num_rows($result) > 0)
   		{
   		  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
			 echo "<b>". "PATIENT ID: " . "</b>". $row[PATIENT_ID ]. "; "."<b>". "DATA SOURCE: " . "</b>". $row[NAME_OF_BIOBANK ]. "; ". "<b>". "SAMPLE #: " . "</b>". $row["SAMPLE_ID" ]. "; "."<b>"."PATHOLOGY: " . "</b>". $row["ONT_KEYWORD"]."; ". "<b>". "GENDER: " . "</b>". $row["GENDER" ]."; ". "<b>". "SUPER POPULATION: " . "</b>". $row["ETHNICITY" ]. "; ". "<b>". "ANALYZE IN DiGEST: " . "</b>"."<a target='_blank' href= http://bridgeiris.ulb.ac.be:82/digest/?sample_id=".$row["SAMPLE_ID"]. ">CONNECT TO DiGEST</a><br>";

			 $row_array['DATA SOURCE'] = $row['NAME_OF_BIOBANK'];
			 $row_array['SAMPLE ID'] = $row['SAMPLE_ID'];
			 $row_array['PHENOTYPE TERM'] = $row['ONT_KEYWORD'];
			 $row_array['GENDER'] = $row['GENDER'];
			 $row_array['SUPER POPULATION'] = $row['ETHNICITY'];

			  //push the values in the array
        	 array_push($json_response,$row_array);
   			}
   		}
   	 else {
	   		echo "There are no records of patients in the database for the specified ontology search term.";
   		  }
   	}

	//Create the JSON file and write
		$jsonDataEncoded = json_encode($json_response);
	    $fp = fopen ('sampledata.json','w');
	    fwrite ($fp, $jsonDataEncoded);
    	fclose($fp);

   	echo '<br><br>'.'<a href = "sampledata.json" target="_blank">CLICK FOR JSON</a>'.'<br><br>';
	$conn->close();
  }
}

?>


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
						<strong>Email: </strong>Dipankar.Sengupta@vub.ac.be
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
															<?php echo $login_session; ?>
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
                            <li><a  href="home.php">Dashboard</a></li>
                            <li><a class="menu-top-active" href="ui.html">Search Patient</a></li>
                            <!--<li><a href="table.html">Data Tables</a></li> -->
                            <li><a href="forms.php">Forms</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SEARCH PATIENTS BASED ON HUMAN ONTOLOGY</h1>
                    </div>
                </div>
                <div class="buttons"><center>
					<h3><u>Enter the Search Term</u></h3>
					<form action="" method="post">
						<input id="submit" name="ontid" placeholder="" type="text"> <br><br>
						<input name="submit" type="submit" value="Search Patient">
						&nbsp;
						<input name="Reset" type="reset" value="Reset">
					<br><br>
					<span><?php echo $error; ?></span>
					</form>
					</center>
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
