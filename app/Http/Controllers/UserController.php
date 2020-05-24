<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

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

		return view('admin.edit-user', ['user' => $user]);
	}
}
