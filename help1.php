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
$sql = "SELECT help.name as t1,help.email as t2,help.mob as t3,help.msg as t4 FROM help";
$result = $con->query($sql);
?>
<div class="homecon">
	<div class="homesec">
	<center><br>
		<br>
		<br>
		<br><br>
	<h2>Latest Help</h2>
	<h4>Contect Request</h4>
	<table border="1" width="900">
		<tr>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>MOBILE</th>
			<th>MESSAGE</th>

		</tr>

	<?php
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          ?>
          <tbody>
     <tr>
      <td><?php echo $row['t1']?></td>
    <td><?php echo $row['t2']?></td>
    <td><?php echo $row['t3']?></td>
	 <td><?php echo $row['t4']?></td>

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
