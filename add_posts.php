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

            <div class="header18" style="text-align: center; padding: 2px 100px 100px 100px;">
      <div class="form-area" style="text-align: center; padding: 20px 80px 80px 80px; font-family:Verdana, sans-serif;">
        <form action="add_posts1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 30px; text-align: center; font-size: 25px;"> ADD NEW POST HERE </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="PostName" name="PostName" placeholder="Your Post Name" required="">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="Compnm" name="Compnm" placeholder="Company Name" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="Eligcr" name="Eligcr" placeholder="Criteria" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="location" name="loaction" placeholder="Job Location" required="">
           </div>
         <div class="form-group">
            <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="Enable" name="Enable" placeholder="enter yes here" required="">
          </div> 
  
          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD POST </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>