<?php
if (isset($_POST['submit']))
{
 if (empty($_POST['ontid']))
  {
	$error = "Please enter a ontology name to search for Patients.";
  }
 else
  {
   // database credentials
   	$servername = "localhost";
   	$dbuser = "root";
   	$dbpassword = "root";
   	$database = "uz_clinical_db";

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
   	$query = "SELECT * FROM PATIENT P, patient_ontology o, sample s WHERE o.ONT_KEYWORD Like '%$ontid%' AND P.PATIENT_ID = S.PATIENT_ID AND P.PATIENT_ID = o.PATIENT_ID";
   	$result = mysql_query($query);

   	 if (mysql_num_rows($result) > 0)
   		{
   		  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
			 echo "<b>". "PATIENT-ID: " . "</b>". $row[PATIENT_ID ]. "; ". "<b>". "SAMPLE #: " . "</b>". $row["SAMPLE_ID" ]. "; "."<b>"."PHENOTYPE ONTOLOGY TERM: " . "</b>". $row["ONT_KEYWORD"]. "<br><br>";

			 $row_array['SAMPLE_ID'] = $row['SAMPLE_ID'];
			 $row_array['PHENOTYPE_TERM'] = $row['ONT_KEYWORD'];

			  //push the values in the array
        	 array_push($json_response,$row_array);
   			}
   		}
   	 else {
	   		echo "There are no records of patients in the database for the specified ontology search term.";
   		  }
   	}

	//Create the JSON file and write
	    $fp = fopen ('sampledata.json','w');
	    fwrite ($fp, json_encode($json_response));
    	fclose($fp);

   	echo '<br><br>'.'<a href = "ui.php">RETURN</a>'.'<br>';
   	echo '<br><br>'.'<a href = "sampledata.json">CLICK FOR JSON</a>'.'<br><br>';
	$conn->close();
  }
}

?>
