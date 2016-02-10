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
    $response = array();

	if ($_POST['ontid'])
	{
   	//SELECT
   	$query = "SELECT *, CASE WHEN s.BIOBANK_ID = 30 THEN 'EUR' WHEN s.BIOBANK_ID = 1 THEN 'EUR' ELSE e.ETHINICITY END AS ETHNICITY FROM patient p, patient_ontology o, sample s, biobank b, ethinicity e WHERE o.ONT_KEYWORD Like '%$ontid%' AND o.PATIENT_ID = p.PATIENT_ID AND p.PATIENT_ID = s.PATIENT_ID AND s.BIOBANK_ID = b.BIOBANK_ID AND p.ethinic_id = e.ethinic_id;";
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
        	 array_push($response,$row_array['SAMPLE ID']);
   			}
   			$result_array = implode(',', $response);
   			echo "<br><b>". "ANALYZE ALL THE SAMPLES IN DiGEST: " . "</b>"."<a target='_blank' href= http://bridgeiris.ulb.ac.be:82/digest/?sample_id=".$result_array. ">CONNECT TO DiGEST</a><br>";
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

   	echo '<br>'.'<a href = "sampledata.json" target="_blank">CLICK FOR JSON</a>'.'<br><br>';
	$conn->close();
  }
}

?>


<?php include('header.php');?>
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
   <?php include('footer.php');?>
</html>
