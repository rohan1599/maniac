<?php
include('users.php');
$register = new users;
extract($_POST);


//$query = "insert into user values ('','$username','$email','$password')";


if(empty($username) || empty($email) || empty($password)){
	$register->url("signup.php?signup=empty");
	exit();
}
else{
	if(!preg_match("/^[a-zA-Z]*$/",$username)){
	$register->url("signup.php?signup=invalid");
	exit();
	}
	else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$register->url("signup.php?signup=invalidemail");
		exit();
		}
		else{
			$sql= "Select * from user where name='$username'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			if($resultCheck > 0){
			$register->url("signup.php?signup=usertaken?emailorusernamealreadyexists");
			exit();
			}
			else{
				//$hashedpwd = password_hash($password, PASSWORD_DEFAULT);
				$query="insert into user (name, email, password) values ('$username','$email','$password');";
				if($register->signup($query))
				{
				$register->url('login.php?run=success');
				}
			}
		}
	}
}	

?>



