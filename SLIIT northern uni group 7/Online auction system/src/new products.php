

<?php 


echo "success";


?>





<!DOCTYPE html>
<html>
<head>

<title>My products</title>
 
<style>



.user{
	width: 10%; 
    height: auto; 
    display: block; 
    cursor: pointer;
    

	
}




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
  background-color: White;
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
  background-color: White;
  color: black;
}

.menu a.act1 {				/*identify the selected item in navigation bar*/
  background-color: red;
  color: white;
}
.menu2 a.act2 {
  background-color: red;
  color: white;
}


.productbox{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}



body{
	    background-color:#ececec;

}
.btn1,.btn2{
	background-color:blue;
	
}

	
}
.sen1 {
	color:red;
}

</style>
</head>
<body>
<script>


var remainingtime = new Date("nov 27, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var difference = remainingtime - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(difference / (1000 * 60 * 60 * 24));
  var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((difference % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (difference < 0) {
    
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
},1000);/*automatically change in 1000 milisecond( 1 second)*/





var remainingtime2 = new Date("nov 5, 2025 17:37:25").getTime();

// Update the count down every 1 second
var y = setInterval(function() {

  // Get today's date and time
  var now2 = new Date().getTime();
    
  // Find the distance between now and the count down date
  var difference2 = remainingtime2 - now2;
    
  // Time calculations for days, hours, minutes and seconds
  var days2 = Math.floor(difference2 / (1000 * 60 * 60 * 24));
  var hours2 = Math.floor((difference2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes2 = Math.floor((difference2 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds2 = Math.floor((difference2 % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer2").innerHTML = days2 + "d " + hours2 + "h "
  + minutes2 + "m " + seconds2 + "s ";
    
  // If the count down is over, write some text 
  if (difference2 < 0) {
    
    document.getElementById("timer2").innerHTML = "Item already sold";
  }
},1000);/*automatically change in 1000 milisecond( 1 second)*/


var remainingtime3 = new Date("nov 5, 2023 17:37:25").getTime();

// Update the count down every 1 second
var a = setInterval(function() {

  // Get today's date and time
  var now3 = new Date().getTime();
    
  // Find the distance between now and the count down date
  var difference3 = remainingtime2 - now2;
    
  // Time calculations for days, hours, minutes and seconds
  var days2 = Math.floor(difference3 / (1000 * 60 * 60 * 24));
  var hours2 = Math.floor((difference3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes2 = Math.floor((difference3 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds2 = Math.floor((difference3 % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer3").innerHTML = days3 + "d " + hours3 + "h "
  + minutes3 + "m " + seconds3 + "s ";
    
  // If the count down is over, write some text 
  if (difference3 < 0) {
    
    document.getElementById("timer3").innerHTML = "Item already sold";
  }
},1000);




</script>

<img class="user" src="image/user.jpeg" alt="user">

<input type="button" value="Log out" class="btn2" onclick="">
<div class="menu">
  <a class="menu" href="homepage.php" >Home</a></li>
  <a class="menu" href="page.php" >Bid</a></li>
  <a class="act1" href="add item.php" >Sell</a></li>
  <a class="menu" href="#" >My Profile</a></li>
  <a class="menu" href="payment_type.ph">Transaction</a></li>
  <a class="menu" href="contactus.php" >Contact Us</a></li>

</div>

<div class="menu2">

  <a class="act2" href="#" >My Products</a></li>
  <a class="menu2" href="add item.php" >Add Item</a></li>


</div>
	


<h1> Unsold Products</h1>
<br>
<div class="productbox">
<img  class="logo" src="image/vase.jpeg" alt="Antique Vase" width="200" height="200">

<br>



<h3>Product name : Antique Vase</h3>

<h3>Basic price:75000Lkr</h3> <br>

<h3> Remaining time:</h3> <h3 id="timer"> </h3>



<input type="button" value="Place a bid" class="btn1" onclick="">


</div>


<div class="productbox">
<img  class="logo" src="image/jewellery.jpeg" alt="Antique Vase" width="200" height="200">

<br>



<h3>Product name : Jewellery</h3>

<h3>Basic price:83000Lkr</h3> <br>

<h3> Remaining time:</h3> <h3 id="timer2"> </h3>



<input type="button" value="Place a bid" class="btn1" onclick="">


</div>

<br>

<h1>Sold Products<h1>




<div class="productbox">


<img  class="logo" src="image/table.jpeg" alt="Antique table" width="200" height="200">


<h5>Product name : Antique table</h5>

<h5>Basic price:60000Lkr</h5> <br>

 <h3 id="timer3"> </h3>


</div>






</body>
</html>



