<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project3";
$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNo = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $sql = "UPDATE udetails SET firstName='$firstName', lastName='$lastName', email='$email', mobileNumber='$contactNo', address='$address' WHERE password='$password'";

    if ($conn->query($sql) === TRUE) {
        echo "Update successful";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>





<!DOCTYPE html>
<html>
<head> 
    <!-- add a title  -->
    <title>Update Account Information</title>
	<!-- Link to an external style sheet -->
	<link rel="stylesheet" type="text/css" href="style/new 1.css">
	<script src="updateinfo.js" > </script>
	
		
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

.menu a.menu2{
	background-color: Red;
  color: black;
}
body {
    background-color:#ffffee;
}
fieldset {
  background-color:#ffffff;
}

legend {
  background-color: #008b8b;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
input[type="submit"]{
	width:200px;
	height:30px;
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

.error{
	color:red;
}
.input-group.success input{
	border-color:green;
}
.input-group.error input{
	border-color:red;
}

</style>
	
	
</head>
<body>
    

<div class="menu">
  <a class="menu" href="#" >Home</a>
  <a class="menu" href="#" >Bid</a>
  <a class="menu" href="#" >Sell</a>
  <a class="menu2" href="#" >My Profile</a>
  <a class="menu" href="#">Transaction</a>
  <a class="menu" href="#" >Contact Us</a>

</div>

    <fieldset>
	<center>
    <legend><h1>Update Account Information</h1></legend>
	
	<div class="container">
    <form action="" id="updateForm">
	    <div class="input-group">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName"><br><br>
		<div class="error"></div>
		</div>
		
		<div class="input-group">
		<label for="LastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName"><br><br>
		<div class="error"></div>
		</div>
        
		<div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
		<div class="error"></div>
		</div>
		
		
		<div class="input-group">
		<label for="address">Address:</label>
        <input type="address" id="address" name="address"><br><br>
		<div class="error"></div>
		</div>
		
		<div class="input-group">
		<label for="country">Mobile number</label>
        <input type="number" id="mobileNumber" name="mobileNumber"><br><br>
		<div class="error"></div>
		</div>
		
		<div class="input-group">
        <label for="password">Enter Password:</label>
        <input type="password" id="password" name="password"><br>
		<div class="error"></div>
		</div>
        
      <button type="sunmit" name="submit">Update information </button>
	
    </form>
	</div>
	</center>
    </fieldset>
	
	<script>
	     const updateForm = document.getElementById('updateForm');
const FirstName = document.getElementById('FirstName');
const LastName = document.getElementById('LastName');
const Email = document.getElementById('Email');
const ContactNo = document.getElementById('ContactNo');
const Address = document.getElementById('Address');
const Country = document.getElementById('Country');
const EnterPassword = document.getElementById('EnterPassword');

updateForm.addEventListener('submit', (e) => {
    e.preventDefault();
    validateInputs();
});

function validateInputs() {
    const FirstNameVal = FirstName.value.trim();
    const LastNameVal = LastName.value.trim();
    const EmailVal = Email.value.trim();
    const ContactNoVal = ContactNo.value.trim();
    const AddressVal = Address.value.trim();
    const CountryVal = Country.value.trim();
    const EnterPasswordVal = EnterPassword.value.trim();

    if (FirstNameVal === '') {
        setError(FirstName, 'First Name is required');
    } else {
        setSuccess(FirstName);
    }
    
    if (EmailVal === '') {
        setError(Email, 'Email is required');
    } else if (!validateEmail(EmailVal)) {
        setError(Email, 'Please enter a valid email');
    } else {
        setSuccess(Email);
    }
}

function setError(element, message) {
    const inputGroup = element.parentElement;
    const errorElement = inputGroup.getElementById('.error');

    errorElement.innerText = message;
    inputGroup.classList.add('error');
    inputGroup.classList.remove('success');
}

function setSuccess(element) {
    const inputGroup = element.parentElement;
    const errorElement = inputGroup.getElementById('error');

    errorElement.innerText = '';
    inputGroup.classList.add('success');
    inputGroup.classList.remove('error');
}

const validateEmail = (email) => {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
};

	</script>
	
</body>
</html>



