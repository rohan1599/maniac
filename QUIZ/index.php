<?php 
include('users.php');
$cat =new users;
$category=$cat->cat_shows();

?>

<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>



</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="foot3.jpg" style="width:100%;" class="w3-round"><br><br>
    <h3><b>Quiz Master</b></h3>
    <p class="w3-text-grey"><h5>Test Your Skill<h5></p>
  </div>
  <div class="w3-bar-block">
    <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding ">LOGIN AS USER</a> 
     
    <a href="adminlogin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">LOGOUT</a>
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="index">
    <div class="w3-container">
    <h1><b>DASHBOARD</b></h1>
    </div>
  </header>
  
  
  
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-red">
    
	<hr class="w3-opacity">
    <hr class="w3-opacity">
    <form action="add_quiz.php" method="post">
      <div class="w3-section">
        <label class="w3-text-black">Question :</label>
        <input class="w3-input w3-border" type="text" name="qus" required placeholder="Enter Question" autocomplete="off">
      </div>
      <div class="w3-section">
        <label class="w3-text-black">Option 1 :</label>
        <input class="w3-input w3-border" type="text" name="op1" required placeholder="1st Option" autocomplete="off">
      </div>
      <div class="w3-section">
        <label class="w3-text-black">Option 2 :</label>
        <input class="w3-input w3-border" type="text" name="op2" required placeholder="2nd Option" autocomplete="off">
      </div>
	  <div class="w3-section">
        <label class="w3-text-black">Option 3 :</label>
        <input class="w3-input w3-border" type="text" name="op3" required placeholder="2nd Option" autocomplete="off">
	  <div class="w3-section">
        <label class="w3-text-black">Option 4 :</label>
        <input class="w3-input w3-border" type="text" name="op4" required placeholder="4th Option" autocomplete="off">
      </div>
	  <div class="w3-section">
        <label class="w3-text-black">Correct Answer :</label>
        <input class="w3-input w3-border" type="text" name="ans" required placeholder="Correct Option" autocomplete="off">
      </div>
	  <div class="w3-section">
        <label class="w3-text-black">Category :</label>
        <select class="w3-input w3-border" type="text" name="cat" >
		
		<option value= "" > choose category</option>
		<?php
		foreach($category as $c)
		{
			echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
		}
		?>
		
		</select>
      </div>
      <center><button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Submit</button></center>
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-grey">
  <div class="w3-row-padding">
    <center><b></b></center>
  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24"><b>Don't  Study  untill  you  get  it  Right .<br>
Study  untill  you  can't  get  it  Wrong !!</b></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
