<html>
	<head>
		

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
		<nav class="navbar navbar-fixed-top" id="top-nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" style="font-family:Nova Square" href="#">Campus Recruitment Management System</a>
				</div>
				

</nav>

<style>
.header10
{
    text-align: center;
    color:black;
 }


      </style>
<?php
require 'connection.php';

$conn = Connect();


$Cname=$_POST['Cname'];
$username=$_POST['username'];
$Password=$_POST['Password'];
$ContactNo=$_POST['ContactNo'];
$email=$_POST['email'];
$location=$_POST['location'];
$HR=$_POST['HR'];



$query = "INSERT into company (Cname,username,Password,ContactNo,email,location,HR) VALUES ('" . $Cname . "','".$username ."','" . $Password . "','" . $ContactNo . "','" . $email ."','" . $location."','" . $HR. "')";
$success = $conn->query($query);




?>

<body>
<div class="well text-center" id="main">
		<h1 align="center" style="font-family:Nova Square" >CAMPUS RECRUITMENT MANAGEMENT SYSTEM </h1>
  			<img class="img-responsive " src="Images/image1.jpg" height="400" width="700">
  		</div>

<div class="header10">
		<h2 style="font-family:Nova Square"> <?php echo "Welcome $Cname!" ?> </h2>
		
        
		<h3 style="font-family:Nova Square">Login Now from <a href="managerlogin.php">  <br> <h4 style="font-family:Nova Square">HERE</h4></a></h3>
	</div>
</div>

    </body>
</html>

