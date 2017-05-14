<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin</title>
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
                    <a class="navbar-brand" href="#">Админ панель</a> 
                </div>
                <div style="color: white;
                     padding: 15px 50px 5px 50px;
                     float: right;
                     font-size: 16px;"> Сегодя : <?php echo date("d.m.Y"); ?> &nbsp;
                    <a href="{{ url('/') }}" class="btn btn-danger square-btn-adjust" target="_blank">На сайт</a>
                    <a href="#" class="btn btn-danger square-btn-adjust">Выйти</a>    
                </div>
            </nav>   
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="http://{{$_SERVER['HTTP_HOST']}}/img/find_user.png" class="user-image img-responsive"/>
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
                            <h2>*имя юзера*</h2>   
                            <h5>Здравствуй, *имя юзера*! Рады Вас снова видеть. </h5>
                        </div>
                    </div>              
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6"></div>
                        <div class="col-md-6 col-sm-6 col-xs-6">           
                            <div class="panel panel-back noti-box">
                                @yield('content')<!-- подключает блок контент -->
                            </div>
                        </div> 
                        <div class="col-md-3 col-sm-6 col-xs-6"></div>
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
