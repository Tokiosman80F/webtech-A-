<?php

include('../Data/data.php');
if(isset($_POST['Login'])){
	if(!empty($_POST['username'])){
		
		$username=$_POST['username'];
	}
	
	if(!empty($_POST['pass'])){
		
		$pass=$_POST['pass'];
	}
	
	$query = $db-> prepare("select * from users where username=? and pass=?");
	$query->execute(array($username,$pass));
	$nrows = $query->rowcount();
	if ($nrows>0){
		session_start();
		$_SESSION['name'] = "BA";
		$_SESSION['username'] =$username;
		header ("location: ../View/index.php");
	}
	else{
		echo "Worng username or password "."<br>"."<a href='../View/login.php' >try again</a>";
	}
}
?>
