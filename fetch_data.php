<?php
$servername = "localhost";
$username = "codeblooded";
$password = "root@123";
$dbname = "trackData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `product_id`, `track_title`, `track_status`, `date`, `time`, `active` FROM `1234567890`";
$result = $conn->query($sql);
echo "<pre>";
print_r($result->fetch_all(MYSQLI_ASSOC));
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();
?> 