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
<title>Police Accident Records Management System || Register</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
#txt
{
	width:250px;
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
</style>
</head>
<body>
<?php
include("menu.php");
?>
<div class="homecon">

	<div class="homesec">
	<center>
	<br>
	<br><br>
		<br>
		<br>
		
<div class="section"><br>
	
	<div class="loginpad">
	<form action="data.php" method="post">
	<select  name="type" required id="txt">
			<option value="">Select Type</option>

				 <?php
				 $sql = "SELECT * FROM type";
									$result = mysqli_query($con, $sql);
									while($rows=mysqli_fetch_array($result))
				{ 
					  ?>
					      <option value="<?php echo $rows['type']?>"><?php echo $rows['type']?></option>
							  
				    <?php
					}
				?>
  </select>
		<input type="text" name="place" id="txt" placeholder="Place Of Accident" required>
		<br>
		<br>
		<input type="text" name="dt" id="txt" placeholder="Month/Date/Year Hour:m:sec: am or pm" required>
		
		<input type="text" name="kil" id="txt" placeholder="Casualities" required>
<br>
<br>
			<input type="text" name="wound" id="txt" placeholder="Wounded" required>
			<select  name="v_type" required id="txt">
			<option value="">Select Type</option>

				 <?php
				 $sql = "SELECT * FROM v_type";
									$result = mysqli_query($con, $sql);
									while($rows=mysqli_fetch_array($result))
				{ 
					  ?>
					      <option value="<?php echo $rows['v_type']?>"><?php echo $rows['v_type']?></option>
							  
				    <?php
					}
				?>
			</select>
		<br>
		<br>
			<input type="text" name="v_number" id="txt" placeholder="Plate Number" required>
			<input type="text" name="reason" id="txt" placeholder="Reason" required>
		<br>
		<br>
		
		<input type="submit" name="btnreg" id="btn" value="ADD">
		</form>
	</div>
	</div>
	</center>
	</div>

</div>
</body>
</html>
 
<?php
			}
	?>