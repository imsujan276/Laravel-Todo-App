@extends('layout.app')

@section('body')
<br>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>{{$todo->title}}</h1>
		<h3> {{$todo->todo}} </h3>
	</div>
	

@endsection