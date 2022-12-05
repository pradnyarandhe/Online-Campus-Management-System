<?php
include('session_a.php');

if(!isset($login_session)){
header('Location: adminlogin.php'); // Redirecting To Home Page
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
            <li class="active"> <a href="adminlogin.php">Admin Panel</a></li>
            <li><a href="logout_a.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
				

		</nav>
		

            <br>
            <br>
            <br>
            


</body>

<?php

// Storing Session
$user_check=$_SESSION['login_user3'];
$sql = "SELECT * FROM company";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

<table class="table table-striped" style="width:70%, text-align: center, padding: 2px 300px 300px 300px;">
    <thead class="thead-dark">
      <tr>
      <th> Company ID </th>
      <th> Company Name</th>
      <th> Contact No </th>
      <th> Email ID </th>
      <th> Location  </th>
      <th> HR </th>
      
      
    </tr>
    </thead>
    <?PHP
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td><?php echo $row["Com_id"]; ?></td>
      <td><?php echo $row["Cname"]; ?></td>
      <td><?php echo $row["ContactNo"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["location"]; ?></td> 
      <td><?php echo $row["HR"]; ?></td> 

      

    </tr>
  </tbody>
  
  <?php } ?>
  </table>
  <?php 
} 
else
{ 
  ?>



<?php } ?>


</html>
