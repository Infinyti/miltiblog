@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="main-blog-area ptb100 fix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12" style="margin-top: 50px">
                    <div class="panel panel-default">
                        <div class="panel-heading container-fluid">
                            <div class="col-md-6">Сброс пароля</div>
                            <div class="col-md-6" style="text-align: right"><a href="{{ url('/login') }}"><i>Авторизация</i></a></div>
                        </div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success" style="text-align: center;">
                                    <i>{{ session('status') }}</i>
                                </div>
                            @endif

                            <form data-toggle="validator" class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/password/email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Ваш email:</label>

                                    <div class="col-md-6">
                                        <input data-error="Вы не правильно ввели E-mail" id="email" type="email"
                                               class="form-control" name="email" value="{{ old('email') }}" required>
                                        <div class="help-block with-errors"></div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-envelope"></i> Получить ссылку на сброс пароля
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

@endsection
