<?php
session_start();
extract( $_POST );
 
 $servername = "cmpe272finalproject.cpxjzynfvxe6.us-west-1.rds.amazonaws.com";
 $dbusername = "root";
 $dbpassword = "sjsucmpe272";
 $dbname = "ebdb";
 

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
// please update owner_id 
if(isset($_SESSION[username])){
	 $username = $_SESSION[username];
}else{
	$username = 'guest';
}
$owner_id = '4';
$product_name = $_SESSION[product_name];
 

 // Insert new review into Reviews Table

 $sql = "INSERT INTO review (owner_id, product_name, user, rate, review) VALUES ('$owner_id', '$product_name', '$username', '$rating', '$message')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Update Review Rating to Stat Table
// if no existed in table, insert rating and count = 1
// else update

$result = $conn->query("SELECT count, total FROM statistics WHERE product_name = '$product_name'");
if($result->num_rows == 0) {
     // row not found, do stuff...
	 $sql = "INSERT INTO statistics (owner_id, product_name, count, total) VALUES ('$owner_id', '$product_name', '1', '$rating')";
} else {
    while($row = $result->fetch_assoc()) {
		$new_count = $row["count"] + 1;
		$new_total = $row["total"] + $rating;
		}
	$sql = "UPDATE statistics SET count='$new_count', total='$new_total'  WHERE product_name = '$product_name'";
        
}

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();

?>
