<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: studentlogin.php"); 
}

?>


<html>
	<head>
	<link rel="stylesheet" type = "text/css" href ="CSS/post.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
		

		<style>
.header1{
	font-family:Nova Square;
	text-align:center;

}


		</style>


		<nav class="navbar navbar-fixed-top" id="top-nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" style="font-family:Nova Square" href="#">Campus Recruitment Management System</a>
				</div>
				<ul id="list1" class="nav navbar-nav">
				     <li class="active"><a style="font-family:Nova Square" href="Feedback.php">Feedback</a></li>
				     <li class="active"><a href="logout_s.php" style="font-family:Nova Square">Logout</a></li>
				</ul>
			</div>
		</nav>
			
	</head>
	<br>

    <body>
        
	
<br>
<br>

<div class= "header1" >
    <h2>Welcome To Campus Recruitment System</h2> 
</div>     
  
<br>
<br>
<br>


<div class="container" style="width:100%; ">

<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM post WHERE Enable = 'yes' ORDER BY Post_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="applyjob.php?action=add&id=<?php echo $row["Post_id"]; ?>">
<div class="mypanel" align="left";>

<h3 class="text-dark">Post Name: <?php echo $row["PostName"]; ?></h4>
<h4 class="text-dark">Company Name: <?php echo $row["Compnm"]; ?></h5>
<h4 class="text-dark">Eligibility Criteria: <?php echo $row["Eligcr"]; ?></h5>
<h4 class="text-dark">Location: <?php echo $row["location"]; ?>
<h4 class="text-dark">Salary: <?php echo $row["salary"]; ?>

<input type="hidden" name="hidden_PostName" value="<?php echo $row["PostName"]; ?>">
<input type="hidden" name="hidden_Compnm" value="<?php echo $row["Compnm"]; ?>">
<input type="hidden" name="hidden_Eligcr" value="<?php echo $row["Eligcr"]; ?>">
<input type="hidden" name="hidden_location" value="<?php echo $row["location"]; ?>">
<input type="hidden" name="hidden_salary" value="<?php echo $row["salary"]; ?>">

<br>
<input type="submit" name="add" style="margin-top:6px;" class="btn btn-success" value="Apply for job">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>


<?php

}

?>

</body>	
</html>		