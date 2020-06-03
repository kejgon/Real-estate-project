<?php

//db credentials
$servername = 'localhost';
$dbusername = "root";
$dbpassword = "root";
$dbname = "estates";

//connecting to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
	die("Connection error".$conn->connect_error);
}
// else{
// 	echo "Connected successfully";
// }
	//pick value from the form
	$em = $_POST['email'];
	$usr = $_POST['username'];
	$pwd = $_POST['password'];

	// echo $em.",".$usr.",  ".$pwd;
	//insert values into db
	$sql = "INSERT INTO users (email, username, password) VALUES('$em','$usr','$pwd')";

	if ($conn->query($sql) === TRUE) {
		echo "Request submitted successfully";
	}else{
		echo "Request failled";
	}

	$conn->close();
?>