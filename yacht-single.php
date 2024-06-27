<?php
include 'php/db_connect.php';
$_GET['deletid'];
if (isset($_GET['deletid'])) {
    $id = $_GET['deletid'];
    $sql = "SELECT * FROM yachts WHERE sno = $id";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<?php
include 'php/db_connect.php';
//$getdata=mysqli_query($conn, "SELECT * FROM `yachts`"); 
$getdata = mysqli_query($conn, "SELECT * FROM `yachts` ORDER BY sno DESC");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>LUXURY DUBAI CARS RENTALS/<?php echo $row['Yacht_brand']; ?></title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <!-- Google API -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        /*fon family */
        body {
            font-family: "open sans", Tahoma, Arial, helvetica, sans-serif !important;

        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "open sans", Tahoma, Arial, helvetica, sans-serif !important;
        }

        p {
            font-family: "open sans", Tahoma, Arial, helvetica, sans-serif !important;
        }

        /*end*/
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background: #78ca5c !important;
        }

        .gallery-container {
            margin: 10px;
            border-radius: 15px;

            padding: 0px;
            overflow: hidden;
            display: grid;

            grid-template-columns: 2fr 2fr 1fr 2fr;

            gap: 10px;
            grid-auto-rows: 160px;

        }

        .gallery-item {

            width: 100%;

            height: 100%;

            position: relative;

        }

        .image {

            width: 100%;

            height: 100%;

            overflow: hidden;

        }

        .image img {

            object-fit: cover;
            width: 100%;
            height: 330px;

            object-position: 50% 50%;

            transition: .3s linear;

            cursor: pointer;

        }

        .image img:hover {

            transform: scale(1.3);

        }

        .gallery-container div:nth-child(1) {
            grid-column-start: auto;
            grid-row-start: 1;
            grid-row-end: 3;

        }

        .gallery-container div:nth-child(2) {

            grid-column-start: auto;
            grid-row-start: 1;
            grid-row-end: 3;

        }

        .gallery-container div:nth-child(3) {

            display: block;
            grid-row-start: 1;
            grid-row-end: 2;

        }

        .gallery-container div:nth-child(4) {

            display: block;
            grid-row-start: 2;
            grid-row-end: 3;

        }

        .gallery-container div:nth-child(5) {


            grid-column-start: auto;
            grid-row-start: 1;
            grid-row-end: 3;

        }

        .gallery-container div:nth-child(6) {

            display: none;

        }

        .gallery-container div:nth-child(7) {


            display: none;

        }

        .gallery-container div:nth-child(8) {


            display: none;

        }

        .gallery-container div:nth-child(9) {


            display: none;

        }

        .gallery-container div:nth-child(10) {


            display: none;

        }

        .gallery-container div:nth-child(11) {


            display: none;

        }

        .custom-tooltip .tooltip-inner {

            font-size: 12px;

        }

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
        /*nav bar styling */

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

        #curen-drop option {
            background-color: white;
            /* Set background color for options */
            color: black;

        }

        .hov a div div img {
            width: 100%;
        }

        #yat2 {
            display: none;
        }

        #yat {
            display: inline;
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

        #cars-mobile {
            display: none;
        }

        #cars-mobile-btn {
            display: none;
        }

        #car-descktop {
            display: flex;
        }

        .gallery-mobile-container {
            display: none;
        }

        /* 767 mobile styling */
        .mobile-section-tab {
            display: none;
        }

        @media (max-width: 767px) {

            .hov a div div img {
                width: 50px;
            }

            header {
                background: white !important;
            }

            header.header-mobile.menu-open {
                background: white !important;

            }

            #mainmenu {
                height: auto;
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


            #yat {
                display: none;
            }

            #yat2 {
                display: inline;
            }




            .pad {
                padding-left: 30px !important;
            }

            .mobile-section-tab {
                display: block;
            }

            .laptop-section-tab {
                display: none;

            }

            .gallery-container {

                display: none;

            }

            .gallery-mobile-container {
                display: block;
            }

            .gallery-mobile-container div:nth-child(2) {

                display: none;

            }

            .gallery-mobile-container div:nth-child(3) {

                display: none;

            }

            .gallery-mobile-container div:nth-child(4) {

                display: none;

            }

            .gallery-mobile-container div:nth-child(5) {
                display: none;

            }

            .gallery-mobile-container div:nth-child(6) {

                display: none;

            }

            .gallery-mobile-container div:nth-child(7) {


                display: none;

            }

            .gallery-mobile-container div:nth-child(8) {


                display: none;

            }

            .gallery-mobile-container div:nth-child(9) {


                display: none;

            }

            .gallery-mobile-container div:nth-child(10) {


                display: none;

            }

            .gallery-mobile-container div:nth-child(11) {


                display: none;

            }

            .hide_price {
                display: none;
            }

            .feature {
                display: none;
            }


            .stickey {
                position: fixed;
                top: 90%;
                /* Adjust the top distance as needed */
                left: 50%;
                /* Center the element horizontally */
                transform: translateX(-50%);
                /* Adjust for centering */
                z-index: 1000;
                background-color: #fff;
                /* Background color for the sticky section */
                padding: 10px;
                /* Padding to provide spacing */
                border-radius: 5px;
                /* Rounded corners */
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
                /* Box shadow for a subtle effect */
                width: 100%;
                /* Adjust the width as needed */
                max-width: 600px;
                /* Set a maximum width for responsiveness */
            }

            .pad {
                padding-left: 20px;

            }


            h2 {

                font-size: 30px !important;
            }

            #first_hed {
                font-size: 35px;
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
                max-height: 350px !important;
            }

            #section-hero {
                min-height: 0px !important;
            }



            #map_section {
                padding: 20px;
            }

            #map_section div div div img {
                max-width: 304px !important;
            }



            #section-brands {
                margin-top: -20px !important;
            }

            #section-brands div div div p {
                font-size: 10px;
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



            #section-hero {
                max-height: 440px;
            }

            #first-section-cars div div div p {
                font-size: 12px;


            }

            #first-section-cars {
                margin-bottom: -200px;
            }

            #first-section-cars div p {
                font-size: 12px;
                padding-left: 20px;
                padding-right: 20px;
                margin-bottom: -40px;

            }



            #cars-mobile {
                display: flex;
            }

            #cars-mobile-btn {
                display: block;
            }

            #car-descktop {
                display: none;
            }

            #section-car-details {
                padding-top: 70px !important;
            }
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
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
                            <lable class=""> &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="auto" style="max-width:30; max-height:30;" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                </svg>&nbsp;</lable>
                            <select id="currencySelect" style=" background-color:transparent; color:white; border:none;">
                                <option selected value="AED">AED</option>
                                <option value="USD">USD</option>
                                <option value="GBP">GBP</option>
                                <option value="EUR">EUR</option>
                                <option value="SAR">SAR</option>
                                <option value="KWD">KWD</option>
                                <option value="RUB">RUB</option>
                                <option value="INR">INR</option>
                                <option value="PKR">PKR</option>
                                <option value="OMR">OMR</option>
                            </select>
                            &nbsp; &nbsp;
                            <!-- Load currencyapi-js library -->

                            <script>
                                document.addEventListener('DOMContentLoaded', async function() {
                                    try {
                                        var apiKey = 'cur_live_2F8OrHwVnUeUnnqpRlKqge3YFdrAafijB8qELSpf';
                                        var baseCurrency = 'AED'; // Your default currency
                                        var selectedCurrency = baseCurrency; // Initially set to default currency

                                        // Fetch currency rates from the API
                                        var response = await axios.get('https://api.currencyapi.com/v3/latest?apikey=' + apiKey + '&base_currency=' + baseCurrency);
                                        var data = response.data.data;

                                        if (data) {
                                            var currencySelect = document.getElementById('currencySelect');
                                            var ratesChangeSpans = document.querySelectorAll('.rates_change');
                                            var ratesSpans = document.querySelectorAll('.new_rates');
                                            currencySelect.addEventListener('change', function() {
                                                selectedCurrency = currencySelect.value; // Update selected currency
                                                updateRates(selectedCurrency);
                                            });

                                            // Function to update rates in all spans
                                            function updateRates(currency) {
                                                var rate = data[currency].value;

                                                ratesChangeSpans.forEach(function(span, index) {
                                                    var currentValue = parseFloat(span.innerHTML); // Convert innerHTML to a numeric value
                                                    var newValue = currentValue * rate;
                                                    // Display new converted value

                                                    // Update corresponding new_rates span with the calculated value
                                                    var newRateSpan = ratesSpans[index];
                                                    newRateSpan.textContent = newValue.toFixed(2); // Update text content of new_rates span
                                                });
                                            }

                                            // Initial update with default currency
                                            updateRates(selectedCurrency);
                                        } else {
                                            console.log('Failed to fetch currency rates.');
                                        }
                                    } catch (error) {
                                        console.error('Error fetching currency rates:', error);
                                    }
                                });

                                document.addEventListener('DOMContentLoaded', function() {
                                    var currencySelect = document.getElementById('currencySelect');

                                    currencySelect.addEventListener('change', function() {
                                        var selectedCurrency = currencySelect.options[currencySelect.selectedIndex].text;

                                        // Get all elements with the class .currency_name
                                        var currencyNameElements = document.querySelectorAll('.currency_name');

                                        // Loop through each currency name element
                                        currencyNameElements.forEach(function(currencyNameElement) {
                                            // Update the text content of the currency name element
                                            currencyNameElement.textContent = selectedCurrency;
                                        });
                                    });
                                });
                            </script>




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
                                            <img class="logo-1" src="images/light_logo.png" style="max-height:100px; margin-bottom: -40% !important; margin-top: -40% !important;" alt="">
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
                                        <a class="menu-item " href="cars.php"><i class="bi bi-car-front-fill me-1"></i> Rent a car</a>
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
                                                                    <img src="images/all_brand_img/bentley.webp" alt="">
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
                                                        <a href="cars.php?brand=Ferrari" style="all: unset;">
                                                            <div class="row">
                                                                <div class="col-4 align-items-center justify-content-center"><img src="images/all_brand_img/ferrari.webp" alt=""></div>
                                                                <div class="col-8">
                                                                    <h6>Ferrari</h6>
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
                                                        <a href="cars.php?brand=Rolls Royce" style="all: unset;">
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
                                            <!-- <img src="images/all_brand_img/yacht (1).png" id="yat" width="25px" >-->
                                            <img src="images/all_brand_img/yacht.png" id="" width="25px">
                                            Yacht Rental</a>

                                    </li>


                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="login.html" class="btn-main">Status</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin 
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">-->
            <!--<div class="col-md-12 text-center">
									<h1>Vehicle Fleet</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>-->
            <!-- section close -->

            <section id="section-car-details" style="margin-top:150px;">
                <div class="container-fluid p-2 p-lg-5 pb-lg-0">
                    <div class="row g-5">
                        <h3 class="text-uppercase mt-0 p-2 p-lg-0 pad"><?php echo $row['Yacht_brand']; ?>
                            <?php //echo $row['car_brand']; 
                            ?> <?php echo $row['length_yacht']; ?></h3>
                        <div class="gallery-container">
                            <div class="image">

                                <a href="/dist/php/Yachts_listing_pics/<?php echo $row['feature_image']; ?>" class="fancybox" data-lightbox="image-1" data-title="My caption" data-fancybox="image-1">

                                    <img src="/dist/php/Yachts_listing_pics/<?php echo $row['feature_image']; ?>" data-lightbox="image-1">

                                </a>

                            </div>
                            <?php
                            $picNamesJson = $row['car_pic'];
                            $picNamesArray = json_decode($picNamesJson, true);

                            foreach ($picNamesArray as $picName) {
                            ?>
                                <div class="image">

                                    <a href="/dist/php/Yachts_listing_pics/<?php echo $picName; ?>" class="fancybox" data-lightbox="image-1" data-title="My caption" data-fancybox="image-1">

                                        <img src="/dist/php/Yachts_listing_pics/<?php echo $picName; ?>" data-lightbox="image-1">

                                    </a>

                                </div>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="gallery-mobile-container">
                            <div>

                                <a href="/dist/php/Yachts_listing_pics/<?php echo $row['feature_image']; ?>" class="fancybox" data-lightbox="image-1" data-title="My caption" data-fancybox="image-2">

                                    <img src="/dist/php/Yachts_listing_pics/<?php echo $row['feature_image']; ?>" style="width:100%;" data-lightbox="image-2">

                                </a>

                            </div>
                            <?php
                            $picNamesJson = $row['car_pic'];
                            $picNamesArray = json_decode($picNamesJson, true);

                            foreach ($picNamesArray as $picName) {
                            ?>
                                <div>

                                    <a href="/dist/php/Yachts_listing_pics/<?php echo $picName; ?>" class="fancybox" data-lightbox="image-1" data-title="My caption" data-fancybox="image-2">

                                        <img src="/dist/php/Yachts_listing_pics/<?php echo $picName; ?>" style="width:100%;" data-lightbox="image-2">

                                    </a>

                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-lg-7">
                            <div class=" row p-lg-3 pb-0">
                                <h3 class="text-uppercase mt-0 p-2 p-lg-0"><?php echo $row['Yacht_brand']; ?>
                                    <?php //echo $row['car_brand'];
                                    ?> <?php echo $row['length_yacht'];
                                        ?></h3>
                                <div class="row border-top border-bottom mt-lg-3 pt-lg-4 pb-lg-4">
                                    <div class="col-lg-6 border-right">
                                        <p>From </p>
                                        <h3 class="text-uppercase"><?php echo $row['price_per_hour']; ?> <span>AED</span><span> /DAY</span></h3>

                                    </div>
                                    <!--<div class="col-lg-6 fs-5 text text row">
                                        <div class="col-lg-6" style="font-size:13px; color:black;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Great! This Yacht is available for Minimum <?php //echo $row['minimum_hour_booking']; 
                                                                                                                                                                                                                                                    ?> hours."><i class="bi bi-info-circle"></i> Minimum <?php //echo $row['minimum_hour_booking']; 
                                                                                                                                                                                                                                                                                                            ?> Hours rental
                                        </div>
                                        <div class="col-lg-6" style="font-size:13px; color:black;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Basic insurance is included in all yachts rentals as per regulations. Additional insurance coverage options may be available at an extra charge."><i class="bi bi-check2"></i> Insurance included
                                        </div>
                                        <div class="col" style="font-size:13px; color:black;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Visa-card payment accepted"><i class="bi bi-credit-card"></i> Visa card payment accepted
                                        </div>
                                    </div>-->

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 de-spec ">

                                        <div class="d-row">
                                            <span class="d-title">Maximum <?php echo $row['maximum_guest']; ?> guests </span>
                                            <spam class="d-value " style="float: right;"></spam>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 de-spec ">

                                        <div class="d-row">
                                            <span class="d-title">Minimum <?php echo $row['minimum_hour_booking']; ?> hours</span>
                                            <spam class="d-value " style="float: right;"></spam>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 de-spec ">

                                        <div class="d-row">
                                            <span class="d-title"><?php echo $row['crew_member']; ?> crew members</span>
                                            <spam class="d-value " style="float: right;"></spam>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 mobile-section-tab pad">
                                        <div class="de-price bg-transparent text-center">
                                            <?php
                                            $user_id = $row['user_id'];

                                            $sql_user_id = "SELECT * FROM `admin_login` WHERE `id` = $user_id";
                                            $result_user_id = $conn->query($sql_user_id);

                                            if ($result_user_id->num_rows > 0) {
                                                $user_row = $result_user_id->fetch_assoc();
                                                $user_row['whatsapp_number']; // Output the entire row
                                            } else {
                                                echo "No records found.";
                                            }


                                            ?>
                                            <span class="stickey">
                                                <button class="btn btn-sm mt-1" style="background-color: #ed8413; border-radius:5px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Click to view the supplier’s contact no. and contact them directly">
                                                    <a href="tel:<?php echo $user_row['enquiry_number']; ?>" target="_blank"><i class="bi  bi-telephone-fill " style="font-size: 1.5rem; color: white;"></i></a> </button> &nbsp; &nbsp;
                                                <button class="btn btn-sm mt-1" style="background-color: green; border-radius:5px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Click to connect with the supplier on WhatsApp">
                                                    <a href="https://wa.me/<?php echo $user_row['whatsapp_number']; ?>/?text=urlencodedtext" target="_blank"><i class="bi bi-whatsapp " style="font-size: 1.5rem; color: white; "></i></a></button>&nbsp; &nbsp;
                                                <button class="btn btn-sm mt-1" style="background-color: #4d4d4d; border-radius:5px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Send an instant inquiry to the supplier">
                                                    <a href="mailto:<?php $user_row['enquiry-mail']; ?>" target="_blank"><i class="bi bi-envelope-fill" style="font-size: 1.5rem; color: white; "></i></a></button>

                                            </span>
                                        </div>
                                        <div class="spacer-30"></div>

                                    </div>
                                </div>
                                <h4 class="pt-4"><i class="bi bi-file-earmark-text-fill"></i> YACHT OVERVIEW</h4>
                                <p><?php echo $row['note']; ?></p>

                                <div class="row mt-lg-5 feature">
                                    <h4 class="mb-lg-5">INCLUSIONS</h4>
                                    <div class="ps-4 text-start">

                                        <ul class="ul-style-2 text-start row " style="font-size:14px;">
                                            <?php
                                            $carFeatures = $row['inclutions']; // Assuming $row['car_features'] contains the comma-separated string
                                            $featuresArray = explode(',', $carFeatures); // Split the string into an array

                                            foreach ($featuresArray as $feature) {
                                                echo '<li class="col-3 ">' . $feature . '</li>'; // Display each feature in a list item
                                            }
                                            ?>

                                        </ul>

                                    </div>
                                    <!--<div class="col text-center" style=" font-size:14px;">
                                        <button class="btn  p-2" style="border-radius:30px; background: #78ca5c !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.302c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                            </svg>
                                        </button><br><br>
                                        <?php //echo $row['category']; 
                                        ?>
                                    </div>
                                    <div class="col text-center" style=" font-size:14px;">
                                        <button class="btn  p-2" style="border-radius:30px; background: #78ca5c !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                            </svg>
                                        </button><br><br>
                                        version <?php //echo $row['version']; 
                                                ?>
                                    </div>
                                    <div class="col text-center" style=" font-size:14px;">
                                        <button class="btn  p-2" style="border-radius:30px; font-size:10px; background: #78ca5c !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-suitcase-lg" viewBox="0 0 16 16">
                                                <path d="M5 2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2h3.5A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5H14a.5.5 0 0 1-1 0H3a.5.5 0 0 1-1 0h-.5A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2zm1 0h4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5H3V3zM15 12.5v-9a.5.5 0 0 0-.5-.5H13v10h1.5a.5.5 0 0 0 .5-.5m-3 .5V3H4v10z" />
                                            </svg>
                                        </button><br><br>

                                        Fits <?php //echo $row['boot_capacity']; 
                                                ?> Bag(s)
                                    </div>
                                    <div class="col text-center" style=" font-size:14px;">
                                        <button class="btn  p-2" style="border-radius:30px; background: #78ca5c !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-layers" viewBox="0 0 16 16">
                                                <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0zM8 9.433 1.562 6 8 2.567 14.438 6z" />
                                            </svg>
                                        </button><br><br>
                                        <?php //echo $row['specs']; 
                                        ?>
                                    </div>
                                    <div class="col text-center" style=" font-size:14px;">
                                        <button class="btn  p-2" style="border-radius:30px; background: #78ca5c !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                            </svg>
                                        </button><br><br>
                                        Transmission <?php //echo $row['transmission']; 
                                                        ?>
                                    </div>
                                    <div class="col text-center" style=" font-size:14px;">
                                        <button class="btn  p-2" style="border-radius:30px; background: #78ca5c !important;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg>
                                        </button><br><br>
                                        More
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasRightLabel">More</h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body ">

                                                <div class="mt-3 pb-5 border-bottom">
                                                    <h4 class=" text-start">Inclutions</h4>
                                                    <div class="ps-4 text-start">

                                                        <ul class="ul-style-2 text-start row ">
                                                            <?php
                                                            $carFeatures = $row['inclutions']; // Assuming $row['car_features'] contains the comma-separated string
                                                            $featuresArray = explode(',', $carFeatures); // Split the string into an array

                                                            foreach ($featuresArray as $feature) {
                                                                echo '<li class="col-6 mt-2">' . $feature . '</li>'; // Display each feature in a list item
                                                            }
                                                            ?>

                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="spacer-10"></div>

                                <div class="row">
                                    <div class="de-spec text-start pt-lg-5" style="font-size:20px; color:black;">
                                        <div class="d-row">

                                        </div>
                                        <div class="d-row pt-2 pb-2 gallery-mobile-container " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight0" aria-controls="offcanvasRight0">
                                            <span class="d-title">INCLUSIONS</span>
                                            <spam class="d-value " style="float: right;"><i class="bi bi-chevron-right"></i></spam>
                                        </div>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight0" aria-labelledby="offcanvasRightLabe0">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasRightLabel">More</h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body ">

                                                <div class="mt-3 pb-5 border-bottom">
                                                    <h4 class=" text-start">Inclutions</h4>
                                                    <div class="ps-4 text-start">

                                                        <ul class="ul-style-2 text-start row " style="font-size:14px;">
                                                            <?php
                                                            $carFeatures = $row['inclutions']; // Assuming $row['car_features'] contains the comma-separated string
                                                            $featuresArray = explode(',', $carFeatures); // Split the string into an array

                                                            foreach ($featuresArray as $feature) {
                                                                echo '<li class="col-6 ">' . $feature . '</li>'; // Display each feature in a list item
                                                            }
                                                            ?>

                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-row pt-lg-2 pb-lg-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">
                                            <span class="d-title">Timing & Pickup Location</span>
                                            <spam class="d-value " style="float: right;"><i class="bi bi-chevron-right"></i></spam>
                                        </div>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasRightLabel">Timing & Pickup Location</h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body ">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item  border-left-0 border-right-0 rounded-0 bg-transparent shadow-none">
                                                        <h2 class="accordion-header bg-transparent shadow-none" id="headingOne">
                                                            <button class="accordion-button  bg-transparent shadow-none border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Pickup Location
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show bg-transparent shadow-none" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body bg-transparent shadow-none" style="font-size:15px;">
                                                                
                                                                <i class="bi bi-geo-alt"></i>&nbsp; Meeting Point<br>
                                                                <br><span style="width: 100%;">Marina walk, Alkhayay St, Dubai Marina, Dubai - UAE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item  border-left-0 border-right-0 rounded-0 bg-transparent shadow-none">
                                                        <h2 class="accordion-header bg-transparent shadow-none" id="headingTwo">
                                                            <button class="accordion-button collapsed  bg-transparent shadow-none border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Payment Mode
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse  bg-transparent shadow-none" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body bg-transparent shadow-none" style="font-size:15px;">
                                                                <div>
                                                                    <i class="bi bi-credit-card-2-back-fill"></i>&nbsp; Credit Card<br>
                                                                    <i class="bi bi-credit-card-2-back-fill"></i>&nbsp; Debit Card <br>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-row pt-2 pb-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight3">
                                            <span class="d-title">Routes</span>
                                            <spam class="d-value " style="float: right;"><i class="bi bi-chevron-right"></i></spam>
                                        </div>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasRightLabel">Yacht cruises in Dubai</h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body ">
                                                <div class="">
                                                    <h4>2 hours</h4>
                                                    <div class="p-3">
                                                        <p style="font-size: 14px;">Dubai Marina &amp; Jumeirah Beach Residences(JBR)</p>
                                                        <p style="font-size: 14px;">Palm Jumeirah &amp; Atlantis</p>
                                                    </div>


                                                </div>
                                                <div class="">
                                                    <h4>3 hours</h4>
                                                    <div class="p-3">
                                                        <p style="font-size: 14px;">Dubai Marina &amp; Jumeirah Beach Residences(JBR)</p>
                                                        <p style="font-size: 14px;">Island of Blue Waters (Ain Dubai)</p>
                                                        <p style="font-size: 14px;">Palm Jumeirah &amp; Atlantis</p>
                                                        <p style="font-size: 14px;">Burj al Arab Hotel</p>
                                                        <p style="font-size: 14px;">Dubai Skydive</p>
                                                    </div>

                                                </div>
                                                <div>
                                                    <h4>4-5 hours</h4>
                                                    <div class="p-3">
                                                        <p style="font-size: 14px; color:#199e1c;">Swimming and BBQ facilities</p>
                                                        <p style="font-size: 14px; color:#199e1c;">Many water sports available</p>
                                                        <p style="font-size: 14px;">Jumeirah Beach Residences(JBR)</p>
                                                        <p style="font-size: 14px;">Dubai Marina</p>
                                                        <p style="font-size: 14px;">Island of Blue Waters (Ain Dubai)</p>
                                                        <p style="font-size: 14px;">Atlantis and Royal Atlantis hotel at Palm Jumeirah</p>
                                                        <p style="font-size: 14px;">Logo Island and Burj al Arab Hotel</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4>10-24 hours</h4>
                                                    <div class="p-3">
                                                        <p style="font-size: 14px; color:#199e1c;">Dubai Jumeirah coastline</p>
                                                        <p style="font-size: 14px;">Bulgari Lagoon</p>
                                                        <p style="font-size: 14px;">Dubai Water Canal</p>
                                                        <p style="font-size: 14px;">Moon Island*</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>48-72 hours</h3>
                                                    <div class="p-3">

                                                        <p style="font-size: 14px; color:#199e1c;">Unique cruise itinerary based on discussion</p>

                                                        <p style="font-size: 14px;">Animal Island (With Breakfast)</p>
                                                        <p style="font-size: 14px;">Moon Island</p>
                                                        <p style="font-size: 14px;">Mangrove forests on water</p>
                                                        <p style="font-size: 14px;">Deep sea fishing</p>
                                                        <p style="font-size: 14px;">Deep sea diving with instructors</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-row pt-2 pb-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight4" aria-controls="offcanvasRight4">
                                            <span class="d-title">Payment Mode</span>
                                            <spam class="d-value " style="float: right;"><i class="bi bi-chevron-right"></i></spam>
                                        </div>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight4" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasRightLabel">Payment Method </h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body ">
                                                <div class="de-spec text-start">
                                                    <div class="accordion-body bg-transparent shadow-none" style="font-size:15px;">
                                                        <div>
                                                            <i class="bi bi-credit-card-2-back-fill"></i>&nbsp; Credit Card<br>
                                                            <i class="bi bi-credit-card-2-back-fill"></i>&nbsp; Debit Card
                                                        </div>
                                                        <br><br>
                                                        <h3> Pre-Payment </h3>
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15" height="10" fill="#ed8413" loading="lazy">
                                                                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L370.7 256 233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L178.7 256 41.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="col">50% pre-payment is required to confirm your booking</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15" height="10" fill="#ed8413" loading="lazy">
                                                                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L370.7 256 233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L178.7 256 41.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="col">50% remaining balance to be paid onboard prior to departure</div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-row pt-2 pb-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight5" aria-controls="offcanvasRight5">
                                            <span class="d-title">Cancellation Policy</span>
                                            <spam class="d-value " style="float: right;"><i class="bi bi-chevron-right"></i></spam>
                                        </div>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight5" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasRightLabel">Cancellation Policy </h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body ">
                                                <div class="de-spec text-start">
                                                    <div class="accordion-body bg-transparent shadow-none" style="font-size:15px;">
                                                        <div>
                                                            <ul class="p-l-15">
                                                                <li class="m-b-10">Cancellations may occur due to bad weather conditions, mechanical failure, coast guard restrictions, and decree enforcement of new laws.</li>
                                                                <li class="m-b-10">In case, you need to cancel your yacht tour due to unforeseen circumstances, please notify the rental company at least 48 hours in advance.</li>
                                                            </ul>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 laptop-section-tab">
                            <div class="de-price text-center">
                                <div class="hide_price">
                                    <h4 class="text-uppercase "><?php echo $row['Yacht_brand']; ?> </h4>
                                    <!-- Brand: <?php //echo $row['car_brand']; 
                                                ?> <?php echo $row['length_yacht']; ?><br>-->
                                    <p style="font-size:11px; color:black;">BOOK DIRECTLY FROM SUPPLIER</p>
                                </div>
                                <span class="stickey">
                                    <button class="btn btn-sm mt-1" style="background-color: #ed8413; border-radius:5px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Click to view the supplier’s contact no. and contact them directly">
                                        <a href="tel:<?php echo $user_row['enquiry_number']; ?>" target="_blank"><i class="bi  bi-telephone-fill " style="font-size: 1.5rem; color: white;"></i></a> </button> &nbsp; &nbsp;
                                    <button class="btn btn-sm mt-1" style="background-color: green; border-radius:5px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Click to connect with the supplier on WhatsApp">
                                        <a href="https://wa.me/<?php echo $user_row['whatsapp_number']; ?>/?text=urlencodedtext" target="blank"><i class="bi bi-whatsapp " style="font-size: 1.5rem; color: white; "></i></a></button>&nbsp; &nbsp;
                                    <button class="btn btn-sm mt-1" style="background-color: #4d4d4d; border-radius:5px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Send an instant inquiry to the supplier">
                                        <a href="mailto:<?php echo $user_row['enquiry-mail']; ?>" target="_blank"><i class="bi bi-envelope-fill" style="font-size: 1.5rem; color: white; "></i></a></button>

                                </span>
                            </div>
                            <div class=" p-3">
                                <p><b>Supplier Note:</b> To confirm your booking, an advance partial payment is required. The remaining balance can be settled at the start of the service, in cash or by card.
                                    If the selected yacht becomes unavailable due to maintenance, malfunction, or unforeseen reasons, suitable alternatives will be provided. If you choose not to proceed with the alternatives, a full refund will be promptly issued.
                                </p>
                                <p><b>LUXURY DUBAI CARS RENTALS Note:</b> LUXURY DUBAI CARS RENTALS is not a yacht rental company. The service will be rendered by a reputed yacht service provider at the best market rate. Given the volume of business we provide our partners, the best service and fleet is ensured for OneClickDrive customers.</p>
                            </div>



                        </div>

                        
                    </div>
                </div>
            </section>
            <section id="section-cars" class="no-top">
                <div class="p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7 offset-lg-3 text-center">
                            <h2>Similar Yacht Options</h2>
                            <p>Choose among cars with in-demand driving features and high mileage, and rent a car at the
                                best price. Exclusive car rental discounts, updated seasonally!</p>
                            <div class="spacer-20"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div id="items-carousel" class="owl-carousel wow fadeIn items-carousel">
                            <?php
                            $count = 0;
                            while (($row = mysqli_fetch_assoc($getdata)) && $count < 4) {
                                $id = $row['sno'];
                                $picNamesJson = $row['car_pic'];
                                $picNamesArray = json_decode($picNamesJson, true);

                                if (!empty($picNamesArray)) {
                                    $firstImage = reset($picNamesArray);
                            ?>
                                    <div class="col-lg-12">
                                        <a href="yacht-single.php?deletid=<?php echo $id; ?>" style="color: unset; hove:unset;">
                                            <div class="de-item mb30">
                                                <div class="d-img">
                                                    <div class="item">
                                                        <img src="/dist/php/Yachts_listing_pics/<?php echo $row['feature_image']; ?>" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-info">
                                                    <div class="d-text">
                                                        <h4><?php echo $row['Yacht_brand']; ?></h4>
                                                        <p><?php echo $row['length_yacht']; ?></p>
                                                        <div class="d-item_like">
                                                            <!--<i class="fa fa-heart"></i><span>25</span>-->
                                                        </div>
                                                        <div class="row">
                                                            <span class="col" style=" background-color:red;">Yacht</span>
                                                            <span class="col-6 row border">
                                                                <span class="col-6">
                                                                    <?php echo $row['length_yacht']; ?>ft.
                                                                </span>
                                                                <span class="col-6">
                                                                    <img src="images/icons/yacht.svg" alt="">
                                                                </span>
                                                            </span>
                                                            <span class="col"><i class="bi bi-fuel-pump"></i> <?php //echo $row['fuel_type']; 
                                                                                                                ?></span>

                                                        </div>
                                                        <div class="d-price row">
                                                            <div class="col-6">
                                                                Daily rate from
                                                                <span>
                                                                    <span class="currency_name" style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                                    <span class="new_rates daily-rate" data-original-rate="<?php echo $row['price_per_hour']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;"><?php echo $row['price_per_hour']; ?>/Hour</span>

                                                                    <!--<span style="font-size:14px; font-weight:normal;"><img src="images/road-line4.svg" style="width: 15px"> <?php //echo $row['price_per_km_day']; 
                                                                                                                                                                                ?> km</span>-->
                                                                </span>
                                                            </div>

                                                            <div class="col-6">
                                                                <!--Weekly rate from -->
                                                                <span>
                                                                    <span class="currency_name" style="display:none !important; font-size:14px; font-weight:normal;">AED</span>
                                                                    <span class="new_rates weekly-rate" data-original-rate="<?php //echo $row['price_per_week']; 
                                                                                                                            ?>" style="display:none !important; font-size:14px; font-weight:normal;"><?php //echo $row['price_per_km_week']; 
                                                                                                                                                                                                        ?>/Week</span>

                                                                    <!--<span style="font-size:14px; font-weight:normal;"><img src="images/road-line4.svg" style="width: 14px"> <?php //echo $row['price_per_km_week']; 
                                                                                                                                                                                ?> km</span>-->
                                                                </span>
                                                            </div>


                                                        </div>

                                                    </div>

                                                </div>
                                                <?php
                                                $user_id = $row['user_id'];

                                                $sql_user_id = "SELECT * FROM `admin_login` WHERE `id` = $user_id";
                                                $result_user_id = $conn->query($sql_user_id);

                                                if ($result_user_id->num_rows > 0) {
                                                    $user_row = $result_user_id->fetch_assoc();
                                                    $user_row['whatsapp_number']; // Output the entire row
                                                } else {
                                                    echo "No records found.";
                                                }


                                                ?>


                                                <div class="d-flex justify-content-center " style="padding:0px; margin-bottom:-10px; ">
                                                    <button class="btn  mt-1" style="background-color: #ed8413; border-radius: 0 0 0 8px; width:100%; margin-left:-10px; " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Click to view the supplier’s contact no. and contact them directly">
                                                        <a href="tel:<?php echo $user_row['enquiry_number']; ?>" target="_blank"><i class="bi  bi-telephone-fill " style="font-size: 1.5rem; color: white;"></i></a> </button> &nbsp; &nbsp;
                                                    <button class="btn  mt-1" style="background-color: green; border-radius:0px; width:100%;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Click to connect with the supplier on WhatsApp">
                                                        <a href="https://wa.me/<?php echo $user_row['whatsapp_number']; ?>/?text=urlencodedtext" target="_blank"><i class="bi bi-whatsapp " style="font-size: 1.5rem; color: white; "></i></a></button>&nbsp; &nbsp;
                                                    <button class="btn  mt-1" style="background-color: #4d4d4d; border-radius: 0 0 8px 0; width:100%; margin-right:-10px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Send an instant inquiry to the supplier">
                                                        <a href="mailto:<?php echo $user_row['enquiry-mail']; ?>" target="_blank"><i class="bi bi-envelope-fill" style="font-size: 1.5rem; color: white; "></i></a></button>
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


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>


</body>

</html>