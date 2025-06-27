
<?php
session_start();
 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "projectsql";
$conn = new mysqli($hostname, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("connection error" . $conn->connect_error);
}
 
$errors = []; // Initialize an array to store errors
 
if (isset($_POST['Login'])) {
    $username = $_POST["user"];
    $password = $_POST["pass"];
 
    $sql = "SELECT * FROM userdetails WHERE userId='$username'";
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
 
        // Verify password
        if ($row['password'] == $password
) 
		{
            // Password correct, set session
            $_SESSION['userId'] = $username;
			
			echo "Hello".$username;
	
                header('Location:homepage.php');
                exit();

        }
		else 
		{
            // Incorrect password
            $errors[] = 'Incorrect password.';
        }
		
    }

	else
	{
        // User not found
        $errors[] = 'User not found.';
    }
}


?>

<!DOCTYPE html>
<html>
<head>

<title>Login page</title>
 
<link rel="stylesheet" type="text/css" href="style/login.css">

<style>

body {
    display: flex;
    align-items: center;
    
   
   
    min-height: 100vh;
    background: grey;
    flex-direction: column;
  
}
.log {
    background-color: white;
    border-radius: 15px;
    padding: 10px 20px;
    width: 500px;
    text-align: center;
}

h1 {
    color: orange;
}

label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: grey;
    font-weight: bold;
}

input {
    display: block;
    width: 100%;
    
   
    box-sizing: border-box;
 
   
}

#btn4 {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    background-color: blue;
    width: 100%;
    font-size: 16px;
}



.sub {
    display: flex;
    justify-content: center;
}

 a:hover {
 
  color: red;
}


</style>






<script> 

function test()
	{
    
    var username = document.getElementById("user").value;
    var password = document.getElementById("pass").value;

    // Dummy authentication (replace with your authentication logic)
    if (username === "admin" && password === "password" ) {
        // Successful login, redirect to home page or perform other actions
        window.location.href = 'my products.html';
		document.write("login Successful");
    } else {
        // Display error message for invalid credentials
        document.getElementById("error").innerText = 'Invalid username or password';
    }



	}

</script>

</head>
<body>




<div class="log">
<h1> Ez Auction </h1>
<h2> Login </h2>

<form id="loginform" method="post" >
<fieldset>
<center>

<label for="username">Username</label><br>
<input type="text" id="user" name="user" required><br>
<label for="password">Password</label><br>
<input type="Password" id="pass" name="pass" required><br><br>

<p id="error"> </p>

<a class="frgtpw" href="#">Forget password?</a><br><br>

<div class="sub">

<a href="">  <button type="submit" id="btn4" onclick="test()" name="Login">Login</button> </a>

</div>
<p id="ab"> </p>



<h3> Not a member?<a class="signup" href="#">Signup</a></h3>

</div>

</fieldset>

   
		

</center>
</form>
</div>

</body>
</html>

	

