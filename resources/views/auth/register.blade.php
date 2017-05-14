@extends('layouts.app')

@section('content')
    <div class="main-blog-area ptb100 fix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12" style="margin-top: 50px">
                    <div class="panel panel-default">
                        <div class="panel-heading container-fluid">
                            <div class="col-md-6">Регистрация</div>
                            <div class="col-md-6" style="text-align: right"><a href="{{ url('/login') }}"><i>Авторизация</i></a></div>
                        </div>
                        <div class="panel-body">
                            <form data-toggle="validator" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Логин:</label>

                                    <div class="col-md-6">
                                        <input  data-error="Логин должен быть не короче 6 символов." data-minlength="6"  id="name" type="text" class="form-control" name="name"
                                               value="{{ old('name') }}" required>
                                        <div class="help-block with-errors"></div>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail:</label>

                                    <div class="col-md-6">
                                        <input  data-error="Вы не правильно ввели E-mail"  id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>
                                        <div class="help-block with-errors"></div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Пароль:</label>

                                    <div class="col-md-6">
                                        <input data-toggle="validator" data-minlength="6" data-error="Пароль должен быть не короче 6 символов." id="password" type="password" class="form-control" name="password" required>
                                        <div class="help-block with-errors"></div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-md-4 control-label">Подтверждение
                                        пароля:</label>

                                    <div class="col-md-6">
                                        <input data-match="#password" data-match-error="Ошибка! Пароли не совпадают!"
                                               id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                        <div class="help-block with-errors"></div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-user"></i> Регистрация и вход
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

@endsection