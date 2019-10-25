<?php

include('users.php');
$ans = new users;
$answer=$ans->answer($_POST);
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
<div class="w3-container w3-red">
<center></br></br>
	<?php
		$total_qus = $answer['right'] + $answer['wrong'] + $answer['no_answer'];
		$attempt_qus = $answer['right'] + $answer['wrong'] ;
	?>
	
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"></br></br>
  <h2>Result</h2><hr></br>
  <table class="table">
    <thead>
      <tr>
        <th class="w3-black">Total number of questions:</th>
        <th class="w3-black"><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr class="w3-light-grey">
        <td class="w3-text-black">Attempted Questions :</td>
        <td class="w3-text-black"><?php echo $attempt_qus ; ?></td>

      </tr>      
      <tr class="success">
        <td class="w3-text-black">Right Answers :</td>
        <td class="w3-text-black"><?php echo $answer['right']; ?></td>

      </tr>
      <tr class="danger">
        <td class="w3-text-black">Wrong Answers :</td>
        <td class="w3-text-black"><?php echo $answer['wrong']; ?></td>

      </tr>
      <tr class="info">
        <td class="w3-text-black">Not Answered :</td>
        <td class="w3-text-black"><?php echo $answer['no_answer']; ?></td>
  
      </tr>
      <tr class="warning">
        <td class="w3-text-black">Final Score :</td>
        <td class="w3-text-black"><?php 
		$percent =(( $answer['right']*100) / $total_qus) ;
		
		echo $percent."%";
		?></td>

      </tr>

    </tbody>
  </table>
  </br></br></br></br>
  </div>
  <div class="col-sm-2">

</div>
 	
   <div class="w3-bar-block">
<a href="login.php" onclick="w3_close()" class="w3-button  w3-black w3-hover-grey">LOGOUT</a>
</div>
	
</center>
<div class="w3-container w3-black w3-center  w3-padding-32">
    <h1 class="w3-margin w3-xlarge"><i>Don't Study untill you get it Right .</br>
 Study untill you can't get it Wrong !!</i></h1>
 </div>
</body>
</html>