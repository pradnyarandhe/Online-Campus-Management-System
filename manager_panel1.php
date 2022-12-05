<?php

include('session_m.php');

if(!isset($login_session))
{
header('Location: manager`login.php'); 
}

if (!$success){
	?>

<!DOCTYPE html>
	<html>
	<head>
  <
		
   
    

  

      </div>
    </nav>
    
	
	</body>
	</html>

	<?php
}
else {
	header('Location: managerpanel.php');
}

$conn->close();


?>