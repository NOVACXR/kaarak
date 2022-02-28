<?php 

$db_user = "root";
$db_pass = "";
$db_name = "json1";

$conn = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $servername = "localhost";
// $username = "root";
// $password = "";
// $db_name = "json1";
// // Create connection
// $conn = new mysqli($servername, $username, $password,$db_name);


// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>