<?php

$conn = mysqli_connect("localhost","root","","accidentrecord");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$r_id = $_POST['r_id'];
$type = $_POST['type'];
$place = $_POST['place'];
$dt = $_POST['dt'];
$kil = $_POST['kil'];
$wound = $_POST['wound'];
$v_type = $_POST['v_type'];
$v_number = $_POST['v_number'];
$reason = $_POST['reason'];


$sql = "UPDATE record 
SET type = '$type', place = '$place', dt = '$dt', kil = '$kil', wound = '$wound', v_type = '$v_type', v_number = '$v_number', reason = '$reason'
WHERE r_id = '$r_id'";

if ($conn->query($sql) === TRUE) {
     echo "<script> alert('Successful');</script>";;
} else {
    echo "<script> alert('Check if the field contain special charecter, or contact an administrator');</script>" . $sql . "<br>" . $conn->error;
}

$conn->close();

	
?>
<?php
include('home.php');
?>