<?php
require_once("adminPanel/db_conf.php");
$dbname = "trackData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['track_id'])){
  $track_id = $_POST['track_id'];
$sql = "SELECT `id`, `product_id`, `track_title`, `track_address`, `date`, `time`, `active` FROM `$track_id` order by id desc";
$result = $conn->query($sql);

print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)));
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();
}

?> 