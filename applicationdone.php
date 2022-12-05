<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: studentlogin.php"); 
}
?>

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
				<ul id="list1" class="nav navbar-nav">
					
					
        <li class="active" style="font-family:Nova Square"><a href="jobs.php"> Go Back to Jobs </a></li>
        <li class="active"><a style="font-family:Nova Square" href="Feedback.php">Feedback</a></li>
        <li class="active" style="font-family:Nova Square"><a href="logout_s.php">Logout</a></li>
				</ul>
			</div>
		</nav>
    <style>

.header2{
    text-align:center;
  color: #604020;
  font-family:Nova Square;

}


    </style>

		<br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php

  foreach($_SESSION["applyjob"] as $keys => $values)
  {

    $Post_id = $values["Post_id"];
    $PostName = $values["PostName"];
    $Compnm = $values["Compnm"];
    $location =  $values["location"];
    $Eligcr=  $values["Eligcr"];

    $username = $_SESSION["login_user2"];
    
  
    $application_dt= date('Y-m-d');
  
     $query = "INSERT INTO APPLICATION (Post_id,  PostName, Compnm,  location, Eligcr,username, application_dt) 
              VALUES ('" . $Post_id. "','" . $PostName . "','" . $Compnm . "','" . $location. "','" . $Eligcr. "','" .$username."','".$application_dt."')";
             

              $success = $conn->query($query);        
              
              if(!$success)
      {
        ?>
        

        <?php
      }
      
  }

        ?>

<body>

		
	
	
<div   class="header2">
  
		<h2 class="text-center" style="color:white;"> Thank You <?php echo "$username"; ?> </h2>
    <h3 class="text-center" style="color:white;">You are successfully applied for <?php echo "$Compnm"; ?>!</h3>
   <p class="text-center" style="color:white;">Further details regarding this will be sent on respected email id.</p>
    <br>
    
    <img src="Images/image1.jpg"  width="480" height="330">
         
	
</div>


    
</body>