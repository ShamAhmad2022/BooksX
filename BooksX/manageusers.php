<?php

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

    $table="

    <table>
    <caption>Users</caption>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Country</th>
        <th>Gender</th>
        <th>transactions</th>
    </tr>

    ";

//retrieve
$sqlretrieve="SELECT * FROM userregisteration ";

$result= $connection->query($sqlretrieve);

if($result -> num_rows > 0){
    
    //echo"yayyyy";
    
    while ($row = $result -> fetch_assoc()) {

        $table="
        $table.
        <tr>
        <td>".$row["id"]."</td>
        <td>".$row["userName"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["password"]."</td>
        <td>".$row["country"]."</td>
        <td>".$row["gender"]."</td>
        <td>
   
        <form action='updateusers.php' method='GET'>
        <input type='text' name='idfromupdaterequest' value='".$row["id"]."' style='display: none;'>
        <input id='btne' type='submit' value='update' style='margin-left:16px;'>
        </form><br>

        <form action='deleteusers.php' method='post'>
        <input type='text' name='input1' value='".$row["id"]."' style='display: none;'>
        <input id='btnd' type='submit' value='Delete'>
        </form>
        
        </td>
        </tr>    
        ";
    

    }

    $table="$table.</table>";

}
else{
echo"Error!";
}



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

table{
    text-align: center;
    margin-left:42px ;
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

#btne{
    margin-right:15px ;
    background-color: rgb(79, 123, 161);
    border: none;
    color: black;
    padding:5px 15px;
    text-decoration: none;
}

#btne:hover{
    background-color: rgb(47, 85, 118);
}

#btnd{
    background-color: rgb(193, 78, 78);
    border: none;
    color: black;
    padding:5px 15px;
    text-decoration: none;
}

#btnd:hover{
    background-color: rgb(173, 42, 42);
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

p a{
    font-size: 20px;
    text-decoration: none;
    padding: 5px 10px;
    background-color: rgb(103, 167, 103);
}

p a:hover{
    background-color: rgb(49, 140, 49);
}



    </style>
</head>
<body>
    <body>
        
        <section class="content-section tour-section">
            <h2  id="tickets" class="section-head section-head-tour">Manage users</h2>

            <?php echo $table; ?>

            <br><br>
            <p>click here to add a user <a href="adminaddusers.php"> Add user</a></p>
            <br><br>
            <div class="back">
                <a href="adminindex.html">Back</a>
            </div>
            <br><br>
           
 </section>
    
</body>
</html>