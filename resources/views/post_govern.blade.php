@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 



<div class="well well-sm">
    <form action="{{ url('admin/post') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
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
                    <input name="content" type="text" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Категория:</label>
                <div class="col-md-9">
                    <select name="category_id" required>
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
                    <button type="submit" class="btn btn-primary btn-lg">Добавить</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </fieldset>
        {{ csrf_field() }}
    </form>
</div>


<br><br>


<table>
    @foreach($posts as $key => $post)
    <div id="poup-post-{{ $post->id }}" class="modalDialog">
        <div class="well well-sm">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <fieldset>
                    <legend class="text-center">Редактировать пост</legend>
                    <form action="{{ url('admin/post/update/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}


                        <input class="form-control" type="text" value="{{ $post->title }}" id="newname" name="newtitle"><br>
                        <input type="hidden" value="{{ $post->id }}" name="id"><br>
                        <textarea class="form-control" value="" id="newdescription" name="newcontent">{{ $post->content }}</textarea><br>
                        <select name="category_id" required>
                            @foreach($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
			<div class="form-group">
                <label class="col-md-3 control-label">Картинка:</label>
                <div class="col-md-9">
                    <input type="file" name="img"><br>
                </div>
            </div>
			<br><br>
                        <!--<input type="file" name="new_img">
                        <input type="hidden" name="img" value="{{ $post->img }}"/>-->
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
        <td style="padding: 0 0 0 10em">
            <form action="{{ url('admin/post/del/'.$post->id) }}" method="POST">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Удалить
                </button>

            </form>
        </td>
        <td>
            <a href="#poup-post-{{ $post->id }}" class="btn"><input type="button" class="btn" value="Редактировать"></a>
        </td>
    </tr>
    @endforeach
</table>
<style>

</style>
@endsection