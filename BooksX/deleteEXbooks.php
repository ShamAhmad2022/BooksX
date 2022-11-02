<?php

$serverName="localhost";
$userName="root";
$password="12342000";
$database="booksx";


$connection= new mysqli($serverName,$userName,$password,$database);

if($connection -> connect_error){
    die("connection failed! something is wrong: "."<br>".$connection -> connect_error).":("."<br>";
}

else echo "Connected succefully :)"."<br>";


$idd=$_POST["input1"];


//Delete
$sqldelete="DELETE FROM exchangebooks WHERE id='$idd' ";

$result= $connection->query($sqldelete);

if($connection->multi_query($sqldelete)==true){
    header("Location:manageexchangebooks.php");
}
else{
echo"Error!".$sqldelete."<br>".$connection->error;
}


$connection->clone;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:gray ;">
   

</body>
</html>