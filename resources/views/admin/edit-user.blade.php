@extends('layouts.default-layout')

@section('title', 'Create User')

@section('content')
@if ($errors->any())
    	<div class="alert alert-danger">
        	<ul>
            	@foreach ($errors->all() as $error)
                	<li>{{ $error }}</li>
            	@endforeach
        	</ul>
    	</div>
@endif

	<form action="{{url('/users/update')}}" autocomplete="off" method="post">
		@csrf
		@foreach ($user as $u)
		<input id="id" name="id" value="{{ $u->id }}" hidden>
		<div class="container columns" style="flex-grow: 1">
			<div class="container rows">
				<b>Username</b>
				<input id="name" type="text" name="name" value="{{ $u->name }}" disabled required>
			</div>
			<div class="container rows">
				<b>Email</b>
				<input id="email" type="text" name="email" value="{{ $u->email }}" disabled required>
			</div>
			<div class="container rows">
				<b>User Type</b>
				<select name="user_type_id" id="user_types">
					@foreach ($user_types as $user_type)
					@if ($u->user_type_id === $user_type->id)
					<option value="{{ $user_type->id }}" selected>{{ $user_type->name }}</option>
					@else
					<option value="{{ $user_type->id }}">{{ $user_type->name }}</option>
					@endif
					@endforeach
				</select>
			</div>	
			<div class="container rows">
				<b>Password</b>
				<input id="password" type="password" name="password" autocomplete="new-password">
			</div>
			<div class="container rows">
				<b>Confirm password</b>
				<input id="confirm_password" name="password_confirmation" type="password">
			</div>
			<div class="container rows">
				<b>Created At</b>
				<input id="created_at" type="text" name="created_at" value="{{ $u->created_at }}" required autocomplete="created_at" autofocus disabled>
			</div>
			<div class="container rows">
				<b>Updated At</b>
				<input id="updated_at" type="text" name="updated_at" value="{{ $u->updated_at }}" required autocomplete="updated_at" autofocus disabled>
			</div>
			<div class="container rows">
				<input type="submit" value="Update">
			</div>
		</div>
		@endforeach
	</form>

@if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif
@stop