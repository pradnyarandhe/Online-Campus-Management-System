<?php
session_start();
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
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
             
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="adminlogin.php"> Admin Login</a></li>
             
            </ul>
            </li>
          </ul>
      </div>
			</div>
		</nav>
		
		<script>
			function fun(){
				alert("Please contact admin if you have forgotten your password!");
			}
		</script>
	</head>
	<body>

		
		<div class="well text-center" id="main">
		<h1 align="center" style="font-family:Nova Square" >CAMPUS RECRUITMENT MANAGEMENT SYSTEM </h1>
  			<img class="img-responsive " src="Images/image1.jpg" height="400" width="700">
  		</div>
		
	<div class="well container-fluid text-center" id="frm1">
		<form>
		<p style="font-family:Nova Square">STUDENT LOGIN </p>
		<p style="font-family:Nova Square">Already have an account? <a href="studentlogin.php">Login</a>.</p>
		<p style="font-family:Nova Square">Create an account <a href="student_register.php">Sign Up</a>.</p>

         
		</form>
</div>
	
		
	</body>
	
</html>
