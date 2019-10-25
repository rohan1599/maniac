<?php
include('users.php');
$email= $_SESSION["email"];
$profile = new users;
$profile->users_profile($email);
$profile ->cat_shows();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-red"></br>
<div class="container"></br>
  <h1 class="w3-text-black"><center>QUIZ MASTER || TEST YOUR SKILL</center></h1></br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">About Us</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active"></br>
		<h3 class="w3-text-black">HOME</h3></br>
		<center><button type="button" class="w3-button w3-large w3-black w3-hover-blue" data-toggle="tab" href="#select">Start Quiz</button></center>
	  
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<div id="select" class="tab-pane fade"></br></br>
		<label for="sel1" class="w3-text-black"> Choose your Subject :</label>
      	 
		<form action="question_show.php" method="post"> 
		<select class="form-control" id="sel1" name="cat">
      
		<option class="w3-text-black">Select Category</option>
		
		<?php		
		foreach($profile->cat as $category)
		{?>					
        <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
     
        <?php  
		}?></br>
		 
		</select></br></br>
		<center><input type="submit" value="submit" class="w3-button w3-large w3-black w3-hover-grey" /></center></br></br>
		</form>
	  
		</div>
		</div>
	  
    </div>
    <div id="menu1" class="tab-pane fade"></br>
      <h3 class="w3-text-black">Profile</h3></br>
      
	  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr >
        <th>Id</th>
        <th>Name</th>
		<th>Email</th>
      </tr>
    </thead>
    <tbody>
	<?php	
	foreach($profile->data as $prof)
	{?>
		<tr>
        <td class="w3-light-grey"><?php echo $prof['u_id']; ?></td>
        <td class="w3-light-grey"><?php echo $prof['name']; ?></td>
		<td class="w3-light-grey"><?php echo $prof['email']; ?></td>
		</tr>
    </tbody>
	<?php }?>      
  </table>
	  </br></br></br></br></br></br></br></br></br>
    </div>
    <div id="menu2" class="tab-pane fade"></br>
      <h2 class="w3-text-black">About Us</h2></br>
      <center><h4 >Quiz application in one form or the other is becoming a general requirement for most of the applications these days.</br> </br>
	  Be it Survey, mock test, preparation, self evaluation, gathering information, actual objective test or exam.</br>
	  This quiz application will help you to get through your need with minimal or no modification.</br></br>
	  The software manages the activity of quiz conduction in a school or college or any institution or even as the first test for the recruiters.</br>
	  The system is user friendly and the user will find it easy to answer the question. The Admin/employee will not find any difficult in calculating the total marks scored by the student. </br></br>
	  The system will thus reduce paperwork and all the information will be stored safely in the database.</br>
	  This project is helpful in saving the students details, calculating the marks scored by each student </br></br>
	  </h4></center>
    </div>

  </div>
</div>
</div>
	<div class="w3-container w3-black w3-center  w3-padding-32">
    <h1 class="w3-margin w3-xlarge"><i>Don't Study untill you get it Right .</br>
 Study untill you can't get it Wrong !!</i></h1>
</body>

</html>
