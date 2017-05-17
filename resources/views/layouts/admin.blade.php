<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin</title>
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="http://{{$_SERVER['HTTP_HOST']}}/img/favicon_admin.ico">
        <!-- BOOTSTRAP STYLES-->
        <link href="http://{{$_SERVER['HTTP_HOST']}}/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="http://{{$_SERVER['HTTP_HOST']}}/css/font-awesome.css" rel="stylesheet" />
        <!-- MORRIS CHART STYLES-->
        <link href="http://{{$_SERVER['HTTP_HOST']}}/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="http://{{$_SERVER['HTTP_HOST']}}/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- My poup-up-->
        <link href="http://{{$_SERVER['HTTP_HOST']}}/css/poup-up.css" rel="stylesheet" />

        <script src="http://{{$_SERVER['HTTP_HOST']}}/ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin/user">Админ панель</a> 
                </div>
                <div style="" class="admin-data"> Сегодня : <?php echo date("d.m.Y"); ?> &nbsp;
                    <a href="{{ url('/') }}" class="btn btn-danger square-btn-adjust" target="_blank">На сайт</a>
                    <a href="{{ url('/logout') }}" class="btn btn-danger square-btn-adjust">Выйти</a>    
                </div>
            </nav>   
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="http://{{$_SERVER['HTTP_HOST']}}/{{ $userinfo->avatar }}" class="user-image img-responsive"/>
                        </li>
                        <li>
                            <a href="/admin/post"><i class="fa fa-book "></i>Посты</a>
                        </li>
                        <li>
                            <a href="/admin/cat"><i class="fa fa-bars "></i>Категории</a>
                        </li>

                        <li>
                            <a  href="/admin/user"><i class="fa fa-users "></i>Пользователи</a>
                        </li>
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{ $userinfo->name }}</h2>   
                            <h5>Здравствуй, {{ $userinfo->name }}! Рады Вас снова видеть. </h5>
                        </div>
                    </div>              
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-1 col-sm-1 col-lg-3"></div>
                        <div class="col-md-10 col-sm-10 col-xs-12 col-lg-6">           
                            <div class="panel panel-back noti-box">
                                @yield('content')<!-- подключает блок контент -->
                            </div>
                        </div> 
                        <div class="col-md-1 col-sm-1 col-lg-3"></div>
                    </div>          
                </div>

                <!-- /. WRAPPER  -->
                <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                <!-- JQUERY SCRIPTS -->
                <script src="http://{{$_SERVER['HTTP_HOST']}}/js/jquery-1.10.2.js"></script>
                <!-- BOOTSTRAP SCRIPTS -->
                <script src="http://{{$_SERVER['HTTP_HOST']}}/js/bootstrap.min.js"></script>
                <!-- METISMENU SCRIPTS -->
                <script src="http://{{$_SERVER['HTTP_HOST']}}/js/jquery.metisMenu.js"></script>
                <!-- MORRIS CHART SCRIPTS -->
                <script src="http://{{$_SERVER['HTTP_HOST']}}/js/morris/raphael-2.1.0.min.js"></script>
                <script src="http://{{$_SERVER['HTTP_HOST']}}/js/morris/morris.js"></script>
                <!-- CUSTOM SCRIPTS -->
                <script src="http://{{$_SERVER['HTTP_HOST']}}/js/custom.js"></script>
            </div>
        </div>
    </body>
</html>
