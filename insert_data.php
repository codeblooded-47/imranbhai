<?php
$servername = "localhost";
$username = "codeblooded";
$password = "root@123";
$dbname = "trackData";;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `1234567890`(`product_id`, `track_title`, `track_status`, `date`, `time`, `active`) VALUES ('dfdsfsd','sdfsdf','sdfdsf','dsfdsfd','dfdsfds','dsfsdfsd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 