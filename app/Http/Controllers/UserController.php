<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


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
		$validationRules = [
			'user_type_id' => ['required', 'integer'],
		];

		if ($request->password !== null) {
			$validationRules['password'] = ['required', 'string', 'min:8', 'confirmed'];
		}

		$validator = Validator::make($request->all(), $validationRules);
		if ($validator->fails()) {
			return redirect()->back()
				->withErrors($validator)
				->withInput();
		}

		/* Update the user */
		$user = Auth::user();
		$user->fill([
			'user_type_id' => $request->user_type_id,
			'password' => Hash::make($request->password),
		]);
		$user->save();

		return redirect()->back()->with('success', 'This user was sucessfully updated!');
	}	

}
