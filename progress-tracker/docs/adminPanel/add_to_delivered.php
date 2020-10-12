<?php
require_once("db_conf.php");
$dbname = "track_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['add_to_delivered'])){
$product_id = $_POST['product_id'];
$sql = "UPDATE `short_details` SET `status`='YES' WHERE `product_id`='$product_id'";



if ($conn->query($sql) === TRUE) {
  $arr = [
    "status"=>"success"
];
echo json_encode($arr);
} else {
  
  $arr = [
    "status"=>$conn->error
];
echo json_encode($arr);
}
}


$conn->close();
?>