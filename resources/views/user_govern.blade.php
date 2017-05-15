@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 
<div class="well well-sm">
    <fieldset>
        <legend class="text-center">Ваши данные</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Ваш логин:</label>
            <div class="col-md-9">
                {{ $userinfo->name }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Ваш email:</label>
            <div class="col-md-9">
                {{ $userinfo->email }}
            </div>
        </div>
    </fieldset>
</div>

<a href="#poup-user" class="btn"><input type="button" class="btn" value="Редактировать"></a>
<div id="poup-user" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="well well-sm">
            <form action="{{ url('admin/user/update/'.$userinfo->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <legend class="text-center">Ваши данные</legend>

                    <!-- Name input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Имя:</label>
                        <div class="col-md-9">
                            <input name="name" type="text" required class="form-control" value="{{ $userinfo->name }}">
                        </div>
                    </div>

                    <!-- Description input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Почта:</label>
                        <div class="col-md-9">
                            <input name="email" type="text" required class="form-control" value="{{ $userinfo->email }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Пароль:</label>
                        <div class="col-md-9">
                            <input name="password" type="password" required class="form-control" value="{{ $userinfo->password }}">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $userinfo->id }}">
                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </fieldset>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection

