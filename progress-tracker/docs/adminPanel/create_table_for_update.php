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
if(isset($_POST['create_new_update_table'])){
  $product_id = $_POST['product_id'];
  // sql to create table
$sql = "CREATE TABLE `$product_id` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
product_id VARCHAR(300) NOT NULL,
track_title VARCHAR(300) NOT NULL,
track_address VARCHAR(500),
date VARCHAR(300),
time VARCHAR(300),
active VARCHAR(20)
)";

if ($conn->query($sql) === TRUE) {
  // echo "Table MyGuests created successfully";
  $arr = [
    "status" => "success"
  ];
  print_r(json_encode($arr));
} else {
  $arr = [
    "status" => "something went wrong"
  ];
  print_r(json_encode($arr));
}
}


$conn->close();
?> 