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
					<li class="active"><a style="font-family:Nova Square" href="index.php">Home</a></li>
				</ul>
			</div>
		</nav>
	  </head>
	  <body>
	  <div class="container" >
      <div class="form-area">
      <div class="col-md-5" style=" margin: 1 auto;">
	
        <form method="post" action="manager_signup_success.php">
		<br style="clear: both">
		<br>
		<h4 style= "font-family:Nova Square margin-bottom: 25px; text-align: left; font-size: 30px;  font-family:Nova Square"> Company Details</h4>
           <hr>
           <ol>
		   <br style="clear: both">
		   <div class="form-group">
            <input type="text" class="form-control" id="Cname" name="Cname" placeholder="Enter in capital letters" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="abc@xyz.com" required>
          </div>  
		  
		  <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus="" >
        </div> 
		
		  <div class="form-group">
            <input type="text" class="form-control" id="Password" name="Password" placeholder="Password" required>
          </div>

		  <div class="form-group">
            <input type="Number" class="form-control" id="ContactNo" name="ContactNo" placeholder="Contact Number" required>
          </div>  

		  <div class="form-group">
            <input type="text" class="form-control" id="location" name="location" placeholder="Ex. Delhi" required>
          </div> 

		 

		  <div class="form-group">
            <input type="text" class="form-control" id="HR" name="HR" placeholder="Name of HR" required>
          </div> 

		 
		  </ol>
          <hr>

 <div class="container signin">
    <p>Already have an account? <a href="managerlogin.php">Login</a>.</p>
  </div>
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>
  

</div>
</body>
		
</html>