@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 


<div class="well well-sm">
    <form action="{{ url('admin/cat') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Добавление новой категории</legend>

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




        </fieldset>

    </form>
</div>


<br><br>


<table>
    @foreach($cats as $cat)

    <div id="poup-cat-{{ $cat->id }}" class="modalDialog">
        <div class="well well-sm">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <fieldset>
                <legend class="text-center">Редактировать категорию</legend>
            <form action="{{ url('admin/cat/update/'.$cat->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('POST') }}


                <input class="form-control" type="text" value="{{ $cat->name }}" id="newname" name="newname"><br>



                <input type="hidden" value="{{ $cat->id }}" name="id"><br>

                <input type="text" class="form-control" value="{{ $cat->description }}" id="newdescription" name="newdescription"><br>

                <button type="submit" id="save" class="btn  ">
                    <i class="fa fa-"></i> сохранить
                </button>        
            </form>
            </fieldset>
        </div>
    </div>
    <tr>
        <td class="table-text">
            <div>{{ $cat->name }}</div>
        </td>
        <td class="table-text">
            <form action="{{ url('admin/cat/del/'.$cat->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" id="del" name="del" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Удалить
                </button>
            </form>
        </td>
        <td>
            <a href="#poup-cat-{{ $cat->id }}" class="btn"><input type="button" class="btn" value="Редактировать"></a>
        </td>
    </tr>  

    @endforeach
</table>
@endsection

