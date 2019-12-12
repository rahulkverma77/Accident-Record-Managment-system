<?php
include("connect.php");	
$user_name=$_SESSION['log_user'];
$sql = "SELECT * FROM admin where ad_username='$user_name'";
					$result = mysqli_query($con, $sql);
					$rows=mysqli_fetch_assoc($result);
					$name=$rows["ad_username"];
					?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="menupad">
<ul>
<li><a href="help1.php">Help</a></li>
<li><a href="home.php">Home</a></li>
<li><a href="addnew.php">Add New</a></li>
<li><a href="">Search</a>
<ul>
<li><a href="search.php">Simple Search</a></li>
<li><a href="a_search.php">AdvanceSearch</a></li>
</ul>
</li>
<li><a href="delete1.php">Delete</a></li>
<li><a href="logout.php">Logout</a></li>
	<li><a href="allacc.php">All Accident</a></li>
<ul>

</ul>
</li>
</ul>
</div>
</body>
</html>
