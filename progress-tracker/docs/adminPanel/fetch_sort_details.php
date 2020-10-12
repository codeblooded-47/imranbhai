<?php
 require_once("db_conf.php");
// $servername = "localhost";
// $username = "codeblooded";
// $password = "root@123";
 $dbname = "track_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['fetch_short_details'])){

$sql = "SELECT `id`, `email`, `product_id`, `destinaton_address`, `initial_address`, `client_phone_number`, `estimated_cost`,`status` FROM `short_details` order by id desc";
$result = $conn->query($sql);

print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)));
}

$conn->close();
// }

?> 