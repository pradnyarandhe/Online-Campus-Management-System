
<html>

  <head>
    <title> Student Login </title>
  </head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
		<nav class="navbar navbar-fixed-top" id="top-nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" style="font-family:Nova Square" href="#">Campus Recruitment Management System</a>
				</div>
				
			</div>
		</nav>

<style>
.header9
{
    text-align: center;
    color:black;
 }


      </style>
      

<?php

require 'connection.php';

$conn = Connect();



$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$birthdate = $conn->real_escape_string($_POST['birthdate']);
$gradyear = $conn->real_escape_string($_POST['gradyear']);
$gradgrade = $conn->real_escape_string($_POST['gradgrade']);
$grade12 = $conn->real_escape_string($_POST['grade12']);
$grade10 = $conn->real_escape_string($_POST['grade10']);
$course = $conn->real_escape_string($_POST['course']);
$contact = $conn->real_escape_string($_POST['contact']);
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);
$filename= $conn->real_escape_string($_POST['filename']);




$query = "INSERT into student (name,email,birthdate,gradyear,gradgrade,grade12,grade10,course,contact,username,password, filename) VALUES ('" . $name . "','" . $email . "','" . $birthdate . "','" . $gradyear ."','" . $gradgrade ."','" . $grade12. "','" . $grade10. "','" . $course. "','" . $contact. "','" . $username. "','" . $password. "', '" .$filename. "')";
$success = $conn->query($query);




?>
<body>
<div class="well text-center" id="main">
		<h1 align="center" style="font-family:Nova Square" >CAMPUS RECRUITMENT MANAGEMENT SYSTEM </h1>
  			<img class="img-responsive " src="Images/image1.jpg" height="400" width="700">
  		</div>

<div class="header9">
		<h2 style="font-family:Nova Square"> <?php echo "Welcome $name!" ?> </h2>
		
        
		<h3 style="font-family:Nova Square">Login Now from <a href="studentlogin.php">  <br> <h4 style="font-family:Nova Square">HERE</h4></a></h3>
	</div>
</div>

    </body>
</html>
