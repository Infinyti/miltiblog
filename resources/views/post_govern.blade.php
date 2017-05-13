@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 

<form action="{{ url('admin/post') }}" method="POST" enctype="multipart/form-data">

    <input type="text" name="title"><br>

    <input type="text" name="content"><br>

    <select name="category_id">
        @foreach($cats as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select><br>

    <input type="file" name="img"><br>

    <input type="submit" value="Добавить задачу"><br>

    {{ csrf_field() }}

</form>
<br><br>

@foreach($posts as $key => $post)
<tr>
    <td class="table-text">
        <div>{{ $post->title }}</div>
    </td>
    <td>
        <!-- TODO: Кнопка Удалить -->
        <form action="{{ url('admin/post/del/'.$post->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Удалить
            </button>
        </form>
    </td>
</tr>
@endforeach
@endsection