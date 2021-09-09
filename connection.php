<?php
$servername = "localhost";
$username = "root";
$password = "";

$database = "intervewsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name =  $_GET["name"];
$email = $_GET["email"];
$mobile = $_GET["mobile"];
$password =  $_GET["password"];


// echo "Connected successfully";

$sql = "INSERT INTO register (id, name, email, mobile, password)
VALUES ('','$name', '$email', '$mobile', '$password')";

if ($conn->query($sql) === TRUE) {
  header("location:http://localhost/Intervews_site/mysite.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
