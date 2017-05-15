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
            <div id="sticker" class="logo-menu-area">
                <div class="container hidden-xs">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <div class="logo">
                                <a href="/"><img src="http://{{$_SERVER['HTTP_HOST']}}/img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-9">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul id="nav">
                                        <li><a class="smooth-scroll" href="/">Главная</a></li>
                                        <li><a class="smooth-scroll" href="/">Timeline</a></li>
                                        <li><a class="smooth-scroll" href="/">Speakers</a></li>
                                        <li><a class="smooth-scroll" href="/">News</a></li>
                                        <li><a class="smooth-scroll" href="/">Feed</a></li>
                                        <li><a href="/authors">О Нас</a></li>
                                        <li><a class="smooth-scroll" href="/contact">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a style="color: #DB0630;" href="{{ url('/login') }}">Войти |</a></li>
                                <li><a style="color: #DB0630;" href="{{ url('/register') }}">| Регистрация</a></li>
                            @else
                                <li class="dropdown">
                                    <a  style="color: #DB0630;min-width: 85px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu nav" role="menu" style="min-width: 0; padding: 0;min-width: 85px">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выйти</a></li>
                                        <li><a href="{{ url('/admin/user') }}"><i class="fa fa-btn fa-sign-in"></i>Панель</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                        <!--<div class="col-md-2 hidden-sm">
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
                    </div>-->
                    </div><!--logo menu area end-->
                    <!-- mobile-menu-area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="logo-02">
                                <a href="/"><img src="http://{{$_SERVER['HTTP_HOST']}}/img/logo-02.png" alt=""></a>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="/">Главная</a></li>
                                            <li><a href="/">Timeline</a></li>
                                            <li><a href="/">Speakers</a></li>
                                            <li><a href="/">News</a></li>
                                            <li><a href="/">Feed</a></li>
                                            <li><a href="/authors">О нас</a></li>
                                            <li><a href="/contact">Контакты</a></li>
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
        <!-- main blog area start-->
        <!--Контентная часть-->
    @yield('content')<!-- подключает блок контент -->
        <div class="col-md-3 col-md-offset-1 col-sm-5 col-xs-12">
            <div class="total-widget">
                <!--<div class="single-widget search-widget mb30">
                    <form action="#">
                        <div class="input-box">
                            <input type="search" placeholder="Search" class="info" name="serch">
                            <button class="search-btn"><i class="zmdi zmdi-search"></i></button>
                        </div>
                    </form>
                </div>-->
                <div class="single-widget catagory-widget">
                    <h3 class="aside-title uppercase">Категории</h3>
                    <ul>
                        @foreach($categories as $key => $category)
                            <li>
                                <a href="http://{{$_SERVER['HTTP_HOST']}}/categories/{{$category->id }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="single-widget recent-post mt100">
                    <h3 class="aside-title uppercase">Недавние посты</h3>
                    @foreach($newposts as $newpost)
                        <div class="rec-blog-content hidden-md">
                            <img src="http://{{$_SERVER['HTTP_HOST']}}/{{ $newpost->img }}" alt="">
                            <h4>
                                <a href="http://{{$_SERVER['HTTP_HOST']}}/post/{{ $newpost->id }}">{{ $newpost->title }}</a>
                            </h4>
                            <p class="blog-date"><i
                                        class="zmdi zmdi-calendar-note"></i>{{ date("M d, Y",strtotime($newpost->created_at)) }}
                            </p>
                            <!--<p>There are many variations of sages of Lorem Ipsum.</p>-->
                        </div>
                    @endforeach
                </div>
                <!--<div class="single-widget tag-widget mt100">
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
                </div>-->
            </div>
        </div>
    </div>
</div>
</div>
</div>


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
                        <li><a href=""><img src="http://{{$_SERVER['HTTP_HOST']}}/img/icon/pay-01.jpg" alt=""></a></li>
                        <li><a href=""><img src="http://{{$_SERVER['HTTP_HOST']}}/img/icon/pay-02.jpg" alt=""></a></li>
                        <li><a href=""><img src="http://{{$_SERVER['HTTP_HOST']}}/img/icon/pay-03.jpg" alt=""></a></li>
                        <li><a href=""><img src="http://{{$_SERVER['HTTP_HOST']}}/img/icon/pay-04.jpg" alt=""></a></li>
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