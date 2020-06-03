<?php

// $conn = mysqli_connect('localhost','root','root','stdadmin');

//db credentials
$servername = 'localhost';
$dbusername = "root";
$dbpassword = "";
$dbname = "estates";

//connecting to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//if ($conn->connect_error) {
//	die("Connection error".$conn->connect_error);
//}
// else{
// 	echo "Connection successful.";
// }
?>

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('DB_SERVER', '127.0.0.1');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', 'root');
//define('DB_NAME', 'stdadmin');
// 
///* Attempt to connect to MySQL database */
//$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// 
//// Check connection
//if($link === false){
//    die("ERROR: Could not connect. " . mysqli_connect_error());
//}

?>