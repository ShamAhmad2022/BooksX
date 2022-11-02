<?php
session_start();


$iidd=$_POST["iidd"];

$serverName="localhost";
$userName="root";
$password="12342000";
$database="booksx";


$connection= new mysqli($serverName,$userName,$password,$database);

if($connection -> connect_error){
    die("connection failed! something is wrong: "."<br>".$connection -> connect_error.";(");
}

else{echo"yayyyyyyyy"."<br>";}

include("function.php");
$user_data = check_login($connection);

//retrieve
$sqlretrieve="SELECT * FROM sellbuybooks where id='$iidd' ";

$result= $connection->query($sqlretrieve);

if($result -> num_rows > 0){
    
    echo"yayyyy";
    
    $product=" ";
    

    while ($row = $result -> fetch_assoc()) {

        $product=$product."
        

        <div class='row' style='background-color:rgba(223, 221, 215); margin-top: 7.5%;'>
            <div class='col-lg-5 col-md-5 col-sm-6'>
                <div class='white-box text-center'><img src='".$row["img"]."' class='img-responsive'></div>
            </div>
        
        <div class='col-lg-7 col-md-7 col-sm-6'>
            <br><br><br>
            <h1 style='font-weight: bolder;'>".$row["bookName"]."</h1>
            <h3>".$row["authorName"]."</h3>
            <h6>".$row["date"]."</h6>
            <br>
            <h4 class='box-title mt-5' style='font-weight: bolder;'>Book description</h4>
            <p>".$row["bookDescreption"]."</p>
            <h2 class='mt-5'>
            <small class='text-success'>".$row["price"]." JD</small>
            </h2>
        
            <div class='download'><span id='cond'><a href='".$row["Demo"]."' download='".$row["bookName"]."'>Download the demo </a><i class='fa-solid fa-download'> </i></span></div>

            <button onclick='document.location='buy&sell.php' id='back'><a id='aback' href='buy&sell.php'>Back</a></button>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url('images/startupbackgroud.jpg');
            background-color: rgb(226, 228, 229,0.4);
            background-blend-mode: multiply;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #cond{
            display: inline-block;
            font-size: 20px;
            background-color: rgb(145, 51, 51);
            color: wheat;
            padding: 24px;
            margin: 30px 0px 0px 150px;
        }

        #cond:hover{
            background-color: rgb(198, 104, 104);
        }

        .download a{
            text-decoration: none;
            color: wheat;
        }

        #back{
            font-size: 17px;
            padding:7px 20px;
            margin:20px 0px 0px 540px;
        }

        #aback{
            color:gray;
            text-decoration: none;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!--<h3 class="card-title">Rounded Chair</h3>-->
                <!--<h6 class="card-subtitle">globe type chair for rest</h6>-->
                
        <?php echo $product; ?>



<!----------------------------------------------------------------------------------------------------->






<!-- 
<input type='text' name=''> -->

<!-- Product actions-->
<!-- <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
    <form action="bla2.php">
        <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='#'><input type="submit"></a></div>
    </form>
</div> -->




<!----------------------------------------------------------------------------------------------------->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>