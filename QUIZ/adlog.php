<?php
session_start();

if(isset($_POST['submit'])){
	include('users.php');
	$ad_login = new users;

	$email = $_POST['email']; 
	$password = $_POST['password'];
	
	if(empty($email) || empty($password)){
		header('Location:adminlogin.php?login=empty');
		exit();
	}
	/*else{
		$sql= "Select * from admin where email='$email' and password='$password' ;";
		mysqli_query($conn,$sql);
		header("Location:index.php?adminlogin=success");
		exit();
	}
	
}
	else{
		header('Location:login.php?login=error');
		exit();
	}
		*/
		
		else{
		if($ad_login->ad_login($email, $password))
		{
		$ad_login->url("index.php??login=succesfull");
		}
		else
		{
		$ad_login->url("adminlogin.php?run=wrongusernameorpassword");
	}
		}
		}
		
?>
