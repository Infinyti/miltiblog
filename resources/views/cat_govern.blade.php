@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 

@if($userinfo->roles === NULL)
<div class="well well-sm">
    <h3 style="color: #B40101">Данный раздел вам не доступен.</h3>
</div>
@else
<div class="well well-sm">
    <form action="{{ url('admin/cat') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <!-- Уведомление о добавлении категории -->
            @if (session('categorySuccess'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ session('categorySuccess') }}</li>
                </ul>
            </div>
            @endif
            <!-- Уведомление о редактировании категории -->  
            @if (session('categoryUpdateSuccess'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ session('categoryUpdateSuccess') }}</li>
                </ul>
            </div>
            @endif
            <legend class="text-center">Добавление новой категории</legend>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label">Название:</label>
                <div class="col-md-9">
                    <input type="text" name="name" required class="form-control">
                </div>
            </div>
            <!-- Description input-->
            <div class="form-group">
                <label class="col-md-3 control-label">Описание:</label>
                <div class="col-md-9">
                    <textarea name="description" required class="form-control"></textarea> 
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


<table class="table table-striped">

    <caption>
        @if($userinfo->roles ===1)
        Все категории
        @else
        Ваши категории
        @endif
    </caption>
    <tr>
        <th>Название</th>
        @if($userinfo->roles ===1)
        <th>Создатель</th>
        @else
        <th>Описание</th>
        @endif        
        <th>Действие</th>
    </tr>
    @foreach($cats as $cat)
    <div id="poup-cat-{{ $cat->id }}" class="modalDialog">
        <div class="well well-sm">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <fieldset>
		     @include('common.errors')
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
                @if($userinfo->roles ===1)
                <div>{{ $cat->username }}</div>
                @else
                <div>{{ $cat->description }}</div>
                @endif
            </td>
            <td class="table-text">
                <form action="{{ url('admin/cat/del/'.$cat->id) }}" method="POST" class="table_delete">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger" title="Удалить">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>

                <a href="#poup-cat-{{ $cat->id }}" class="table_edit" title="Редактировать">
                    <button type="submit" class="btn">
                        <i class="fa fa-pencil"></i>
                    </button>
                </a>    
            </td>
        </tr>  
        @endforeach  

</table>
<!--    Рендер-->

<div class="col-md-12" style="margin-top: 40px">
        {{ $cats->render() }}
    </div>

@endif
@endsection


