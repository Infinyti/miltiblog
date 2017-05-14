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
    <td class="table-text">
        <div>{{ $cat->name }}</div>
    </td>
    <td class="table-text">
        <div>{{ $cat->description }}</div>
    </td>
    <td>
        <form action="{{ url('admin/cat/del/'.$cat->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Удалить
            </button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection