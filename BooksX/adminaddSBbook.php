<?php


$serverName="localhost";
$userName="root";
$password="12342000";
$database="booksx";

$connectionstatue= "<u><b>connection to server statue:<br><br><br></br></u>";

$connection= new mysqli($serverName,$userName,$password,$database);

if($connection -> connect_error){
    die($connectionstatue." connection failed :("."<br>".$connection -> connect_error."<br>");
}

//else{ echo $connectionstatue." Connected succefully :)"."<br>";}


$sqlretrieve="SELECT * FROM bookscategories ";

$result= $connection->query($sqlretrieve);

if($result -> num_rows > 0){
   
    $select="<select class='sebo' style='width: 290px;' name='bookscat'>";
	$select=$select."<option>"."--Book's category--"."</option>";

    while ($row = $result -> fetch_assoc()) {

		
		$select=$select."<option value='".$row["bcID"]."'>".$row["categoryName"]."</option>";

    }

    $select=$select."</select>";

}
else{
echo"Error!";
}


// $bookName=$_POST["booksname"];
// $authorName=$_POST["authorsname"];
// $bookCategory=$_POST["bookscat"];
// $date=$_POST["booksdate"];
// $price=$_POST["booksprice"];
// $bookDescreption=$_POST["booksdesc"];
// $Demo=$_POST["booksdemo"];
// $img=$_POST["booksimg"];


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
				$bookName=$_POST["booksname"];
				$authorName=$_POST["authorsname"];
				$bookCategory=$_POST["bookscat"];
				$date=$_POST["booksdate"];
				$price=$_POST["booksprice"];
				$bookDescreption=$_POST["booksdesc"];
				$Demo=$bdemoPath;
                $imgfile= $imgPath;
                
                $sql="INSERT INTO sellbuybooks (bookName,authorName,bookCategory,date,price,bookDescreption,Demo,img) VALUES ('$bookName','$authorName','$bookCategory','$date','$price','$bookDescreption','$Demo','$imgfile')";

				if($connection->multi_query($sql)==true){
                    header("Location: managesellbuybooks.php");
                }

                else {
                    echo  "<div style='background: rgb(60, 58, 34,0.7); width:1400px; height:160px; padding:25px 0px 0px 15px; margin:25 0px 0px 0px; font-weight: bolder;'>"."Error! ".$sql."<br>".$connection->error.":("."</div>";
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
    font-size: 20px;
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

input{
    width: 300px;
    margin-bottom: 20px;
}


    </style>
</head>
<body>
    <body>
        
        <section class="content-section tour-section">
            <h2  id="tickets" class="section-head section-head-tour">Add book</h2>



            <form method="POST" enctype="multipart/form-data">
                
            <input type="hidden" name="email" data-form-email="true" value="vMVKg8fYW5euf9d69c082X1604kEHTllMY0P//+jnDdo9FVm0JqfXEkkJ1L2U2+K5tGkjFFv16hIbksQTdtYBYMfjbQxKTOF3UlzYCQ8o7AW3qn/lNC+lZgXtJ2l7DBr">
                    <div class="mbr-row">
                        <div submit-success="" class="mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12">
                            <template data-form-alert="" type="amp-mustache"></template>
                        </div>
                        <div submit-error="" class="mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12">
                            <template data-form-alert="" type="amp-mustache"></template>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <input type="text" name="booksname" placeholder="Book's name" class="" required="required" id=""><br>
							
                            <input type="text" name="authorsname" placeholder="Author's name" class="" required="required" id=""><br>
                            
							<!-- loooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooool-->
							<?php echo $select; ?><br><br>
							
                            <input type="date" class="sebo" name="booksdate" placeholder="Book's name" class="" required="required" id="addbookname"><br>

                            <input type="number" name="booksprice" placeholder="Book's price" class="" required="required" id="addbookname"><br>

							<textarea class="sebo  no-bor" name="booksdesc" id="" cols="35" rows="3" placeholder="Book's description" style="font-size: 15px;color: rgb(95, 95, 95);padding-left: 13px;"></textarea>
                            <br><br>
                            <label for="" style="font-size: 20px; color: rgb(95, 95, 95);
                            padding-left: 10px;">Upload a Demo:</label>
                            <input type="file" name="booksdemo" placeholder="Author's name" class="" required="required" id="downboo">
                            <br><br>
                            <label for="" style="font-size: 20px; color: rgb(95, 95, 95);
                            padding-left: 10px;">Upload an image:</label>
                            <input type="file" name="booksimg" placeholder="Author's name" class="" required="required" id="downboo">
                        </div>
						<br><br>
                        <div class="mbr-col-auto"><button style="margin-left:-1%;" type="submit" class="btn btn-primary display-7">Submit</button></div>
                        <br><br><br>
                    </div>
                </form>

                <br><br>
            <div class="back">
                <a href="managesellbuybooks.php">Back</a>
            </div>
    <br><br>
                
        </section>

    </div>





    
</body>
</html>