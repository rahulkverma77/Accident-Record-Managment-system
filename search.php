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
<title>Police Accident Records Management System</title>
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
		<br><br><br>
		
<div class="section">
<br>
<div class="loginpad">
<form action="" method="post">
 <input type="text" name="src" id="txt" placeholder="Type First Letter of the place" required>
  <input type="submit" name="btnsrc" id="btn" value="SEARCH"/>
  </form>
  </div>
  </div>
  <br>
  <br>
 <table border="1" width="900" id="customers">
		<tr>
			<th>Place</th>
			<th>Date and Time</th>
			<th>Kill</th>
			<th>Wound</th>
			<th>Vehicle Type</th>
			<th>Vehicle Number</th>
			<th>Reason</th>
			<th>Action</th>
		</tr>

			<?php
		
		$start=1;
		$limit=8;
		$query_page=mysqli_query($con,"select * from record order by place desc ");
		$total=mysqli_num_rows($query_page);
       if(isset($_GET['r_id']))
       {

            $start=($_GET['r_id']-1)*$limit;
       }
        else
        {
			$start=0;

		}
		if(isset($_POST['btnsrc']))
		{
		$ph=$_POST["src"];
	$page=ceil($total/$limit);
	 $query1="select * from record where place like '$ph%'order by r_id desc limit $start,$limit";
	 $result1=mysqli_query($con,$query1);
	if (mysqli_num_rows($result1) > 0) 
	 { 
	while($rows=mysqli_fetch_array($result1))
		{
?>
			<tr>
			<td><?php echo $rows['place']?></td>
			<td><?php echo $rows['dt']?></td>
			<td><?php echo $rows['kil']?></td>
			<td><?php echo $rows['wound']?></td>
			<td><?php echo $rows['v_type']?></td> 
			<td><?php echo $rows['v_number']?></td> 
			<td><?php echo $rows['reason']?></td> 
			<td> <a href="reupdate.php?Serial_no=<?php echo $rows['r_id'];?>"><img src="edit.png" width="25" height="25"></a></td>
			</tr>
<?php
		}
	 }
	 else
	 {
		 echo "<script> alert('No Record Found');</script>";
	 }
}
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