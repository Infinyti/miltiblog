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

{{ $key }}){{ $post->title }}<br>

@endforeach

@endsection