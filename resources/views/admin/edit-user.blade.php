@extends('layouts.default-layout')

@section('title', 'Create User')

@section('content')
	
	<form action="{{url('/users/update')}}" method="post">
		@csrf
		@foreach ($user as $u)
		<input id="id" name="id" value="{{ $u->id }}" hidden>
		<div class="container columns" style="flex-grow: 1">
			<div class="container rows">
				<b>Username</b>
				<input id="name" type="text" name="name" value="{{ $u->name }}" required autocomplete="name" autofocus>
			</div>
			<div class="container rows">
				<b>User Type</b>
				<select name="user_type_id" id="usertypes">
					@foreach ($user_types as $user_type)
					<option value="{{ $user_type->id }}">{{ $user_type->name }}</option>
					@endforeach
				</select>
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
				<input id="confirm_password" type="password" autofocus>
			</div>
			<div class="container rows">
				<b>Created At</b>
				<input id="created_at" type="text" name="created_at" value="{{ $u->created_at }}" required autocomplete="created_at" autofocus disabled="disabled">
			</div>
			<div class="container rows">
				<b>Updated At</b>
				<input id="updated_at" type="text" name="updated_at" value="{{ $u->updated_at }}" required autocomplete="updated_at" autofocus disabled="disabled">
			</div>
			<div class="container rows">
				<input type="submit" value="Update">
			</div>
		</div>
		@endforeach
	</form>

@stop