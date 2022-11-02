<?php

session_start();

$serverName="localhost";
$userName="root";
$password="12342000";
$database="booksx";

$connectionstatue= "<u><b>connection to server statue: </b></u>";

$connection= new mysqli($serverName,$userName,$password,$database);

if($connection -> connect_error){
    die($connectionstatue." connection failed :("."<br>".$connection -> connect_error."<br>");
}

//else{ echo $connectionstatue." Connected succefully :)"."<br>";}

//retreive
$email=$_POST["email"];
$passwordd=$_POST["pass"];

if($_SERVER['REQUEST_METHOD']=="POST"){
    
	if(!empty($email) && !empty($passwordd)){
        $query = "SELECT * FROM userregisteration where email = '$email' limit 1";
		$result = mysqli_query($connection, $query);
		if($result){
            $loginstatue="<u><b>Log-in statue : </b></u>";
			if($result && mysqli_num_rows($result) > 0){
			    $user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $passwordd){
						//echo "$loginstatue Logged in succefully :) .<br>";
                        $_SESSION['userID']=$user_data['id'];
                        header("Location:index.php");
                        die;
					}
                    else{
                        echo"$loginstatue Error!!!! enter the right password ".$sql."<br>".$connection->error.":( . <br>";
                    }
				}
                else{ 
                    echo " $loginstatue Error!!! enter the right email or password ".$sql."<br>".$connection->error.":( . <br>";
                 }
			}
			
		else{ 
           echo " $loginstatue Error!! enter the right email or password ".$sql."<br>".$connection->error.":( . <br>";
        }
	}
    else{
		echo " $loginstatue Error! empty inputs ".$sql."<br>".$connection->error.":( . <br>";
	}
    
    }

$connection->clone;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books|X|Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/registeration.css">

    <!-- logos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
        .signin-image a:hover{
        color:tomato;
        }

        .form-title{
            color: rgb(49, 76, 101); 
        }

        .form-group{
            margin-top:45px;
        }

        #baack{
            font-size: 15px;
            background-color: lightgray;
            border: none;
            margin: -40px 0px 0px 100px;
            cursor: pointer;
            padding: 8px 15px;
        }

        #baack:hover{
            background-color: gray;
        }

    </style>
</head>
<body>

    
    <div class="main">

    

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/login.png" alt="sing up image"></figure>
                        <a href="userSignup.php" class="signup-image-link">Or create an account if you don't have one</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" minlength="8" maxlength="16" required/>
                            </div>
                            <!-- <div class="form-group" >
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login"  style="display:none;">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button onclick="document.location='startup.html'" id="baack">Back</button>
                <br><br>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <script>

        document.getElementById('agree-term').onclick = function() {

            var disabled = document.getElementById("signup").disabled;
            if (disabled) {
                document.getElementById("signup").disabled = false;
            }
            else {
                document.getElementById("signup").disabled = true;
            }
}

    </script>
    
</body>
</html>