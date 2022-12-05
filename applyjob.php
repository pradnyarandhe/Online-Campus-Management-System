
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
					
					
					<li class="active" style="font-family:Nova Square"><a href="logout_s.php">Logout</a></li>
				</ul>
			</div>
		</nav>

		

<?php
if(!empty($_SESSION["applyjob"]))
{
  ?>




<br>


    <br>
<br>
<br>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px; color: #604020; font-family:Verdana, sans-serif;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="30%">Post Name</th>
<th width="30%">Company Name</th>
<th width="40%">Eligibility Criteria</th>
<th width="30%">Location</th>
<th width="30%">Salary</th>
</tr>
</thead>

<?php  


foreach($_SESSION["applyjob"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["PostName"] ?></td>
<td><?php echo $values["Compnm"] ?></td>
<td><?php echo $values["Eligcr"] ?></td>
<td><?php echo $values["location"]?></td>
<td><?php echo $values["salary"] ?></td>

</tr>
<?php 
}
?>

</table>
<?php
  echo '<a href="jobs.php"> </a><a href="applicationdone.php"><button class="btn btn-success pull-right"> Apply</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["applyjob"]))
{
  ?>

<?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["applyjob"]))
{
$item_array_id = array_column($_SESSION["applyjob"], "Post_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["applyjob"]);

$item_array = array(
'Post_id' => $_GET["id"],
'PostName' => $_POST["hidden_PostName"],
'Compnm' => $_POST["hidden_Compnm"],
'location' => $_POST["hidden_location"],
'Eligcr' => $_POST["hidden_Eligcr"],
'salary' => $_POST["hidden_salary"]
);

}
else
{
echo '<script>window.location="applyjob.php"</script>';
}
}
else
{
$item_array = array(
'Post_id' => $_GET["id"],
'PostName' => $_POST["hidden_PostName"],
'Compnm'=> $_POST["hidden_Compnm"],
'location' => $_POST["hidden_location"],
'Eligcr' => $_POST["hidden_Eligcr"],
'salary' => $_POST["hidden_salary"]
);
$_SESSION["applyjob"][0] = $item_array;
}
}





?>
<?php

?>


    </body>
</html>
   