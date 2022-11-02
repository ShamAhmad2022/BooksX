<?php
session_start();

$serverName="localhost";
$userName="root";
$password="12342000";
$database="booksx";

$connectionstatue= "<u><b>connection to server statue:</u>";

$connection= new mysqli($serverName,$userName,$password,$database);

if($connection -> connect_error){
    die($connectionstatue." connection failed :("."<br>".$connection -> connect_error."<br>");
}

//else{ echo $connectionstatue." Connected succefully :)"."<br>";}

include("function.php");
$user_data = check_login($connection);


//retrieve
$sqlretrieve="SELECT * FROM bookscategories ";

$result= $connection->query($sqlretrieve);

if($result -> num_rows > 0){
    
    //echo"yayyyy";
    
    $select="<select name='' class='form-control' id='bcate'> style='color:black;'";

    while ($row = $result -> fetch_assoc()) {

        $select=$select."<option value='".$row["bcID"]."'>".$row["categoryName"]."</option>";

    }

    $select=$select."</select>";

}
else{
echo"Error!";
}


//retrieve
$sqlretrieve="SELECT * FROM sellbuybooks ";

$result= $connection->query($sqlretrieve);

if($result -> num_rows > 0){
    
    //echo"yayyyy";
    
    $product=" ";

    while ($row = $result -> fetch_assoc()) {

        $product=$product."
            <div id='nocontent'>
                <div class='col mb-5 data' id='".$row["bookCategory"]."'>
                    <div class='card h-100'>
                        <!--Product image-->
                        <img class='card-img-top' src='".$row["img"]."' alt='product image' />
                        <!-- Product details-->
                        <div class='card-body p-4'>
                            <div class='text-center'>
                                <!-- Product name-->
                                <h5 class='fw-bolder'>".$row["bookName"]."</h5>
                                <!-- Product price-->
                                <span>".$row["price"]." JD</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                            <form action='booksbdetails.php' method='post' style='text-align: center;'>
                                <input type='text' name='iidd' value='".$row["id"]."' style='display: none;'>
                                <input type='submit' value='More details' class='btn btn-outline-dark mt-auto' class='text-center'><br>
                            </form>
                            <button style='padding: 5px 30px; background-color:rgb(86, 122, 159); margin-left:65px; border:none;'>Buy</button>
                        </div>
                    </div>
                </div>
            </div>


        ";

    }



}
else{
echo"Error!";
}


$connection->clone;



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Books|X| buy&sell page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/buysell.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>


.navy{
    background-color: rgb(255, 255, 255);
    padding: 9px;
    font-weight: bolder;
}

.navy ul{
    margin: 0;
    display: inline;
    padding: 50px;
}

.navy li{
    display: inline-block;
    margin-right: 1%;
    font-weight: bolder;
}

.navy a{
    font-family: 'Playfair Display', serif;
    display: inline-block;
    color: black;
    text-decoration: none;
    border-radius: 5%;
    font-size: 18px;
    font-weight: bolder;
}

.menuy{
    margin: 0px 0px 0px 40px;
}

.logo{
    float: left;
    
    color: gray;
}

.profiley{
    float: right;
    margin: 15px 7% 0px 0px;
}

.navy a:hover{
    color: rgba(0, 0, 0, 0.4);
}

.main-navy{
    text-align: center;
    border-bottom: 2px double rgba(255, 255, 255, 0.4);
}

.main-navy li{
    padding: 0.9% 1%;
}

.dropppdown{
    display: none;
}

.dropppdown2{
    display: none;
}

.dropppdown3{
    display: none;
}

.navy ul li:hover .dropppdown{
    display: block;
    position: absolute;
    margin-left:-90px;
    background-color: white;
}

.navy ul li:hover .dropppdown2{
    display: block;
    position: absolute;
    margin-left:-90px;
    background-color: white;
}

.navy ul li:hover .dropppdown3{
    display: block;
    position: absolute;
    margin-left:300px;
    background-color: white;
}

.dropppdown ul{

    display: block;
    

}

.dropppdown2 ul{

display: block;

}

.dropppdown3 ul{

display: block;

}

#prof{
    margin-left: 860%;
}
 
 </style>
    
    </head>
    <body>
    <nav class="navy main-navy">
            <div class="logo"><a href="index.php"><img src="images/imagesyeah.png" alt="">BooksX</a></div>
            <span class="menuy">
            <ul>              
                <li><a href="index.php">Home</a></li>

                <li><a>Services <i style="font-weight:lighter;" class="fa-solid fa-caret-down"></i></a>

                <div class="dropppdown">
                    <ul>
                    <li><a href="buy&sell.php">buy&sell</a></li>
                    <li><a href="exchange.php">Exchange</a>
                    </ul>
                </div>

                </li>
                
                <li>
                    <a>More <i class="fa-solid fa-caret-down"></i></a>
                    <div class="dropppdown2">
                    <ul>
                    <li><a href="index.php#contactus">contact-us</a></li>
                    <li><a href="about.php">about</a>
                    </ul>
                </div>

                </li>

                <li>
                <a id="prof" ><img src="images/profileyeah.jpg" alt=""></a>
                <div class="dropppdown3">
                    <ul>
                    <li><a>profile</a></li>
                    <li><a href="logoutuser.php">Log-out</a>
                    </ul>
                </div>
                </li>
            </ul>
        </span>
           
        </nav>

        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav> -->
        <!-- Header-->
        <header class="bg-dark py-5 backg" style="background-image:url('images/books3-1.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Books|X|</h1>
                    <h4 style="font-size: 30px;" class="display-4 fw-bolder">Buy & Sell</h4>
                    <br>
                    <p class="lead fw-normal text-white-50 mb-0" style="color:white;">Here you can buy or sell books, every book has a demo so you can check on it first before you buy anything</p>
                </div>
            </div>
        </header>

        <!-- POST -->
        <section class="PBS">
            <div class="publishbooks">
                <p>Click here to Publish your book:</p>
                <br>
                <button onclick="document.location='addsbBooks.php'">Publish Book</button>
            </div>
        </section>
        <br>
        <hr width="90%">

        <!-- Section-->
        <section class="py-5">
            <div class="selector">
                <p>Select your type:</p>
                <form action="">

                <?php echo $select; ?>

                </form>
            </div>
            <br>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                <?php echo $product; ?>
            
                </div>
            </div>

        


        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">All Rights Reserved</p>
                <p class="m-0 text-center text-white">&copy; Copyright 2022 — Books|X|</p>
        
            </div>
            
        </footer>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
        $(document).ready(function(){
            $("#bcate").on('change',function(){
                $(".data").hide();
                $("#"+$(this).val()).fadeIn(700);
            }) 
        })
        </script>


        <!-- <script>

        var content= document.getElementById('nocontent');
        

        </script> -->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
