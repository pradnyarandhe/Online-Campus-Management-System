<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
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
				
					<li class="active"><a href="index.php">HOME</a></li>
				</ul>


			<ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">Manager Panel</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>   
						

             
           
      </div>
			
		</nav>

<style>
.header6{
    text-align:center;
  color: #604020;
  font-family:Nova Square;

}
 </style>
<br>

<body>

<br>
<br>
<br>
<div   class="header6">
  

  <h3 class="text-center" style="color:white;">  Post have been successfully deleted!</h3>
  <br>
  <img src="Images/image1.jpg"  width="480" height="330">

  
 
</div>
<?php
include_once 'connection.php';

$sql = "DELETE FROM post WHERE Post_id='" . $_GET["Post_id"] . "'";
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);


?>

