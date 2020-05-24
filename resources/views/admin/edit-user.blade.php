@extends('layouts.top-bar')

@section('title', 'Create User')

@section('content')
	@csrf
	<form>
		@foreach ($user as $u)
		<div class="container columns" style="flex-grow: 1">
			<div class="container rows">
				<b>Username</b>
				<input id="name" type="text" name="name" value="{{ $u->name }}" required autocomplete="name" autofocus>
			</div>
			<div class="container rows">
				<b>Email</b>
				<input id="email" type="text" name="email" value="{{ $u->email }}" required autocomplete="email" autofocus>
			</div>
			<div class="container rows">
				<b>Password</b>
				<input id="password" type="password" name="password" autofocus>
			</div>
			<div class="container rows">
				<b>Confirm password</b>
				<input id="confirm_password" type="password" name="confirm_password" autofocus>
			</div>
			<div class="container rows">
				<b>Created At</b>
				<input id="created_at" type="datetime" name="created_at" value="{{ $u->created_at }}" required autocomplete="created_at" autofocus disabled="disabled">
			</div>
			<div class="container rows">
				<b>Updated At</b>
				<input id="updated_at" type="datetime" name="updated_at" value="{{ $u->updated_at }}" required autocomplete="updated_at" autofocus disabled="disabled">
			</div>
		</div>
		@endforeach
	</form>
@stop