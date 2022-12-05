<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}



$PostName = $conn->real_escape_string($_POST['PostName']);
$Compnm = $conn->real_escape_string($_POST['Compnm']);
$Eligcr = $conn->real_escape_string($_POST['Eligcr']);
$location = $conn->real_escape_string($_POST['location']);
$salary = $conn->real_escape_string($_POST['salary']);
$Enable = $conn->real_escape_string($_POST['Enable']);



// Storing Session



$query = "INSERT INTO post(PostName,Compnm,Eligcr,location,salary,Enable) VALUES('" . $PostName . "','" . $Compnm. "','" . $Eligcr. "','" . $location. "','" . $salary. "','".$Enable."')";
$success = $conn->query($query);

if (!$success){

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	<link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
	
    

	<?php
	
}
else {
	echo "SUCCESS";
	header('Location: add_posts.php');
}

$conn->close();


?>