<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserType;

class UserController extends Controller
{
	public function __construct()
   	{
		$this->middleware('admin');
    	}

	public function edit_user($username)
	{
		$user = User::select('users.*')
			->where(DB::raw("BINARY users.name"), $username)
			->get();

		$user_types = UserType::select('user_types.*')->get();

		return view('admin.edit-user', ['user' => $user,
			'user_types' => $user_types]);
	}
}
