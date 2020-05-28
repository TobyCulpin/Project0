<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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


	public function update(Request $request)
	{
		$data = $request->all();

		$user = User::select('*')
			->where('id', '=', $data['id'])
			->first();

		$user->user_type_id = $data['user_type_id'];
		$user->name = $data['name'];
		$user->email = $data['email'];
		
		if ($data['password'] !== null) {
			$user->password = Hash::make($data['password']);
		}

		$user->updated_at = now();

		$user->save();

		return redirect('/');
	}
}
