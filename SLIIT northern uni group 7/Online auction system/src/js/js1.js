
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
