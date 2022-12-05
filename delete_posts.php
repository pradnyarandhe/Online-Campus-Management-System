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
<div   class="header6">
  
  <h3 class="text-center" style="color:white;">  DELETE POSTS </h3>
  
 
</div>


</body>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>

</div>
<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM post");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered '>
<tr>
<td>Post id</td>
<td>Post Name</td>
<td>Company Name</td>
<td>Eligcr</td>
<td>location</td>
<td>Salary</td>
<td></td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["Post_id"]; ?></td>
<td><?php echo $row["PostName"]; ?></td>
<td><?php echo $row["Compnm"]; ?></td>
<td><?php echo $row["Eligcr"]; ?></td>
<td><?php echo $row["location"]; ?></td>
<td><?php echo $row["salary"]; ?></td>
<td><a href="delete_post1.php?Post_id=<?php echo $row["Post_id"]; ?>" title='Delete Record'> <button class="btn btn-primary"  value= delete>delete</button></a></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>
            