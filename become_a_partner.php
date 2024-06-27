
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
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
    <style>
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

        
        #jarallax-container-0{
            background: black !important;
        }

        .imagepop{
            width:100%;
        }
        .hov a div div img{
            width:100%;
        }
        
    
     
        /* 767 mobile styling */
        @media (max-width: 767px) {

            h2 {

                font-size: 30px !important;
            }
            header{
            background: white !important;
        }
            header.header-mobile.menu-open{
            background: white !important;
            
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
            

            

            

            .brande a p {
                font-size: 12px;
                font-weight: bold;
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
                            <lable class=""> &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="auto"   style="max-width:30; max-height:30;" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
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
                                        <a href="index-5.php" class="">
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
                                        <a class="menu-item" href="index-5.html"></a>
                                    </li>
                                    <li>
                                        <a class="menu-item " href="index-5.html"><i class="bi bi-car-front-fill me-1"></i> Rent a car</a>
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
            
            
            <section id="form">
                <div class="row">
                    <div class="col-6">
                        <h1 class="">List Your Cars for Rent Today</h1>
                        <h5> Empty your parking lot tomorrow!</h5>
                        <a href="#packages" class="ocd-car-explr">EXPLORE OUR PACKAGES</a>
                    </div>
                    <div class="col-6"></div>
                    
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