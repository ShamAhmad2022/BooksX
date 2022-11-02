<?php

function check_login($connection){

    if(isset($_SESSION['userID'])){

        $userrrrid = $_SESSION['userID'];

        $query = "SELECT * FROM userregisteration where id='$userrrrid' limit 1";

		$result = mysqli_query($connection, $query);
        if($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;

        }

    }

    header("Location:startup.html");
    die;

}



?>