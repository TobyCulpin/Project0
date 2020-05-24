<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	public function __construct()
   	{
		$this->middleware('auth');
		$this->middleware('admin');
    	}

	public function index()
	{
		return view('admin-dashboard');
	}

	public function user_panel()
	{
		$users = User::select('users.id', 'user_types.name as type', 'users.name', 'users.created_at', 'users.updated_at')
			->join('user_types', 'users.user_type_id', '=', 'user_types.id')
			->get();

		return view('admin.users', ['users' => $users]);
	}
}
