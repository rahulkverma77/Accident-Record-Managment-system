<?php
session_start();
include("connect.php");
if(!(isset($_SESSION['log_user'])))
			{
				header("location:check.php");
			}
			else
			{	
				$user_name=$_SESSION['log_user'];
				?>
<html>
<head>
<title>Accident Records Management System</title>
<style>

#txt
{
	width:300px;
	border-style:groove;
	height:40px;
	border-radius:4px;
}
#fl
{
	width:250px;
	height:40px;
	border-radius:4px;
}
#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
.loginpad
{
padding-left:40px;
}
table{
color:#fff;
}
table{
color:#000;
border:none;
background-color:green;
}
th{
font-size:16px;
background-color:black;
color:#fff;
}
</style>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include("menu.php");
?>
<div class="homecon">
<div class="homesec">
<center>
<br><br>
		<br>
		<br>
		<br><br><br><br>
<div class="section">
<br>
<div class="loginpad">
<form action="" method="post">
 <input type="interger" name="TransID" id="txt" placeholder="Type r_id you want to delete" required>
  <input type="submit" name="Delete" id="btn" value="Delete"/>
  </form>
  </div>
  </div>
  <br>
  <br>

			<?php
		

		if(isset($_POST['Delete']))
		{
		$TransID = $_POST['TransID'];
		
				$sql = "DELETE FROM record WHERE r_id = ['$TransID']";
				echo "The Row has been deleted from the record";
				$result = mysqli_query($con,"DELETE FROM record WHERE r_id = '$TransID'");
	
	}
?>
			
<?php
		
?>
  </table>
  </center>
  </div>
  </div>
</body>
</html>
<?php
			}
	?>