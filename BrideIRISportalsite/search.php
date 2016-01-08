<?php
include('db_config.php');

$ontid = $_GET['ont_keyword'];

if (empty($ontid))
	  {
		$error = "No Ontology Term Specified to Search for Patients Sample Data.";
		echo $error;
	  }

elseif ($ontid == 'all')
	  {
	// Create connection with the database
	$connection = mysql_connect($servername, $dbuser, $dbpassword);
	if (!$connection)
		{
		die('Could not connect to db: ' . mysql_error());
		}

	// Selecting Database
	$db = mysql_select_db($database, $connection);

	 //Create an array
	$json_response = array();

	//SELECT DATA
	$query = "SELECT *, CASE WHEN s.BIOBANK_ID = 5 THEN 'EUR' WHEN s.BIOBANK_ID = 1 THEN 'EUR' ELSE '1000Genome' END AS ETHNICITY FROM patient p, patient_ontology o, sample s, biobank b WHERE o.PATIENT_ID = p.PATIENT_ID AND p.PATIENT_ID = s.PATIENT_ID AND s.BIOBANK_ID = b.BIOBANK_ID AND b.BIOBANK_ID";
	$result = mysql_query($query);

	 if (mysql_num_rows($result) > 0)
		{
		  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
			 $row_array['DATA SOURCE'] = $row['NAME_OF_BIOBANK'];
			 $row_array['SAMPLE ID'] = $row['SAMPLE_ID'];
			 $row_array['PHENOTYPE TERM'] = $row['ONT_KEYWORD'];
			 $row_array['GENDER'] = $row['GENDER'];
			 $row_array['SUPER POPULATION'] = $row['ETHNICITY'];

			  //push the values in the array
			 array_push($json_response,$row_array);
			}
		}
	//Return JSON
	header('Content-type: application/json');
	echo json_encode($json_response);

	//close connection
	$conn->close();
 }

else
 {
	// Create connection with the database
			$connection = mysql_connect($servername, $dbuser, $dbpassword);
			if (!$connection)
				{
				die('Could not connect to db: ' . mysql_error());
				}

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
 	//Return JSON
	header('Content-type: application/json');
	echo json_encode($json_response);

	//close connection
	$conn->close();;

 }


?>
