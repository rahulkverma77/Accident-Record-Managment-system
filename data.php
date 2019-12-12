<?php

$conn = new mysqli("localhost","root","","accidentrecord");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$type = $_POST['type'];
$place = $_POST['place'];
$dt = $_POST['dt'];
$kill = $_POST['kil'];
$wound = $_POST['wound'];
$v_type = $_POST['v_type'];
$v_number = $_POST['v_number'];
$reason = $_POST['reason'];

$sql = "INSERT INTO record (type, place, dt, kill, wound, v_type, v_number, reason)
VALUES ('$type', '$place', '$dt', '$kill', '$wound','$v_type','$v_number','$reason')";
if ($conn->query($sql) === TRUE) {
     echo "<script> alert('Successful');</script>";;
} else {
    echo "<script> alert('Check if the field contain special charecter, or contact an administrator');</script>" . $sql . "<br>" . $conn->error;
}

$conn->close();

	include('addnew.php');
?>