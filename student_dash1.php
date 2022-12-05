<?php

include('session_s.php');

if(!isset($login_session)){
header('Location: studentlogin.php'); 
}




if (!$success){
	?>

<!DOCTYPE html>
	<html>
	<head>
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		
   


	<?php
}
else {
	header('Location: student_dash.php');
}

$conn->close();


?>





