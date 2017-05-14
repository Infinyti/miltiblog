@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 

<form action="{{ url('admin/cat') }}" method="POST" enctype="multipart/form-data">

    <input type="text" name="name"><br>

    <input type="text" name="description"><br>

    <input type="submit" value="Добавить категорию"><br>

    {{ csrf_field() }}

</form>
<br><br>
<table>
    @foreach($cats as $cat)
    <tr>
    <form action="{{ url('admin/cat/update/'.$cat->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('POST') }}


        <td class="table-text">
            <div>{{ $cat->name }}</div>
            <input type="text" value="{{ $cat->name }}" id="newname" name="newname"><br>

        </td>
        <td class="table-text">
            <input type="hidden" value="{{ $cat->id }}" name="id"><br>
            <div>{{ $cat->description }}</div>
            <textarea c  value="" id="newdescription" name="newdescription">{{ $cat->description }}</textarea><br>
            <button type="submit" id="save" class="btn  ">
                <i class="fa fa-"></i> сохранить
            </button>
        </td>

    </form>
    <td>
        <form action="{{ url('admin/cat/del/'.$cat->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Удалить
            </button>
        </form>



        <input type="button" class="hider" value="edit">

    </td>
</tr>
@endforeach
</table>
@endsection

