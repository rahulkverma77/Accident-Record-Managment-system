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
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
.loginpad
{
padding-left:70px;
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
</head>
<body>
<?php
include("menu.php");
?>
<?php
$sql = "CALL allacc()";
$result = $con->query($sql);
?>
<div class="homecon">
	<div class="homesec">
	<center><br><br>
		<br>
		<br>
		<br><br><br>
	<h2>Latest Report</h2>
	
	<h3>All Accident</h3>
	<table border="1" width="900">
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
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          ?>
          <tbody>
     <tr>
      <td><?php echo $row['r_id']?></td>
    <td><?php echo $row['place']?></td>
    <td><?php echo $row['dt']?></td>
	 <td><?php echo $row['kil']?></td>
	 <td><?php echo $row['wound']?></td>
	 <td><?php echo $row['v_type']?></td> 
	  <td><?php echo $row['v_number']?></td> 
	   <td><?php echo $row['reason']?></td> 
        </tr>
          <?php
        }
      }
      else{
        ?>
        
        <tr>
          <th colspan="2">There's no data found!!!</th>
        </tr>
        <tr>
        	<?php
  
    }
?>
</tbody>
</table>

<?php
	
		}
?>
	</center>
	</div>
</div>
</body>
</html>
