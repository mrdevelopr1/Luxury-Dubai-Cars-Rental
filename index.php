<?php
include 'php/db_connect.php';
//$getdata=mysqli_query($conn, "SELECT * FROM `car_listings`"); 
$getdata = mysqli_query($conn, "SELECT * FROM `car_listings` ORDER BY sno DESC");
$getdatacurrency = mysqli_query($conn, "SELECT * FROM `currency` ");
$rowcurrency = mysqli_fetch_assoc($getdatacurrency);
?>

<html lang="en">

<head>
    <title>Luxury Dubai Cars Rental | Book Best Cars and Yacht Rental in Dubai | Best Rental Service in UAE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Luxury dubai cars rental offers the finest luxury car and yacht rental in Dubai. Our prices are competitive, and our service is exceptional. Book best luxury dubai cars and yacht rental in Dubai. Best Renatl Service in UAE." name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <meta name="google-site-verification" content="EONddx2JJKk9l1btMbfc6Ouc3zf87sJBl9RHhYX7UuU" />
    <!-- CSS Files
    ================================================== -->

    <!-- Add the currencyapi-js library via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SYEN0NGNJS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SYEN0NGNJS');
</script>
    <style>
    header.header-light {
    background: #ffffff !important;}
    /*fon family */
    body{
        font-family:"open sans", Tahoma, Arial, helvetica, sans-serif !important;
    }
    h1,h2,h3,h4,h5,h6{
        font-family:"open sans", Tahoma, Arial, helvetica, sans-serif !important;
    }
    p{
        font-family:"open sans", Tahoma, Arial, helvetica, sans-serif !important;
    }
    /*end*/
    /*styky status*/
    .sticky-div {
    position: fixed;
    bottom: 20px; /* Adjust the distance from the bottom as needed */
    right: 20px; /* Adjust the distance from the right as needed */
    background-color: #f0f0f0; /* Example background color */
    padding: 10px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Optional: adds a shadow effect */
    font-size:10px;
}

/*end*/
        #join:hover #inner_p {
            color: #199e1c !important;
        }

        @font-face {
            font-family: myFonts;
            src: url(Azonix.otf);
        }

        /* google translator*/
        .goog-te-gadget .goog-te-combo {
            margin: 4px 0;
            padding: 3px;
            background-color: black;
            color: white;
        }

        #goog-gt-tt,
        .goog-te-balloon-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        .VIpgJd-ZVi9od-ORHb-OEVmcd {
            display: none !important;
        }

        @import "https://unpkg.com/open-props";
        @import "https://unpkg.com/open-props/normalize.min.css";

        
        .hov .row .col {
            display: flex;
            align-items: center;
        }

        #main_parent {
            position: relative;
        }

        #main_parent:hover #myDiv {
            display: block;
            opacity: 1;
            visibility: visible;
            width: 1000px;
            margin-left: -350px;
            box-shadow: 1px 1px 9px rgba(164, 164, 186, 0.3);
        }

         #myDiv {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            width: 100%;
            background-color: #ffffff;
            border-radius: 5px;
            z-index: 10;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out;
            padding: 20px;
        }

        .hov:hover h6 {
            color: #78ca5c;
            /* Change the color of the specific h6 child element */
        }

        .hov:hover {

            transform: scale(1.1);
            /* Scale the box to 110% of its original size */
            transition: transform 0.3s ease-in-out;
            /* Add a smooth transition effect */

        }

        #myDiv p {
            font-size: smaller;
            text-transform: uppercase;
        }

        #myDiv h6 {
            font-size: small;
            text-transform: uppercase;
        }


        /*map image */
        #map_section div div div img {
            max-width: 404px;
        }

        /*map heading */
        #map_section div h4 {
            padding-bottom: 20px !important;
            padding-left: 0;
            padding-right: 0;
        }
@media only screen and (max-width: 360px) {
    #topbar {
        display: block;
    }
}
        

        /*Car brands */
        .brand img {
            transition: transform 0.3s ease-in-out;

        }

        .brande:hover img {
            background-color: #78ca5c;
            color: #78ca5c;
            /* Adjust the scale factor as needed for the desired zoom level */
            border-radius: 60%;
        }

        .brande p {
            color: black;

        }

        .brand:hover img {
            transform: scale(1.1);
            /* Adjust the scale factor as needed for the desired zoom level */
        }

        .brand:hover {
            background-color: #78ca5c;
            border-radius: 10px;
        }

        #curen-drop option {
            background-color: white;
            /* Set background color for options */
            color: black;

        }

        #cars-mobile {
            display: none;
        }

        #cars-mobile-btn {
            display: none;
        }

        #car-descktop {
            display: flex;
        }
        #car-slider-image{
            width:100%;
            height:auto;
        }
        #image_height{
            object-fit: contain !important;
            opacity: 0.8;
        }
        .bi-plus-circle-dotted:hover{
            background-color:green;
        }
        #top-ico{
            border:1px solid white;
            border-radius:50%;
            padding:5px;
            margin-left:45%;
            margin-right:35%;
            
            }
        .bi-plus-circle-dotted{
            
            border-radius:50%;
            
        }
        #jarallax-container-0{
            background: black !important;
        }

        .imagepop{
            width:100%;
        }
        .hov a div div img{
            width:100%;
        }
        #yat2{
            display:none;
        }
        #yat{
                display:inline;
            }
         #section-heroo  {
             
                 background-image: url(images/background/banner-desktop.jpg);
                margin-top:120px;
                color:white;
                background-size: cover !important;
                background-position: center;
                
                
            }
            #first_hed{
                color:white;
            }
    
     
        /* 767 mobile styling */
        @media (max-width: 767px) {
            .stories-container {
  max-width: 350px !important;
  margin: 24px auto;
  position: relative;
}
.stories-full-view .content {
  height: 90vh;
  width: 100%;
  max-width: 350px;
  position: relative;
}
            .back_top_d{
                display:none;
            }
            

            h2 {

                font-size: 30px !important;
            }
            header{
            background: white !important;
        }
            header.header-mobile.menu-open{
            background: white !important;
            
        }

            #first_hed {
                font-size: 20px !important;
                margin-top: 100px;
            }
            #first_P{
                font-size: 12px !important;
            }

            #myDiv {
                width: 0;
                /* Initially hide the div */
                height: 0;
                overflow: hidden;

                transition: width 0.5s, height 0.5s !important;
                background: unset;
                /* Add transition for smooth animation */
            }

            #main_parent:hover #myDiv {
                display: none;
                visibility: none;
                width: auto;
                margin-left: auto;
                box-shadow: none;
            }

            #main_parent.clicked #myDiv {
                width: auto;
                /* Adjust the width for mobile devices */
                height: auto;
                margin-left: 0;
                /* Remove negative margin for mobile devices */
                /* Remove box shadow for mobile devices */
                display: block;
                position: inherit;
                overflow: hidden;
                left: 0;
                background: unset;
            }

            #main_parent {
                margin: auto;
                padding: auto;
            }

            .hov.col {
                flex-basis: 50%;
                /* Force each section to take full width on mobile */
                margin-bottom: 10px;
                /* Add spacing between sections */
                max-width: 100%;
            }

            #join {
                display: none;
            }

            #serch {
                padding-top: 4px;
                padding-right: 20%;
                padding-bottom: 4px;
                padding-left: 20%;
            }

            #image_height {
                max-height: auto !important;
            }

            #section-heroo {
                min-height: 0px !important;
                 margin-top:20px;
                 padding-bottom:0px;
            }

            .brand img {
                width: 100%;
            }

            #map_section {
                padding: 20px;
            }

            #map_section div div div img {
                max-width: 304px !important;
            }
            .hov a div div img{
                width: 50px;
        }
            

            #section-brands {
                margin-top: 30px !important;
            }

            #section-brands div div div p {
                font-size: 14px;
            }

            #section-brands div div div span {
                font-size: 12px;

            }

            #section-cars {
                margin-top: -90px !important;
            }

            #slider-cars {
                padding: 0px 10px 50px 10px !important;
                margin-top: -60px !important;
            }

            .brande a p {
                font-size: 12px;
                font-weight: bold;
            }

            #section-heroo {
                
                background-image: url(images/background/banner-mobile-new-mobile.jpg);
                background-size: 100% !important;
                background-position: center;
            }
            #content section:first-of-type {
                padding-top:0px !important;
            }

            #first-section-cars div div div p {
                font-size: 12px;


            }

            #first-section-cars {
                margin-bottom: -200px;
            }

            /*#first-section-cars div p {
                font-size: 12px;
                padding-left: 20px;
                padding-right: 20px;
                margin-bottom: -40px;

            }*/

            #second-section-cars {
                margin-bottom: -200px;
            }

           /* #second-section-cars div p {
                font-size: 12px;
                padding-left: 20px;
                padding-right: 20px;
                margin-bottom: -40px;
            }*/

            #third-section-cars {
                margin-bottom: -150px;
            }

            #third-section-cars div p {
                font-size: 12px;
                
                margin-bottom: 10px;
            }

            #four-section-cars {
                margin-bottom: -120px;
            }

            /*#four-section-cars div p {
                font-size: 12px;
                padding-left: 20px;
                padding-right: 20px;
                margin-bottom: -40px;
            }*/

            #cars-mobile {
                display: flex;
            }

            #cars-mobile-btn {
                display: block;
            }

            #car-descktop {
                display: none;
            }
        }
        /*Stories*/
        

.stories-container {
  max-width: 900px;
  margin: 24px auto;
  position: relative;
}

.stories-container .previous-btn,
.stories-container .next-btn,
.stories-full-view .previous-btn,
.stories-full-view .next-btn {
  width: 30px;
  position: absolute;
  z-index: 2;
  top: 50%;
  transform: translateY(-50%);
  background: #444;
  color: #fff;
  border-radius: 50%;
  padding: 10px;
  display: flex;
  cursor: pointer;
}

.stories-container .previous-btn,
.stories-container .next-btn {
  opacity: 0;
  pointer-events: none;
  transition: all 400ms ease;
}

.stories-container .previous-btn.active,
.stories-container .next-btn.active {
  opacity: 1;
  pointer-events: auto;
}

.stories-container .previous-btn,
.stories-full-view .previous-btn {
  left: 8px;
}

.stories-container .next-btn,
.stories-full-view .next-btn {
  right: 8px;
}

.stories-container .story {
  height: 75px;
  width: 75px;
  flex-shrink: 0;
  overflow: hidden;
  position: relative;
  cursor: pointer;
  background: linear-gradient(white, white) padding-box,
              linear-gradient(45deg, #fdf497, #fd5949,  #d6249f) border-box;
  border-radius: 50em;
  border: 4px solid transparent;
  
  
}

.stories-container .story img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.stories-container .story video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.stories-container .stories {
  display: flex;
  gap: 25px;
}

.stories-container .content {
  overflow-x: scroll;
  scrollbar-width: none;
  scroll-behavior: smooth;
}

.stories-container .content::-webkit-scrollbar {
  display: none;
}

.stories-container .author {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 8px 16px;
  font-size: 12px;
  font-family: "Roboto", sans-serif;
  font-weight: bold;
  color: #fff;
  background: linear-gradient(transparent, #222 130%);
}

.stories-full-view {
  position: fixed;
  inset: 0;
  z-index: 20000;
  background: rgba(0, 0, 0, 0.9);
  display: none;
  place-items: center;
}

.stories-full-view.active {
  display: grid;
}

.stories-full-view .close-btn {
  position: absolute;
  top: 16px;
  left: 16px;
  width: 30px;
  background: #444;
  color: #fff;
  border-radius: 50%;
  padding: 10px;
  display: flex;
  z-index: 20;
  cursor: pointer;
}

.stories-full-view .content {
  height: 90vh;
  width: 100%;
  max-width: 450px;
  position: relative;
}

.stories-full-view .story {
  height: 100%;
  text-align: center;
}

.stories-full-view .story img {
  height: 100%;
  width: 100%;
  aspect-ratio: 10/16;
  object-fit: cover;
  border-radius: 16px;
}
.stories-full-view .story video {
  height: 100%;
  width: 100%;
  aspect-ratio: 10/16;
  object-fit: cover;
  border-radius: 16px;
}

.stories-full-view .author {
  position: absolute;
  top: 8px;
  left: 50%;
  transform: translateX(-50%);
  font-family: "Roboto", sans-serif;
  font-size: 18px;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 4px 32px;
  border-radius: 8px;
}
@media only screen and (max-width: 992px) {
    #content section:first-of-type {
        padding-top: 50px;
        background-size: cover !important;
        background-position: center;
    }
}

    </style>
</head>

<body>
    <div id="wrapper">


        <!-- page preloader begin 
        <div id="de-preloader"></div>-->
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent header-light scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+971 564329718</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>blackfoxluxurycar@gmail.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <!--<div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>-->

                        <div class="text-center topbar-widget" style="overflow:hidden;   padding-top:10px;">
                            <lable class=""> &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="100%"   style="max-width:30; max-height:30;" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                </svg>&nbsp;</lable>
                                
                                
                           <select class="currencySelect" style="background-color:transparent; color:white; border:none;" onchange="updateRates()">
        <option selected value="1" style="background-color:transparent; color:black;">AED</option>
        <option value="<?php echo $rowcurrency['USD']; ?>" style="background-color:transparent; color:black;">USD</option>
        <option value="<?php echo $rowcurrency['GBP']; ?>" style="background-color:transparent; color:black;">GBP</option>
        <option value="<?php echo $rowcurrency['EUR']; ?>" style="background-color:transparent; color:black;">EUR</option>
        <option value="<?php echo $rowcurrency['SAR']; ?>" style="background-color:transparent; color:black;">SAR</option>
        <option value="<?php echo $rowcurrency['KWD']; ?>" style="background-color:transparent; color:black;">KWD</option>
        <option value="<?php echo $rowcurrency['RUB']; ?>" style="background-color:transparent; color:black;">RUB</option>
        <option value="<?php echo $rowcurrency['INR']; ?>" style="background-color:transparent; color:black;">INR</option>
        <option value="<?php echo $rowcurrency['PKR']; ?>" style="background-color:transparent; color:black;">PKR</option>
        <option value="<?php echo $rowcurrency['OMR']; ?>" style="background-color:transparent; color:black;">OMR</option>
    </select>
                            &nbsp; &nbsp;
                        </div>
                        <div style="overflow:hidden;  max-width: 147px; height:40px; padding-top:8px;">
                            <div id="google_translate_element" style="background: transparent;"></div>
                        </div>
                        
                        
                        <script>
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    includedLanguages: 'en,tr,es,zh-CN,fr,ru,it,ar', // Added 'ar' for Arabic
                                    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
                                }, 'google_translate_element');
                            }
                            //topbar remover of google
                            document.addEventListener('DOMContentLoaded', function() {
                                var selectElement = document.querySelector('#google_translate_element select');
                                if (selectElement) {
                                    selectElement.style.backgroundColor = 'transparent';
                                    selectElement.style.borderRadius = '5px';
                                    selectElement.style.fontSize = '10px';
                                }
                                var targetElement = document.getElementById('google_translate_element');

                                var observer = new MutationObserver(function(mutations) {
                                    mutations.forEach(function(mutation) {
                                        if (mutation.type === 'childList') {
                                            // Inner HTML of the element has changed
                                            // Change CSS properties of the body
                                            document.body.style.top = '0';
                                            document.body.style.position = 'static';
                                            document.body.style.marginTop = '0px';
                                        }
                                    });
                                });

                                // Configure and start the observer
                                var config = {
                                    childList: true
                                };
                                observer.observe(targetElement, config);
                            });
                            window.addEventListener('load', function() {
                                var translateElement = document.getElementById('google_translate_element');
                                if (translateElement) {
                                    var imageChild = translateElement.querySelector('img');
                                    var anchorChild = translateElement.querySelector('a');
                                    if (imageChild) {
                                        imageChild.style.display = 'none'; // Hides the image
                                    }
                                    if (anchorChild) {
                                        anchorChild.style.display = 'none'; // Hides the anchor tag
                                    }
                                }

                                var selectElement = document.querySelector('.goog-te-combo');
                                if (selectElement) {
                                    selectElement.style.backgroundColor = 'transparent !important';
                                    selectElement.style.borderRadius = '5px !important';
                                    selectElement.style.padding = '3px !important';
                                }
                            });
                        </script>
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">

                            <div class="de-flex-col">
                                <span id="menu-btn" style="margin-left:-5%;"></span>
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div class="" id="logo">
                                        <a href="index.php" class="">
                                            <img class="logo-1" src="images/light_logo.png" alt="">
                                            <img class="logo-2" src="images/logo_dark.png" style="max-height:100px; margin-bottom: -40% !important; margin-top: -40% !important;">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li>
                                        <a class="menu-item" href="index.php"></a>
                                    </li>
                                    <li>
                                        <a class="menu-item " href="index.php"><i class="bi bi-car-front-fill me-1"></i> Rent a car</a>
                                    </li>
                                    <li id="main_parent" class="has-child ">
                                        <a class="menu-item" href="All_Brands.html"><i class="bi bi-star-fill me-1"></i> Car Brands</a>
                                        <span></span>
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                const menuItem = document.querySelector(".menu-item");
                                                const spanElement = menuItem.nextElementSibling; // Assuming the span comes right after the <a> tag

                                                menuItem.addEventListener("mouseover", function() {
                                                    spanElement.classList.add("active");
                                                });

                                                menuItem.addEventListener("mouseout", function() {
                                                    spanElement.classList.remove("active");
                                                });
                                            });
                                        </script>

                                        <span id="myDiv" class="">
                                            <span>
                                                <div class="row mt-2 mt-md-2 mt-lg-2 mb-2 mb-lg-2 mt-sm-0 mb-sm-2">
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Bentley" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center">
                                                                    <img src="images/all_brand_img/bentley.webp" alt="" >
                                                                </div>
                                                                <div class="col-8">
                                                                    <h6>Bentley</h6>
                                                                    <p>continental gt..</p>
                                                                </div>

                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=BMW" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/bmw.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>BMW</h6>
                                                                    <p>330i, 735i, 430i..</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Bugatti" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/bugatti.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Bugatti</h6>
                                                                    <p>Chiron sports</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Chevrolet" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/Chevrolet.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Chevrolet</h6>
                                                                    <p>Chevrolet c8</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Ferarri" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/ferrari.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Ferarri</h6>
                                                                    <p>f8 tributo spide..</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Ford" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/ford.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Ford</h6>
                                                                    <p>mastang ecoboost</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Land Rover" style="all: unset;">
                                                            <div class="row">

                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/land-rover.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Land Rover</h6>
                                                                    <p>range rover sport</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=lamborghini" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/lamborghini-01.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>lamborghini</h6>
                                                                    <p>huracanevo spyd..</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Nissan" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center">
                                                                    <img src="images/all_brand_img/nissan.webp" alt="">
                                                                </div>
                                                                <div class="col-8">
                                                                    <h6>Nissan</h6>
                                                                    <p>sunny parton..</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Mclaren" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/mclaren.webp" alt=""></div>
                                                                <div class="col-7">
                                                                    <h6>Mclaren</h6>
                                                                    <p>720s spyder, 720..</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Rolls_Royce" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/rolls-royce.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Rolls Royce</h6>
                                                                    <p>cullinan, dawn</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Mercedes" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/mercedes-benz.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Mercedes</h6>
                                                                    <p>amg g63,c300, c..</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=Dodge" style="all: unset;">
                                                        <div class="row">
                                                            <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/dodge.webp" alt=""></div>
                                                            <div class="col-8">
                                                                <h6>Dodge</h6>
                                                                <p>challenger v6..</p>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                        <a href="cars.php?brand=AUDI" style="all: unset;">
                                                            <div class="row">
                                                            <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/audi.webp" alt=""></div>
                                                            <div class="col-8">
                                                                <h6>AUDI</h6>
                                                                <p>100+ Cars</p>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">
                                                    </div>
                                                    <div class=" hov col-12 col-lg-3 col-sm-12 col-md-6  m-4 mt-md-2 mt-lg-2 mb-2  mb-lg-3 mt-sm-0 mb-sm-2">

                                                    </div>
                                                </div>
                                            </span>

                                        </span>
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                const mainParent = document.getElementById("main_parent");
                                                const myDiv = document.getElementById("myDiv");

                                                mainParent.addEventListener("click", function() {
                                                    mainParent.classList.toggle("clicked"); // Toggle the 'clicked' class on click
                                                });
                                            });
                                        </script>
                                    </li>

                                    <li><a class="menu-item " href="#"><i class="bi bi-person me-1"></i> Car With Drivers</a>

                                        
                                    </li>
                                    <li> <a class="menu-item">
                                            <img src="images/all_brand_img/yacht.png" width="25px" style="display:inline;">
                                            Yacht Rental</a>
                                        
                                    </li>


                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="#" class="btn-main  " style=" ">Join us</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            
            <div id="top"></div>
            <section id="section-heroo" aria-label="section" class="">
                
                <div class="container " >
                    <div class="row align-items-center">
                        <div class="col-lg-2"></div>
                        <div class="col-12 col-lg-8 col-sm-12 text-center mt-lg-0 ">
                            
                            <h2 class="text-center" id="first_hed">RENT A CAR IN DUBAI</h2>
                            <p id="first_P">Book cars, chauffeurs and yachts – pay zero commission!</p>
                            <div class="row  mt-2 mb-3" id="cars-mobile">
                                <?php
                                    $sqladdthree = "SELECT * FROM `adver` WHERE `Slid_no` = 1";
                                    $resultthree = mysqli_query($conn, $sqladdthree);
                                    
                        while ($rowthree = mysqli_fetch_assoc($resultthree)) {
                            $firstthree = $rowthree['car_id'];
                            $sqlfirstthree = "SELECT * FROM `car_listings` WHERE `sno` = $firstthree";
                            $firstResultthree = mysqli_query($conn, $sqlfirstthree);
                            $firstRowthree = mysqli_fetch_assoc($firstResultthree);
                        
                                ?>
                                <div class="col-4 d-flex justify-content-start">
                                    <div   style="border-radius: 50%; border: 1px solid white; padding: 5px;"
                                        data-bs-toggle="popover"
                                        data-bs-html="true"
                                        data-bs-placement="top"
                                        data-bs-content="
                                            <div style='max-width: 200px;' class='.col-lg-12'>
                                                <a href='car-single.php?deletid=<?php echo $firstRowthree['sno']; ?>'>
                                                    <img src='dist/php/car_listing_pics/<?php echo $firstRowthree['feature_image']; ?>' class='imagepop'>
                                                        <h5 class='text-center' style='color: blue;'><br><?php echo $firstRowthree['car_brand']; ?> <?php echo $firstRowthree['car_model']; ?></h5>
                                                        <p class='text-center'><span style='color: green;'><span class='currency_name'> AED </span><?php echo $firstRowthree['price_per_day']; ?> </span><small>/Day</small></p>
                                                </a>
                                            </div>
                                        ">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
            </svg>
        </div>
    </div>
                                <?php
                        }
                        ?>
                        <?php
                                    $sqladdtwo = "SELECT * FROM `adver` WHERE `Slid_no` = 2";
                                    $resulttwo = mysqli_query($conn, $sqladdtwo);
                                    
                        while ($rowtwo = mysqli_fetch_assoc($resulttwo)) {
                            $firsttwo = $rowtwo['car_id'];
                            $sqlfirsttwo = "SELECT * FROM `car_listings` WHERE `sno` = $firsttwo";
                            $firstResulttwo = mysqli_query($conn, $sqlfirsttwo);
                            $firstRowtwo = mysqli_fetch_assoc($firstResulttwo);
                        
                                ?>
                                <div class="col-4 d-flex justify-content-center">
                                    <div  style="border-radius: 50%; border: 1px solid white; padding: 5px;"
                                        data-bs-toggle="popover"
                                        data-bs-html="true"
                                        data-bs-placement="top"
                                       data-bs-content="
                                            <div style='max-width: 200px;'>
                                                <a href='car-single.php?deletid=<?php echo $firstRowtwo['sno']; ?>'>
                                                    <img src='dist/php/car_listing_pics/<?php echo $firstRowtwo['feature_image']; ?>' class='imagepop'>
                                                        <h5 class='text-center' style='color: blue;'><br><?php echo $firstRowtwo['car_brand']; ?> <?php echo $firstRowtwo['car_model']; ?></h5>
                                                        <p class='text-center'><span style='color: green;'>AED <?php echo $firstRowtwo['price_per_day']; ?> </span><small>/Day</small></p>
                                                </a>
                                            </div>
                                        ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
            </svg>
                                    </div>
                                </div>
                                <?php
                        }
                        ?>
                        <?php
                                    $sqladdone = "SELECT * FROM `adver` WHERE `Slid_no` = 3";
                                    $resultone = mysqli_query($conn, $sqladdone);
                                    
                        while ($rowone = mysqli_fetch_assoc($resultone)) {
                            $firstone = $rowone['car_id'];
                            $sqlfirstone = "SELECT * FROM `car_listings` WHERE `sno` = $firstone";
                            $firstResultone = mysqli_query($conn, $sqlfirstone);
                            $firstRowone = mysqli_fetch_assoc($firstResultone);
                        
                                ?>
                                <div class="col-4 d-flex justify-content-end">
                                    <div  style="border-radius: 50%; border: 1px solid white; padding: 5px;"
                                        data-bs-toggle="popover"
                                        data-bs-html="true"
                                        data-bs-placement="top"
                                        data-bs-content="
                                            <div style='max-width: 200px;'>
                                                <a href='car-single.php?deletid=<?php echo $firstRowone['sno']; ?>'>
                                                    <img src='dist/php/car_listing_pics/<?php echo $firstRowone['feature_image']; ?>' class='imagepop'>
                                                        <h5 class='text-center' style='color: blue;'><br><?php echo $firstRowone['car_brand']; ?> <?php echo $firstRowone['car_model']; ?></h5>
                                                        <p class='text-center'><span style='color: green;'>AED <?php echo $firstRowone['price_per_day']; ?> </span><small>/Day</small></p>
                                                </a>
                                            </div>
                                        ">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
            </svg>
        </div>
                                </div>
                                <?php
                        }
                        ?>
                            </div>
                            <form action="cars.php" method="POST">
                                <div style="background: rgba(0, 0, 0, .4) !important; box-shadow: 0 0 5px #c7c7c78c; border-radius: 10px; padding-left: 8px;  padding-right: 8px;  padding-bottom: 0px;  padding-top: 10px; " class="row">
                                    <div class="col-8 col-lg-10 col-sm-8 p-0  m-0">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend bg-white" style="border:0px; border-radius:.25rem; border-top-right-radius:0; border-bottom-right-radius: 0;">
                                                <span class="input-group-text" id="basic-addon1" style="border:0px; border-radius:.25rem;"><i class="bi bi-search"></i></span>
                                            </div>
                                            <input style="border:0px; height:100%;" name="search" type="text" class="form-control" placeholder="Find Your Dream Car" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-2 col-sm-4 p-0 m-0">
                                        <button type="submit" id="serch" class="btn-main">Search</button>
                                    </div>

                                </div>
                            </form>
                            
                        </div>
                        <div class="row mt-lg-5" id="car-descktop">
                            <?php
                                    $sqladdthreelap = "SELECT * FROM `adver` WHERE `Slid_no` = 1";
                                    $resultthreelap = mysqli_query($conn, $sqladdthreelap);
                                    
                        while ($rowthreelap = mysqli_fetch_assoc($resultthreelap)) {
                            $firstthreelap = $rowthreelap['car_id'];
                            $sqlfirstthreelap = "SELECT * FROM `car_listings` WHERE `sno` = $firstthreelap";
                            $firstResultthreelap = mysqli_query($conn, $sqlfirstthreelap);
                            $firstRowthreelap = mysqli_fetch_assoc($firstResultthreelap);
                        
                                ?>
                                <div class="col-4 d-flex justify-content-center">
                                    <div  style="border-radius: 50%; border: 1px solid white; padding: 5px;"
                                        data-bs-toggle="popover"
                                        data-bs-html="true"
                                        data-bs-placement="top"
                                        data-bs-content="
                                            <div style='max-width: 200px;'  class='col-lg-12'>
                                                <a href='car-single.php?deletid=<?php echo $firstRowthreelap['sno']; ?>'>
                                                    <img src='dist/php/car_listing_pics/<?php echo $firstRowthreelap['feature_image']; ?>' class='imagepop'>
                                                        <h5 class='text-center' style='color: blue;'><br><?php echo $firstRowthreelap['car_brand']; ?> <?php echo $firstRowthreelap['car_model']; ?></h5>
                                                        <p class='text-center'>
                                                            <span style='color: green;'>
                                                                <span class='currency_name'>AED</span> 
                                                                <span class='daily-rate'><?php echo $firstRowthreelap['price_per_day']; ?> </span>
                                                            </span>
                                                            <small>/Day</small>
                                                        </p>
                                                </a>
                                            </div>
                                        ">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
            </svg>
        </div>
    </div>
                            <?php
                        }
                        ?>
                        <?php
                                    $sqladdtwolap = "SELECT * FROM `adver` WHERE `Slid_no` = 2";
                                    $resulttwolap = mysqli_query($conn, $sqladdtwolap);
                                    
                        while ($rowtwolap = mysqli_fetch_assoc($resulttwolap)) {
                            $firsttwolap = $rowtwolap['car_id'];
                            $sqlfirsttwolap = "SELECT * FROM `car_listings` WHERE `sno` = $firsttwolap";
                            $firstResulttwolap = mysqli_query($conn, $sqlfirsttwolap);
                            $firstRowtwolap = mysqli_fetch_assoc($firstResulttwolap);
                        
                                ?>
                                <div class="col-4 d-flex justify-content-center">
                                    <div  style="border-radius: 50%; border: 1px solid white; padding: 5px;"
                                        data-bs-toggle="popover"
                                        data-bs-html="true"
                                        data-bs-placement="top"
                                        data-bs-content="
                                            <div style='max-width: 200px;'>
                                                <a href='car-single.php?deletid=<?php echo $firstRowtwolap['sno']; ?>'>
                                                    <img src='dist/php/car_listing_pics/<?php echo $firstRowtwolap['feature_image']; ?>' class='imagepop'>
                                                        <h5 class='text-center' style='color: blue;'><br><?php echo $firstRowtwolap['car_brand']; ?> <?php echo $firstRowtwolap['car_model']; ?></h5>
                                                        <p class='text-center'><span style='color: green;'>AED <?php echo $firstRowtwolap['price_per_day']; ?> </span><small>/Day</small></p>
                                                </a>
                                            </div>
                                        ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
            </svg>
                                    </div>
                                </div>
                                <?php
                        }
                        ?>
                        <?php
                                    $sqladdonelap = "SELECT * FROM `adver` WHERE `Slid_no` = 3";
                                    $resultonelap = mysqli_query($conn, $sqladdonelap);
                                    
                        while ($rowonelap = mysqli_fetch_assoc($resultonelap)) {
                            $firstonelap = $rowonelap['car_id'];
                            $sqlfirstonelap = "SELECT * FROM `car_listings` WHERE `sno` = $firstonelap";
                            $firstResultonelap = mysqli_query($conn, $sqlfirstonelap);
                            $firstRowonelap = mysqli_fetch_assoc($firstResultonelap);
                        
                                ?>
                                <div class="col-4 d-flex justify-content-end" style="margin-right:-50px !important;">
                                    <div  style="border-radius: 50%; border: 1px solid white; padding: 5px;"
                                        data-bs-toggle="popover"
                                        data-bs-html="true"
                                        data-bs-placement="top"
                                        data-bs-content="
                                            <div style='max-width: 200px;'>
                                                <a href='car-single.php?deletid=<?php echo $firstRowonelap['sno']; ?>'>
                                                    <img src='dist/php/car_listing_pics/<?php echo $firstRowonelap['feature_image']; ?>' class='imagepop'>
                                                        <h5 class='text-center' style='color: blue;'><br><?php echo $firstRowonelap['car_brand']; ?> <?php echo $firstRowonelap['car_model']; ?></h5>
                                                        <p class='text-center'><span style='color: green;'>AED <?php echo $firstRowonelap['price_per_day']; ?> </span><small>/Day</small></p>
                                                </a>
                                            </div>
                                        ">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
            </svg>
        </div>
                                </div>
                                <?php
                        }
                        ?>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script>
    // Activate popover on hover
    document.addEventListener('DOMContentLoaded', function () {
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            var popover = new bootstrap.Popover(popoverTriggerEl, {
                trigger: 'hover', // Activate on hover
                html: true,
                placement: 'top',
                content: function () {
                    return popoverTriggerEl.getAttribute('data-bs-content');
                }
            });

            // Hide popover on mouse leave
            popoverTriggerEl.addEventListener('mouseleave', function () {
                popover.hide();
            });
        });
    });
</script>

                                
                            </div>
                    </div>
                </div>
            </section>
            <section class="d-flex justify-content-center" style="padding:0px; padding-top:30px;">
                
               <!-- <div class=""style=" margin-right:-30px padding:0px; !important;">
                    <img src="https://th.bing.com/th/id/OIP.lgL6Pb6es2TmyZa6F5qHmAHaE7?rs=1&pid=ImgDetMain" width="65" height="65" class="rounded-circle border  border-3" style="  padding: 2px;background: linear-gradient(to right, red, purple)">
  <img src="https://th.bing.com/th/id/OIP.lgL6Pb6es2TmyZa6F5qHmAHaE7?rs=1&pid=ImgDetMain" width="65" height="65" class="rounded-circle border  border-3" style="  padding: 2px;
  
  background: linear-gradient(to right, red, purple)">
  <img src="https://th.bing.com/th/id/OIP.lgL6Pb6es2TmyZa6F5qHmAHaE7?rs=1&pid=ImgDetMain" width="65" height="65" class="rounded-circle border  border-3" style="  padding: 2px;
  
  background: linear-gradient(to right, red, purple)">
  <img src="https://th.bing.com/th/id/OIP.lgL6Pb6es2TmyZa6F5qHmAHaE7?rs=1&pid=ImgDetMain" width="65" height="65" class="rounded-circle border  border-3" style="  padding: 2px;
  
  background: linear-gradient(to right, red, purple)">
  <img src="https://th.bing.com/th/id/OIP.lgL6Pb6es2TmyZa6F5qHmAHaE7?rs=1&pid=ImgDetMain" width="65" height="65" class="rounded-circle border  border-3" style="  padding: 2px;
  
  background: linear-gradient(to right, red, purple)">
  <img src="https://th.bing.com/th/id/OIP.lgL6Pb6es2TmyZa6F5qHmAHaE7?rs=1&pid=ImgDetMain" width="65" height="65" class="rounded-circle border  border-3" style="  padding: 2px;
  
  background: linear-gradient(to right, red, purple)">
 
                </div>-->
                 <div>
        <div class="stories-container">
            <div class="content">
                <div class="previous-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                    </svg>
                </div>
                <div class="stories"></div>
                <div class="next-btn active">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="stories-full-view">
            <div class="close-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </div>
            <div class="content">
                <div class="previous-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                    </svg>
                </div>
                <div class="story">
                    <div class="media-container">
                        <img src="" alt="Story Image" />
                    </div>
                    <div class="author">Author</div>
                </div>
                <div class="next-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    console.log("Script is loaded"); // Debug: Check if the script is loaded

    var allStories = [];
    var slideInterval;

    fetch('php/get_slides.php')
        .then(response => response.json())
        .then(data => {
            allStories = data;
            initializeStories();
        })
        .catch(error => console.error('Error fetching slide data:', error));

    function initializeStories() {
        const stories = document.querySelector(".stories");
        const storiesFullView = document.querySelector(".stories-full-view");
        const closeBtn = document.querySelector(".close-btn");
        const mediaContainerFull = document.querySelector(".media-container");
        const storyAuthorFull = document.querySelector(".stories-full-view .author");
        const nextBtn = document.querySelector(".stories-container .next-btn");
        const previousBtn = document.querySelector(".stories-container .previous-btn");
        const storiesContent = document.querySelector(".stories-container .content");
        const nextBtnFull = document.querySelector(".stories-full-view .next-btn");
        const previousBtnFull = document.querySelector(".stories-full-view .previous-btn");

        let currentActive = 0;

        const createStories = () => {
            allStories.forEach((s, i) => {
                const story = document.createElement("div");
                story.classList.add("story");

                if (isVideo(s.imageUrl)) {
                    const video = document.createElement("video");
                    video.src = s.imageUrl;
                    video.muted = false;  // Removed the muted attribute
                    story.appendChild(video);
                } else {
                    const img = document.createElement("img");
                    img.src = s.imageUrl;
                    story.appendChild(img);
                }

                const author = document.createElement("div");
                author.classList.add("author");
                author.innerHTML = s.author;

                story.appendChild(author);
                stories.appendChild(story);

                story.addEventListener("click", () => {
                    showFullView(i);
                });
            });
        };

        createStories();

        const showFullView = (index) => {
            currentActive = index;
            updateFullView();
            storiesFullView.classList.add("active");
        };

        closeBtn.addEventListener("click", () => {
            storiesFullView.classList.remove("active");
            const video = mediaContainerFull.querySelector("video");
            if (video) {
                video.pause();
            }
            clearInterval(slideInterval);
        });

        const updateFullView = () => {
            mediaContainerFull.innerHTML = '';

            if (isVideo(allStories[currentActive].imageUrl)) {
                const video = document.createElement("video");
                video.src = allStories[currentActive].imageUrl;
                video.autoplay = true;
                video.muted = false;  // Removed the muted attribute
                mediaContainerFull.appendChild(video);

                video.addEventListener("ended", () => {
                    goToNextSlide();
                });
                clearInterval(slideInterval);
            } else {
                const img = document.createElement("img");
                img.src = allStories[currentActive].imageUrl;
                mediaContainerFull.appendChild(img);

                clearInterval(slideInterval);
                slideInterval = setInterval(() => {
                    goToNextSlide();
                }, 3000);
            }

            storyAuthorFull.innerHTML = allStories[currentActive].author;
        };

        const goToNextSlide = () => {
            if (currentActive >= allStories.length - 1) {
                return;
            }
            currentActive++;
            updateFullView();
        };

        nextBtn.addEventListener("click", () => {
            storiesContent.scrollLeft += 300;
        });

        previousBtn.addEventListener("click", () => {
            storiesContent.scrollLeft -= 300;
        });

        storiesContent.addEventListener("scroll", () => {
            if (storiesContent.scrollLeft <= 24) {
                previousBtn.classList.remove("active");
            } else {
                previousBtn.classList.add("active");
            }

            let maxScrollValue = storiesContent.scrollWidth - storiesContent.clientWidth - 24;

            if (storiesContent.scrollLeft >= maxScrollValue) {
                nextBtn.classList.remove("active");
            } else {
                nextBtn.classList.add("active");
            }
        });

        nextBtnFull.addEventListener("click", () => {
            if (currentActive >= allStories.length - 1) {
                return;
            }
            currentActive++;
            updateFullView();
        });

        previousBtnFull.addEventListener("click", () => {
            if (currentActive <= 0) {
                return;
            }
            currentActive--;
            updateFullView();
        });

        function isVideo(url) {
            const videoExtensions = ['.mp4', '.webm', '.ogg'];
            return videoExtensions.some(ext => url.toLowerCase().endsWith(ext));
        }
    }
});

</script>


               
                
                
            
            </section>
            <section id="section-brands" class="no-top m-3 m-lg-5 m-sm-3">
                <div class=" p-lg-2">
                    <div class="row align-items-center">
                        <div class="p-sm-0 m-sm-0 col-sm-12 col-md-12  row  text-center">
                            <h3 class="text-sm">Find car rental and driver services near you</h3>
                            <div class="spacer-20"></div>
                            <div id="ratesList"></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Your content rows here -->
                        <div class="row m-lg-3 m-sm-0 " id="car-descktop">
                            
                                <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                    <a href="cars.php?type=Luxery">
                                <img src="images/all_brand_img/luxury2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>LUXURY</b><br>670+ cars</p>
                                </a>
                            </div>
                            
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-4 align-items-center text-center">
                                <a href="cars.php?type=CAR WITH DRIVER">
                                <img src="images/all_brand_img/car-with-drives2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>CAR WITH DRIVER</b><br>59+ cars</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                <a href="cars.php?type=SUV">
                                    <img src="images/all_brand_img/suv2.webp" alt="">
                                    <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>SUV</b><br>938 cars</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center">
                              <a href="cars.php?type=MONTHLY">
                                <img src="images/all_brand_img/monthy2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>MONTHLY</b><br>1980 cars</p>
                              </a>
                            </div>
                            <!-- Additional content rows -->
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                               <a href="cars.php?type=CONVERTIBLE">
                                <img src="images/all_brand_img/Convertible2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>CONVERTIBLE</b><br>282 cars</p>
                               </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                               <a href="cars.php?type=YACHTS">
                                <img src="images/all_brand_img/fishing-yacht5 (1).webp" width="250px" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>YACHTS</b><br>53 Boats</p>
                               </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                <a href="cars.php?type=CROSSOVER">
                                <img src="images/all_brand_img/cross-over2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>CROSSOVER</b><br>780 cars</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                <a href="cars.php?type=Sports">
                                <img src="images/all_brand_img/super-car.webp" width="250px" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>Sports</b><br>780 cars</p>
                                </a>
                            </div>
                        </div>
                        <div class="row m-lg-3 m-sm-0 " id="cars-mobile">
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                <a href="cars.php?type=Luxery">
                                <img src="images/all_brand_img/luxury2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>LUXURY</b><br>670+ cars</p>
                                </a>

                            </div>

                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-4 align-items-center text-center">
                                                                    <a href="cars.php?type=CAR WITH DRIVER">
                                <img src="images/all_brand_img/car-with-drives2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>CAR WITH DRIVER</b><br>59+ cars</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                <a href="cars.php?type=SUV">
                                <img src="images/all_brand_img/suv2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>SUV</b><br>938 cars</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center">
                                <a href="cars.php?type=MONTHLY">
                                <img src="images/all_brand_img/monthy2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>MONTHLY</b><br>1980 cars</p>
                                </a>
                            </div>
                            <!-- Additional content rows -->
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                <a href="cars.php?type=CONVERTIBLE">
                                <img src="images/all_brand_img/Convertible2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>CONVERTIBLE</b><br>282 cars</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center ">
                                
                                <a href="cars.php?type=YACHTS">
                                <img src="images/all_brand_img/fishing-yacht5 (1).webp" width="250px" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>YACHTS</b><br>53 Boats</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center moreContent" style="display: none;">
                                <a href="cars.php?type=CROSSOVER">
                                <img src="images/all_brand_img/cross-over2.webp" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>CROSSOVER</b><br>344 cars</p>
                                </a>
                            </div>
                            <div class="col-4 brand col-lg-3 col-md-4 col-sm-6 align-items-center text-center moreContent" style="display: none;">
                                <a href="cars.php?type=SUPER CAR">
                                <img src="images/all_brand_img/super-car.webp" width="250px" alt="">
                                <p class="text-center mt-3" style="font-size: 12px; color: black;"><b>SUPER CAR</b><br>166 cars</p>
                                </a>
                            </div>
                        </div>
                        <!-- Read more and Read less buttons -->
                        <div class="col text-center mt-3 mb-3" id="cars-mobile-btn">
                            <span class="btn-main read-more-btn dropdown-toggle" onclick="toggleContent('moreContent')">See more</span>
                            <span class=" dropup">
                                <span class="btn-main read-less-btn dropdown-toggle" style="display: none;" onclick="toggleContent('moreContent')">See less</span></span>
                        </div>
                        <div>
                            <p class=" m-lg-2 ">Tired of searching for a <b>‘rent a car near me’</b>? You have reached just the right place. LUXURY DUBAI CARS RENTALS.com is a leading <b>car rental</b> marketplace in <b>Dubai</b> featuring budget-friendly car hire deals from reliable rental car companies in the region. You can choose from our extensive inventory of over 2000 vehicles listed by trusted car rental businesses in the UAE. Whether you’re a tourist looking for a car facility or a resident in search of long term rentals, we assure you the cheapest rent cars at the best prices starting as low as <b>AED 30 per day.</b></p>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                function toggleContent(className) {
                    const elements = document.querySelectorAll('.' + className);
                    const readMoreBtn = document.querySelector('.read-more-btn');
                    const readLessBtn = document.querySelector('.read-less-btn');

                    elements.forEach(element => {
                        if (element.style.display === 'none') {
                            element.style.display = 'block';
                            readMoreBtn.style.display = 'none';
                            readLessBtn.style.display = 'inline-block';
                        } else {
                            element.style.display = 'none';
                            readMoreBtn.style.display = 'inline-block';
                            readLessBtn.style.display = 'none';
                        }
                    });
                }
            </script>
            <section id="slider-cars" class="no-top">
                <div class="p-2 p-lg-0 p-md-2 p-sm-2">
                    <div class="row  me-lg-5 ms-lg-5   m-lg-0 " style="border-bottom: 1px dotted black;">
                        <div class="col-8 col-md-6 col-lg-6 col-sm-8">
                            <h4>Rent A Car From Top Brands</h4>
                        </div>
                        <div class="col-4 col-md-6 col-lg-6 col-sm-4  text-end">
                            <a class=" btn-sm" style="background-color:#78ca5c; color:white;" href="All_Brands.html">All Brands
                                <!--<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                              </svg> -->
                            </a>
                        </div>
                    </div>
                    <div class=" row  me-lg-5 ms-lg-5  ">
                        <p style="font-size: 12px; ">Get on a road-trip now with the best deals for high-end cars manufactured by top automobile companies in the world.</p>
                    </div>
                    <div class="row  m-lg-0 ">
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4 brande">
                            <a href="cars.php?brand=Mercedes">
                                <img src="images/all_brand_img/mercedes-benz.svg" alt="" srcset="">
                                <p>Mercedes Benz</p>

                            </a>
                        </div>
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4  brande">
                            <a href="cars.php?brand=Land Rover">
                                <img src="images/all_brand_img/land-rover.svg" alt="" srcset="">
                                <p>Land Rover</p>
                            </a>
                        </div>
                        <!--<div class="text-center col-4 col-lg-2 col-md-4 col-sm-4  brande">
                            <a href="cars.php?brand=Toyota">
                                <img src="images/all_brand_img/toyota.svg" alt="" srcset="">
                                <p>Toyota</p>
                            </a>
                        </div>-->
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4  brande">
                            <a href="cars.php?brand=Nissan">
                                <img src="images/all_brand_img/nissan.svg" alt="" srcset="">
                                <p>Nissan</p>
                            </a>
                        </div>
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4  brande">
                            <a href="cars.php?brand=AUDI">
                                <img src="images/all_brand_img/Audi-Logo.wine.svg" alt="" srcset="" width="100%">
                                <p>AUDI</p>
                            </a>
                        </div>
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4  brande">
                            <a href="cars.php?brand=BMW">
                                <img src="images/all_brand_img/bmw.svg" alt="" srcset="">
                                <p>BMW</p>
                            </a>
                        </div>
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4  brande">
                            <a href="cars.php?brand=Lamborghini">
                                <img src="images/all_brand_img/lamborghini.svg" alt="" srcset="">
                                <p>Lamborghini</p>
                            </a>
                        </div>
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4 brande">
                            <a href="cars.php?brand=Porshe">
                                <img src="images/all_brand_img/porsche.svg" alt="" srcset="">
                                <p>Porsche</p>
                            </a>
                        </div>
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4 brande">
                            <a href="cars.php?brand=Ferarri">
                                <img src="images/all_brand_img/ferrari.svg" alt="" srcset="">
                                <p>Ferarri</p>
                            </a>
                        </div>
                        <div class="text-center col-4 col-lg-2 col-md-4 col-sm-4 brande">
                            <a href="cars.php?brand=Rolls_Royce">
                                <img src="images/all_brand_img/rolls-royce.svg" alt="" srcset="">
                                <p>Rolls-Royce</p>
                            </a>
                        </div>
                    </div>


                </div>

            </section>
            <section id="first-section-cars" class="no-top">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h4 class="text-center">Latest Car Rental Offers in Dubai</h4>
                    <p>Choose among cars with in-demand driving features and high mileage, and rent a car at the
                        best price. Exclusive car rental discounts, updated seasonally!</p>

                </div>
                <div class="p-5">

                    <div class="row align-items-center">
                        <div class="clearfix"></div>
                        <div id="items-carousel" class="owl-carousel wow fadeIn items-carousel ">
                            <?php
                            
                            $count = 0;
                            while (($row = mysqli_fetch_assoc($getdata)) && ($count < 6)) {
                                $id = $row['sno'];
                                $picNamesJson = $row['car_pic'];
                                $picNamesArray = json_decode($picNamesJson, true);

                                if (!empty($picNamesArray)) {
                                    $firstImage = reset($picNamesArray);
                            ?>
                                    <div class="col-lg-12">
                                        <a href="car-single.php?deletid=<?php echo $id; ?>" style="color: unset;">
                                            <div class="de-item mb30">
                                                <div class="d-img">
                                                    <div class="item">
                                                        <img src="/dist/php/car_listing_pics/<?php echo $row['feature_image'] ?>"  id="car-slider-image"class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-info">
                                            <div class="d-text">
                                                <h4><?php echo $row['car_model'];?></h4>
                                                <p><?php echo $row['car_brand'];?></p>
                                                <div class="d-item_like">
                                            <!--<i class="fa fa-heart"></i><span>25</span>-->
                                        </div>
                                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="images/icons/wheel.svg" alt=""><?php echo $row['version'];?></span>
                                            <span class="d-atr"><img src="images/icons/2.svg" alt=""><?php echo $row['transmission'];?></span>
                                            <span class="d-atr"><i class="bi bi-fuel-pump"></i> <?php echo $row['fuel_type'];?></span>
                                            <span class="d-atr" id="category"><img src="images/icons/4.svg" alt=""><?php echo $row['category'];?></span>
                                        </div>
                                                <div class="d-price row">
                                               <div class="col-6">
        Daily rate from 
        <span>
            <span class="currency_name" style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
            <span class="new_rates daily-rate" data-original-rate="<?php echo $row['price_per_day']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;"><?php echo $row['price_per_day']; ?>/Day</span>
           
            <span style="font-size:14px; font-weight:normal;"><img src="images/road-line4.svg" style="width: 15px"> <?php echo $row['price_per_km_day']; ?> km</span>
        </span>
    </div>

    <div class="col-6">
        Weekly rate from 
        <span>
            <span class="currency_name" style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
            <span class="new_rates weekly-rate" data-original-rate="<?php echo $row['price_per_week']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;"><?php echo $row['price_per_km_week']; ?>/Week</span>
            
            <span style="font-size:14px; font-weight:normal;"><img src="images/road-line4.svg" style="width: 14px"> <?php echo $row['price_per_km_week']; ?> km</span>
        </span>
    </div>
                                            
                                     
                                        </div>
                                
                                            </div>
                                            
                                        </div>
                                            </div>
                                        </a>
                                    </div>
                            <?php
                                    $count++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <!-- Coded by a designer™ -->
                <img src="Banner1.jpg" style="max-width:1400px; max-height:250px; width: 100%; height: auto;">

            </section>
            <section id="second-section-cars" class="no-top">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h4>Luxury & Sports Cars</h4>
                    <p>Drive in style! Make your first car rental a great experience with luxury rental vehicles
                        from top brands such as Rolls Royce, BMW, Land Rover, among others.</p>
                </div>
                <div class="p-5">
                    <div class="row align-items-center">


                        <div class="clearfix"></div>

                        <div id="items-carousel" class=" items-carousel owl-carousel wow fadeIn">
                            <?php
                            $categories = "Sports,Luxury ";
                             // Convert array to pipe-separated string

$queryo = "SELECT * FROM car_listings WHERE CONCAT(',', category, ',') REGEXP CONCAT('(^|,)(', '" . $categories . "', ')(,|$)') ORDER BY sno DESC";

    $getdatao = mysqli_query($conn, $queryo);
    $counto= 0;
    while (($rowo = mysqli_fetch_assoc($getdatao)) && ($counto < 6)) {
                                $ido = $rowo['sno'];
                                
                            ?>

                            <div class="col-lg-12">
                                <a href="car-single.php?deletid=<?php echo $ido; ?>" style="color: unset;">
                                            <div class="de-item mb30">
                                                <div class="d-img">
                                                    <div class="item">
                                                        <img src="/dist/php/car_listing_pics/<?php echo $rowo['feature_image'] ?>"  id="car-slider-image"class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-info">
                                            <div class="d-text">
                                                <h4><?php echo $rowo['car_model'];?></h4>
                                                <p><?php echo $rowo['car_brand'];?></p>
                                                <div class="d-item_like">
                                            <!--<i class="fa fa-heart"></i><span>25</span>-->
                                        </div>
                                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="images/icons/wheel.svg" alt=""><?php echo $rowo['version'];?></span>
                                            <span class="d-atr"><img src="images/icons/2.svg" alt=""><?php echo $rowo['transmission'];?></span>
                                            <span class="d-atr"><i class="bi bi-fuel-pump"></i> <?php echo $rowo['fuel_type'];?></span>
                                            <span class="d-atr" id="category"><img src="images/icons/4.svg" alt=""><?php echo $rowo['category'];?></span>
                                        </div>
                                                <div class="d-price row">
                                                    <div class="col-6">
                                            Daily rate from 
                                            <span class="">
                                                <span class="currency_name " style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                
                                                <span  class="new_rates daily-rate" data-original-rate="<?php echo $rowo['price_per_day']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;" ><?php echo $rowo['price_per_day'];?>/Day</span>
                                                
                                                <span  class="" style=" font-size:14px; font-weight:normal;" ><img src="images/road-line4.svg" style="width: 15px"> <?php echo $rowo['price_per_km_day'];?> km</span>
                                                
                                            </span>
                                            </div>
                                            <div class="col-6">
                                                 Weakly rate from 
                                            <span class="">
                                                <span class="currency_name " style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                
                                                <span  class="new_rates weekly-rate " data-original-rate="<?php echo $rowo['price_per_week']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;" ><?php echo $rowo['price_per_week'];?>/Week</span>
                                                
                                                <span  class="" style=" font-size:14px; font-weight:normal; " ><img src="images/road-line4.svg" style="width: 14px"> <?php echo $rowo['price_per_km_week'];?> km</span>
                                            </span>
                                            </div>
                                            
                                     
                                        </div>
                                
                                            </div>
                                            
                                        </div>
                                                
                                            </div>
                                        </a>
                            </div>

                            <?php
                            $counto++;
                                    
                                
                                }
                            ?>

                        </div>


                    </div>
                </div>
            </section>
            <section>
                <!-- Coded by a designer™ -->
                <img src="Banner2.jpg" style="max-width:1400px; max-height:250px; width: 100%; height: auto;">

            </section>
            <section id="third-section-cars" class="no-top">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h4>SUVs for rent in Dubai</h4>
                    <p>From spacious 7-seaters to the latest 5-seater sports utility vehicles, we feature a
                        broad range of trendy SUV car rental deals in the UAE.</p>

                </div>
                <div class="p-5">
                    <div class="row align-items-center">


                        <div class="clearfix"></div>

                        <div id="items-carousel" class=" items-carousel owl-carousel wow fadeIn">

                             <?php
                            $categoriesoo = "SUV";
                             // Convert array to pipe-separated string

$queryoo = "SELECT * FROM car_listings WHERE CONCAT(',', category, ',') REGEXP CONCAT('(^|,)(', '" . $categoriesoo . "', ')(,|$)') ORDER BY sno DESC";

    $getdataoo = mysqli_query($conn, $queryoo);
    $countoo= 0;
    while (($rowoo = mysqli_fetch_assoc($getdataoo)) && ($countoo < 6)) {
                                $idoo = $rowoo['sno'];
                                
                            ?>

                            <div class="col-lg-12">
                                <a href="car-single.php?deletid=<?php echo $idoo; ?>" style="color: unset;">
                                            <div class="de-item mb30">
                                                <div class="d-img">
                                                    <div class="item">
                                                        <img src="/dist/php/car_listing_pics/<?php echo $rowoo['feature_image'] ?>"  id="car-slider-image"class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-info">
                                            <div class="d-text">
                                                <h4><?php echo $rowoo['car_model'];?></h4>
                                                <p><?php echo $rowoo['car_brand'];?></p>
                                                <div class="d-item_like">
                                            <!--<i class="fa fa-heart"></i><span>25</span>-->
                                        </div>
                                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="images/icons/wheel.svg" alt=""><?php echo $rowoo['version'];?></span>
                                            <span class="d-atr"><img src="images/icons/2.svg" alt=""><?php echo $rowoo['transmission'];?></span>
                                            <span class="d-atr"><i class="bi bi-fuel-pump"></i> <?php echo $rowoo['fuel_type'];?></span>
                                            <span class="d-atr" id="category"><img src="images/icons/4.svg" alt=""><?php echo $rowoo['category'];?></span>
                                        </div>
                                                <div class="d-price row">
                                                    <div class="col-6">
                                            Daily rate from 
                                            <span class="">
                                                <span class="currency_name " style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                
                                                <span  class="new_rates daily-rate" data-original-rate="<?php echo $rowoo['price_per_day']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;" ><?php echo $rowoo['price_per_day'];?>/Day</span>
                                                
                                                <span  class="" style=" font-size:14px; font-weight:normal;" ><img src="images/road-line4.svg" style="width: 15px"> <?php echo $rowoo['price_per_km_day'];?> km</span>
                                                
                                            </span>
                                            </div>
                                            <div class="col-6">
                                                 Weakly rate from 
                                            <span class="">
                                                <span class="currency_name " style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                
                                                <span  class="new_rates weekly-rate" data-original-rate="<?php echo $rowoo['price_per_week']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;" ><?php echo $rowoo['price_per_week'];?>/Week</span>
                                                
                                                <span  class="" style=" font-size:14px; font-weight:normal; " ><img src="images/road-line4.svg" style="width: 14px"> <?php echo $rowoo['price_per_km_week'];?> km</span>
                                            </span>
                                            </div>
                                            
                                     
                                        </div>
                                
                                            </div>
                                            
                                        </div>
                                            </div>
                                        </a>
                            </div>

                            <?php
                                 $countoo ++;   
                                
                                }
                            ?>

                            

                        </div>


                    </div>
                </div>
            </section>
            <section id="four-section-cars" class="no-top">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h4>Chauffeur Service in Dubai</h4>
                    <p>Our luxury chauffeur services include Point to Point, Airport Transfer and Hourly basis,
                        provided by our hand-picked and exclusive partners.</p>

                </div>
                <div class="p-5">
                    <div class="row align-items-center">


                        <div class="clearfix"></div>

                        <div id="items-carousel" class=" items-carousel owl-carousel wow fadeIn">

                             <?php
                            $categoriesooo = "Chauffeur";
                             // Convert array to pipe-separated string

$queryooo = "SELECT * FROM car_listings WHERE CONCAT(',', category, ',') REGEXP CONCAT('(^|,)(', '" . $categoriesooo . "', ')(,|$)') ORDER BY sno DESC";

    $getdataooo = mysqli_query($conn, $queryooo);
    $countooo= 0;
    while (($rowooo = mysqli_fetch_assoc($getdataooo)) && ($countooo < 6)) {
                                $idoo = $rowoo['sno'];
                                $picNamesJsonooo = $rowooo['car_pic'];
                                $picNamesArrayooo = json_decode($picNamesJsonooo, true);

                                if (!empty($picNamesArrayooo)) {
                                    $firstImageooo = reset($picNamesArrayooo);
                            ?>

                            <div class="col-lg-12">
                                <a href="car-single.php?deletid=<?php echo $idooo; ?>" style="color: unset;">
                                            <div class="de-item mb30">
                                                <div class="d-img">
                                                    <div class="item">
                                                        <img src="/dist/php/car_listing_pics/<?php echo $row['feature_image'] ?>"  id="car-slider-image"class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-info">
                                            <div class="d-text">
                                                <h4><?php echo $rowooo['car_model'];?></h4>
                                                <p><?php echo $rowooo['car_brand'];?></p>
                                                <div class="d-item_like">
                                            <!--<i class="fa fa-heart"></i><span>25</span>-->
                                        </div>
                                                <div class="d-atr-group">
                                            <span class="d-atr"><img src="images/icons/wheel.svg" alt=""><?php echo $rowooo['version'];?></span>
                                            <span class="d-atr"><img src="images/icons/2.svg" alt=""><?php echo $rowooo['transmission'];?></span>
                                            <span class="d-atr"><i class="bi bi-fuel-pump"></i> <?php echo $rowooo['fuel_type'];?></span>
                                            <span class="d-atr" id="category"><img src="images/icons/4.svg" alt=""><?php echo $rowooo['category'];?></span>
                                        </div>
                                                <div class="d-price row">
                                                    <div class="col-6">
                                            Daily rate from 
                                            <span class="">
                                                <span class="currency_name " style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                
                                                <span  class="new_rates daily-rate" data-original-rate="<?php echo $rowooo['price_per_day']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;" ><?php echo $rowooo['price_per_day'];?>/Day</span>
                                                
                                                <span  class="" style=" font-size:14px; font-weight:normal;" ><img src="images/road-line4.svg" style="width: 15px"> <?php echo $rowooo['price_per_km_day'];?> km</span>
                                                
                                            </span>
                                            </div>
                                            <div class="col-6">
                                                 Weakly rate from 
                                            <span class="">
                                                <span class="currency_name " style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                
                                                <span  class="new_rates weekly-rate" data-original-rate="<?php echo $rowooo['price_per_week']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;" ><?php echo $rowooo['price_per_week'];?>/Week</span>
                                                
                                                <span  class="" style=" font-size:14px; font-weight:normal; " ><img src="images/road-line4.svg" style="width: 14px"> <?php echo $rowooo['price_per_km_week'];?> km</span>
                                            </span>
                                            </div>
                                            
                                     
                                        </div>
                                
                                            </div>
                                            
                                        </div>
                                            </div>
                                        </a>
                            </div>

                            <?php
                                 $countooo ++;   
                                }
                                }
                            ?>

                            

                        </div>


                    </div>
                </div>
            </section>
            <section style="margin: 0px; padding:0px;">
                <!-- Coded by a designer™ -->
                <img src="Banner3.jpg" style="max-width:1400px; max-height:250px; width: 100%; height: auto;">

            </section>
            <section id="testimonials" class="container">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                        <div class="elfsight-app-f687ae53-6c2a-4720-8b11-576abfe5179c" data-elfsight-app-lazy></div>
                    </div>
                </div>

            </section>
            <section class="" style="background-image: linear-gradient(90deg, #558f41, #1c1c1c) !important;">
                <div class="cantenar-fluid " style=" margin-top:-90px !important; ">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="wevbg" style="/* display: none; */">
                        <path style="fill: #fff" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                    </svg>
                </div>
                <div class="row p-5 text-light">
                    <div>
                        <h4 style="font-weight: 700; font-size: 18px; border-bottom: 1px dotted  white;  padding-bottom: 20px; ">Find Cheap Car Rental Deals and Discounts - Updated Daily!</h4>
                        <p>You are sure to find the cheapest rent a car in Dubai only through LUXURY DUBAI CARS RENTALS. Compare offers from multiple suppliers and select among a range of budget car rentals. Browse cars for rent including the most exotic luxury cars and sports cars. Rent any of the cars directly with our listed suppliers at the best rates guaranteed! No mark-ups, no booking fees and no commission. </p>
                    </div>
                    <div class="col-lg-4 row">
                        <div class="col-2 ">

                            <img src="images\svg\round.png" style="width:100%;" srcset="">

                        </div>
                        <div class="col-10 ">
                            <h5 class=" pt-2">Rent a Car across the Dubai</h5>
                        </div>
                        <div>Combining all our suppliers’ rental fleet, you can choose from car types, brands, models available in the Dubai. You can rent a small car such as a Kia Picanto starting at AED 90 / day and even the Lamborghini Urus for AED 3000 / day or a Rolls Royce Cullinan for AED 3800 / day.</div>
                    </div>
                    <div class="col-lg-4 row">
                        <div class="col-2 ">

                            <img src="images\svg\round.png" style="width:100%;" srcset="">

                        </div>
                        <div class="col-10 ">
                            <h5 class=" pt-2">Rent a Car across the Dubai</h5>
                        </div>
                        <div>Combining all our suppliers’ rental fleet, you can choose from car types, brands, models available in the Dubai. You can rent a small car such as a Kia Picanto starting at AED 90 / day and even the Lamborghini Urus for AED 3000 / day or a Rolls Royce Cullinan for AED 3800 / day.</div>
                    </div>
                    <div class="col-lg-4 row">
                        <div class="col-2 ">

                            <img src="images\svg\round.png" style="width:100%;" srcset="">

                        </div>
                        <div class="col-10 ">
                            <h5 class=" pt-2">Rent a Car across the Dubai</h5>
                        </div>
                        <div>Combining all our suppliers’ rental fleet, you can choose from car types, brands, models available in the Dubai. You can rent a small car such as a Kia Picanto starting at AED 90 / day and even the Lamborghini Urus for AED 3000 / day or a Rolls Royce Cullinan for AED 3800 / day.</div>
                    </div>
                </div>
                <div class="cantenar-fluid p-0" style="margin-bottom:-92px !important; ">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="wevbg wv2">
                        <path style="fill: #fff" d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                    </svg>
                </div>
            </section>
            <section class="mt-lg-0" id="map_section">
                <div class="row pe-lg-5 ps-lg-5 pe-md-3 ps-md-3">
                    <h4 style="font-weight: 700; font-size: 18px; border-bottom: 1px dotted  black ">Find the best car rental company for you</h4>
                    <div class="col-lg-6 ">

                        <ul>
                            <li> LUXURY DUBAI CARS RENTALS.com is the first-ever global car rental and leasing marketplace. We work with 200+ local car rental companies in Dubai. You can choose among their 2000+ verified cars to find the best rental car for you.</li>
                            <li>d cheap car rental deals and discounts for all types of cars: be it for personal or business use. Access competitive, commission-free car rental service in Dubai, Abu Dhabi, Sharjah and Ajman.</li>
                            <li>Our car rental partners’ fleet include every car you’ve ever dreamed of. From high-end supercar rentals such as Ferrari, Lamborghini and Rolls Royce to luxury SUVs Range Rover, Mercedes Benz and even economy cars such as Kia Picanto, Nissan Sunny and Renault Duster.</li>
                        </ul>

                    </div>
                    <div class="col-lg-6 row justify-content-end">
                        <div class="col-auto">
                            <img src="images\gallery\1699258503dubai-1.webp" alt="">
                        </div>

                    </div>
                </div>
            </section>
            <section>
                <div class="row  p-lg-5 ">
                    <div class="ps-5 p-lg-0 p-sm-3 ps-sm-3" style="border-bottom: 1px dotted black;">
                        <h4>Documents Required for Car Rental in the UAE</h4>
                    </div>
                    <p class="p-4 p-lg-0 p-md-3 ps-sm-4 pe-sm-4" style="font-size:13px;">
                        If you’re planning a trip to the UAE, you’ll find that all major attractions in the UAE are spread far and wide. From unique shopping destinations like the Mall Of The Emirates, popular landmarks such as the Sheikh Zayed Grand Mosque in Abu Dhabi to exquisite hotels and resorts located in Ras Al Khaimah, the best way to get around is by car. You are eligible to rent a car across the emirates provided you have the below mentioned valid documents with you:
                    </p>
                    <div class="ps-5 ps-sm-5 mt-lg-5 me-lg-5 row  justify-content-center">

                        <div class="col-lg-5 p-0 border me-lg-3 mt-lg-0 mt-3">
                            <div style="background-color:#eeeeee;" class="text-center p-2">For UAE Residents</div>
                            <div class="row pt-4 ">
                                <div class="col-4 ">
                                    <img src="images/all_brand_img/1675327062rent-a-car-uae-resident.jpg" style="max-width:150px;">
                                </div>
                                <div class="col-8">
                                    <ul class="ul-style-2 ">
                                        <li>UAE Driving License</li>
                                        <li>Emirates ID<br> (Residential Visa may be acceptable)</li>
                                        <li>Minimum Driver’s Age 18 years</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 p-0 border mt-lg-0 mt-3">
                            <div style="background-color:#eeeeee;" class="text-center p-2">For Tourists visiting the UAE</div>
                            <div class="row pt-4">
                                <div class="col-4 ">
                                    <img src="images/all_brand_img/1675327062rent-a-car-tourist-uae.jpg" style="max-width:150px;">
                                </div>
                                <div class="col-8">
                                    <ul class="ul-style-2 ">
                                        <li>Passport</li>
                                        <li>Visit Visa</li>
                                        <li>Home Country Driving License</li>
                                        <li>International Driving Permit (IDP)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid bg-dark text-light pt-5">
                <div class="container">
                    <div class="">
                        <div class="" id="imptips">
                            <h2>Important tips for renting a car in Dubai</h2>
                            <div class="p-3" style="font-size: 14px;">
                                <ul class="" >
                                    <li>
                                        <p>Choose a company that’s located near you or one that offers ‘fast delivery’ in your location if you need the car with pick-up and delivery service</p>
                                    </li>
                                    <li>
                                        <p>At the time of pick up, check for existing dents and scratches. Best to shoot a video circling the car and take close-up pictures of existing damages, if any, share them with the service provider instantly to avoid any misunderstandings that may arise later</p>
                                    </li>
                                    <li>
                                        <p>Always best to provide the security deposit by credit card as a pre-authorization block, which automatically releases after 20-30 days from the end date of your rental</p>
                                    </li>
                                    <li>
                                        <p>Please be sure to sign the car rental agreement issued under the same company name as advertised on OneClickDrive</p>
                                    </li>
                                    <li>
                                        <p>Incase of any issue with the selected car rental company, you may contact the OneClickDrive Team with proof of booking and other details</p>
                                    </li>
                                </ul>
                            </div>
                            <h2>Find cheap car rental deals and discounts</h2>
                            <div class="p-3" style="font-size: 14px;">
                                <ul class="">
                                    <li>
                                        <p>Renting a car online is always the ideal way to find a cheap rent a car in Dubai. However, be sure to check if you’re dealing with the actual car rental supplier or an agent. Your cost from the direct supplier would naturally be cheaper whereas rental rates offered by agents would be higher as they include a commission</p>
                                    </li>
                                    <li>Through OneClickDrive, you’re sure to find the cheapest car rentals near you in an easy and comprehensive way. You can browse live car rental offers from multiple car rental service providers and decide to go ahead with the one offering the best deal to you</li>
                                </ul>
                            </div>
                            <h2>Top benefits for renting a car with a driver in Dubai</h2>
                            <div class="p-3" style="font-size: 14px;">
                                <p class="">There are a multitude of advantages of hiring a car and driver in the Emirates, the top three include:</p>
                                <ul class="f-14 list-disc">
                                    <li><strong>Sit back and relax</strong></li>
                                </ul>
                                <p class="list-disc">Let our professional chauffeur drive you and worry about the traffic. They know the best routes to make your journey comfortable.</p>
                                <ul class="f-14 list-disc">
                                    <li><strong>Pre-decided rates</strong></li>
                                </ul>
                                <p class="list-disc">Our prices are transparent. They are all-inclusive of the no. of hours booked within the city limits.</p>
                                <ul class="f-14 list-disc">
                                    <li><strong>Top class concierge</strong></li>
                                </ul>
                                <p class="list-disc">OneClickDrive connects you to only the most reputed and dependable chauffeur service companies based in the UAE.</p>
                                <p class="list-disc">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="p-3 p-lg-5">
                <h4 class="pt-lg-0 pt-4 pb-4">Frequently Asked Questions</h4>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b style="font-size:14px;" class="ms-2"> How can I rent a car using LUXURY DUBAI CARS RENTALS?</b>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Renting a car through LUXURY DUBAI CARS RENTALS is simple. Just visit our website or download the mobile app, select your desired location, browse through the available car options, compare prices and make a reservation. Our platform provides a convenient and hassle-free way to rent a car directly with the car rental companies.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b style="font-size:14px;" class="ms-2">What is the best way to get the best car rental offer?</b>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To get the best car rental offer, we recommend comparing prices and deals from different car rental providers. LUXURY DUBAI CARS RENTALS offers a wide range of options from various suppliers, allowing you to compare prices, vehicle types, and rental terms. Booking in advance and being flexible with your dates can also help you secure better deals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingThree">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What are the advantages of renting a car compared to using public transport?</b>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Renting a car offers several advantages over using public transport:</p>
                                <ul>
                                    <li>
                                        <p class="f-14">Flexibility and freedom to explore at your own pace.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Convenience, especially for traveling with luggage or in groups.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Time-saving, as you can avoid waiting for public transport.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Privacy and comfort in your own vehicle.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Access to remote or less accessible locations.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Ability to customize your itinerary and make spontaneous stops. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingFour">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Is LUXURY DUBAI CARS RENTALS a free service?</b>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, LUXURY DUBAI CARS RENTALS is a free service. We do not charge any fees for using our platform to browse and compare rental options. The rental fees are payable directly to the car rental provider you choose. Additionally, LUXURY DUBAI CARS RENTALS offers support to registered users should they have an issue with a listed supplier such as deposit release delays.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingFive">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What is the best mode of transport in Dubai?</b>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Whether you’re here for a holiday or residing in the UAE, rental cars offer the much-needed flexibility and convenience. The world-class infrastructure Dubai has to offer can be experienced the right way only with a car. You can rent a car based on your budget, preference, requirement and even have it delivered to your location.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingsix">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What is the cost of car rental in Dubai?</b>
                            </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The cost of car rental in Dubai depends on the type of car, the model as well as the duration you want to rent it for. However, the average cost can range from AED 1500 per month for an economy car such as Nissan Sunny and upto AED 3500 per day for high-end sports cars.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingzeven">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What are my overheads (additional costs) in renting a car?</b>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingzeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Your overheads may include salik (toll), fuel and parking on your own as per your usage. Delivery and pick-up for the rental car might be charged extra.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingeight">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What is the minimum eligible age to rent a car in the UAE?</b>
                            </button>
                        </h2>
                        <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The legal age limit is 21 years and above to rent a car across the UAE. However, it’s completely dependent on the car rental company you’re hiring from. Some car rental companies require the customer to be 23 years of age or above while some even allow 18 year olds to hire a car. Please use the “minimum age required” filter on our marketplace to find the car for you.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingnine">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What is the cost of renting a car for one month?</b>
                            </button>
                        </h2>
                        <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                A: The cost of renting a car for one month can vary depending on factors such as the car type, rental location, duration, and seasonal demand. It is best to check the specific rates and availability on LUXURY DUBAI CARS RENTALS or contact the car rental providers directly through our platform for accurate pricing information.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingten">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What are the benefits of renting a car on monthly-basis in Dubai?</b>
                            </button>
                        </h2>
                        <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <p class="f-14">Much cheaper and faster than using public transport.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Cost efficient as you don’t pay the rising insurance and registration costs.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">As good as your own car without the hassle of maintaining it.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Monthly rates are heavily discounted as compared to day-basis rentals.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Choice of multiple suppliers offering competitive rates and package deals.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Option to upgrade or downgrade every month.</p>
                                    </li>
                                </ul>
                                <p class="f-14"><a href="http://localhost/Rentaly%20HTML/cars.php">Browse monthly car rental offers →</a></p>
                                <p class="f-14">Likewise, you can also consider to <a href="http://localhost/Rentaly%20HTML/cars.php">rent a car for a week →</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingeleven">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Do I have to pay a booking fee or commission to rent a car?</b>
                            </button>
                        </h2>
                        <div id="collapseeleven" class="accordion-collapse collapse" aria-labelledby="headingeleven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Unlike other websites or apps, <b><a href="https://luxurydubaicarsrental.com/">LUXURY DUBAI CARS RENTALS </a></b> is a free-of-charge service. You don’t pay any commission, booking fee or mark-ups to us. You can simply contact, book and pay the car rental provider, directly!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingtwelve">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Can I rent a car in Dubai without a security deposit?</b>
                            </button>
                        </h2>
                        <div id="collapsetwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                A refundable security deposit is required by the car rental agency, mainly, incase of RTA fines, damage to the car (if not covered by insurance) and car theft. The amount is held for upto 30 days as RTA / Police fine reports are sometimes delayed. A refundable security deposit is required by the car rental agency, mainly, incase of RTA fines, damage to the car (if not covered by insurance) and car theft. The amount is held for upto 30 days as RTA / Police fine reports are sometimes delayed.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingtherteen">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirteen" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Can I rent a car without a credit card?</b>
                            </button>
                        </h2>
                        <div id="collapsethirteen" class="accordion-collapse collapse" aria-labelledby="headingtherteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, some car rental companies accept car rental payment as well as security deposit by cash and/or debit card. However, security deposit by credit card as a pre-authorization block is recommended as it’s automatically released by the bank after 30 days.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingfourteen">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefourteen" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Can anyone else drive the rental car other than me?</b>
                            </button>
                        </h2>
                        <div id="collapsefourteen" class="accordion-collapse collapse" aria-labelledby="headingfourteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Only the renter is allowed to drive the rental car as the car insurance is assigned to his name. However, an additional driver can be added to the insurance coverage allowing him/her to drive the same car as well. Be sure to do this at the start of rental for which additional charges may apply. !
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingfifteen">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefifteen" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Can I hire a driver for my rental car?</b>
                            </button>
                        </h2>
                        <div id="collapsefifteen" class="accordion-collapse collapse" aria-labelledby="headingfifteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f-14">
                                    <a href="#">Safe Driver Service</a> is available for your car to be driven for a flat fee of AED 80 across Dubai. Alternatively, if you need a car with a driver service, check out our <a href="#">Chauffeur Service</a> options for you. Service is available 24x7 across the UAE.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingsixteen">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesixteen" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">How can I find rent a car near me?</b>
                            </button>
                        </h2>
                        <div id="collapsesixteen" class="accordion-collapse collapse" aria-labelledby="headingsixteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f-14">The easiest way to find car rentals near you is, of course, through Google or Google Maps. However, LUXURY DUBAI CARS RENTALS.com takes your car rental search to another level as you can browse live car rental offers near you. You can further filter offers by Shop Locations and Delivery Available in your locality. Simply search by your area name e.g. Al Quoz or Business Bay.</p>
                                <p class="f-14">You can also use the filter feature on our marketplace and search a car based on type, model, price and more!</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingseventeen">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseventeen" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Can I rent a car with a new driving license in the UAE? </b>
                            </button>
                        </h2>
                        <div id="collapseseventeen" class="accordion-collapse collapse" aria-labelledby="headingseventeen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f-14">If you have a new driving license that's less than six months old, please check with the car rental agent as the requirement varies based on the insurance policy of the respective car. Some are available for new driving license holders at a higher security deposit amount, with limited insurance coverage and liable for higher excess fee while others are only available with older licenses.</p>
                                <p class="f-14">All cars can be rented with a valid driving license older than six months. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingeighteen">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Can I rent a car for AED 500 per month in Dubai? </b>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingeighteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f-14">The lowest available monthly car rental options start from AED 1490 on LUXURY DUBAI CARS RENTALS. Special seasonal offers bring down the prices to AED 1290 per month but they are hard to come by and might include hidden charges. This is mainly because it's not feasible for a licensed car rental company to provide a car at a lower rate.</p>
                                <p class="f-14">In case you're getting a car for an unbelievable AED 500 monthly rental price, it's too good to be true. Please be cautious of such offers and the car rental companies you're planning to hire from, especially since you will be putting down a security deposit of AED 1000 or so which is to be refunded 30 days after you return the car. </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingnineteen">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeightteen" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Are there any specific requirements for renting a car with a new driving license? </b>
                            </button>
                        </h2>
                        <div id="collapseeightteen" class="accordion-collapse collapse" aria-labelledby="headingnineteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The specific requirements for renting a car with a new driving license may vary depending on the rental company and the location. Generally, a valid driving license is required, and some car rental providers may have additional age restrictions or minimum driving experience criteria. It is advisable to check with the rental company directly to understand their requirements for renting a car with a new driving license.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingtwenty">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenineteen" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">Can I rent a car with a driver? </b>
                            </button>
                        </h2>
                        <div id="collapsenineteen" class="accordion-collapse collapse" aria-labelledby="headingtwenty" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, you can rent a car with a driver through LUXURY DUBAI CARS RENTALS. We offer options for chauffeur-driven cars, which can be ideal if you prefer to sit back, relax, and let a professional handle the driving for you. This service provides convenience and peace of mind during your rental period.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4" style="border-radius: 15px; ">
                        <h2 class="accordion-header " id="headingtwentyone">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwenty" aria-expanded="false" aria-controls="collapseThree">
                                <b style="font-size:14px;" class="ms-2 p-0">What are some essential tips for a smooth car rental experience? </b>
                            </button>
                        </h2>
                        <div id="collapsetwenty" class="accordion-collapse collapse" aria-labelledby="headingtwentyone" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f-14">Here are some essential tips for a smooth car rental experience:</p>
                                <ul>
                                    <li>
                                        <p class="f-14">Ensure you have a valid driving license.</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p class="f-14">Read and understand the rental terms and conditions.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Inspect the car thoroughly before accepting it.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Take note of any existing damages and inform the rental company.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Return the car on time and in the same condition as received.</p>
                                    </li>
                                    <li>
                                        <p class="f-14">Familiarize yourself with the local traffic rules and regulations. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section id="join" class="pt-5" style="background:linear-gradient(rgb(0 0 0 / 50%), rgb(3 3 3 / 50%)), url(images/all_brand_img/banner.webp); background-size: contain, cover; max-height:163px;">
                <a href="#" class="">

                    <p style="font-size:30px; font-weight: 300; text-transform: uppercase;" class="text-white text-center">ARE YOU A CAR RENTAL COMPANY? JOIN US </p>
                    <p style="font-size:20px; font-weight: 300; text-transform: uppercase;" id="inner_p" class="text-white text-center ">List your car's with the UAE's biggest rental & leasing marketplace!</p>
                </a>
            </section>

        </div>
        
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="" style="margin-left:30px; margin-right:30px;">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <!--<img src="images/light_logo.png" style="max-width:150px; max-height:90px; width:150px;">-->
                            <div class="col-lg-12">
                                <p class="text-center" style="font-size:20px; font-family: myFonts; line-height: 0.9; "><b>LUXURY<br>DUBAI CARS<br>RENTALS</b></p>

                            </div>
                            <p style="font-size:14px;" class="text-center">Find the best deals for budget and luxury / sports car rentals, chauffeur service and driver on hire service. Headquartered in Dubai, our services are available in select cities across the City.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 row">
                        <div class="col-lg-6">
                            <div class="widget">
                                <h5>For Inquiries & Support</h5>
                                <address class="s1">
                                    <span style="font-size:14px;"><i class="id-color fa fa-phone fa-lg"></i>+971 564329718</span>
                                    <span style="font-size:14px;"><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">blackfoxluxurycar@gmail.com</a></span>

                                </address>
                                <h5>For Car with Driver</h5>
                                <address class="s1">

                                    <span style="font-size:14px;"><i class="id-color fa fa-phone fa-lg"></i>+971 564329718</span>
                                    <span style="font-size:14px;"><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">bookings@luxurydubaicarsrental.com</a></span>

                                </address>
                                <h5>Advertise With Us</h5>
                                <address class="s1">

                                    <span style="font-size:14px;"><i class="id-color fa fa-phone fa-lg"></i>+971 564329718</span>
                                    <span style="font-size:14px;"><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">info@luxurydubaicarsrental.com</a></span>

                                </address>
                            </div>
                        </div>
                        <div class="col-lg-3 ">
                            <h5>Quick Links</h5>


                            <div class="widget" style="font-size:15px;">
                                <ul>
                                    <li><a href="#">Dubai Car Rental FAQs</a></li>
                                    <li><a href="#">Rent by Brand</a></li>
                                    <li><a href="#">Yacht Rental</a></li>
                                    <li><a href="#">Car with Driver</a></li>
                                    <li><a href="#">Car Rental Directory</a></li>

                                </ul>

                            </div>



                        </div>
                        <div class="col-lg-3">
                            <h5>Let Us Help You</h5>

                            <div class="widget" style="font-size:15px;">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Contact Us</a></li>

                                </ul>

                            </div>


                        </div>
                        <div class="col-lg-8" style="margin-top:-8%; margin-bottom:3%;">
                            <a>
                                <div class="row" style=" border-radius:10% !important;">
                                    <div class="col-3">
                                        <img src="images/cars/jeep-renegade.jpg" width="100%" height="100%">
                                    </div>
                                    <div class="col-8" style="background-color:#78ca5c;  margin-left:-3%; font-size:14px;">
                                        <p>ARE YOU A CAR RENTAL COMPANY?<br> <button type="button" class="btn btn-sm btn-light">JOIN US</button></p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Address</h5>
                            <p style="font-size:14px;">Tamani Arts, Business Bay, Dubai</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3610.1804075382925!2d55.274009704589844!3d25.1971378326416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4281c2def5d3%3A0x2cae174114a73ced!2sBurj%20Khalifa%20Residences!5e0!3m2!1sen!2s!4v1715320100805!5m2!1sen!2s" width="auto" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg mt-1"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg mt-1"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg mt-1"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg mt-1"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg mt-1"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="">
                                    <a href="index.html" class="row">
                                        Copyright 2024 -<div class="col text-center">
                                            <p class="text-center" style="font-family: myFonts; font-size:10px; line-height: 0.9;">LUXURY<br>DUBAI CARS<br>RENTALS</p>

                                        </div>
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    console.log("Script is loaded"); // Debug: Check if the script is loaded

    function updateRates() {
        console.log("updateRates function is called"); // Debug: Check if the function is called

        var currencySelect = document.querySelector(".currencySelect");
        var selectedRate = currencySelect.value;
        var selectedCurrency = currencySelect.options[currencySelect.selectedIndex].text;

        console.log("Selected Rate: " + selectedRate); // Debug: Check the selected rate value

        var productContainers = document.querySelectorAll(".col-lg-12");

        productContainers.forEach(function(productContainer) {
            var dailyRateElement = productContainer.querySelector(".daily-rate");
            var weeklyRateElement = productContainer.querySelector(".weekly-rate");
            var currencyNameElements = productContainer.querySelectorAll(".currency_name");

            if (dailyRateElement && weeklyRateElement) {
                var originalDailyRate = parseFloat(dailyRateElement.getAttribute('data-original-rate'));
                var originalWeeklyRate = parseFloat(weeklyRateElement.getAttribute('data-original-rate'));

                var newDailyRate = originalDailyRate * selectedRate;
                var newWeeklyRate = originalWeeklyRate * selectedRate;

                dailyRateElement.innerHTML = newDailyRate.toFixed(2) + "/Day";
                weeklyRateElement.innerHTML = newWeeklyRate.toFixed(2) + "/Week";

                currencyNameElements.forEach(function(element) {
                    element.innerHTML = selectedCurrency;
                });
            }
        });
    }

    var currencySelectElements = document.querySelectorAll('.currencySelect');

    currencySelectElements.forEach(function(select) {
        select.addEventListener('change', updateRates);
    });

    // Initial call to set the rates on page load
    updateRates();
});



    </script>
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script>
    
        // Delay the execution of the script by 2000 milliseconds (2 seconds) after the page has loaded
        setTimeout(function() {
            // Select all <a> tags in the document
            const allLinks = document.querySelectorAll('a');

            // Loop through each <a> tag
            allLinks.forEach(function(link) {
                // Check if the href attribute matches the specified link
                if (link.getAttribute('href') === 'https://elfsight.com/google-reviews-widget/?utm_source=websites&utm_medium=clients&utm_content=google-reviews&utm_term=localhost&utm_campaign=free-widget') {
                    // Remove the link from the DOM
                    link.remove();
                }
            });
        }, 2000); // 2000 milliseconds = 2 seconds
    </script>
    


</body>

</html>