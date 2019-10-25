<?php

include('users.php');
$qus = new users;
$cat = $_POST['cat'];
$qus-> qus_show($cat);
$_SESSION['cat']=$cat;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Questions </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript">
  
  function countDown(secs,elem)
  {
	  var element= document.getElementById(elem);
	  element.innerHTML =secs;
	  if(secs<1){
		  clearTimeout(timer);
		  document.getElementById("form1").submit();
	  }
	  secs--;
	  var timer= setTimeout('countDown('+secs+',"'+elem+'")',1000);
  }
 </script>
 
 
 
</head>

<body >
<center>
<div class="w3-light-grey">
<div class="container">
  </br>
  <div class="col-sm-2"></div>
<h2><div id="status" style="float:right"> timeout</div>
	<script type="text/javascript">
		countDown(120,"status");
	</script></h2>
	<div class="col-sm-8"></br><div class="w3-red">	</br>
	<h1>Quiz Master</h1>
	</br>
	
	</div>
  <?php 
  $i=1;
  foreach($qus->qus as $quest )
  {?>
  <form action="answer.php" id="form1" method="post">	
  
  <table class="table">
	 
    <thead class="thead-dark" align="center">
      <tr>
        <th><?php echo $i; ?>    <?php echo $quest['ques']; ?></th>
      </tr>
    </thead>
    <tbody align="center">
	
	<?php if(isset($quest['option1'])){?>
      <tr>
        <td>  <input type="radio" value="0" name="<?php echo $quest['id']; ?>" />   <?php echo $quest['option1']; ?></td>
      </tr>
	<?php }?>
	
  	<?php if(isset($quest['option2'])){ ?>
	  <tr>
        <td>  <input type="radio" value="1" name="<?php echo $quest['id']; ?>"/>   <?php echo $quest['option2']; ?></td>
      </tr>
	<?php } ?>
	  
	<?php if(isset($quest['option3'])){ ?>
	  <tr>  	
       <td>  <input type="radio" value="2" name="<?php echo $quest['id']; ?>" />   <?php echo $quest['option3']; ?></td>
      </tr>
	<?php } ?>
	  
	<?php if(isset($quest['option4'])){ ?>
	  <tr>	
       <td>  <input type="radio" value="3" name="<?php echo $quest['id']; ?>" />   <?php echo $quest['option4']; ?></td>
      </tr>
    <?php } ?>
	  
	  <tr>	
       <td>  <input type="radio" value="no_attempt" checked="checked" style="display:none" name="<?php echo $quest['id']; ?>" /></td>
      </tr>
  	
	</tbody>
	</table>
  <?php $i++; }?></br>
	<input type="submit" value="Submit Quiz" class="w3-button w3-large w3-red w3-hover-black" /></br><br>
	</form>
	
  </div>
<div class="col-sm-2"></div>
<div class="col-sm-8">
</div>

</center>
<div class="w3-container w3-black w3-center  w3-padding-32">
    <h1 class="w3-margin w3-xlarge"><i>Don't Study untill you get it Right .</br>
 Study untill you can't get it Wrong !!</i></h1>
 </div>
</body>
</html>
