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
                                       <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>7 Like</a></li>
                                       <li><a href="#"><i class="zmdi zmdi-comment-text"></i>9 Comment</a></li>
                                       <li><a href="#">Post By : {{ isset($author) ? $author : 'author' }}</a></li>
                                   </ul>
                                </div>
                                <div class="sb-text">
                                    <p>{{ isset($content) ? $content : 'content' }}</p>
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
                                <div class="comments-area">
                                   <h3 class="aside-title uppercase">02 Comments</h3> 
                                    <div class="comments-body">
                                        <ul>
                                            <li class="signle-comments">
                                                <img src="img/team/comment-01.jpg" alt="">
                                                <div class="commets-text">
                                                    <h5>JOHN NGUYEN</h5>
                                                    <span>July 15 , 2018</span> <span>, at 2:39 am</span>
                                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                                </div>
                                                <div class="replay"><a href="#">Replay</a></div>
                                            </li>
                                            <li class="signle-comments">
                                                <img src="img/team/comment-02.jpg" alt="">
                                                <div class="commets-text">
                                                    <h5>JOHN NGUYEN</h5>
                                                    <span>July 15 , 2018</span> <span>, at 2:39 am</span>
                                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                                </div>
                                                <div class="replay"><a href="#">Replay</a></div>
                                            </li>
                                            <li class="signle-comments">
                                                <img src="img/team/comment-03.jpg" alt="">
                                                <div class="commets-text">
                                                    <h5>JOHN NGUYEN</h5>
                                                    <span>July 15 , 2018</span> <span>, at 2:39 am</span>
                                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                                </div>
                                                <div class="replay"><a href="#">Replay</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="Leave-your-thought mt50">
                                    <h3 class="aside-title uppercase">Leave your thought</h3>
                                    <div class="row">
                                        <form action="#">
                                            <div class="col-md-6 col-sm-6 col-xs-12 lyt-left">
                                                <div class="input-box leave-ib">
                                                    <input type="text" placeholder="Name" class="info" name="name">
                                                    <input type="email" placeholder="Email" class="info" name="emil">
                                                    <input type="text" placeholder="Website" class="info" name="web"> </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="lyt-right">
                                                    <textarea placeholder="Message" class="area-text" name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="input-box post-comment">
                                                    <input type="submit" value="post comment" class="submit uppercase"> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                       </div>
		<!--sidebar-->
	    
    <!--main blog area start-->
    @endsection