<?php
include 'php/db_connect.php';

if (isset($_GET['type'])) {
    $id = mysqli_real_escape_string($conn, $_GET['type']);
    // Optional for debugging

    $query = "SELECT * FROM yachts WHERE CONCAT(',', category, ',') LIKE CONCAT('%,', '" . $id . "', ',%')";
    $getdata = mysqli_query($conn, $query);
} elseif (isset($_GET['brand'])) {
    $brand = mysqli_real_escape_string($conn, $_GET['brand']); // Sanitize input




    // Construct the query using proper concatenation and quotation marks
    $query = "SELECT * FROM yachts WHERE car_brand LIKE '%" . $brand . "%'";

    // Execute the query
    $getdata = mysqli_query($conn, $query);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['categories'])) {
        $_POST['categories']; // Debug statement
        $categories = $_POST['categories'];
        $categoryFilter = implode('|', $categories); // Convert array to pipe-separated string

        $query = "SELECT * FROM yachts WHERE CONCAT(',', category, ',') REGEXP CONCAT('(^|,)(', '" . $categoryFilter . "', ')(,|$)')";

        $getdata = mysqli_query($conn, $query);
        // Fetch and display data as needed
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['car_brand']) || isset($_POST['model_name']))) {
        // Process form data and apply filters
        $brand = isset($_POST['car_brand']) ? $_POST['car_brand'] : null;
        $model = isset($_POST['model_name']) ? $_POST['model_name'] : null;

        // Construct the SQL query based on the selected brand and model
        if ($brand && $model) {
            // Both brand and model selected
            $query = "SELECT * FROM yachts WHERE car_brand = '$brand' AND car_model = '$model'";
        } elseif ($brand) {
            // Only brand selected
            $query = "SELECT * FROM yachts WHERE car_brand = '$brand'";
        } elseif ($model) {
            // Only model selected
            $query = "SELECT * FROM yachts WHERE car_model = '$model'";
        }

        // Execute the query and fetch the filtered data
        $getdata = mysqli_query($conn, $query);
        // Process the fetched data as needed
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['make_year'])) {
        // Process form data and apply filters
        $selectedYear = $_POST['make_year'];

        // Construct the SQL query based on the selected year
        $query = "SELECT * FROM yachts WHERE make_year = '$selectedYear'";

        // Execute the query and fetch the filtered data
        $getdata = mysqli_query($conn, $query);
        // Process the fetched data as needed
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['min-price']) && isset($_POST['max-price'])) {
        $minPrice = $_POST['min-price'];
        $maxPrice = $_POST['max-price'];


        // Validate and sanitize input
        $maxPrice = filter_var($maxPrice, FILTER_VALIDATE_INT);
        $minPrice = filter_var($minPrice, FILTER_VALIDATE_INT);

        if ($maxPrice !== false && $minPrice !== false) {
            // Use prepared statement to prevent SQL injection
            $query = "SELECT * FROM yachts WHERE price_per_day BETWEEN ? AND ?";
            $stmt = mysqli_prepare($conn, $query);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ii", $minPrice, $maxPrice);
                mysqli_stmt_execute($stmt);
                $getdata = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);

                // Process the fetched data as needed
            } else {
                // Handle query preparation error
                echo "Error: Unable to prepare the SQL query.";
            }
        } else {
            // Handle invalid input
            echo "Error: Invalid price values.";
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selected_features'])) {
        $_POST['selected_features'];
        $features = $_POST['selected_features'];
        $featuresFilter = implode('|', $features);
        $query = "SELECT * FROM yachts WHERE CONCAT(',', car_features, ',') REGEXP CONCAT('(^|,)(', '" . $featuresFilter . "', ')(,|$)')";
        $getdata = mysqli_query($conn, $query);
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fuel'])) {
        $selectedFuel = $_POST['fuel'];

        // Construct the SQL query based on the selected fuel type
        $query = "SELECT * FROM yachts WHERE fuel_type = '$selectedFuel'";

        // Execute the query and fetch the filtered data
        $getdata = mysqli_query($conn, $query);
        // Process the fetched data as needed
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Transmition'])) {
        $transmissionType = $_POST['Transmition'];

        // Construct the SQL query based on the selected transmission type
        $query = "SELECT * FROM yachts WHERE transmission = '$transmissionType'";

        // Execute the query and fetch the filtered data
        $getdata = mysqli_query($conn, $query);
        // Process the fetched data as needed
    } else {
        $search = $_POST["search"];
        $getdata = mysqli_query($conn, "SELECT * FROM yachts WHERE car_brand LIKE '%$search%' OR car_model LIKE '%$search%' OR make_year LIKE '%$search%';");
    }
} else {
    $Limit = 9;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $Limit;
    $getdata = mysqli_query($conn, "SELECT * FROM `yachts`  ORDER BY  sno DESC LIMIT $start, $Limit");

    $getdata1 = $conn->query("SELECT count(sno) AS sno FROM `yachts`  ORDER BY  sno DESC ");
    $custCount = $getdata1->fetch_all(MYSQLI_ASSOC);
    $totall = $custCount[0]['sno'];
    $pages = ceil($totall / $Limit);

    $Previous = $page - 1;
    $Next = $page + 1;
}
$getdatacurrency = mysqli_query($conn, "SELECT * FROM `currency` ");
$rowcurrency = mysqli_fetch_assoc($getdatacurrency);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <!-- Add the currencyapi-js library via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Google API -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

        .custom-carousel-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .custom-carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
            /* Smooth sliding transition */
        }

        .custom-carousel-item {
            flex: 0 0 50%;
            /* Show two items per slide */
            margin: 10px;
            height: 150px;
            border-radius: 50px;
            width: 200px;
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

        .hov a div div img {
            width: 100%;
        }

        #yat2 {
            display: none;
        }

        #yat {
            display: inline;
        }

        .accordion-wrapper {
            display: block;
            border-bottom: 1px solid #f3f4f8;
            max-width: 500px;
            margin: 0 auto;
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .accordion+.title {
            user-select: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;


        }

        .accordion~.title p {

            color: black;
        }

        .accordion~.title .side-icon {
            display: block;
        }

        .accordion:checked~.title .side-icon {
            display: none;
        }

        .accordion~.title .down-icon {
            display: none;
        }

        .accordion:checked~.title .down-icon {
            display: block;
        }

        .accordion~.content {
            display: none;
            padding: 8px;
            cursor: pointer;
        }

        .accordion:checked~.content {
            display: block;
        }

        .displayy-btn {
            display: none;
        }


        /* 767 mobile styling */
        @media (max-width: 767px) {
            @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");

            .hov a div div img {
                width: 50px;
            }

            header {
                background: white !important;
            }

            header.header-mobile.menu-open {
                background: white !important;

            }

            .accordion-wrapper {
                display: block;
                border-bottom: 1px solid #f3f4f8;
                max-width: 500px;
                margin: 0 auto;
                margin-top: 12px;
                margin-bottom: 12px;
            }

            .accordion+.title {
                user-select: none;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: space-between;


            }

            .accordion~.title p {

                color: black;
            }

            .accordion~.title .side-icon {
                display: block;
            }

            .accordion:checked~.title .side-icon {
                display: none;
            }

            .accordion~.title .down-icon {
                display: none;
            }

            .accordion:checked~.title .down-icon {
                display: block;
            }

            .accordion~.content {
                display: none;
                padding: 8px;
                cursor: pointer;
            }

            .accordion:checked~.content {
                display: block;
            }

            .center-div {
                /* Adjust height as needed */
                background-color: #f0f0f0;
                border-radius: 10px;
                text-align: center;
                padding: 20px;
                position: fixed;
                top: 90%;
                left: 55%;
                transform: translate(-50%, -50%);
                z-index: 1000;
                /* Adjust z-index as needed */
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

            .brand img {
                width: 100%;
            }

            .brande a p {
                font-size: 12px;
                font-weight: bold;
            }

            .displayy {
                display: none;
            }

            .displayy-btn {
                display: flex;
            }

            #yat {
                display: none;
            }

            #yat2 {
                display: inline;
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
                                            <!--<img src="images/all_brand_img/yacht (1).png" id="yat" width="25px" >-->
                                            <img src="images/all_brand_img/yacht.png" id="" width="25px">
                                            Yacht Rental</a>

                                    </li>


                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="login.html" class="btn-main">Become Partner</a>

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
            <section id="" class="jarallax text-light " style="background-color: #ffffff;">-->
            <!-- <img src="images/background/2.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
								
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>-->
            <!-- section close -->

            <section id="section-cars" class="p-lg-5 p-3" style="margin-top:150px;">
                <div class="container-fluid ">
                    <div class="row">


                        <div class="col-lg-3">
                            <label class="accordion-wrapper displayy">
                                <input type="checkbox" class="accordion" hidden />
                                <div class="title">
                                    <p style="padding-top:13px; font-size:14px;">Vehicle Type</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>

                                <div class="content">
                                    <form action="cars.php" method="POST" id="category">
                                        <?php
                                        $category = mysqli_query($conn, "SELECT * FROM `category`");
                                        while ($category_row = mysqli_fetch_assoc($category)) {

                                        ?>

                                            <div class="de_checkbox">
                                                <input id="<?php echo $category_row['category_name']; ?>" name="categories[]" style="appearance: auto;" type="checkbox" value="<?php echo $category_row['category_name']; ?>">
                                                <label for="<?php echo $category_row['category_name']; ?>"> <?php echo $category_row['category_name']; ?></label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="d-flex justify-content-end mt-2 mb-2">
                                            <button type="submit" class="btn btn-main " name="category" style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                        </div>
                                    </form>
                                </div>

                            </label>
                            <label class="accordion-wrapper displayy">
                                <input type="checkbox" class="accordion" hidden />
                                <div class="title">
                                    <p style="padding-top:13px; font-size:14px;">Car Model/Brand</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <form method="POST" action="cars.php">
                                        <h6>Car Brand</h6>
                                        <select class="form-select " aria-label="Default select example" name="car_brand" onchange="updateModelss(this.value)" required>
                                            <option disabled selected>select</option>
                                            <?php
                                            $brand = mysqli_query($conn, "SELECT * FROM `car_brand`");
                                            while ($brand_row = mysqli_fetch_assoc($brand)) {

                                            ?>
                                                <option value="<?php echo $brand_row['brand_name']; ?>"> <?php echo $brand_row['brand_name']; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                        <h6 class="mt-lg-3">Car Modal</h6>
                                        <!-- <input type="text" class="form-control" required placeholder="Model Name" name="model_name">-->
                                        <select class="form-select " id="modelOptions" aria-label="Default select example" name="model_name">
                                            <option disabled selected>select</option>
                                        </select>

                                        <script>
                                            function updateModelss(brand) {
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        document.getElementById("modelOptions").innerHTML = this.responseText;
                                                    }
                                                };
                                                xhttp.open("GET", "php/get_models.php?brand=" + brand, true);
                                                xhttp.send();
                                            }
                                        </script>
                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="submit" class="btn btn-main " name="brand" style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                        </div>
                                    </form>
                                </div>
                            </label>
                            <label class="accordion-wrapper displayy">
                                <input type="checkbox" class="accordion" hidden />
                                <div class="title">
                                    <p style="padding-top:13px; font-size:14px;">Filter by Year</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <form method="POST" action="cars.php">
                                        <select class="form-select" id="yearSelect" aria-label="Default select example" name="make_year">

                                            <option selected disabled value="N/A">Select</option>

                                        </select>
                                        <script>
                                            function populateYears() {
                                                var currentYear = new Date().getFullYear();
                                                var selectTag = document.getElementById("yearSelect");

                                                for (var year = 1950; year <= currentYear; year++) {
                                                    var option = document.createElement("option");
                                                    option.value = year;
                                                    option.text = year;
                                                    selectTag.appendChild(option);
                                                }
                                            }

                                            // Call the function to populate the select tag with years
                                            populateYears();
                                        </script>
                                        <div class=" mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                        </div>
                                    </form>
                                </div>
                            </label>
                            <label class="accordion-wrapper displayy">
                                <input type="checkbox" class="accordion" hidden />
                                <div class="title">
                                    <p style="padding-top:13px; font-size:14px;">Price ($)</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <div class="content ">
                                    <form method="POST" action="cars.php">
                                        <div class="row">

                                            <div class="col-6">
                                                <lable>Min-Price</lable>
                                                <input type="number" id="" name="min-price" class="form-control" placeholder="Enter min price">
                                            </div>
                                            <div class="col-6">
                                                <lable>Max-Price</lable>
                                                <input type="number" id="" name="max-price" class="form-control" placeholder="Enter max price">
                                            </div>
                                            <div class="col-7"></div>
                                            <div class="col-4 mt-3">
                                                <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </label>
                            <label class="accordion-wrapper displayy">
                                <input type="checkbox" class="accordion" hidden />
                                <div class="title">
                                    <p style="padding-top:13px; font-size:14px;">Car Features</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <div class="content ">
                                    <form action="cars.php" method="POST">
                                        <div class="row">
                                            <?php
                                            $features = mysqli_query($conn, "SELECT * FROM `features`");
                                            while ($features_row = mysqli_fetch_assoc($features)) {

                                            ?>

                                                <div class="col-6">
                                                    <input class="" type="checkbox" name="selected_features[]" value="<?php echo $features_row['features_name']; ?>" style="appearance: auto; " id="">
                                                    <lable style="font-size:12px;"><?php echo $features_row['features_name']; ?></lable>
                                                </div>
                                            <?php
                                            }
                                            ?>

                                            <div class=" mt-3 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </label>
                            <label class="accordion-wrapper displayy">
                                <input type="checkbox" class="accordion" hidden />
                                <div class="title">
                                    <p style="padding-top:13px; font-size:14px;">Transmition</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <div class="content ">
                                    <form action="cars.php" method="POST">
                                        <div class="">
                                            <input class="" type="radio" name="Transmition" value="Auto" style="appearance: auto; " id="">
                                            <lable style="font-size:12px;">Auto</lable>
                                        </div>
                                        <div class="">
                                            <input class="" type="radio" name="Transmition" value="Manual" style="appearance: auto; " id="">
                                            <lable style="font-size:12px;">Manual</lable>
                                        </div>
                                        <div class=" mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                        </div>
                                    </form>

                                </div>
                            </label>
                            <label class="accordion-wrapper displayy">
                                <input type="checkbox" class="accordion" hidden />
                                <div class="title">
                                    <p style="padding-top:13px; font-size:14px;">Fuel Type</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </div>
                                <div class="content ">
                                    <form method="POST" action="cars.php">
                                        <div class="">
                                            <input class="" type="radio" value="Petrol" name="fuel" style="appearance: auto; " id="">
                                            <lable style="font-size:12px;">Petrol</lable>
                                        </div>
                                        <div class="">
                                            <input class="" type="radio" value="Electric" name="fuel" style="appearance: auto; " id="">
                                            <lable style="font-size:12px;">Electric</lable>
                                        </div>
                                        <div class="">
                                            <input class="" type="radio" value="Desiel" name="fuel" style="appearance: auto; " id="">
                                            <lable style="font-size:12px;">Diesel</lable>
                                        </div>
                                        <div class="">
                                            <input class="" type="radio" value="Hybrid" name="fuel" style="appearance: auto; " id="">
                                            <lable style="font-size:12px;">Hybrid</lable>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="submit" class="btn btn-main " name="brand" style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                        </div>
                                    </form>

                                </div>
                            </label>

                            <div class="text-center displayy">
                                <a class="btn-main" href="cars.php">Clear all filters</a>
                            </div>

                            <div class=" row displayy-btn p-2 mb-3 border-bottom center-div">
                                <div>
                                    <button class="" style="all:unset;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        <i class="bi bi-funnel-fill"></i>Filter
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body ">
                                    <label class="accordion-wrapper ">
                                        <input type="checkbox" class="accordion" hidden />
                                        <div class="title">
                                            <p style="padding-top:13px; font-size:14px;">Vehicle Type</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </div>

                                        <div class="content">
                                            <form action="cars.php" method="POST" id="category">
                                                <?php
                                                $category = mysqli_query($conn, "SELECT * FROM `category`");
                                                while ($category_row = mysqli_fetch_assoc($category)) {

                                                ?>

                                                    <div class="de_checkbox">
                                                        <input id="<?php echo $category_row['category_name']; ?>" name="categories[]" style="appearance: auto;" type="checkbox" value="<?php echo $category_row['category_name']; ?>">
                                                        <label for="<?php echo $category_row['category_name']; ?>"> <?php echo $category_row['category_name']; ?></label>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="d-flex justify-content-end mt-2 mb-2">
                                                    <button type="submit" class="btn btn-main " name="category" style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                                </div>
                                            </form>
                                        </div>

                                    </label>
                                    <label class="accordion-wrapper ">
                                        <input type="checkbox" class="accordion" hidden />
                                        <div class="title">
                                            <p style="padding-top:13px; font-size:14px;">Car Model/Brand</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <form method="POST" action="cars.php">
                                                <h6>Car Brand</h6>
                                                <select class="form-select " aria-label="Default select example" name="car_brand" onchange="updateModels(this.value)" required>
                                                    <option disabled selected>select</option>
                                                    <?php
                                                    $brand = mysqli_query($conn, "SELECT * FROM `car_brand`");
                                                    while ($brand_row = mysqli_fetch_assoc($brand)) {

                                                    ?>
                                                        <option value="<?php echo $brand_row['brand_name']; ?>"> <?php echo $brand_row['brand_name']; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                                <h6 class="mt-lg-3">Car Modal</h6>
                                                <!-- <input type="text" class="form-control" required placeholder="Model Name" name="model_name">-->
                                                <select class="form-select " id="modelOptions1" aria-label="Default select example" name="model_name">
                                                    <option disabled selected>select</option>
                                                </select>

                                                <script>
                                                    function updateModels(brand) {
                                                        var xhttp = new XMLHttpRequest();
                                                        xhttp.onreadystatechange = function() {
                                                            if (this.readyState == 4 && this.status == 200) {
                                                                document.getElementById("modelOptions1").innerHTML = this.responseText;
                                                            }
                                                        };
                                                        xhttp.open("GET", "php/get_models.php?brand=" + brand, true);
                                                        xhttp.send();
                                                    }
                                                </script>
                                                <div class="d-flex justify-content-end mt-3">
                                                    <button type="submit" class="btn btn-main " name="brand" style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                                </div>
                                            </form>
                                        </div>
                                    </label>
                                    <label class="accordion-wrapper ">
                                        <input type="checkbox" class="accordion" hidden />
                                        <div class="title">
                                            <p style="padding-top:13px; font-size:14px;">Filter by Year</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <form method="POST" action="cars.php">
                                                <select class="form-select" id="yearSelecte" aria-label="Default select example" name="make_year">

                                                    <option selected disabled value="N/A">Select</option>

                                                </select>
                                                <script>
                                                    function populateYears() {
                                                        var currentYear = new Date().getFullYear();
                                                        var selectTag = document.getElementById("yearSelecte");

                                                        for (var year = 1950; year <= currentYear; year++) {
                                                            var option = document.createElement("option");
                                                            option.value = year;
                                                            option.text = year;
                                                            selectTag.appendChild(option);
                                                        }
                                                    }

                                                    // Call the function to populate the select tag with years
                                                    populateYears();
                                                </script>
                                                <div class=" mt-3 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                                </div>
                                            </form>
                                        </div>
                                    </label>
                                    <label class="accordion-wrapper ">
                                        <input type="checkbox" class="accordion" hidden />
                                        <div class="title">
                                            <p style="padding-top:13px; font-size:14px;">Price ($)</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </div>
                                        <div class="content ">
                                            <form method="POST" action="cars.php">
                                                <div class="row">

                                                    <div class="col-6">
                                                        <lable>Min-Price</lable>
                                                        <input type="number" id="" name="min-price" class="form-control" placeholder="Enter min price">
                                                    </div>
                                                    <div class="col-6">
                                                        <lable>Max-Price</lable>
                                                        <input type="number" id="" name="max-price" class="form-control" placeholder="Enter max price">
                                                    </div>
                                                    <div class="col-7"></div>
                                                    <div class="col-4 mt-3">
                                                        <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </label>
                                    <label class="accordion-wrapper ">
                                        <input type="checkbox" class="accordion" hidden />
                                        <div class="title">
                                            <p style="padding-top:13px; font-size:14px;">Car Features</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </div>
                                        <div class="content ">
                                            <form action="cars.php" method="POST">
                                                <div class="row">
                                                    <?php
                                                    $features = mysqli_query($conn, "SELECT * FROM `features`");
                                                    while ($features_row = mysqli_fetch_assoc($features)) {

                                                    ?>

                                                        <div class="col-6">
                                                            <input class="" type="checkbox" name="selected_features[]" value="<?php echo $features_row['features_name']; ?>" style="appearance: auto; " id="">
                                                            <lable style="font-size:12px;"><?php echo $features_row['features_name']; ?></lable>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class=" mt-3 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </label>
                                    <label class="accordion-wrapper ">
                                        <input type="checkbox" class="accordion" hidden />
                                        <div class="title">
                                            <p style="padding-top:13px; font-size:14px;">Transmition</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </div>
                                        <div class="content ">
                                            <form action="cars.php" method="POST">
                                                <div class="">
                                                    <input class="" type="radio" name="Transmition" value="Auto" style="appearance: auto; " id="">
                                                    <lable style="font-size:12px;">Auto</lable>
                                                </div>
                                                <div class="">
                                                    <input class="" type="radio" name="Transmition" value="Manual" style="appearance: auto; " id="">
                                                    <lable style="font-size:12px;">Manual</lable>
                                                </div>
                                                <div class=" mt-3 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-main " style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                                </div>
                                            </form>

                                        </div>
                                    </label>
                                    <label class="accordion-wrapper ">
                                        <input type="checkbox" class="accordion" hidden />
                                        <div class="title">
                                            <p style="padding-top:13px; font-size:14px;">Fuel Type</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right side-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-down down-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                            </svg>
                                        </div>
                                        <div class="content ">
                                            <form method="POST" action="cars.php">
                                                <div class="">
                                                    <input class="" type="radio" value="Petrol" name="fuel" style="appearance: auto; " id="">
                                                    <lable style="font-size:12px;">Petrol</lable>
                                                </div>
                                                <div class="">
                                                    <input class="" type="radio" value="Electric" name="fuel" style="appearance: auto; " id="">
                                                    <lable style="font-size:12px;">Electric</lable>
                                                </div>
                                                <div class="">
                                                    <input class="" type="radio" value="Desiel" name="fuel" style="appearance: auto; " id="">
                                                    <lable style="font-size:12px;">Diesel</lable>
                                                </div>
                                                <div class="">
                                                    <input class="" type="radio" value="Hybrid" name="fuel" style="appearance: auto; " id="">
                                                    <lable style="font-size:12px;">Hybrid</lable>
                                                </div>
                                                <div class="d-flex justify-content-end mt-3">
                                                    <button type="submit" class="btn btn-main " name="brand" style="background-color:#78ca5c; color:white; font-size:12px;">filter</button>
                                                </div>
                                            </form>

                                        </div>
                                    </label>
                                    <div class="text-center">
                                        <a class="btn-main" href="cars.php">Clear all filters</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-9">


                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const track = document.querySelector('.custom-carousel-track');
                                    const items = document.querySelectorAll('.custom-carousel-item');

                                    let currentIndex = 0;

                                    const slideWidth = items[0].offsetWidth;
                                    const totalSlides = items.length;

                                    setInterval(() => {
                                        currentIndex = (currentIndex + 1) % totalSlides;
                                        const newPosition = -currentIndex * slideWidth;
                                        track.style.transform = `translateX(${newPosition}px)`;
                                    }, 3000); // Change the interval (in milliseconds) to adjust the slide duration
                                });
                            </script>
                            <div class="row">

                                <?php
                                $count = 0;
                                while ($row = mysqli_fetch_assoc($getdata)) {
                                    $id = $row['sno'];

                                    $picNamesJson = $row['car_pic'];
                                    $picNamesArray = json_decode($picNamesJson, true);

                                    if (!empty($picNamesArray)) {
                                        $firstImage = reset($picNamesArray);
                                ?>
                                        <div class="col-xl-4 col-lg-6">
                                            <a href="yacht-single.php?deletid=<?php echo $id; ?>" style="color: unset; text-decoration: unset;">
                                                <div class="de-item mb30">
                                                    <div class="d-img">
                                                        <div id="courser<?php echo $id; ?>" class="carousel slide">
                                                            <div class="carousel-indicators">
                                                                <button type="button" data-bs-target="#courser<?php echo $id; ?>" data-bs-slide-to="0" class="active" aria-label="Slide 0"></button>
                                                                <?php
                                                                // Generate carousel indicators for the first four images
                                                                for ($i = 1; $i < min(4, count($picNamesArray)); $i++) {
                                                                    $isActive = $i === 0 ? 'active' : '';
                                                                ?>
                                                                    <button type="button" data-bs-target="#courser<?php echo $id; ?>" data-bs-slide-to="<?php echo $i; ?>" class="" aria-label="Slide <?php echo $i + 1; ?>"></button>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img src="/dist/php/Yachts_listing_pics/<?php echo $row['feature_image']; ?>" class="d-block w-100" alt="...">
                                                                </div>
                                                                <?php
                                                                // Generate carousel items for the first four images
                                                                for ($i = 0; $i < min(3, count($picNamesArray)); $i++) {
                                                                    $isActive = $i === 0 ? 'active' : '';
                                                                ?>
                                                                    <div class="carousel-item ">
                                                                        <img src="/dist/php/Yachts_listing_pics/<?php echo $picNamesArray[$i]; ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>


                                                            </button>
                                                        </div>
                                                        <!--<img src="/dist/php/Yachts_listing_pics/<?php //echo $firstImage; 
                                                                                                    ?>" class="img-fluid" alt="">-->
                                                    </div>
                                                    <div class="d-info">
                                                        <div class="d-text">
                                                            <h4><?php echo $row['Yacht_brand']; ?></h4>
                                                            <p><?php echo $row['car_brand']; ?></p>
                                                            <div class="d-item_like">
                                                                <!--<i class="fa fa-heart"></i><span>25</span>-->
                                                            </div>
                                                            <div class="d-atr-group">
                                                                <span class="">Yacht</span>
                                                                <span class=""><?php echo $row['length_yacht']; ?> ft. <img src="images/icons/yacht.svg" style="width: 30px;" alt=""></span>
                                                                <span class=""><i class="bi bi-fuel-pump"></i> <?php echo $row['fuel_type']; ?></span>

                                                            </div>
                                                            <div class="d-price row">
                                                                <div class="col-6">
                                                                    Daily rate from
                                                                    <span>
                                                                        <span class="currency_name" style="display:inline !important; font-size:14px; font-weight:normal;">AED</span>
                                                                        <span class="new_rates daily-rate" data-original-rate="<?php echo $row['price_per_hour']; ?>" style="display:inline !important; font-size:14px; font-weight:normal;"><?php echo $row['price_per_day']; ?>/Hour</span>

                                                                        <!--<span style="font-size:14px; font-weight:normal;"><img src="images/road-line4.svg" style="width: 15px"> <?php //echo $row['price_per_km_day']; 
                                                                                                                                                                                    ?> km</span>-->
                                                                    </span>
                                                                </div>

                                                                <div class="col-6">
                                                                    <!--Weekly rate from -->
                                                                    <span>
                                                                        <span class="currency_name" style="display:none !important; font-size:14px; font-weight:normal;">AED</span>
                                                                        <span class="new_rates weekly-rate" data-original-rate="<?php echo $row['price_per_week']; ?>" style="display:none !important; font-size:14px; font-weight:normal;"><?php echo $row['price_per_km_week']; ?>/Week</span>

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


                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?php if ($page == 1) {
                                                                echo 'disabled';
                                                            } ?> ">
                                        <a class="page-link" href="cars.php?page=<?= $Previous; ?>" tabindex="-1">Previous</a>
                                    </li>
                                    <?php $i = 1;
                                    for ($i; $i <= $pages; $i++) : ?>
                                        <li class="page-item"><a class="page-link" href="cars.php?page=<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php endfor; ?>

                                    <li class="page-item <?php if ($page == $i - 1) {
                                                                echo 'disabled';
                                                            } ?> ">
                                        <a class="page-link" href="cars.php?page=<?= $Next; ?>">Next</a>
                                    </li>
                                </ul>
                            </nav>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('.de_checkbox input[type="checkbox"]').change(function() {
                                        var selectedCategories = []; // Array to store selected categories
                                        $('.de_checkbox input[type="checkbox"]:checked').each(function() {
                                            selectedCategories.push($(this).val()); // Push selected categories to the array
                                        });

                                        $('.d-item').each(function() {
                                            var itemCategory = $(this).find('.d-atr-group #category').text().trim();
                                            if (selectedCategories.length === 0 || selectedCategories.includes(itemCategory)) {
                                                $(this).show(); // Show items that match selected categories or show all if none selected
                                            } else {
                                                $(this).hide(); // Hide items that do not match selected categories
                                            }
                                        });
                                    });
                                });
                            </script>

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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d115537.95764644654!2d55.264059!3d25.184291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6caafcff169b%3A0xc2d193b01a8ef809!2s  LUXURY DUBAI CARS RENTALS%20-%20Rent%20A%20Car%20Dubai%2C%20Chauffeur%20Service%2C%20Yacht%20Rental!5e0!3m2!1sen!2sae!4v1713678495095!5m2!1sen!2sae" width="auto" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

                var productContainers = document.querySelectorAll(".col-xl-4");

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

</body>

</html>