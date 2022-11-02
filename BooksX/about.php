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

else{ echo $connectionstatue." Connected succefully :)"."<br>";}


include("function.php");
$user_data = check_login($connection);


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
  
  <title>Books|X| about page</title>
  
<link rel="canonical" href="https://mobirise.com/extensions/depotamp/bookstore.html">
 <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="./Bookstore Ebook Store Template – DepotAMP_files/css" rel="stylesheet">
<link href="./Bookstore Ebook Store Template – DepotAMP_files/css(1)" rel="stylesheet">

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
                    <a class="nav-link mbr-semibold link text-black dropdown-toggle display-7" data-toggle="dropdown-submenu" aria-expanded="true">Services</a><div class="dropdown-menu"><a class="mbr-semibold text-black dropdown-item display-7" href="" aria-expanded="false">buy/Sell</a><a class="mbr-semibold text-black dropdown-item display-7" href="https://mobirise.com/extensions/depotamp/fabricstore.html" aria-expanded="false">Exchange</a></div>
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
            <span class="navbar-caption-wrap"><a class="navbar-caption mbr-semibold text-black display-5" href="4 booksxindex.html">BOOKS|X|</a></span>
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
                    <li class="nav-item dropdown open"><a style="width: 50px; height: 50px; border-radius:50%; padding: 0; font-size: 20px; background-color: rgb(53, 53, 53); border: 1px solid rgb(53, 53, 53);" class="btn btn-md btn-black mbr-semibold display-7" href="https://my.mobirise.com/buy.php?p=70"><i class="fa-solid fa-user"></i></a><div class="dropdown-menu"><a class="mbr-semibold text-black dropdown-item display-7" aria-expanded="false">Profile</a><a class="mbr-semibold text-black dropdown-item display-7" href="logoutuser.php" aria-expanded="false">log out</a></div>
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



<!-- <section class="header3 cid-rsq6I1iuyl" id="header03-5g">
    

    <div class="mbr-overlay"></div>
    <div class="container">

        <div class="wrapper">
            <div class="title-wrap mbr-pb-5 align-center">
            	<h1 class="mbr-section-subtitle mbr-regular mbr-white mbr-fonts-style mbr-pt-3 display-7">Ebook Store Template</h1>                

                <h2 class="mbr-section-title mbr-semibold mbr-white mbr-fonts-style display-1">BOOKS|X|</h2>
                <h4 class="mbr-section-subtitle mbr-regular mbr-white mbr-fonts-style mbr-pt-3 display-7">This place has all the features of a perfect book shop. Throughout 2 stylish as well as peaceful levels, the cozy shop features a broad yet taken into consideration range of modern fiction as well as non-fiction titles, along with a large selection of worldwide imports. Would you like to check out our Ebook Store Template?</h4>
            </div>
            <div class="mbr-row mbr-jc-c">
                <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 align-center md-pb">
                    <div class="card-wrapper mbr-flex mbr-column">
                         <div class="card-img align-center mbr-pb-2">
                            <div class="iconfont-wrapper">
                                <span class="amp-iconfont mobi-mbri-shopping-cart mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M21 19H5.2l-3-15H0V2h3.8l.8 4H23l-1.2 9H6.4l.4 2H21v2zM6 13h14l.7-5H5l1 5zm2 7c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg></span>
                            </div>
                        </div> 
                        <div class="card-box">
                            <h3 class="card-title mbr-bold mbr-white mbr-fonts-style display-7">Buy</h3>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 align-center md-pb">
                    <div class="card-wrapper mbr-flex mbr-column">
                        <div class="card-img align-center mbr-pb-2">
                            <div class="iconfont-wrapper">
                                <span class="amp-iconfont mobi-mbri-delivery mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M15 3L6 7.5v10.1l9 4.5 9-4.5V7.5L15 3zm5.8 5.1L15 11 9.2 8.1 15 5.2l5.8 2.9zM8 9.7l6 3v6.7l-6-3V9.7zm8 9.7v-6.7l6-3v6.7l-6 3zM0 7h4v2H0V7zm0 4h4v2H0v-2zm0 4h4v2H0v-2z"></path></svg></span>
                            </div>
                        </div> 
                        <div class="card-box">
                            <h3 class="card-title mbr-bold mbr-white mbr-fonts-style display-7">
                                Sell
                            </h3>
                        </div>

                        
                        
                        
                    </div>
                </div>
                <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 align-center last-child">
                    <div class="card-wrapper mbr-flex mbr-column">
                         <div class="card-img align-center mbr-pb-2">
                            <div class="iconfont-wrapper">
                                <span class="amp-iconfont mobi-mbri-users mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M19.7 11.7c.8-.8 1.3-2 1.3-3.2C21 6 19 4 16.5 4S12 6 12 8.5c-.4-.3-.9-.6-1.4-.8.8-.8 1.4-2 1.4-3.2C12 2 10 0 7.5 0S3 2 3 4.5c0 1.3.5 2.4 1.3 3.2C1.8 8.9 0 11.5 0 14.5V20h9v4h15v-5.5c0-3-1.8-5.6-4.3-6.8zM16.5 6C17.9 6 19 7.1 19 8.5S17.9 11 16.5 11 14 9.9 14 8.5 15.1 6 16.5 6zM5 4.5C5 3.1 6.1 2 7.5 2S10 3.1 10 4.5 8.9 7 7.5 7 5 5.9 5 4.5zm-3 10C2 11.5 4.5 9 7.5 9c2.1 0 4.1 1.3 5 3.2-2 1.2-3.3 3.4-3.5 5.8H2v-3.5zM22 22H11v-3.5c0-3 2.5-5.5 5.5-5.5s5.5 2.5 5.5 5.5V22z"></path></svg></span>
                            </div>
                        </div> 
                        <div class="card-box">
                            <h3 class="card-title mbr-bold mbr-white mbr-fonts-style display-7">
                                Exchange
                            </h3>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section> -->
<section>
<div class="about-container">
<div class="aboutcont">
    <div class="num1">
        <h1>What is Books|X|</h1>
        <p>Books eXchange is a place for readers to buy, sell, or exhange books. from novels and fictional books to poetry and science book you can find any type of books you are looking forward. so it's basically a place to encourage people to read.</p>
        <img src="images/about1.jpg" alt="about img1" width="550">
    </div>
</div>
<br><br><br>
<div class="aboutcont">
    <div class="num2">
        <h1>Why Books|X|</h1>
        <p>it's a simple and easy website gives the opportunity to buy, sell and exchange books. as well as the opportunity to read books online.<br>our vision is to encourage reading by making people share the books they have read with another and share the stories and experiments</p>
        <img src="images/about2.jpg" alt="about img2">
    </div>
</div>
</div>
</section>

<hr width="90%">
<!-- yeaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaah-->
<section class="testimonials1 cid-rsqn0AsQen" id="testimonials01-5a">
    
    
    <!--  -->
    <div class="container">
        <div class="title">
            <h3 class="mbr-section-title mbr-bold mbr-fonts-style display-2">Meet Books|X| team</h3>
            <h4 class="mbr-section-subtitle mbr-pt-2 mbr-regular mbr-fonts-style display-5">Have something to share with us? Get in
                touch with our team.</h4>
        </div>
        <div class="mbr-row mbr-jc-c mbr-pt-4">
            <div class="card mbr-col-sm-12 mbr-col-md-5 mbr-col-lg-4 md-pb">
                <div class="card-wrapper">
                    <div class="card-img img-with-overlay">
                        <amp-img class="placeholder-loader rounded i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" src="assets/images/face172.jpg" layout="responsive" width="82" height="82" alt="Ebook Store Website Design" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 100%;"></i-amphtml-sizer>
                            <div placeholder="" class="placeholder amp-hidden">
                                
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-pt-3 mbr-px-4 mbr-pb-3" style="font-size:10px; margin-top:-300px;">
                        <h3 class="card-title mbr-semibold mbr-fonts-style display-5">Sham Ahmad</h3>
                        <p class="card-text mbr-fonts-style mbr-pt-1 display-7">a Software engineer and a full stack developer, enjoied Books|X| team from the start and was responsiple of the back end parts</p>
                         <h4 class="card-subtitle mbr-bold mbr-fonts-style mbr-pt-3 display-7">sam2000sy@gmail.com</h4>
                        <h5 class="card-subtitle2 mbr-bold mbr-fonts-style display-7">+962797416764</h5><br><br><br><br>
                        <br><br><br><br><br><br><br><br>
                        
                    </div>
                </div>
            </div>
            <!--  -->
        
            <div class="card mbr-col-sm-12 mbr-col-md-5 mbr-col-lg-4 md-pb">
                <div class="card-wrapper">
                    <div class="card-img img-with-overlay">
                        <amp-img class="placeholder-loader rounded i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" src="assets/images/face273.jpg" layout="responsive" width="82" height="82" alt="Ebook Website Design Template" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 100%;"></i-amphtml-sizer>
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                       </amp-img>
                    </div>
                    <div class="card-box mbr-pt-3 mbr-px-4 mbr-pb-3" style="font-size:10px; margin-top:-300px;">
                        <h3 class="card-title mbr-semibold mbr-fonts-style display-5">Alex Geller</h3>
                        <p class="card-text mbr-fonts-style mbr-pt-1 display-7">a computer engineer and front end developer, enjoied Books|X| team from the start and was responsiple of the front end parts</p>
                        <h4 class="card-subtitle mbr-bold mbr-fonts-style mbr-pt-3 display-7">AlexGeller@gmail.com</h4>
                        <h5 class="card-subtitle2 mbr-bold mbr-fonts-style display-7">+962795425598</h5> 
                        
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="card mbr-col-sm-12 mbr-col-md-5 mbr-col-lg-4 ">
                <div class="card-wrapper">
                    <div class="card-img img-with-overlay">
                        <amp-img class="placeholder-loader rounded i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" src="assets/images/face374.jpg" layout="responsive" width="82" height="82" alt="Ebook Store Website" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 100%;"></i-amphtml-sizer>
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-pt-3 mbr-px-4 mbr-pb-3" style="font-size:10px; margin-top:-300px;">
                    <h3 class="card-title mbr-semibold mbr-fonts-style display-5">Trish aspir</h3>
                        <p class="card-text mbr-fonts-style mbr-pt-1 display-7">a back end developer, enjoied Books|X| team lately and was responsiple of the database part</p>
                        <h4 class="card-subtitle mbr-bold mbr-fonts-style mbr-pt-3 display-7">TrishAspir@gmail.com</h4>
                        <h5 class="card-subtitle2 mbr-bold mbr-fonts-style display-7">+962785235412</h5>     
                    </div>
                </div>
            </div>
            <!--  -->

            <div class="card mbr-col-sm-12 mbr-col-md-5 mbr-col-lg-4 last-child" style="display: none;">
                <div class="card-wrapper">
                    <div class="card-img img-with-overlay">
                        <amp-img class="placeholder-loader rounded i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" src="assets/images/face374.jpg" layout="responsive" width="82" height="82" alt="Ebook Store Website" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 100%;"></i-amphtml-sizer>
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                       </amp-img>
                    </div>
                    <div class="card-box mbr-pt-3 mbr-px-4 mbr-pb-3" style="font-size:10px; margin-top:-330px;">
                        <h3 class="card-title mbr-semibold mbr-fonts-style display-5">Trish aspir</h3>
                        <p class="card-text mbr-fonts-style mbr-pt-1 display-7">a back end developer, enjoied Books|X| team lately and was responsiple of the database part</p>
                        <h4 class="card-subtitle mbr-bold mbr-fonts-style mbr-pt-3 display-7">TrishAspir@gmail.com</h4>
                        <h5 class="card-subtitle2 mbr-bold mbr-fonts-style display-7">+962785235412</h5>                         
                    </div>
                </div>
            </div>
            <!--  -->
            
        </div>
    </div>
</section>


<section class="mbr-section content1 cid-rsqoyhM5Ed" id="social04-5n">
	<div class="container">
        <h3>Don't forget to follow us on: </h3>
		<div class="mbr-row mbr-jc-c" id="socialmedia">
			<div class="card mbr-col-sm-12 mbr-col-md-3 mbr-col-lg-2 md-pb">
				<a href=""><p class="mbr-text mbr-semibold mbr-fonts-style display-7">
					Twitter</p></a>
				<div class="iconfont-wrapper">
					<span class="amp-iconfont fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"></path></svg></span>
				</div>
			</div>
			<div class="card mbr-col-sm-12 mbr-col-md-3 mbr-col-lg-2 md-pb">
				<a href=""><p class="mbr-text mbr-fonts-style mbr-semibold display-7">
					Facebook</p></a>
				<div class="iconfont-wrapper">
					<span class="amp-iconfont fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"></path></svg></span>
				</div>
			</div>
			<div class="card mbr-col-sm-12 mbr-col-md-3 mbr-col-lg-2 md-pb">
				<a href=""><p class="mbr-text mbr-fonts-style mbr-semibold display-7">
					Instagram</p></a>
				<div class="iconfont-wrapper">
					<span class="amp-iconfont fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm138 0q0 164-115 279t-279 115-279-115-115-279 115-279 279-115 279 115 115 279zm108-410q0 38-27 65t-65 27-65-27-27-65 27-65 65-27 65 27 27 65zm-502-220q-7 0-76.5-.5t-105.5 0-96.5 3-103 10-71.5 18.5q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103-3 96.5 0 105.5.5 76.5-.5 76.5 0 105.5 3 96.5 10 103 18.5 71.5q20 50 58 88t88 58q29 11 71.5 18.5t103 10 96.5 3 105.5 0 76.5-.5 76.5.5 105.5 0 96.5-3 103-10 71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103 3-96.5 0-105.5-.5-76.5.5-76.5 0-105.5-3-96.5-10-103-18.5-71.5q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10-96.5-3-105.5 0-76.5.5zm768 630q0 229-5 317-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124t-124-322q-5-88-5-317t5-317q10-208 124-322t322-124q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"></path></svg></span>
				</div>
			</div>
			<div class="card mbr-col-sm-12 mbr-col-md-3 mbr-col-lg-2 md-pb">
				<a href=""><p class="mbr-text mbr-fonts-style mbr-semibold display-7">
					Linkedin</p></a>
				<div class="iconfont-wrapper">
					<span class="amp-iconfont fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"></path></svg></span>
				</div>
			</div>
		</div>
	</div>


</section>

<br><br>


<section class="footer2 cid-rsq5BIukZj" id="footer02-4r" style="background-color: rgb(77, 77, 77); color: rgb(200, 207, 212);">
    
    
    <div class="footer-container container mbr-row-reverse" style="color: rgb(200, 207, 212);">
        <div class="copyright mbr-flex mbr-jc-c">
            <p style="color: rgb(236, 236, 236);" class="mbr-text mbr-fonts-style mbr-regular mbr-black align-center display-4">All Rights Reserved</p>
        </div>
        <div class="copyright mbr-flex mbr-jc-c">
            <p style="color: rgb(236, 236, 236);"  class="mbr-text mbr-fonts-style mbr-regular mbr-black align-center display-4">© Copyright <span>2022 — Books|X|</span></p>
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