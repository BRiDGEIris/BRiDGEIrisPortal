# BRiDGEIrisPortal
<b>Input:</b> BRiDGEIris Portal Website (PHP).

<b>Output:</b> BRiDGEIris Portal running on a system.

<b>Goal/Description:</b> BRiDGEIris portal brings together different database componenets namely Highlander, CliniPhenome, DIDA and tools like variant ranking, classification on a common platform.

Setup the protal on a system. <br><br>
For database installation: refer to README.md in CliniPhenome/database_dump/.<br>

For website installation and configuration: <br>
1. If you already have a Apache server running on the system, copy the entire BrideIRISportalsite folder in htdocs - ...\Apache2.2\htdocs\... <br>
2. Configuration Parameters - <br>
Configure the database settings, by defining the db configuration for the system to be accessed by the GUI. <br>
Go to db_config.php and change your database info:-<br>
'servername' => '', <br>
'dbuser' => '', <br>
'dbpassword' => '', <br>
'database' => ''<br>

Requirements<br>
1. Apache server - 2.2 or above<br>
2. PHP - 5.3 or above<br>
3. Mysql - 5.0 or above<br>
