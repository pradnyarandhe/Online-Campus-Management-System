<?php
include('login_m.php');

if(isset($_SESSION['login_user1']))
{
header('Location: manager_panel.php'); // Redirecting To Home Page
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
				

             
           
      </div>
			
		</nav>
		

        <style>



.header6{
  text-align: center;
  color:white ;
  font-family:Verdana, sans-serif;


}


</style> 

		<script>
			function fun(){
				alert("Please contact admin if you have forgotten your password!");
			}
		</script>
	</head>
  <br>
    <br>
    <br>
 
    <div class ="header6" style="font-family:Nova Square">
        <h3> Hey Manager, <br> Kindly Login Here!</h3>
    </div>
    <br>
    <br>
    <br>

    <div class="container">
      
      <div class="col-md-5" style="float: none; margin: 0 auto;">
        <form method="post" action=""> <?php echo $error;  ?>
        <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus="" >
        </div>   
        
        <div class="form-group">
        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="" >
          </div> 


          <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
          </div>

        </div>
       <label style="margin-left: 5px;"><a href="managersignup.php">Create a new account.</a></label>

        </form>
          

      </body>
</html>