<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='BA'){
		header("location: ../View/Blogin.php");
	}
	else{
	$username= $_SESSION['username'];
	
	}
	include('../Data/data.php');
?>
<!DOCTYPE html>
<html>
<title>Home Page</title>
<body>

<h1> Banking App</h1>


</body>
</html