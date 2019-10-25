<?php
//include('users.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/main1.css">
    <style type="text/css">
        input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password]{
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

    </style>

	
	
</head>
<body>

    <div class="w3-container w3-red"></br>
	<center>
        <h1 class="w3-text-black">Sign Up</h1><hr>
        <h5>Please fill this form to create an account.</h5></br>
		
        <form name="newform" action="signup.sub.php" method="POST" class="w3-container w3-center">
            <div class="form-group">
                <label>Username:</label></br>
                <input type="text" name="username" class="w3-input w3-border w3-round w3-text-black" autocomplete="off" placeholder="Enter Username">
                
            </div>    
			<div class="form-group">
                <label>Email:</label></br>
                <input type="text" name="email" class="w3-input w3-border w3-round w3-text-black" autocomplete="off" placeholder="Enter Email">
                
            </div>    
            <div class="form-group">
                <label>Password:</label></br>
                <input type="password" name="password" class="w3-input w3-border w3-round w3-text-black" autocomplete="off" placeholder="Enter Password">
                
            </div>
            
            <div class="form-group">
                <input type="submit" class="w3-button w3-large w3-black w3-hover-green" value="Submit" class="btn" name="submit">&nbsp;&nbsp;&nbsp;
                <input type="reset" class="w3-button w3-large w3-black w3-hover-grey" value="Reset" >
            </div>
            <h5>Already have an account? <a href="login.php"><i class="w3-text-black"><u>Login here...</u></i></a></h5></br>
        </form>
    </div>  
<div class="w3-container w3-black w3-center  w3-padding-32">
    <h1 class="w3-margin w3-xlarge"><i>Don't Study untill you get it Right .</br>
 Study untill you can't get it Wrong !!</i></h1>
</div>	
</body>
</html>