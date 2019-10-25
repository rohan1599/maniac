<?php

include('users.php');
$signin = new users;
extract($_POST);


	
	if(empty($email) || empty($password)){
		header('Location:login.php?login=empty');
		exit();
		}
	else{
		if($signin->signin($email, $password))
		{
		$signin->url("home.php");
		}
		else
		{
		$signin->url("login.php?run=checkemailorpassword");
	}
}




?>