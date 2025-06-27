<!DOCTYPE html>
<html>
   <head>
   <title>Transaction</title>
   
   <style>
   
       
.menu {
  overflow: hidden;
  background-color: black;
}

.menu a {
  float: left;
  color: White;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.menu a:hover {
  background-color: Red;
  color: black;
}

.menu2 {
  overflow: hidden;
  background-color: grey;
}

.menu2 a {
  float: left;
  color: White;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.menu2 a:hover {
  background-color: Red;
  color: black;
}
.menu2 a.menu3{
	background-color: Red;
  color: black;
}

body {
    background-color:#ffffff;
}

input {
  margin: 5px;
}

input[type="submit"]{
	width:200px;
	height:35px;
	margin-top:20px;
	border:none;
	background-color:#02a8b8;
	color:white;
	font-size:18px;
	border-radius:10px;
}

.input-group input{
	border-radius:5px;
	font-size:15px;
	padding:3px;
	border:1px solid #09b1a4;
}

   </style>
   
   </head>
  <body>
     <body style="background-image:url('auction4.jpg');">
	 <div class="menu">
         <a class="menu" href="#" >Home</a>
         <a class="menu" href="#" >Bid</a>
         <a class="menu" href="#" >Sell</a>
         <a class="menu" href="#" >My Profile</a>
         <a class="menu" href="#">Transaction</a>
         <a class="menu" href="#" >Contact Us</a>

     </div>

     <div class="menu2">

         <a class="menu2" href="#" >Transaction History</a>
         <a class="menu3" href="#" >Payment type</a>

     </div>
    <br><br>
	<center>
	<form action="" id="updateForm">
	    <div class="input-group">
        <label for="cardnumber">Card Number:</label>
        <input type="text" id="cardnumber" name="cardnumber"><br><br>
		<div class="error"></div>
		</div>
		
	<form action="" id="updateForm">
	    <div class="input-group">
        <label for="cardholdername">CardHolder Name:</label>
        <input type="text" id="cardholdername" name="cardholdername"><br><br>
		<div class="error"></div>
		</div>
	
	<form action="" id="updateForm">
	    <div class="input-group">
        <label for="country">Country:</label>
        <input type="text" id="country" name="country"><br><br>
		<div class="error"></div>
		</div>
		
	<form action="" id="updateForm">
	    <div class="input-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>
		<div class="error"></div>
		</div>
		
	<form action="" id="updateForm">
	    <div class="input-group">
        <label for="postalcode">Postal code:</label>
        <input type="text" id="postalcode" name="postalcode"><br><br>
		<div class="error"></div>
		</div>
		
	<input type=submit value="Add Payment Method"><br>
	
	</form>
	</center>
  </body>

</html>



