<!DOCTYPE html>
<html>
<head>
<!-- add a title (a) -->
<title>home page</title>
<!-- Link to an external style sheet -->
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

.menu a.act1 {				/identify the selected item in navigation bar/
  background-color: red;
  color: white;
}
.menu2 a.act2 {
  background-color: red;
  color: white;
}


body{
	    background-color:White;

}
.btn1,.btn2{
	background-color:blue;
	
}

	
}
.sen1 {
	color:red;
}

/* 
    Author: Group03;
    Theme: Auction Order;
    version: 1.0;
*/

/* CSS for All */
*{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: #ff6b81;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}


/* CSSS for navbar section */

.logo{
    width: 10%;
    float: left;
}
.menu{
    line-height: 60px;
}
.menu ul{
    list-style-type: none;
}

.menu ul li{
    display: inline;
    padding: 1%;
    font-weight: bold;
}


/* CSS for Food SEarch Section */

.food-search{
    background-image: url(../images/bid2.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 7% 0;
}

.food-search input[type="search"]{
    width: 50%;
    padding: 1%;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
}


/* CSS for Categories */
.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}


/* CSS for Food Menu */
.food-menu{
    background-color: #ececec;
    padding: 4% 0;
}
.food-menu-box{
    width: 25%;
    margin: 2%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}

.au-menu-box{
    width: 92%;
    margin: 2%;
    padding: 2%;
    float: left;
    background-color: #ececec;
    border-radius: 15px;
}
.food-menu-img{
    width: 20%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}


/* CSS for Social */
.social ul{
    list-style-type: none;
}
.social ul li{
    display: inline;
    padding: 1%;
}

/* for Order Section */
.order{
    width: 50%;
    margin: 0 auto;
}
.input-responsive{
    width: 96%;
    padding: 1%;
    margin-bottom: 3%;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
}
.order-label{
    margin-bottom: 1%; 
    font-weight: bold;
}



/* CSS for Mobile Size or Smaller Screen */

@media only screen and (max-width:768px){
    .logo{
        width: 80%;
        float: none;
        margin: 1% auto;
    }

    .menu ul{
        text-align: center;
    }

    .food-search input[type="search"]{
        width: 90%;
        padding: 2%;
        margin-bottom: 3%;
    }

    .btn{
        width: 91%;
        padding: 2%;
    }

    .food-search{
        padding: 10% 0;
    }

    .categories{
        padding: 20% 0;
    }
    h2{
        margin-bottom: 10%;
    }
    .box-3{
        width: 100%;
        margin: 4% auto;
    }

    .food-menu{
        padding: 20% 0;
    }

    .food-menu-box{
        width: 90%;
        padding: 5%;
        margin-bottom: 5%;
    }
    .social{
        padding: 5% 0;
    }
    .order{
        width: 100%;
    }
}

</style>


<body>
<div class="menu">
  <a class="menu" href="#" >Home</a></li>
  <a class="menu" href="page.php" >Bid</a></li>
  <a class="menu" href="add item.php" >Sell</a></li>
  <a class="menu" href="">My Profile</a></li>
  <a class="menu" href="payment_type.php">Transaction</a></li>
  <a class="menu" href="contactus.php" >Contact Us</a></li>

</div>


<div class="menu2">

  <a class="menu2" href="new products.php" >My Products</a></li>
  <a class="menu2" href="add item.php" >Add Item</a></li>

		
</div>
<br>

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">
        
        <form action="food-search.html" method="POST">
            <input type="search" name="search" placeholder="Search for Auction.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->

<!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Auction Details</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
               <img src="image/vase.jpeg" alt="vase" class="img-responsive img-curve">

                <div class="food-menu-desc">
                    <h4>vase</h4>
                    <p class="food-price">LKR:2000</p>
                    <p class="food-detail">
                        low price good condition
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
               <img src="image/table.jpeg" alt="table" class="img-responsive img-curve"> 
                </div>

                <div class="food-menu-desc">
                    <h4>Table</h4>
                    <p class="food-price">LKR:15000</p>
                    <p class="food-detail">
                        low price good condition .
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                  <!--  <img src="images/menu-burger.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">-->
                </div>

                <div class="food-menu-desc">
                    <h4>Television</h4>
                    <p class="food-price">LKR:80000</p>
                    <p class="food-detail">
                        low price good condition.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                 <img src="image/jewellery.jpeg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Jewellary</h4>
                    <p class="food-price">LKR:200000</p>
                    <p class="food-detail">
                        Made in Jaffna
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                  
                </div>

                <div class="food-menu-desc">
                    <h4> Title</h4>
                    <p class="food-price">LKR:5000</p>
                    <p class="food-detail">
                        Good item 
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
               
                </div>

                <div class="food-menu-desc">
                    <h4> Steam </h4>
                    <p class="food-price">LKR:1500</p>
                    <p class="food-detail">
                         organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Auction</a>
        </p>
    </section>



     <!-- social Section Starts Here -->
     <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Auction <a href="#"></a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->


</body>
</html>