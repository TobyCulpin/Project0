<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function edit_user($id)
	{
		$user = User::select('users.*')
			->where('users.id', '=', $id)
			->get();

		return view('admin.edit-user', ['user' => $user]);
	}
}
