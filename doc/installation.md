# BRiDGEIris Portal Installation

<b><u>BRiDGEIris Portal: Installation on a new system. </u></b><br><br>
<b>Requirements:</b><br>
1. Apache server - 2.2 or above<br>
2. PHP - 5.3 or above<br>
3. Mysql - 5.0 or above<br><br>

<b>For database installation: </b><br>
refer to README.md (../code/database/Readme.md) in /database_dump/.<br><br>

<b>For website installation and configuration: </b><br>
1. If you already have a Apache server running on the system, copy the entire "code" folder in htdocs - ...\Apache2.2\htdocs\...  <br>Else<br> install Apache server and proced further.<br><br>
2. Rename the "code" folder as "bridgeirisportal" in your system. <br><br>
3. Database Configuration Parameters - <br>
Configure the database settings, by defining the db configuration for the system to be accessed by the GUI. <br>
Go to *[db_config.php](../code/db_config.php) (../code/db_config.php) and change your database info:-<br>
'servername' => '', <br>
'dbuser' => '', <br>
'dbpassword' => '', <br>
'database' => ''<br><br>
4. Web Configuration Parameters - <br>
URL of the resources being referred by the portal can be reconfigured by changing the URLs defined as variables in *[weburl_config.php]( ../code/weburl_config.php) ( ../code/weburl_config.php). <br><br>
5. Considering root of your bridgeiris portal installation is - ...\Apache2.2\htdocs\bridgeirisportal -  <br>
To access bridgeiris portal on your system, open a browser and type: http://localhost/bridgeirisportal/index.php <br>
OR<br>
if hosted on a server: http://servername/bridgeirisportal/index.php <br>



