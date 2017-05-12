<!DOCTYPE html>
<html  class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">

        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- icofont css -->
        <link rel="stylesheet" href="css/icofont.css">
        <!-- Nivo css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
        <!-- animaton text css -->
        <link rel="stylesheet" href="css/animate-text.css">
        <!-- Metrial iconic fonts css -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">        
        <!-- color css -->
        <link href="css/color/skin-default.css" rel="stylesheet">

        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <div class="wrapper blog">

            <!--slider header area are start-->
            <div id="home" class="header-slider-area">
                <!--header start-->
                <div class="header-area header-2">
                    <!--logo menu area start-->
                    <div id="sticker" class="logo-menu-area">
                        <div class="container hidden-xs">
                            <div class="row">
                                <div class="col-md-2 col-sm-3">
                                    <div class="logo">
                                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="main-menu text-center">
                                        <nav>
                                            <ul id="nav">
                                                <li><a class="smooth-scroll" href="#home">Home</a></li>
                                                <li><a class="smooth-scroll" href="#timeline">Timeline</a></li>                                             
                                                <li><a class="smooth-scroll" href="#speakers">Speakers</a></li>
                                                <li><a class="smooth-scroll" href="#news">News</a></li>
                                                <li><a class="smooth-scroll" href="#inst-feed">Feed</a></li>   
                                                <li><a href="event-schedule.html">Schedule</a></li>
                                                <li><a class="smooth-scroll" href="#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-2 hidden-sm">
                                    <div class="search-account">
                                        <ul>
                                            <li>
                                                <form action="#">
                                                    <div class="search-bar">
                                                        <button type="button" class="search"><i class="zmdi zmdi-search"></i></button>
                                                        <input type="search" name="search" placeholder="Search..."> </div>
                                                </form>
                                            </li>
                                            <li><a class="" href="#"><i class="zmdi zmdi-accounts"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--logo menu area end-->
                        <!-- mobile-menu-area start -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="logo-02">
                                    <a href="index.html"><img src="img/logo-02.png" alt=""></a>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="#home">Home</a></li>
                                                <li><a href="#about-event">About</a></li>
                                                <li><a href="#happen">Happen</a></li>
                                                <li><a href="#speakers">Speakers</a></li>
                                                <li><a href="#news">News</a></li>
                                                <li><a href="event-schedule.html">Schedule</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--mobile menu area end-->
                    </div> 
                </div>
                <!-- header End-->
            </div>
            <!--slider header area are end-->
            @yield('content')<!-- подключает блок контент -->
            <!--footer area are start-->
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="social-area">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="payment-area">
                                <ul>
                                    <li><a href=""><img src="img/icon/pay-01.jpg" alt=""></a></li>
                                    <li><a href=""><img src="img/icon/pay-02.jpg" alt=""></a></li>
                                    <li><a href=""><img src="img/icon/pay-03.jpg" alt=""></a></li>
                                    <li><a href=""><img src="img/icon/pay-04.jpg" alt=""></a></li>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-5 col-xs-12" style="float: right">
                    <div class="total-widget">
                        <div class="single-widget search-widget mb30">
                            <form action="#">
                                <div class="input-box">
                                    <input type="search" placeholder="Search" class="info" name="serch">
                                    <button class="search-btn"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="single-widget catagory-widget">
                            <h3 class="aside-title uppercase">Categories</h3>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">UI / Ux Design</a></li>
                                <li><a href="#">PhotoShop</a></li>
                                <li><a href="#">Illustrator</a></li>
                                <li><a href="#">Indesign</a></li>
                                <li><a href="#">Document</a></li>
                                <li><a href="#">Web Design</a></li>
                            </ul>
                        </div>
                        <div class="single-widget recent-post mt100">
                            <h3 class="aside-title uppercase">Recent Post</h3>
                            <div class="rec-blog-content">
                                <img src="img/blog/recent-01.jpg" alt="">
                                <h4><a href="#">Breaf With PhotoShop Layers</a></h4>
                                <p class="blog-date"><i class="zmdi zmdi-calendar-note"></i>13 feb 2016</p>
                                <p>There are many variations of sages of Lorem Ipsum.</p>
                            </div>
                            <div class="rec-blog-content">
                                <img src="img/blog/recent-02.jpg" alt="">
                                <h4><a href="#">Breaf With PhotoShop Layers</a></h4>
                                <p class="blog-date"><i class="zmdi zmdi-calendar-note"></i>13 feb 2016</p>
                                <p>There are many variations of sages of Lorem Ipsum.</p>
                            </div>
                            <div class="rec-blog-content hidden-md">
                                <img src="img/blog/recent-03.jpg" alt="">
                                <h4><a href="#">Breaf With PhotoShop Layers</a></h4>
                                <p class="blog-date"><i class="zmdi zmdi-calendar-note"></i>13 feb 2016</p>
                                <p>There are many variations of sages of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="single-widget tag-widget mt100">
                            <h3 class="aside-title uppercase">Tags</h3>
                            <ul>
                                <li><a href="#">Event</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">WebTemp</a></li>
                                <li><a href="#">UI/UX</a></li>
                                <li><a href="#">Web</a></li>
                                <li><a href="#">Photoshop</a></li>
                                <li><a href="#">Illestrator</a></li>
                                <li><a href="#">Indesign</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer area are finish-->
            <!--body-wraper-are-end-->
        </div>

        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- Nivo js -->
        <script src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="js/nivo-slider/nivo-active.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- Youtube Background JS -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <!-- datepicker js -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- waypoint js -->
        <script src="js/waypoints.min.js"></script>
        <!-- onepage nav js -->
        <script src="js/jquery.nav.js"></script>
        <!-- animate text JS -->
        <script src="js/animate-text.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>