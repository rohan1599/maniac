<?php
include('users.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
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
        <h1 class="w3-text-black"> Admin Login</h1><hr>
        </br>
        <form action="adlog.php" method="post" class="w3-container w3-center">
            <div class="form-group ">
                <label>Email:</label></br>
                <input type="text" name="email" class="w3-input w3-border w3-round w3-text-black" autocomplete="off" placeholder="Enter Email">
                
            </div>    
            <div class="form-group">
                <label>Password:</label></br>
                <input type="password" name="password" class="w3-input w3-border w3-round w3-text-black" autocomplete="off" placeholder="Enter Password"></br>
                
            </div>
            <div class="form-group"></br>
                <input type="submit" class="w3-button w3-large w3-black w3-hover-green" name="submit" value="Login">&nbsp;&nbsp;&nbsp;
				<input type="reset" class="w3-button w3-large w3-black w3-hover-grey" value="Reset" >
            </div>
			<h5>Jump back to user mode <a href="login.php"><i class="w3-text-black"><u>User Login...</u></i></a></h5></br>
            
        </form>
    </div> 
<div class="w3-container w3-black w3-center  w3-padding-32">
    <h1 class="w3-margin w3-xlarge"><i>Don't Study untill you get it Right .</br>
 Study untill you can't get it Wrong !!</i></h1>
</div>	
</body>
</html>