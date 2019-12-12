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
<title>
Police Accident Records Management System
</title>
<link rel="stylesheet" href="style.css"/>
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
<div class="section">
<br>
<div class="loginpad">
<center>
<?php
$slno=$_GET["Serial_no"];
$query="select * from record where r_id=$slno";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_array($result);
        $r =$rows['r_id'];
		$tp=$rows['type'];
		$pl=$rows['place'];
		$dt=$rows['dt'];
		$kl=$rows['kil'];
		$wd=$rows['wound'];
		$v_t=$rows['v_type'];
		$v_n=$rows['v_number'];
		$re=$rows['reason'];
		?>
		<label>ID Number: <?php echo $slno;?></label><br>
		<label>ID Number: <?php echo $tp;?></label><br>
<form action="updata.php" method="post">

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
  <input type="text" name="r_id" id="txt" placeholder="ID" value="
<?php 
echo $r;
?>
"required>
		<br>
		<br>
<input type="text" name="place" id="txt" placeholder="Place Of Accident" value="
<?php 
echo $pl;
?>
"required>
		<br>
		<br>
		<input type="text" name="dt" id="txt" placeholder="Month/Date/Year Hour:m:sec: am or pm" value="
<?php 
echo $dt;
?>
"required>
		
		<input type="text" name="kil" id="txt" placeholder="Casualities" value="
<?php 
echo $kl;
?>
"required>
<br>
<br>
			<input type="text" name="wound" id="txt" placeholder="Wounded" value="
<?php 
echo $wd;
?>
"required>
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
			<input type="text" name="v_number" id="txt" placeholder="Plate Number" value="
<?php 
echo $v_n;
?>
"required>
			<input type="text" name="reason" id="txt" placeholder="Reason" value="
<?php 
echo $re;
?>
"required>
		<br>
		<br>
		

  <br> <br>
<input type="submit" n value="Update" id="btn"/>
</form>
<input type="submit" id="btn" value="Back"/></a>
</div></div>
</body>
</html>
<?php

}
	?>