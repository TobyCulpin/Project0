@extends('layouts.top-bar')


@section('title', 'Admin Panel')

@section('content')
	@csrf
	<div class="container columns">
		<div><a href="/admin/users">Users</a></div>
	</div>
@stop