<?php
include('login_s.php'); 

if(isset($_SESSION['login_user2'])){
header("location: jobs.php");  
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
		</nav>



        <style>




.header6{
  text-align: center;
  color:white ;
  font-family:Verdana, sans-serif;


}


</style> 
<br>
    <br>
    <br>
    <br>
<body>
<div class ="header6">
        <h3 style="font-family:Nova Square"> Hey Student, <br> Kindly Login Here!</h3>
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
       <label ><a href="student_register.php"> <h5 style="font-family:Nova Square">Create a new account. </h5></a></label>

        </form>
          


</body>
</html>
          
