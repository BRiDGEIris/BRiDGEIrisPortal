<?php
include('db_config.php');

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['element_3'];

// Create connection with the database
$connection = mysql_connect($servername, $dbuser, $dbpassword);
if (!$connection) {
die('Could not connect to db: ' . mysql_error());
}

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// Selecting Database
$db = mysql_select_db($database, $connection);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
if($usertype == "admin"){
header("location: ClinicalDBHome.php"); // Redirecting To Admin Page
}
else {header("location: index.php"); // Redirecting To Anonymous Page
}
} else {
$error = "Username or Password is invalid.";
}
mysql_close($connection); // Closing Connection
}
}
?>