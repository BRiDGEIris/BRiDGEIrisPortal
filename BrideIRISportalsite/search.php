<?php
include('db_config.php');
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

	echo "<h2><u>PATIENT SAMPLES AVAILABLE IN CLINIPHENOME</u></h2>";


	$ontid = $_GET['ont_keyword'];

	if (empty($_GET['ont_keyword']))
		  {
			$error = "Please enter a ontology name to search for Patients.";
			echo $error;
		  }
		 else
  		 {
			// Create connection with the database
				   	$connection = mysql_connect($servername, $dbuser, $dbpassword);
				   	if (!$connection) {
				   	die('Could not connect to db: ' . mysql_error());
				   	}

				   	$ontid = $_GET['ont_keyword'];

			// Selecting Database
			$db = mysql_select_db($database, $connection);

			 //Create an array
			$json_response = array();

			//SELECT DATA
			   	$query = "SELECT *, CASE WHEN s.BIOBANK_ID = 5 THEN 'EUR' WHEN s.BIOBANK_ID = 1 THEN 'EUR' ELSE '1000Genome' END AS ETHNICITY FROM patient p, patient_ontology o, sample s, biobank b WHERE o.ONT_KEYWORD Like '%$ontid%' AND o.PATIENT_ID = p.PATIENT_ID AND p.PATIENT_ID = s.PATIENT_ID AND s.BIOBANK_ID = b.BIOBANK_ID AND b.BIOBANK_ID";
			   	$result = mysql_query($query);

			   	 if (mysql_num_rows($result) > 0)
			   		{
			   		  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
						{
						 echo "<b>". "DATA SOURCE: " . "</b>". $row[NAME_OF_BIOBANK ]. "; ". "<b>". "SAMPLE #: " . "</b>". $row["SAMPLE_ID" ]. "; "."<b>"."PATHOLOGY: " . "</b>". $row["ONT_KEYWORD"]."; ". "<b>". "GENDER: " . "</b>". $row["GENDER" ]."; ". "<b>". "SUPER POPULATION: " . "</b>". $row["ETHNICITY" ]."; ". "<b>". "ANALYZE IN DiGEST: " . "</b>"."<a target='_blank' href= http://bridgeiris.ulb.ac.be:82/digest/?sample_id=".$row["SAMPLE_ID"]. ">CONNECT TO DiGEST</a><br>";

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
		  //Create the JSON file and write
					$jsonDataEncoded = json_encode($json_response);
					$fp = fopen ('searchsampledata.json','w');
					fwrite ($fp, $jsonDataEncoded);
					fclose($fp);

				echo '<br><br>'.'<a href = "searchsampledata.json" target="_blank">CLICK FOR JSON</a>'.'<br><br>';
			$conn->close();
		 }

?>
