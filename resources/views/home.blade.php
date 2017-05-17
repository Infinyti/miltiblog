@extends('layouts.app')

@section('slider')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" id="main" role="listbox">
        <div class="item active">
            <img src="http://{{$_SERVER['HTTP_HOST']}}/img/slider_1.jpg" alt="" width="1920" height="800">  
        </div>

        <div class="item">
            <img src="http://{{$_SERVER['HTTP_HOST']}}/img/slider_2.jpg" alt="" width="1920" height="800">   
        </div>

        <div class="item">
            <img src="http://{{$_SERVER['HTTP_HOST']}}/img/slider_3.jpg" alt="" width="1920" height="800">    
        </div>
    </div>
    <div class="slider_text">
        <img src="http://{{$_SERVER['HTTP_HOST']}}/img/slider_text.png" alt=""/>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection

@section('content')
<div class="main-blog-area ptb100 fix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="blog-body">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-md-6 col-sm-12 col-xs-12 block-img">
                            <div class="single-news single-news-02">
                                <div class="news-img animate-eff img-size-fix" >
                                    <a href="/post/{{ $post->id }}"><img src="{{ $post->img }}" class="img-rounded" alt=""></a>
                                </div>
                                <div class="news-contant">
                                    <h3 class="uppercase"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
                                    <p>Опубликовал : <a href="/user/{{ isset($post->userid) ? $post->userid : 0 }}">{{ isset($post->name) ? $post->name : 'Autor' }}</a> </p>
                                    <div class="news-bottom shadow-box">
                                        <a href="#"><i class="zmdi zmdi-calendar-note"></i>{{ date("M d, Y",strtotime($post->created_at)) }}</a>
                                        <a class="read-more" href="/post/{{ $post->id }}">Читать подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> 
<!--                    Постраничная навигация-->
                    <div class="col-md-12">                       
                            {{ $posts->render() }}                     
                    </div>
                </div>               
            </div>
@endsection


