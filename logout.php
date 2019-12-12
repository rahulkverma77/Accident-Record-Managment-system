<center>
<h1>Police Accident Records Management System</h1>
<hr>
<?php
 session_start();
  session_unset();
  session_destroy();
  $_SESSION = array();

  header("Location:index.php");
?>
?>
</center>