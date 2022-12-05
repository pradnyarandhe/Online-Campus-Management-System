<?php
include('session_m.php');

if(!isset($login_session))
{
header('Location: managerlogin.php'); // Redirecting To Home Page
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


         	<ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">Manager Panel</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>   
				

		</nav>
		

      <br>
         <br>
         <br>
         <br>



   <body>
   <div class="header11" style="text-align: center; padding: 2px 300px 300px 300px;">

<div class="list-group">

  <a href="add_posts.php"class="list-group-item"><h4>Add Posts</h4></a>
  <a href="delete_posts.php"class="list-group-item"><h4>Delete Posts</h4></a>
  <a href="viewstudregister_m.php"class="list-group-item "><h4>View Student Registered</h4></a>
  <a href="feedback_details_m.php" class="list-group-item "><h4>View Feedback Details</h4></a>
  
  <br>
  <br>
  
</div>
</div>

</body>
<br>
<br>
<br>
<br>

</html>