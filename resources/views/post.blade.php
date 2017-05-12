@extends('layouts.app') <!-- views/layouts/app.blade.php -->

@section('content') 

<!--body-wraper-are-start-->
<div class="wrapper single-blog"> 

    <!-- main blog area start-->
    <div class="single-blog-area ptb100 fix">
	<div class="container">
	    <div class="row">
		<div class="col-md-8 col-sm-7">
		    <div class="single-blog-body">
			<div class="sb-img mb50">
			    <img src="img/blog/sb-01.jpg" alt="">
			</div>
			<h3 class="aside-title uppercase">With the increasing complexity of today’s society</h3>
			<div class="blog-meta">
			    <ul>
				<li><a href="#"><i class="zmdi zmdi-calendar-note"></i>Feb 1, 2100</a></li>
				<li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>0 Like</a></li>
				<li><a href="#"><i class="zmdi zmdi-comment-text"></i>0 Comment</a></li>
				<li><a href="#">Post By : Admin</a></li>
			    </ul>
			</div>
			<div class="sb-text">
			    <p>There are many variations of passages of Lorem Ipsum available, but the majority suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum. <br><br>generators on the Internet tend to repeat predefined chunks as necessary. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use passage of Lorem Ipsum, you need to be sure there anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. </p>
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
			<div class="related-post">
			    <h3 class="aside-title uppercase">Related Post</h3> 
			    <div class="row">
				<div class="total-related-post">
				    <div class="col-xs-12">
					<div class="single-news single-news-02">
					    <div class="news-img animate-eff">
						<a href="#"><img src="img/blog/blog-06.jpg" alt=""></a>
					    </div>
					    <div class="news-contant">
						<h3 class="uppercase"><a href="#">Design & Develop concept fot new Designer</a></h3>
						<p>Post-by :<a href="#"> Admin</a> </p>
						<div class="news-bottom shadow-box"> <a href="#"><i class="zmdi zmdi-favorite-outline"></i>7 Like</a> <a href="#"><i class="zmdi zmdi-comment-text"></i>9 Comment</a> <a class="read-more" href="single-blog.html">Read More</a> </div>
					    </div>
					</div>
				    </div>
				    <div class="col-xs-12">
					<div class="single-news single-news-02">
					    <div class="news-img animate-eff">
						<a href="#"><img src="img/blog/blog-07.jpg" alt=""></a>
					    </div>
					    <div class="news-contant">
						<h3 class="uppercase"><a href="#">Design & Develop concept fot new Designer</a></h3>
						<p>Post-by :<a href="#"> Admin</a> </p>
						<div class="news-bottom shadow-box"> <a href="#"><i class="zmdi zmdi-favorite-outline"></i>7 Like</a> <a href="#"><i class="zmdi zmdi-comment-text"></i>9 Comment</a> <a class="read-more" href="single-blog.html">Read More</a> </div>
					    </div>
					</div>
				    </div>
				    <div class="col-xs-12">
					<div class="single-news single-news-02">
					    <div class="news-img animate-eff">
						<a href="#"><img src="img/blog/news-01.jpg" alt=""></a>
					    </div>
					    <div class="news-contant">
						<h3 class="uppercase"><a href="#">Design & Develop concept fot new Designer</a></h3>
						<p>Post-by :<a href="#"> Admin</a> </p>
						<div class="news-bottom shadow-box"> <a href="#"><i class="zmdi zmdi-favorite-outline"></i>7 Like</a> <a href="#"><i class="zmdi zmdi-comment-text"></i>9 Comment</a> <a class="read-more" href="single-blog.html">Read More</a> </div>
					    </div>
					</div>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
		<!--sidebar-->
	    </div>
	</div>
    </div>
    <!--main blog area start-->
    @endsection