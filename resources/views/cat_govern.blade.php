@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 


<div class="well well-sm">
    <form action="{{ url('admin/cat') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Добавление новой категории</legend>



            <form action="{{ url('admin/cat') }}" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-md-3 control-label">Название:</label>
                    <div class="col-md-9">
                        <input type="text" name="name" required class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Описание:</label>
                    <div class="col-md-9">
                        <input type="text" name="description" required class="form-control"> 
                    </div>
                </div>
                <input type="hidden" name="author_id" value="{{ $userid }}">
                <div class="form-group">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <input type="submit" value="Добавить категорию" class="btn btn-primary btn-md"><br>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                {{ csrf_field() }}

            </form>



        </fieldset>

    </form>
</div>


<br><br>


<table>
    @foreach($cats as $cat)
    <tr>
    <form action="{{ url('admin/cat/update/'.$cat->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('POST') }}

        <td class="table-text">
            <div>{{ $cat->name }}</div>
            <input class="form-control" type="text" value="{{ $cat->name }}" id="newname" name="newname"><br>
        </td>

        <td class="table-text">
            <input type="hidden" value="{{ $cat->id }}" name="id"><br>
            <div>{{ $cat->description }}</div>
            <textarea class="form-control" value="" id="newdescription" name="newdescription">{{ $cat->description }}</textarea><br>

            <button type="submit" id="save" class="btn  ">
                <i class="fa fa-"></i> сохранить
            </button>

            <input type="button" class="btn" value="Редактировать">

        </td>

    </form>
    <td>
        <form action="{{ url('admin/cat/del/'.$cat->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" id="del" name="del" class="btn btn-danger">
                <i class="fa fa-trash"></i> Удалить
            </button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
