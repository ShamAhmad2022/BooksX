<?php
session_start();


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

include("function.php");
$user_data = check_login($connection);

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
                    header("Location: buy&sell.php");
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

<html amp="" amp-version="2205120110001" class="i-amphtml-singledoc i-amphtml-standalone">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="./Bookstore Ebook Store Template – DepotAMP_files/logo1.png" type="image/x-icon">
  <meta name="description" content="Bookstore Ebook Template Store - Download now!">

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
  <title>Books|X| add Sell&buy book page</title>
  
<link rel="canonical" href="https://mobirise.com/extensions/depotamp/bookstore.html">
 <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


<style>
	
    .header3{
	background-image: url('images/bw.jpg');
	background-blend-mode: normal;
}
</style> 


</head>

<!-- bodyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy-->
<body class="amp-dark-mode amp-mode-mouse" style="opacity: 1; visibility: visible; animation: 0s ease 0s 1 normal none running none;"><amp-sidebar id="sidebar" class="cid-rslFJC9ynI i-amphtml-element i-amphtml-layout-nodisplay i-amphtml-overlay i-amphtml-scrollable i-amphtml-built" layout="nodisplay" side="right" hidden="" i-amphtml-layout="nodisplay" role="menu" tabindex="-1">
		<div class="builder-sidebar" id="builder-sidebar">
			<button on="tap:sidebar.close" class="close-sidebar">
				<span></span>
				<span></span>
			</button>
		
				
				<!-- NAVBAR ITEMS -->
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
						<a class="nav-link mbr-semibold link text-black display-7" href="index.php">Home</a>
					</li>
					<li class="nav-item dropdown open">
						<a class="nav-link mbr-semibold link text-black dropdown-toggle display-7" data-toggle="dropdown-submenu" aria-expanded="true">Services</a><div class="dropdown-menu"><a class="mbr-semibold text-black dropdown-item display-7" href="buy&sell.php" aria-expanded="false">buy/Sell</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/fabricstore.html" aria-expanded="false">Exchange</a></div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link link mbr-semibold text-black dropdown-toggle display-7" data-toggle="dropdown-submenu" aria-expanded="false">Live Demo Blocks</a>
						<div class="dropdown-menu">
							<a class="text-black mbr-semibold dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/features.html">Headers and Features</a>
							<a class="text-black mbr-semibold dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/gallery.html">Images and Gallery</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/shops.html" aria-expanded="false">Shops</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/pricing.html" aria-expanded="true">Pricing and Progress</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/clients.html" aria-expanded="false">Clients and Testimonials</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/forms.html" aria-expanded="false">Forms and Videos</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/socials.html" aria-expanded="false">Socials and Maps</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/footers.html" aria-expanded="false">Footers</a>
						</div>
					</li></ul>
				<!-- NAVBAR ITEMS END -->
				<!-- SOCIAL ICON -->
				
				<!-- SOCIAL ICON END -->
				<!-- SHOW BUTTON -->
				<div class="navbar-buttons mbr-section-btn"><a class="btn btn-md btn-black mbr-semibold display-7" href="https://my.mobirise.com/buy.php?p=70">Buy Now</a></div>
				<!-- SHOW BUTTON END -->
			</div>
	<button class="i-amphtml-screen-reader" tabindex="-1">Close the sidebar</button></amp-sidebar>

<!-- Google Analytics -->
<amp-analytics type="googleanalytics" id="analytics1" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" aria-hidden="true" style="width: 1px; height: 1px;" hidden="">
<script type="application/json">
{
  "vars": {
    "account": "UA-63126154-1"
  },
  "triggers": {
    "trackPageview": {
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
</amp-analytics>
<!-- /Google Analytics -->


  <section class="menu1 menu horizontal-menu cid-rslFJC9ynI" id="menu01-4n">
	
	<!-- <div class="menu-wrapper"> -->
	<nav class="navbar navbar-dropdown navbar-expand-lg navbar-fixed-top">
		<div class="menu-container container-fluid">
			<!-- SHOW LOGO -->
			<div class="navbar-brand">
				<div class="navbar-logo">
					<amp-img src="assets/images/logo1.png" layout="responsive" height="50" width="50" alt="Online Shop HTML Website" class="placeholder-loader i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="responsive" style="--loader-delay-offset:29ms !important;"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 100%;"></i-amphtml-sizer>
						<div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
						
					<img decoding="async" alt="Online Shop HTML Website" src="images/imagesyeah.png" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
				</div>
				<span class="navbar-caption-wrap"><a class="navbar-caption mbr-semibold text-black display-5" href="index.php">BOOKS|X|</a></span>
			</div>
			<!-- SHOW LOGO END -->
			<!-- COLLAPSED MENU -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<!-- NAVBAR ITEMS -->
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<li class="nav-item">
						<a class="nav-link mbr-semibold link text-black display-7" href="index.php">Home</a>
					</li>
					<li class="nav-item dropdown open">
						<a class="nav-link mbr-semibold link text-black dropdown-toggle display-7" data-toggle="dropdown-submenu" aria-expanded="true">Services</a><div class="dropdown-menu"><a class="mbr-semibold text-black dropdown-item display-7" href="buy&sell.php" aria-expanded="false">buy & Sell</a><a class="mbr-semibold text-black dropdown-item display-7" href="exchange.php" aria-expanded="false">Exchange</a></div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link link mbr-semibold text-black dropdown-toggle display-7" data-toggle="dropdown-submenu" aria-expanded="false">More</a>
						<div class="dropdown-menu">
							<a class="text-black mbr-semibold dropdown-item display-7" href="index.php#contactus">Contact-us</a>
							<a class="text-black mbr-semibold dropdown-item display-7" href="about.php">About</a>
						</div>
					</li></ul>
				<!-- NAVBAR ITEMS END -->
				<!-- SOCIAL ICON -->
				
				<!-- SOCIAL ICON END -->
				<!-- SHOW BUTTON ----------------------------------------------------------------------------------------->
				<div class="navbar-buttons mbr-section-btn">
					<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
						<li class="nav-item dropdown open"><a style="width: 50px; height: 50px; border-radius:50%; padding: 0; font-size: 20px; background-color: rgb(53, 53, 53); border: 1px solid rgb(53, 53, 53);" class="btn btn-md btn-black mbr-semibold display-7" href="https://my.mobirise.com/buy.php?p=70"><i class="fa-solid fa-user"></i></a><div class="dropdown-menu"><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/bookstore.html" aria-expanded="false">Profile</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/fabricstore.html" aria-expanded="false">log out</a></div>
						</li>
					
					</ul>
				
				</div>
				<!-- SHOW BUTTON END -->
			</div>
			<!-- COLLAPSED MENU END -->
			
			<button on="tap:sidebar.toggle" class="ampstart-btn hamburger">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</nav>
	<!-- AMP plug -->
	
	<!-- </div> -->
</section>


<section class="form2 cid-rsqn36k69L sec-bg abbckgr" id="form02-5b" style="background-image: url('images/addbooks.jpg');
       background-repeat: no-repeat;
       background-size: fixed;">
    
    <div class="mbr-overlay" id="contactus"></div>
    <div class="container">
        <div class="overlay"></div>
        <div class="title-block mbr-pb-4 align-center cont-text">
            <h3 class="mbr-section-title mbr-black mbr-semibold mbr-fonts-style display-2">Publish your book</h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style mbr-regular mbr-pt-2 display-7">Enter your book information :</h4>
        </div>
        <div class="mbr-row">

            <div class="mbr-col-lg-8 mbr-m-auto mbr-form" data-form-type="formoid">
                <form method="POST" class="mbr-form i-amphtml-form" data-form-title="Form Name" enctype="multipart/form-data"><input type="hidden" name="email" data-form-email="true" value="vMVKg8fYW5euf9d69c082X1604kEHTllMY0P//+jnDdo9FVm0JqfXEkkJ1L2U2+K5tGkjFFv16hIbksQTdtYBYMfjbQxKTOF3UlzYCQ8o7AW3qn/lNC+lZgXtJ2l7DBr">
                    <div class="mbr-row">
                        <div submit-success="" class="mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12">
                            <template data-form-alert="" type="amp-mustache"></template>
                        </div>
                        <div submit-error="" class="mbr-col-lg-12 mbr-col-md-12 mbr-col-sm-12">
                            <template data-form-alert="" type="amp-mustache"></template>
                        </div>
                    </div>
                    <div class="dragArea formmm">
                        <div class="abcl mbr-col mbr- mbr- mbr- field">
                            <input type="text" name="booksname" placeholder="Book's name" class="field-input display-7" required="required" id="">
							
                            <input type="text" name="authorsname" placeholder="Author's name" class="field-input display-7" required="required" id="">
                            
							<!-- loooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooool-->
							<?php echo $select; ?>
							
                            <input type="date" class="sebo" name="booksdate" placeholder="Book's name" class="field-input display-7" required="required" id="addbookname">

                            <input type="number" name="booksprice" placeholder="Book's price" class="field-input display-7" required="required" id="addbookname">

							<textarea class="sebo field-input display-7 no-bor" name="booksdesc" id="" cols="74" rows="3" placeholder="Book's description" style="font-size: 15px;color: rgb(95, 95, 95);padding-left: 13px;"></textarea>
                            <br><br>
                            <label for="" style="font-size: 20px; color: rgb(95, 95, 95);
                            padding-left: 10px;">Upload a Demo:</label>
                            <input type="file" name="booksdemo" placeholder="Author's name" class="field-input display-7" required="required" id="downboo">
                            <br><br>
                            <label for="" style="font-size: 20px; color: rgb(95, 95, 95);
                            padding-left: 10px;">Upload an image:</label>
                            <input type="file" name="booksimg" placeholder="Author's name" class="field-input display-7" required="required" id="downboo">
                        </div>
						<br><br>
                        <div class="mbr-col-auto"><button style="margin-left: 38%;" type="submit" class="btn btn-primary display-7">Submit</button></div>
                        <br><br><br>
                    </div>
                </form>
                <div><button id="cancelbtn" type="submit" class="btn btn-primary display-7" onclick="document.location='buy&sell.php'">Cancel</button></div>
                <br><br>
            </div>

        </div>
    </div>
</section>

<section class="footer2 cid-rsq5BIukZj" id="footer02-4r">
    
    
    <div class="footer-container container mbr-row-reverse">
        <div class="copyright mbr-flex mbr-jc-c">
            <p class="mbr-text mbr-fonts-style mbr-regular mbr-black align-center display-4">All Rights Reserved</p>
        </div>
        <div class="copyright mbr-flex mbr-jc-c">
            <p class="mbr-text mbr-fonts-style mbr-regular mbr-black align-center display-4">© Copyright <span>2022 — Books|X|</span></p>
        </div>
    </div>
</section>


  

<amp-lightbox-gallery layout="nodisplay" id="amp-lightbox-gallery" class="i-amphtml-element i-amphtml-layout-nodisplay i-amphtml-built" hidden="" i-amphtml-layout="nodisplay"><div class="i-amphtml-lbg"><div class="i-amphtml-lbg-mask"></div></div></amp-lightbox-gallery>



<script async="" src="./Bookstore Ebook Store Template – DepotAMP_files/v0.js.download"></script>
<script async="" custom-element="amp-sidebar" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-sidebar-0.1.js.download"></script>
<script async="" custom-template="amp-mustache" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-mustache-0.2.js.download"></script>
<script async="" custom-element="amp-form" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-form-0.1.js.download"></script>
<script async="" custom-element="amp-lightbox" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-lightbox-0.1.js.download"></script>
<script async="" custom-element="amp-bind" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-bind-0.1.js.download"></script>
<script async="" custom-element="amp-lightbox-gallery" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-lightbox-gallery-0.1.js.download"></script>
<script async="" custom-element="amp-iframe" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-iframe-0.1.js.download"></script>
<script async="" custom-element="amp-analytics" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-analytics-0.1.js.download"></script>


<script async="" custom-element="amp-auto-lightbox" data-script="amp-auto-lightbox" i-amphtml-inserted="" crossorigin="anonymous" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-auto-lightbox-0.1.js.download"></script><script async="" custom-element="amp-loader" data-script="amp-loader" i-amphtml-inserted="" crossorigin="anonymous" src="./Bookstore Ebook Store Template – DepotAMP_files/amp-loader-0.1.js.download"></script>


</body>
</html>