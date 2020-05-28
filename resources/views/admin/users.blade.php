@extends('layouts.default-layout')

@section('title', 'Admin Panel')

@section('content')
	@csrf
	<div style="margin: 1em">
	<table style="background-color: #fff">
		<tr>
			<th>ID</th>
			<th>Type</th>
			<th>Name</th>
			<th>Created At</th>
			<th>Updated At</th>
		</tr>
		@isset ($users)
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->type }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->created_at }}</td>
			<td>{{ $user->updated_at }}</td>
			<td><button>edit</button></td>
			<td><button style="color: red">delete</button></td>
		</tr>
		@endforeach
		@endisset
	</table>
	<button>Create new</button>
	</div>
@stop