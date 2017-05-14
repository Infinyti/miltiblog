@extends('layouts.app')

@section('content')
    <div class="main-blog-area ptb100 fix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12" style="margin-top: 50px">
                <div class="panel panel-default">
                    <div class="panel-heading container-fluid">
                        <div class="col-md-6">Авторизация</div>
                        <div class="col-md-6" style="text-align: right"><a href="{{ url('/register') }}"><i>Регистрация</i></a></div>
                    </div>
                    <div class="panel-body">
                        <form data-toggle="validator" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Ваш логин:</label>

                                <div class="col-md-6">
                                    <input data-minlength="6" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" data-error="Вы не полностью ввели ваш логин" required>
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Ваш пароль:</label>

                                <div class="col-md-6">
                                    <input data-minlength="6" data-error="Пароль введен не полностью" id="password" type="password" class="form-control" name="password" required>
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" style="height: 20px;"><i>Запомнить меня</i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Войти
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Забыли ваш пароль?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection