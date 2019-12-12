<?php
include("connect.php");
?>
<html>
<head>
<title>Accident Records Management System
</title>
<style>
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}
a{
	color: white;
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
padding-left:20px;
}
</style>


<link rel="stylesheet" href="style.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
#button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

#button:hover {
  opacity: 0.8;
}


/* Center the image and position the close button */

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>
<center>

<h1>ACCIDENT RECORD MANAGMENT SYSTEM</h1><br><br><br><br><br><br><br><br>

<button onclick="document.getElementById('id01').style.display='block'" style="max-width: 120px;height:100px"><h2>Login</h2></button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post" style="max-height:40% ;max-width: 400px;" >

    <div class="container">
      
      <input type="text" placeholder="Enter Username" name="user" id="text" required>

      <input type="password" id='text' placeholder="Enter Password" name="pwd" required>
        
      <input type="submit" name="btnlogin" id="button" value="Login">

	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" name="btnlogin" id="btn">
		<a href='contact'>CONTACT</a>
	</button> 
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</center>
</head>

 <?php
if(isset($_POST["btnlogin"]))
{
function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
			$uname = validate_input($_POST["user"]);
			$pwd = validate_input($_POST["pwd"]);
		if($uname =="" || $pwd=="")
		{
			echo "<script> alert('Please Fill The required Field!');</script>";
			return;
		}
		else
		{
			$sql = "SELECT * FROM admin where ad_username='$uname' and ad_password='$pwd'";
					$result = mysqli_query($con, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
   						session_start();
						$_SESSION['log_user']=$uname;
						setcookie('user_n',$uname,time() + 86400*30,'/');
						setcookie('user_p',$pwd,time() + 86400*30,'/');
						header("location:home.php");
					} 
					else
					{  				
						echo "<script> alert('Invalid Username or Password!');</script>";
						return;
					}		
}
}
?>
</body>
</html>