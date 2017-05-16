<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ isset($title) ? $title : 'Заголовок' }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="http://{{$_SERVER['HTTP_HOST']}}/img/icon/favicon.ico">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/owl.carousel.css">
        <!-- icofont css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/icofont.css">
        <!-- Nivo css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/nivo-slider.css">
        <!-- animaton text css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/animate-text.css">
        <!-- Metrial iconic fonts css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/material-design-iconic-font.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="http://{{$_SERVER['HTTP_HOST']}}/css/responsive.css">
        <!-- color css -->
        <link href="http://{{$_SERVER['HTTP_HOST']}}/css/color/skin-default.css" rel="stylesheet">

        <!-- modernizr css -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <div class="wrapper blog">

            <!--slider header area are start-->
            <div id="home" class="header-slider-area">
                <!--header start-->
                <div class="header-area header-2">
                    <!--logo menu area start-->
                    <div id="sticker" class="logo-menu-area header-area-2">
                        <div class="container hidden-xs">
                            <div class="row">
                                <div class="col-md-2 col-sm-3"></div>
                                <div class="col-md-8 col-sm-9 text-center">
                                    <div class="logo">
                                        <a href="/"><img src="http://{{$_SERVER['HTTP_HOST']}}/img/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3"></div>
                            </div>
                        </div><!--logo menu area end-->
                        <!-- mobile-menu-area start -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="logo-02">
                                    <a href="/"><img src="http://{{$_SERVER['HTTP_HOST']}}/img/logo-02.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--mobile menu area end-->
                    </div> 
                </div>
                <!-- header End-->
            </div>

            <!--404 area start-->
            <div class="area-404 fix">
                <div class="container ptb100">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <img src="http://{{$_SERVER['HTTP_HOST']}}/img/404.png" alt="">
                            <h4><a href="/" style="border: 1px solid gray; padding: 5px;border-radius: 15px">Пощёл домой!!!!!НАСЯЛЬНИКААААААААА</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--404 area end-->

            <!--footer area are start-->
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="social-area">
                                <ul>
                                    <li><a href="https://www.facebook.com"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://www.google.com.ua"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="https://twitter.com"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="https://linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                                    <li><a href="https://pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!--footer area are finish-->
            <!--body-wraper-are-end-->
        </div>

        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/vendor/jquery-3.1.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/bootstrap.min.js"></script>
        <!-- validator js -->
        <script src="http://bootstraptema.ru/plugins/2016/validator/validator.min.js"></script>
        <!-- owl.carousel js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/jquery.meanmenu.js"></script>
        <!-- Nivo js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/nivo-slider/nivo-active.js"></script>
        <!-- wow js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/wow.min.js"></script>
        <!-- Youtube Background JS -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- datepicker js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/bootstrap-datepicker.js"></script>
        <!-- waypoint js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/waypoints.min.js"></script>
        <!-- onepage nav js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/jquery.nav.js"></script>
        <!-- animate text JS -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/animate-text.js"></script>
        <!-- plugins js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/plugins.js"></script>
        <!-- main js -->
        <script src="http://{{$_SERVER['HTTP_HOST']}}/js/main.js"></script>
    </body>
</html>