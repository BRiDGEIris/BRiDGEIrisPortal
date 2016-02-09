# BRiDGEIris Portal
<b> About BRiDGEIris Portal: <b>
BridgeIris Portal is the gateway to access the databases and tools developed within the BRiDGEIris project. To access the portal, the user needs to be registered with the portal validation system. Post the credential validation, a user can access the following databases and tools: <b>Highlander (Genomic Database) Client </b>, <b>CliniPhenome (Clinical/Phenotypic Database) </b>, <b>DIDA (Digenic Diseases Database)</b>, <b>DiGeST (Gene/Variant Ranking Tool) </b>, GeVaCT <b>(Variant Pathogenic Classification Tool)</b> and Messaging utility. A few of these resources have their own credential management system, to which a user needs to register for using its features. BridgeIris Portal has been developed in PHP and is running on Apache server. <br><br>

<b>Description:</b> BRiDGEIris portal brings together different database componenets namely Highlander, CliniPhenome, DIDA and tools like variant ranking, classification on a common platform. <br>

<u>Installation of the BRiDGEIris Portal on a system. </u><br>
Requirements<br>
1. Apache server - 2.2 or above<br>
2. PHP - 5.3 or above<br>
3. Mysql - 5.0 or above<br>

For database installation: refer to README.md in /database_dump/.<br>

For website installation and configuration: <br>
1. If you already have a Apache server running on the system, copy the entire BrideIRISportalsite folder in htdocs - ...\Apache2.2\htdocs\...  Else install Apache server and proced further.<br>
2. Database Configuration Parameters - <br>
Configure the database settings, by defining the db configuration for the system to be accessed by the GUI. <br>
Go to db_config.php (<a href = "https://github.com/BRiDGEIris/BRiDGEIrisPortal/blob/master/BrideIRISportalsite/db_config.php"> /BrideIRISportalsite/db_config.php</a>) and change your database info:-<br>
'servername' => '', <br>
'dbuser' => '', <br>
'dbpassword' => '', <br>
'database' => ''<br>
3. Web Configuration Parameters - <br>
URL of the resources being referred by the portal can be reconfigured by changing the URLs defined as variables in weburl_config.php (<a href = "https://github.com/BRiDGEIris/BRiDGEIrisPortal/blob/master/BrideIRISportalsite/weburl_config.php"> /BrideIRISportalsite/weburl_config.php</a>)
