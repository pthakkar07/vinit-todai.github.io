<?php
session_start();

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style>
.w3-tangerine {
  font-family: 'Tangerine', serif;
}
body
 {
     background-image: url(blaah.jpg);
     background-repeat: no-repeat;
        background-size: cover;
       height: 60%;
     
 }
    h1{
      background-color: blue;
    }
</style>
<body>
<!--
<div class="w3-bar w3-tangerine w3-border">
  <a href="Home Page.php" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black w3-xxlarge w3-text-black w3-hover-text-red">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black w3-xxlarge w3-text-black w3-hover-text-red">User sign up or register</a>
  <a href="restraunt_login_form.html" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black w3-xxlarge w3-text-black w3-hover-text-red">Restaurant sign up </a>
   <a href="restraunt_logout.php" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-black w3-xxlarge w3-text-black w3-hover-text-red">Sign Out </a>
</div>
-->
    
    <div class="w3-top w3-hide-small w3-tangerine">
  <div class="w3-bar w3-xlarge w3-red w3-opacity w3-hover-opacity-off w3-tangerine" id="myNavbar">
    <a href="Home Page.php" class="w3-bar-item w3-button w3-xxlarge w3-hover-grey">Home</a>
	
    <a href="add_item.html" class="w3-bar-item w3-button w3-xxlarge w3-hover-grey">Add Item</a>
      <a href="remove_item.html" class="w3-bar-item w3-button w3-xxlarge w3-hover-grey">Remove Item</a>
      <a href="restraunt_logout.php" class="w3-bar-item w3-button w3-xxlarge w3-hover-grey">Logout</a>
  </div>
</div>
    
    <br>
    <br>
    <br>
<div class="w3-container w3-tangerine w3-center w3-white-space w3-animate" style="font-size:400%;">
      <h1 class="w3-xxxlarge w3-white-space w3-text-yellow w3-center w3-tangerine">Lord of Connoiseurs welcomes<?php echo $_SESSION['login_restraunt'];?></h1> 
	  </div>
      <h2 class="w3-tangerine w3-jumbo w3-text-white">You are registered under id <?php echo $_SESSION['restraunt_id'];?></h2> 
	  
   </body>
   
</html>


