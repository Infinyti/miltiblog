@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 
   <div>
    <!-- Отображение ошибок проверки ввода -->
    {{--@include('common.errors')--}}

    <!-- Форма новой задачи -->
    <form action="{{ route('addpost') }}" method="POST" class="form-horizontal">

	<input type="text" name="name" id="task-name" class="form-control">
	
	<input type="text" name="content" id="task-name" class="form-control">
	
	<input type="text" name="url" id="task-name" class="form-control">

	<!-- Кнопка добавления задачи -->
	<div class="form-group">
	    <div class="col-sm-offset-3 col-sm-6">
		<button type="submit" class="btn btn-default">
		    <i class="fa fa-plus"></i> Добавить задачу
		</button>
	    </div>
	</div>
    </form>
</div>
@endsection