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
        <form method="post" action="student_registered_success.php">
        <br style="clear: both">
		<h3 style= "font-family:Nova Square margin-bottom: 25px; text-align: left; font-size: 30px;  font-family:Nova Square"> Personal Details</h3>
		  
           <hr>
           <ol>
		   <br style="clear: both">
          

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter in capital letters" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="abc@xyz.com" required>
          </div>  
		  
		  <div class="form-group">
            <input type="date" class="form-control" id="birthdate" name="birthdate"  required>
          </div>

		  <label for="12p"><b> Graduation:</b></label>

          <div class="form-group">
            <input type="Number" class="form-control" id="gradyear" name="gradyear" placeholder="Graduation Ex. 2019"  required>
          </div>

		  <div class="form-group">
            <input type="decimal" class="form-control" id="gradgrade" name="gradgrade" placeholder="Out of 10"  required>
          </div>

		 <label for="12p"><b>12th Grades:</b></label>

		  <div class="form-group">
            <input type="decimal" class="form-control" id="grade12" name="grade12" placeholder="Ex.85.5"  required>
          </div>
		  
		 <label for="12p"><b>10th Grades:</b></label>
		 <div class="form-group">
            <input type="decimal" class="form-control" id="grade10" name="grade10" placeholder="Ex.85.5"  required>
          </div>

          
		  <div class="form-group">
            <input type="Number" class="form-control" id="contact" name="contact" placeholder="Contact Number" required>
          </div>  

	 
		  <div class="form-group">
            <input type="text" class="form-control" id="course" name="course" placeholder="Enter in Course Name" required autofocus="">
          </div>


      <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
          </div>

		  <div class="form-group">
            <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
      

      <label for="12p"><b>Upload RESUME</b></label>
      <div class="form-group">
             <input type="file"  id="filename" name="filename"  required >
      </div>

          
		  </ol>
          <hr>

    <!--<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>-->
<div class="container signin">
    <p>Already have an account? <a href="studentlogin.php">Login</a>.</p>
</div>
  
    <button type="submit" id="submit" name="insert" class="registerbtn">Register</button>
  </div>
  
</form>

  

	</div>
	</body>



		
</html>