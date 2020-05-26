@extends('layouts.default-layout')


@section('title', 'Admin Panel')

@section('content')
	@csrf
	<div class="container columns">
		<div><a href="/admin/users">Users</a></div>
	</div>
@stop