@extends('layouts.app')
@section('content')
<div class="main-blog-area ptb100 fix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
               
                    <!-- main blog area start-->
                    <div class="area-404 ptb100 fix">
                        <div class="container">                  
                            <div class="row">
                                <div class="text-center">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10583.539581943789!2d35.0404627!3d48.458738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb4637f658c8cf549!2z0KPRh9C10LHQvdGL0LkgSVQt0YbQtdC90YLRgCBMZXZlbCBVUA!5e0!3m2!1sru!2sua!4v1494726283181" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>                       
                            </div>
                            <h2 style="margin-top: 20px">По какому графику работает офис?</h2>
                            <h4>Приемная работает ежедневно с 9:00 до 18:00.</h4>
                        </div>
                    </div>
                    <!-- Add Google Maps -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl_YC4rjpCObXVO0GrcEVu6rqvbl-lcxU&callback=myMap"></script>

                    <script>
                        // Google Map Location
                        var myCenter = new google.maps.LatLng(48.46637695, 35.05218029);

                        function initialize() {
                            var mapProp = {
                                center: myCenter,
                                zoom: 14,
                                scrollwheel: false,
                                draggable: false,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };

                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                            var marker = new google.maps.Marker({
                                position: myCenter,
                            });

                            marker.setMap(map);
                        }

                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <!--information area are start-->
                    <div class="information-area off-white ptb100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                    <div class="single-information text-center">
                                        <div class="info-icon">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                        <h4>Phone</h4>
                                        <p>+ (0111) 0000000</p>
                                        <p>+ (0111) 0000000</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                    <div class="single-information text-center">
                                        <div class="info-icon">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <h4>E-Mail</h4>
                                        <p><a href="#">company@email.com</a></p>
                                        <p><a href="#">we@company.info</a></p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--information area are start-->
               
            </div>


            @endsection