<?php
$servername = 'localhost';
$username = "root";
$password = "";

$database = "interviewsite";

// mysql i is a driver who creating connection
$conn = new mysqli($servername, $username, $password, $database);

// check conncetion
if ($conn->connect_error){
	die("Conncetion failed: " . $conn->connect_error);
}

$comment = $_GET["comment"];
$name = $_GET["name"];
$email = $_GET["email"];

// echo "connected successfully"

$sql = "INSERT INTO feedback (id, comment, name, email)
VALUES ('','$comment','$name', '$email')";

if ($conn->query($record) === TRUE) {
	header("location:http://localhost/Intervews_site/abouturself.php");
} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>