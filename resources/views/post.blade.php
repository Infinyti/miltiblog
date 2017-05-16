@extends('layouts.app') <!-- views/layouts/app.blade.php -->

@section('content') 

<!-- main blog area start-->
<div class="single-blog-area ptb100 fix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="single-blog-body">
                    <div class="sb-img mb50">
                        <img src="http://{{$_SERVER['HTTP_HOST']}}/{{ $img }}" alt="">
                    </div>
                    <h3 class="aside-title uppercase">{{ isset($title) ? $title : 'Заголовок' }}</h3>
                    <div class="blog-meta">
                        <ul>
                            <li><a href="#"><i class="zmdi zmdi-calendar-note"></i>{{ date("M d, Y",strtotime($date)) }}</a></li>
                            <!--<li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>7 Like</a></li>
                            <li><a href="#"><i class="zmdi zmdi-comment-text"></i>9 Comment</a></li>-->
                            <li><a href="#">Post By : {{ isset($author) ? $author : 'author' }}</a></li>
                        </ul>
                    </div>
                    <div class="sb-text">
                        {!! isset($content) ? $content : 'content' !!}
                    </div>
                    <div class="social-area single-blog-social mtb50">
                        <ul>
                            <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-outlook"></i></a></li>
                        </ul>
                    </div>
<!-- Блок коментариев -->
                    <div id="hypercomments_widget"></div>
                    <script type="text/javascript">
                        _hcwp = window._hcwp || [];
                        _hcwp.push({widget: "Stream", widget_id: 90843});
                        (function () {
                            if ("HC_LOAD_INIT" in window)
                                return;
                            HC_LOAD_INIT = true;
                            var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                            var hcc = document.createElement("script");
                            hcc.type = "text/javascript";
                            hcc.async = true;
                            hcc.src = ("https:" == document.location.protocol ? "https" : "http") + "://w.hypercomments.com/widget/hc/90843/" + lang + "/widget.js";
                            var s = document.getElementsByTagName("script")[0];
                            s.parentNode.insertBefore(hcc, s.nextSibling);
                        })();
                    </script>
                    <a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by HyperComments</a>

                </div>
            </div>
            <!--sidebar-->

            <!--main blog area start-->
            @endsection