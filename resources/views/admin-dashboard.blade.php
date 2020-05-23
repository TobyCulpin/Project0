@extends('layouts.top-bar')


@section('title', 'Admin Panel')

@section('content')
	@csrf
	<div class="container columns">
		<div><a href="/admin/user-panel">Users</a></div>
	</div>
@stop