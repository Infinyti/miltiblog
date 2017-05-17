@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 
<div class="well well-sm">
    <fieldset>       
        <legend class="text-center">Ваши данные</legend> 
        <div class="row" style="display: grid">
            <div class="form-group" style="margin: 0">
                <label class="col-md-3">Ваш логин:</label>
                <div class="col-md-9">
                    <label class="col-md-3 control-label"><big>{{ $userinfo->name }}</big></label>
                </div>
            </div>
            <div class="form-group" style="margin: 0">
                <label class="col-md-3">Ваш email:</label>
                <div class="col-md-9">
                    <label class="col-md-3 control-label"><big>{{ $userinfo->email }}</big></label>
                </div>
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
                    <legend class="text-center">Редактировать ваши данные</legend>

                    <!-- Name input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Имя:</label>
                        <div class="col-md-9">
                            <input name="name" type="text" required class="form-control" value="{{ $userinfo->name }}" placeholder="Имя">
                        </div>
                    </div>

                    <!-- Description input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Почта:</label>
                        <div class="col-md-9">
                            <input name="email" type="text" required class="form-control" value="{{ $userinfo->email }}" placeholder="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Пароль:</label>
                        <div class="col-md-9">
                            <input name="newpassword" type="password" class="form-control" value="" placeholder="Введите для смены пароля">
                            <input type="hidden" name="password" value="{{ $userinfo->password }}"/>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $userinfo->id }}">
		    
		    <div class="form-group">
			<label class="col-md-3 control-label">Картинка:</label>
			<div class="col-md-9">
			    <input type="file" name="avatar"><br>
			</div>
		    </div>
                    <input type="hidden" name="oldavatar" value="{{ $userinfo->avatar }}">
		    <input type="hidden" name="author_id" value="{{ $userinfo->id }}">
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
@if($userinfo->roles ===1)
<div class="table-responsive">
    <table class="table table-striped">
        <caption>Пользователи сайта</caption>
        <tr>
            <th>Имя</th>
            <th>Статус</th>
            <th>Действие</th>
        </tr>
        @foreach($users as $key => $user)
        <div id="poup-post-{{ $user->id }}" class="modalDialog">
            <div class="well well-sm">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <div class="well well-sm">
                        <form action="{{ url('admin/user/update/'.$user->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <fieldset>
                                <legend class="text-center">Редактировать данные {{$user->name}}</legend>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Имя:</label>
                                    <div class="col-md-9">
                                        <input name="name" type="text" required class="form-control" value="{{ $user->name }}" placeholder="Имя"><br>
                                    </div>
                                </div>

                                <!-- Description input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Почта:</label>
                                    <div class="col-md-9">
                                        <input name="email" type="text" required class="form-control" value="{{ $user->email }}" placeholder="email"><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Пароль:</label>
                                    <div class="col-md-9">
                                        <input name="newpassword" type="password" class="form-control" value="" placeholder="Введите для смены пароля"><br>
                                        <input type="hidden" name="password" value="{{ $user->password }}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Статус:</label>
                                    <div class="col-md-9">
                                        <select name="status">
                                            <option value="" disabled selected>Выберите статус</option>
                                            <option value="NULL">На проверке</option>
                                            @foreach($status as $stat)                       
                                            <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Картинка:</label>
                                    <div class="col-md-9">
                                        <img src="http://{{$_SERVER['HTTP_HOST']}}/{{ $user->avatar }}" width="100"/>
                                        <input type="file" name="avatar"><br>
                                    </div>
                                </div>
                                <input type="hidden" name="author_id" value="{{ $user->id }}">
                                <input type="hidden" name="oldavatar" value="{{ $user->avatar }}">
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
        </div>

        <tr>
            <td class="table-text">
                <div>{{ $user->name }}</div>
            </td>
            <td class="table-text">
                <div>{{ isset($user->status) ? $user->status : 'На проверке' }}</div>
            </td>
            <td class="table-text">
                <form action="{{ url('admin/user/del/'.$user->id) }}" method="POST" class="table_delete">

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger" title="Удалить">
                        <i class="fa fa-trash"></i>
                    </button>

                </form>
                <a href="#poup-post-{{ $user->id }}" class="table_edit" title="Редактировать">
                    <button type="submit" class="btn">
                        <i class="fa fa-pencil"></i>
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
@endsection

