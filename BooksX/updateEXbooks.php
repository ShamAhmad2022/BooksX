
<?php

$serverName="localhost";
$userName="root";
$password="12342000";
$database="booksx";

$connection= new mysqli($serverName,$userName,$password,$database);

if($connection -> connect_error){
    die("connection failed! something is wrong: ".$connection -> connect_error).":("."<br>";
}

//else echo "Connected succefully :)"."<br>";


$useridfromupdatepage=$_GET["idfromupdaterequest"];



$sqlretrieve="SELECT * FROM bookscategories ";

$result= $connection->query($sqlretrieve);

if($result -> num_rows > 0){
   
    $select="<select class='sebo' style='width: 630px;' name='bookscat'>";
	$select=$select."<option>"."--Book's category--"."</option>";

    while ($row = $result -> fetch_assoc()) {

		
		$select=$select."<option value='".$row["bcID"]."'>".$row["categoryName"]."</option>";

    }

    $select=$select."</select>";

}
else{
echo"Error!";
}



//retrieve
$sqlretrieve="SELECT * FROM exchangebooks where id='$useridfromupdatepage' ";

$result= $connection->query($sqlretrieve);

if($result -> num_rows > 0){
    
    //echo"yayyyy hfft";
    
    $table="
    <table>
    <caption>Exchange books</caption>
    <tr>
        <th>ID</th>
        <th>bookName</th>
        <th>authorName</th>
        <th>bookCategory</th>
        <th>date</th>
        <th>bookDescreption	</th>
        <th>Book</th>
        <th>img</th>
    </tr>

    ";

    $form="
    <div class='mbr-col-lg-8 mbr-m-auto mbr-form' data-form-type='formoid'>
    <form method='POST' class='mbr-form i-amphtml-form' data-form-title='Form Name' enctype='multipart/form-data'>
    ";    

    while ($row = $result -> fetch_assoc()) {

        $table="
        $table.
        <tr>
        <td>".$row["id"]."</td>
        <td>".$row["bookName"]."</td>
        <td>".$row["authorName"]."</td>
        <td>".$row["bookCategory"]."</td>
        <td>".$row["date"]."</td>
        <td>".$row["bookDescreption"]."</td>
        <td>".$row["Demo"]."</td>
        <td>".$row["img"]."</td>
        </tr>    
        ";


        $form="$form.
        
        <div class='dragArea formmm'>
        <div class='abcl mbr-col mbr- mbr- mbr- field'>
        <input type='number' value='".$row["id"]."' class='field-input display-7' required='required' id='' name='booksID'><br> <br> 
        
        <input type='text' name='booksname' value='".$row["bookName"]."' class='field-input display-7' required='required' id=''><br><br>
            
            <input type='text' name='authorsname' value='".$row["authorName"]."' class='field-input display-7' required='required' id=''><br><br>
            
            $select<br><br>
            
            <input type='date' class='sebo' name='booksdate' value='".$row["date"]."' class='field-input display-7' required='required' id='addbookname'><br><br>



            <textarea class='sebo field-input display-7 no-bor' placeholder='".$row["bookDescreption"]."' name='booksdesc' id='' cols='74' rows='3' value='' style='font-size: 15px;color: rgb(95, 95, 95);padding-left: 13px;'></textarea><br>
            <br><br>
            <label for='' style='font-size: 20px; color: rgb(95, 95, 95);
            padding-left: 10px;'>Upload a Book:</label>
            <input type='file' name='booksdemo' value='' class='field-input display-7' required='required' id='downboo'>
            <br><br>
            <label for='' style='font-size: 20px; color: rgb(95, 95, 95);
            padding-left: 10px;'>Upload an image:</label>
            <input type='file' name='booksimg' value='' class='field-input display-7' required='required' id='downboo'>
        </div>
        <br><br>
        <input type='submit' value='Update'>
<br><br>
</div>


        ";
        
            
    }

    $table="$table.</table>";

    $form="$form.
    </div>
    </form>    
     ";

}
else{
echo"Error!";
}

if($_SERVER['REQUEST_METHOD']=="POST"){

    
	$imgName=$_FILES['booksimg']['name'];
    $imgSize=$_FILES['booksimg']['size'];
    $imgtmpName=$_FILES['booksimg']['tmp_name'];
    $imgError=$_FILES['booksimg']['error'];

	
	$bdemo=$_FILES['booksdemo']['name'];
	$bdemosize=$_FILES['booksdemo']['size'];
    $bdemotmpName=$_FILES['booksdemo']['tmp_name'];
    $bdemoerror=$_FILES['booksdemo']['error'];

	if($imgError === 0){
        if($imgSize < 50000000000000000){
            $imgExt=pathinfo($imgName, PATHINFO_EXTENSION);
            $imgExtLoc=strtolower($imgExt);

			$bdemoExt=pathinfo($bdemo, PATHINFO_EXTENSION);
            $bdemoExtLoc=strtolower($bdemoExt);

            $allowdExts=array("png","jpeg","jpg");

            if(in_array($imgExtLoc,$allowdExts)){
                $newimgname= uniqid("IMG-",true).'.'.$imgExtLoc;
                $imgPath='uploads/'.$newimgname;
                move_uploaded_file($imgtmpName,$imgPath);//move img

				$newbdemo= uniqid("file-",true).'.'.$bdemoExtLoc;
                $bdemoPath='uploads/'.$newbdemo;
                move_uploaded_file($bdemotmpName,$bdemoPath);//move demo

                //insert to database
                $bookID=$_POST["booksID"];
				$bookName=$_POST["booksname"];
				$authorName=$_POST["authorsname"];
				$bookCategory=$_POST["bookscat"];
				$date=$_POST["booksdate"];
				$bookDescreption=$_POST["booksdesc"];
				$Demo=$bdemoPath;
                $imgfile= $imgPath;


$sqlupdate="UPDATE exchangebooks SET id='$bookID', bookName='$bookName', authorName='$authorName', bookCategory='$bookCategory', date='$date', bookDescreption='$bookDescreption' , Demo='$Demo', img='$imgfile' WHERE id='$useridfromupdatepage' ";

if($connection->multi_query($sqlupdate)==TRUE){
    
//    echo "<script>alert('updated!');</script>";
header("Location:manageexchangebooks.php");
die;

}

else {
    echo"Error###### ".$sqlupdate."<br>".$connection->error.":(";
}
}
}
else{
    // $em="ERROR! file type ";
    // header("Location: upload.html?error=$em");
    //echo"error!";
}
}
else{
// $em="ERROR!! Large file ";
// header("Location: upload.html?error=$em");
//echo"error!!";
}
}
else{
// $em="ERROR!!! error";
// header("Location: upload.html?error=$em");
//echo"error!!!";
}

$connection->clone;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&family=Playfair+Display:wght@500&display=swap');

*{
    box-sizing: border-box;
    color: rgb(90, 90, 90);
    font-size: 14px;
}


body{
    background-color: rgb(138, 133, 109);
}

html, body{
    margin: 0;
    padding: 0;
}
.content-section{
    margin: 4%;
} 

 .container{
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1.5em;
}  


table{
    text-align: center;
    margin-left:-150px;
}

table, th, td{
border : 1.5px solid black;
border-collapse: collapse;
}

td{
    padding: 20px 36px;
}

th{
    background-color: rgb(202, 202, 202);
}

.section-head{
    font-family: 'Playfair Display', serif;
    font-size: 50px;
    text-align: center;
}

.about-band-img{
    float: right;
    margin: 0px 4%;
    border-radius: 50% 50% 50% 50%;
    /* width: 500px;
    height: 500px; */
    width: 500px;
}

.btn{
    text-align: center;
    vertical-align: middle;
    padding: .67em;
    cursor: pointer;
}

.btn-header{
    margin: .5em 30% 1em 30%;
    border: 2px solid rgb(33, 77, 135);
    background-color: rgb(148, 148, 148,0.19);
    border-radius: 0;
    font-size: 1.5em;
    padding: 0px 2em;
}

.btn-header:hover{
    background-color: rgb(148, 148, 148,0.4);
}

.btn-play{
    display: block;
    margin: 0 auto;
    color: rgb(33, 77, 135);
    font-size: 3em;
    border-radius: 50% 50% 50% 50%;
    padding: 0;
    width: 150px;
    height: 150px;
    padding-left: 10px;
}

.tour-section{
    text-align: center;
    background-color: rgb(235, 235, 235);
    border-radius: 3%;

}

.section-head-tour{
    margin-bottom: 7%;
}

.tour-row{
    border-bottom: 3px solid white;
    padding-bottom: 1em;
    margin-bottom: 1em;
}

.tour-row:last-child{
    border-bottom: none;
}

.tour-item{
    display: inline-block;
    padding-right: .5em;
}

.tour-date{
    font-weight: bolder;
    width: 15%;
}

.tour-city{
    width: 13%;
}

.tour-arena{
    width: 39%;
}

.tour-btn{
    max-width: 19%;
}

.btn-pri{
    background-color: rgb(33, 77, 135);
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-pri:hover{
    background-color: rgb(20, 48, 84);
}

.btn-first{
    margin: .5em 30% 1em 31%;
    padding: 20px 120px;
}

.btn-first a{
    text-decoration: none;
    font-size: 50px;
    font-family: 'Playfair Display', serif;
}

    </style>
</head>
<body>
    <body>
        
        <section class="content-section tour-section">
            <h2  id="tickets" class="section-head section-head-tour">Manage Exchange books</h2>

            <style>
        .signup-image a:hover{
            color: tomato;
        }

        .signup-form h2{
            color: rgb(49, 98, 101); 
        }    
        
        .form-group-gender {
            margin-top: 20px;
            margin-bottom: 20px;
            border-bottom: none;
            display: flex;
        }

        .form-group-gender input{
            margin-right: -60px;
        }

        .form-group-gender label{
            margin-left: -180px;
        }

        .form-group select{
            width: 500px;
            margin:18px 0px 18px 0px;
            border: 1px solid rgb(188, 188, 188);
            border-radius:2%;
            font-family: 'Poppins';
        }
        .form-group input{
            width: 500px;
            margin-bottom: 20px;
        }

        .back a{
    font-size: 20px;
    text-decoration: none;
    background-color: gray;
    color:white;
    padding: 5px 10px;
}

.back a:hover{
    background-color:rgb(181, 181, 181);
}

    </style>
</head>
<body>

    
    <div class="main">

        <!-- Sign up form -->
        <section class="signup" style="margin:-40px 0px 0px 0px;">
            <div class="container">
                 <h2 class="form-title"  style="font-size: 33px; text-decoration:underline;">Update a book:</h2><br><br>
                 
                 <?php echo $table;?><br><br><br>
                 

                 <?php echo $form;?>

            </div>

            
        </section>

    </div>

    <br><br>
            <div class="back">
                <a href="manageexchangebooks.php">Back</a>
            </div>
            <br><br>
 </section>


</body>
</html>