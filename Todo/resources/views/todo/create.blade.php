@extends('layout.app')

@section('body')

	<br>

		
	<div class="col-md-4 col-md-offset-4">
		<h1> {{ucfirst(substr(Route::currentRouteName(),5))}} Item </h1>

		<form  action="/todo/@yield('editId')" method="POST" class="form-horizontal">

			{{csrf_field()}}

			@section('editMethod')
			@show

		    <div class="form-group">
		    	<input type="text" class="form-control" name="title" placeholder="title" name="title" value="@yield('editTitle')"> 
				<br>
		        <textarea class="form-control" rows="3" id="textArea" name="todo" placeholder="Todo">@yield('editTodo')
		        </textarea>
		        
		    </div>
		    
		    <div class="form-group">
		        <center>
		        	<button type="submit" class="btn btn-info">Submit</button>

			        <a href="/todo" class="btn btn-danger">Back </a>

			    </center>
		      
		    </div>
		</form>

		@include('todo.partials.error')

	
	</div>

@endsection