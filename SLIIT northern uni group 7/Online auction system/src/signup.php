<!DOCTYPE html>
<html>
    <head>
       <title>Sign up</title>
	 <style>
	  
body{
	background-color:#a9a9a9;
}
.signup-box{
	width:350px;
	height:800px;
	margin: auto;
	background-color:white;
	border-radius:30px;
}
h1{
	text-align:center;
	padding-top:15px;
}
h4{
	text-align:center;
}
form{
	width:300px;
	margin-left:20px;
}
form lable{
	margin-top:20px;
	font-size:15px;
}
form input{
	width:100%;
	padding:4px;
	border:1px solid gray;
	border-radius:6px;
}

.input-group input{
	border-radius:5px;
	font-size:15px;
	padding:3px;
	border:1px solid #09b1a4;
}

input[type="submit"]{
	width:320px;
	height:35px;
	margin-top:20px;
	border:none;
	background-color:#0000ff;
	color:white;
	font-size:18px;
}
p{
	text-align:center;
	padding-top:20px;
	font-size:15px;
}

.para2{
	text-align:center;
	color:black;
	font-size:15px;
	margin-top:-10px;
}




	
	 </style>
	</head>
	
	<body style="background-image:url('auction2.jpg');">
	<div class="signup-box">
	
	<h1 style="color:blue;">Sign Up</h1>
	<h4>It's free and only takes a minute</h4>
	<form action="" id="updateForm">
	
	    <div class="input-group">
	    <label for="firstname">First Name</label>
		<input type="text" id="firstname" name="firstname"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="lastname">Last Name</label>
		<input type="text" id="lastname" name="name"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="gender">Gender</label>
		
		<div class="input-group"><br>
	    <label for="male">Male</label>
		<input type="radio" id="Male" name="male">
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="female">Female</label>
		<input type="radio" id="female" name="female">
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="others">Others</label>
		<input type="radio" id="others" name="others">
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="email">Email</label>
		<input type="email" id="email" name="email"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
        <label for="DOB">DOB:</label>
        <input type="DOB" id="DOB" name="DOB"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="address">Address</label>
		<input type="text" id="address" name="address"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="mobilenumber">MobileNumber</label>
		<input type="text" id="mobilenumber" name="mobilenumber"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
	    <label for="country">Country</label>
		<input type="text" id="country" name="country"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
        <label for="password"> Password:</label>
        <input type="password" id="password" name="password"><br><br>
		<div class="error"></div>
		
		<div class="input-group">
        <label for="password"> Re-Enter the Password:</label>
        <input type="password" id="password" name="password"><br><br>
		<div class="error"></div>
		
		
		<input type="submit" value="Sign up">
		
	</form>	
	<p class="para2">By clicking the Sign up button,you agree to our<br>
	<a href="#">Terms and conditions</a> and <a href="#">Policy Privacy</a>
	</p>
	
	</div>
	</body>
</html>