@extends('todo.create')

@section('editTitle', $todo->title)

@section('editTodo', $todo->todo)

@section('editMethod')
	{{method_field('PUT')}}
@endsection

@section('editId', $todo->id)