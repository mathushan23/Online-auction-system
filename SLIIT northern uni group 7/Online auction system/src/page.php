<?php
include('connection.php');
error_reporting(0);


if(isset($_POST['submit']))
  {
    $item_name=$_POST['item_name'];
    $min_price=$_POST['min_price'];
    $end_time=$_POST['end_time'];
    $high_time=$_POST['high_time'];
    $bid=$_POST['bid'];
    $query=mysqli_query($con,"insert into data(item_name,min_price,end_time,high_time,bid) values('$item_name','$min_price','$end_time','$high_time','$bid')");
    if($query)
      {
        $msg="Information Saved Successfully ";
      }
    else{
      $error="Something went wrong . Please try again.";    
      } 
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css') }}">
    <!-- fontawesome  -->
    <link rel="stylesheet"
        href="{{ url('https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css') }}"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!-- Style-->
    <script src="{{ url('https://unpkg.com/feather-icons') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="style1.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Section 1: User Info -->
            <div class="navbar-brand">
                <div class="user-info">
                    <img src="team-1.jpg" alt="User Photo" class="user-photo">
                    <div class="user-details">
                        <span class="username">Username</span><br>
                        <button class="btn btn-secondary btn-sm signout-btn">Sign Out</button>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Section 2: Logo -->


            <!-- Section 3: Navigation Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <div style="display: block;">
                    <div class="navbar-brand text-center">
                        <img src="edu52Artboard 1.png" alt="Logo" class="logo">
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">bid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sell</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Section 4: Search Box -->
            <div class="navbar-brand">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <?php if($msg){ ?>
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
    </div>
    <?php } ?>

    <!---Error Message--->
    <?php if($error){ ?>
    <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
    </div>
    <?php } ?>

    <div class="content-wrapper">
        <div class="row mb-4">
            <div class="col-4 mb-4">
            </div>
            <div class="col-4 mb-4">
                <div class="box-2">
                    <img src="pics.png" alt="Auction Photo" class="auction-photo">
                </div>
                <form method="post">
                    <div class="form-group mb-3">
                        <label for="namesss mb-4">Item Name</label>
                        <input type="text" class="form-control" id="namesss" required name="item_name"
                            placeholder="Item Name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nameqq">Minimum price</label>
                        <input type="text" class="form-control" required id="nameqq" name="min_price"
                            placeholder="Minimum price">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nameefa">Ending Time</label>
                        <input type="time" class="form-control" required id="nameefa" name="end_time"
                            placeholder="Ending Time">
                    </div>
                    <div class="form-group mb-3">
                        <label for="namertr">Highed bid at this time</label>
                        <input type="text" class="form-control" required id="namertr" name="high_time"
                            placeholder="Highedt bid at this time">
                    </div>

                    <div class="form-group mb-3">
                        <label for="namesdsd">Enter your bid</label>
                        <input type="text" class="form-control" required id="namesdsd" name="bid"
                            placeholder="Enter your bid">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-3 mb-4">
                <br><br><br><br><br><br>
                <div class="box-1">
                    <h4 style="text-align: center;">Bidder's ranking</h4>
                    <center>
                        <p>#1 User3</p>
                        <p>#2 User78</p>
                        <p>#3 User34</p>
                        <br>
                        <br>
                        <br>
                        <p>#94 Me</p>


                    </center>
                </div>
            </div>

        </div>


        <footer>
            <div class="row">
                <div class="col-8 border">
                    <p>
                        The three values of the shorthand property can be specified in any order, and one or two of them
                        may be omitted.
                        The three values of the shorthand property can be specified in any order, and one or two of them
                        may be omitted.
                    </p>
                    <p>
                        The three values of the shorthand property can be specified in any order, and one or two of them
                        may be omitted.
                        The three values of the shorthand property can be specified in any order, and one or two of them
                        may be omitted.
                    </p>
                </div>
                <div class="col-4 border">
                    <p>External links :</p>
                    <p>Email : onlinesample@gmail.com</p>
                    <p>Contact no : 0771234567</p>
                </div>
            </div>
        </footer>
    </div>



</body>

</html>