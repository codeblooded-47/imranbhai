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
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['short_details_submitted'])){
$email = $_POST['email'];
$product_id = $_POST['product_id'];
$destination_address = $_POST['destination_address'];
$initial_address = $_POST['initial_address'];
$client_phone_number = $_POST['client_phone_number'];
$estimated_cost = $_POST['estimated_cost'];
$no_of_packages = "blah";
$pickup_date = "blah";
$assured_dly_date = "blah";

// $sql = "INSERT INTO `short_details`(`email`, `product_id`, `destinaton_address`, `initial_address`, `client_phone_number`, `estimated_cost` , `status`) VALUES ('$email','$product_id','$destination_address','$initial_address','$client_phone_number','$estimated_cost' , 'NO')";
$sql = "INSERT INTO `short_details`(`email`, `product_id`, `destinaton_address`, `initial_address`, `client_phone_number`, `estimated_cost` , `no_of_packages`, `pickup_date`,`assured_dly_date` ,`status`) VALUES ('$email','$product_id','$destination_address','$initial_address','$client_phone_number','$estimated_cost' ,'$no_of_packages' , '$pickup_date' , '$assured_dly_date' ,  'NO')";

if ($conn->query($sql) === TRUE) {
 $sql = "SELECT `id`, `email`, `product_id`, `destinaton_address`, `initial_address`, `client_phone_number`, `estimated_cost` , `no_of_packages`, `pickup_date`,`assured_dly_date` ,`status` FROM `short_details`  ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

$resp = $result->fetch_assoc();


$arr = [
    "status"=>"success",
    "response" => $resp
];
print_r(json_encode($arr));
} else {
 $arr = [
    "status"=>"failed"
];
print_r(json_encode($arr));
}
}

$conn->close();
?> 