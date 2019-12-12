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
<link rel="stylesheet"  href="style.css" type="text/css" />
<style>
.loginpad
{
padding-left:70px;
}
table{
color:#000;
border:3px solid white;
background-color:rgba(0,255,0,0.75);

}
th{
font-size:16px;
background-color:black;
color:#fff;

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
		<br>
		<br>
		<br><br>
	
	<h4>Minor Accident</h4>
	<table border='2' width="900">
		<tr>
			<th>R_ID</th>
			<th>Place</th>
			<th>Date and Time</th>
			<th>Kill</th>
			<th>Wound</th>
			<th>Vehicle Type</th>
			<th>Vehicle Number</th>
			<th>Reason</th>
		</tr>

			<?php
		
		$start=1;
		$limit=8;
		$query_page=mysqli_query($con,"select * from record order by r_id desc ");
		$total=mysqli_num_rows($query_page);
       if(isset($_GET['r_id']))
       {

            $start=($_GET['r_id']-1)*$limit;
       }
        else
        {
			$start=0;

		}
     $page=ceil($total/$limit);
	 $query1="select * from record where type='Minor' order by r_id desc limit $start,$limit";
	 $result1=mysqli_query($con,$query1);
	 
?>
	 
        
		<?php
while($rows=mysqli_fetch_array($result1))
{
	?>
 <tr>
 	<td><?php echo $rows['r_id']?></td>
    <td><?php echo $rows['place']?></td>
    <td><?php echo $rows['dt']?></td>
	 <td><?php echo $rows['kil']?></td>
	 <td><?php echo $rows['wound']?></td>
	 <td><?php echo $rows['v_type']?></td> 
	  <td><?php echo $rows['v_number']?></td> 
	   <td><?php echo $rows['reason']?></td> 
  </tr>
<?php
	
		}
?>


<table border="2" width="900">

<h4>Major Accident</h4>
		<tr>
			<th>R_ID</th>
			<th>Place</th>
			<th>Date and Time</th>
			<th>Kill</th>
			<th>Wound</th>
			<th>Vehicle Type</th>
			<th>Vehicle Number</th>
			<th>Reason</th>
		</tr>

			<?php
		
		$start=1;
		$limit=8;
		$query_page=mysqli_query($con,"select * from record order by r_id desc ");
		$total=mysqli_num_rows($query_page);
	       if(isset($_GET['r_id']))
	       {

		    $start=($_GET['r_id']-1)*$limit;
	       }
			else
			{
			$start=0;

		}
     $page=ceil($total/$limit);
	 $query1="select * from record where type='Major' order by r_id desc limit $start,$limit";
	 $result1=mysqli_query($con,$query1);
	 
?>
	 
        
		<?php
while($rows=mysqli_fetch_array($result1))
{
	?>
 <tr>
 	<td><?php echo $rows['r_id']?></td>
    <td><?php echo $rows['place']?></td>
    <td><?php echo $rows['dt']?></td>
	 <td><?php echo $rows['kil']?></td>
	 <td><?php echo $rows['wound']?></td>
	 <td><?php echo $rows['v_type']?></td> 
	  <td><?php echo $rows['v_number']?></td> 
	   <td><?php echo $rows['reason']?></td> 
  </tr>
<?php
	
		}
?>
	</center>
	</div>
</div>
</body>
</html>
<?php
			}
	?>