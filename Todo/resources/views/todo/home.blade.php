@extends('layout.app')

@section('body')
	<br><br>

	@include('todo.partials.message')

		<div class="col-md-6 col-md-offset-3">
			<center><h1 class="danger">Todo List</h1></center>

			<ul class="list-group col-md-8">
				<?php foreach ($todos as $todo): ?>
					<li class="list-group-item">
				    	<a href="todo/{{$todo->id}}">{{$todo->title}} </a>
				    	<span class="pull-right">
				    		{{$todo->created_at->diffForHumans()}}
				    	</span>
				  	</li>
				<?php endforeach ?>
			</ul>
			<ul class="list-group col-md-4">
				<?php foreach ($todos as $todo): ?>
					<li class="list-group-item">
				    	<a href="{{'/todo/'.$todo->id.'/edit'}}">Edit </a>

				    	<form action="{{'/todo/'.$todo->id}}" class="form-group pull-right" method="POST">

				    		{{csrf_field()}}

				    		{{method_field('DELETE')}}

				    		<input  class="form-control pull-right" type="submit" value="Delete" style="border:none;" >
				    	</form>
				  	</li>
				<?php endforeach ?>
			</ul>

	<br><center>
				<a href="todo/create" class="btn btn-info"> Add Todo Item </a>
			</center>
		</div>

@endsection