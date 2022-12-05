<html>
	<head>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
       
        <li class="active" style="font-family:Nova Square"><a href="logout_s.php">Logout</a></li>
					
				</ul>
				
			</div>
		</nav>
		
        <body>

        <br>
    <br>
    
    <div class="container" >
      <div class="form-area"> 
      <div class="col-md-5" style=" margin: 1 auto;">
        <form method="post" action="">
        <br style="clear: both">
          <h4 style= "font-family:Nova Square margin-bottom: 25px; text-align: left; font-size: 30px;  font-family:Nova Square"> Feedback Form</h4>
          <hr>
           <ol>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="80" rows="4"></textarea>
           
          </div> 

          <div class="form-group">
            <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
</ol>
<hr>

          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>

    <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into feedback(Name,Email,Mobile,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>

</html>