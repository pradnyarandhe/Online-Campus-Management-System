<?php
include('session_m.php');

if(!isset($login_session)){
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
            
            

<body> 


<?php

// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

<table class="table table-striped" style="width:70%, text-align: center, padding: 2px 300px 300px 300px;">
    <thead class="thead-dark">
      <tr>
      <th> Name</th>
      <th> Email </th>
      <th> Mobile </th>
   
      <th> Message </th>
      
      </tr>
    </thead>
    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      
    
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Email"]; ?></td>
      <td><?php echo $row["Mobile"]; ?></td>
   

      <td><?php echo $row["Message"]; ?></td>
      
      
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
  <?php 
} 
else
{ 
  ?>

<h4><center>0 RESULTS</center> </h4>

<?php } ?>

      </form>

      
</br>
</br>


</html>
