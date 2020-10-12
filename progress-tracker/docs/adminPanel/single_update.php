<?php
require_once("db_conf.php");
date_default_timezone_set("Asia/Calcutta");
// $servername = "localhost";
// $username = "codeblooded";
// $password = "root@123";
$dbname = "trackData";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['update_track'])){
$product_id = $_POST['product_id'];
$track_title = $_POST['track_title'];
$track_address = $_POST['track_address'];
$date = date("M d , Y");
$time = date("h:i a");

$sql = "INSERT INTO `$product_id`(`product_id`, `track_title`, `track_address`, `date`, `time`, `active`) VALUES ('$product_id','$track_title','$track_address','$date','$time','yes')";

if ($conn->query($sql) === TRUE) {
$sql2 = "SELECT `id`, `product_id`, `track_title`, `track_address`, `date`, `time`, `active` FROM `$product_id` ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql2);

$resp = $result->fetch_assoc();

 $arr = [
   "status" => "success",
   "response" => $resp
 ];
 print_r(json_encode($arr));
} else {
   $arr = [
   "status" => $conn->error
 ];
 print_r(json_encode($arr));
}
}


$conn->close();
?> 