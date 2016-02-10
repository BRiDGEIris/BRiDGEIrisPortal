# BRiDGEIris Portal Installation
<p align = "justify">
<b><u>BRiDGEIris Portal: Installation on a new system. </u></b><br>
Requirements:<br>
1. Apache server - 2.2 or above<br>
2. PHP - 5.3 or above<br>
3. Mysql - 5.0 or above<br><br>

For database installation: <br>
refer to README.md (<a href = "https://github.com/BRiDGEIris/BRiDGEIrisPortal/blob/master/BrideIRISportalsite/database/Readme.md">README.md</a>) in /database_dump/.<br><br>

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
</p>
