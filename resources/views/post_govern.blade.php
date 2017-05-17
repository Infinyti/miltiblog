@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 
@if($userinfo->roles === NULL)
<div class="well well-sm">
    <h3 style="color: #B40101">Данный раздел вам не доступен.</h3>
</div>
@else
<div class="well well-sm">
    <form action="{{ url('admin/post') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
	    <!-- Уведомление о добавлении поста -->
	       @if (session('postSuccess'))
        <div class="alert alert-success">
	    <ul> 
		<li>{{ session('postSuccess') }}</li>
	    </ul>
        </div>
    @endif
     <!-- Уведомление о редактировании постов -->  
    @if (session('postUpdateSuccess'))
        <div class="alert alert-success">
	    <ul>
	    <li>{{ session('postUpdateSuccess') }}</li>
	    </ul>
        </div>
    @endif
            @include('common.errors')
            <legend class="text-center">Добавление нового поста</legend>

            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label">Название:</label>
                <div class="col-md-9">
                    <input name="title" type="text" required class="form-control">
                </div>
            </div>

            <!-- Description input-->
            <div class="form-group">
                <label class="col-md-3 control-label">Описание:</label>
                <div class="col-md-9">
                    <textarea id="content" rows="10" cols="80" name="content" class="form-control" style="height: 120px;resize: none;"></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace('content');
                    </script>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Категория:</label>
                <div class="col-md-9">
                    <select name="category_id" required>
                        <option value="" disabled selected>Выберите категорию</option>
                        @foreach($cats as $cat)                       
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select><br>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Картинка:</label>
                <div class="col-md-9">
                    <input type="file" name="img"><br>
                </div>
            </div>
            <input type="hidden" name="author_id" value="{{ $userid }}">
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-md">Добавить</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </fieldset>
        {{ csrf_field() }}
    </form>
</div>


<br><br>


<table class="table table-striped">
    <caption>
        @if($userinfo->roles ===1)
        Все посты
        @else
        Ваши посты
        @endif
    </caption>
    <tr>
        <th>Название</th>
        @if($userinfo->roles ===1)
        <th>Автор</th>
        @endif     
        <th>Категория</th>
        <th>Действие</th>
    </tr>
    @foreach($posts as $key => $post)
    <div id="poup-post-{{ $post->id }}" class="modalDialog">
        <div class="well well-sm">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <fieldset>
                    @include('common.errors')
                    <legend class="text-center">Редактировать пост</legend>
                    <form action="{{ url('admin/post/update/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}


                        <input class="form-control" type="text" value="{{ $post->title }}" id="newname" name="newtitle"><br>
                        <input type="hidden" value="{{ $post->id }}" name="id"><br>
                        <textarea class="form-control" id="newdescription" name="newcontent" style="height: 80px;resize: none;">{{ $post->content }}</textarea>
                        <script>
                            CKEDITOR.replace('newcontent');
                        </script>
                        <label class="col-md-3 control-label">Категория:
                        <select name="category_id" required>
                            @foreach($cats as $cat)
<<<<<<< HEAD
                            <option  value="{{ $cat->id }}">{{ $cat->name }}</option>
=======
                            @if($cat->id == $post->id_cat)
                            <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                            @else
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endif
>>>>>>> ecc918522cf75dea336160d0b2a9d63121ad2c37
                            @endforeach
                        </select>
                        </label>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Картинка:
                            </label>
                            <img src="http://{{$_SERVER['HTTP_HOST']}}/{{ $post->img }}" width="100"/>
                            <br>
                            <div class="col-md-9">
                                <input type="file" name="img">
                            </div>
                        </div>
                        <br><br>
                        <!--<input type="file" name="new_img">-->
                        <input type="hidden" name="oldimg" value="{{ $post->img }}"/>
                        <button type="submit" id="save" class="btn " >
                            <i class="fa fa-"></i> сохранить
                        </button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>

    <tr>
        <td class="table-text">
            <div>{{ $post->title }}</div>
        </td>
        @if($userinfo->roles ===1)
        <td class="table-text">
            <div>{{ $post->username }}</div>
        </td>
        @endif
        <td class="table-text">
            <div>{{ $post->name_cat }}</div>
        </td>
        <td class="table-text">
            <form action="{{ url('admin/post/del/'.$post->id) }}" method="POST" class="table_delete">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger" title="Удалить">
                    <i class="fa fa-trash"></i>
                </button>

            </form>
            <a href="#poup-post-{{ $post->id }}" class="table_edit" title="Редактировать">
                <button type="submit" class="btn">
                    <i class="fa fa-pencil"></i>
                </button>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endif
@endsection