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
                    <input name="name" type="text" required class="form-control">
                </div>
            </div>

            <!-- Description input-->
            <div class="form-group">
                <label class="col-md-3 control-label">Описание:</label>
                <div class="col-md-9">
                    <input name="text" type="text" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Категория:</label>
                <div class="col-md-9">
                    <select name="category_id">
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
            <br>
        </td>
    </tr>
    @endforeach
</table>

@endsection