<?php
$con = mysqli_connect("localhost","root","","accidentrecord");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 