@extends('layouts.app')
@section('content')
<style>
    .hovergallery img{
        width: 400px;

        -webkit-transform:scale(0.8); /*Webkit: уменьшаем размер до 0.8*/
        -moz-transform:scale(0.8); /*Mozilla: масштабирование*/
        -o-transform:scale(0.8); /*Opera: масштабирование*/
        -webkit-transition-duration: 0.5s; /*Webkit: длительность анимации*/
        -moz-transition-duration: 0.5s; /*Mozilla: длительность анимации*/
        -o-transition-duration: 0.5s; /*Opera: длительность анимации*/
        opacity: 0.7; /*Начальная прозрачность изображений*/
        margin: 0 10px 5px 0; /*Интервалы между изображениями*/
    }

    .hovergallery img:hover{
        -webkit-transform:scale(1.1); /*Webkit: увеличиваем размер до 1.2x*/
        -moz-transform:scale(1.1); /*Mozilla: масштабирование*/
        -o-transform:scale(1.1); /*Opera: масштабирование*/
        box-shadow:0px 0px 30px gray; /*CSS3 тени: 30px размытая тень вокруг всего изображения*/
        -webkit-box-shadow:0px 0px 30px gray; /*Webkit: тени*/
        -moz-box-shadow:0px 0px 30px gray; /*Mozilla: тени*/
        opacity: 1;
    }
    h2{
        text-align: center;
        margin-bottom: 50px;
    }

</style>

<div class="main-blog-area ptb100 fix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="blog-body">
                    <h1 class="text-center">Наша команда</h1></br></br>
                    <div class="row">
                        <div class="hovergallery"> 
                            
                            <div class="row">
                                <div class="text-desc col-md-4 col-md-push-7">
                                    <h3><b>Игорь Никольчук</b></h3>   
                                    <p>Должность: Team lead, backender</p>                            
                                </div>
                                <div class="col-md-8 col-md-pull-4"><img src="https://pp.userapi.com/c9999/u24279400/-6/x_4255602a.jpg" />    </div>
                            </div>
                            
                            <div class="row">
                                <div class="text-desc col-md-4 col-md-push-7">
                                    <h3>Иван Пирогов</h3>
                                    <p>Должность: frontender</p>
                                </div>
                                <div class="col-md-8 col-md-pull-4">  <img src="https://pp.userapi.com/c626730/v626730566/a8ac/-_MdUmuzs1k.jpg" />    </div>
                            </div>
                        
                            <div class="row">
                                <div class="text-desc col-md-4 col-md-push-7"> 
                                    <h3>Виктор Усачёв</h3>
                                    <p>Должность: backender</p>
                                </div>
                                <div class="col-md-8 col-md-pull-4"> <img src="https://pp.userapi.com/c313116/v313116554/2246/To-GaIySEOI.jpg" />   </div>
                            </div>
                            
                            <div class="row">
                                <div class="text-desc col-md-4 col-md-push-7">
                                    <h3>Егор Рудь</h3>
                                    <p>Должность: frontender</p>
                                </div>
                                <div class="col-md-8 col-md-pull-4"> <img src="https://pp.userapi.com/c626923/v626923635/2cc18/aqIF3YFatWs.jpg" />    </div>
                            </div>

                            <div class="row">
                                <div class="text-desc col-md-4 col-md-push-7">    
                                    <h3>Павел Порхун</h3>
                                    <p>Должность: frontender</p>
                                </div>
                                <div class="col-md-8 col-md-pull-4"><img src="https://pp.userapi.com/c618328/v618328159/10101/rjJDGE11k-w.jpg" />   </div>
                            </div>
                                
                            <div class="row">
                                <div class="text-desc col-md-4 col-md-push-7">
                                    <h3>Дима Филипенко</h3>
                                    <p>Должность: frontender</p>
                                </div>
                                <div class="col-md-8 col-md-pull-4"> <img src="https://pp.userapi.com/c626628/v626628424/60c93/RA5bTySAw1Y.jpg" />  </div>
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>

            @endsection