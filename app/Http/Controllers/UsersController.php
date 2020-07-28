<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Users;

class UsersController extends Controller
{
	protected $users;
	
	function __construct(Users $users)
	{
		$this->users = $users;
	}


    public function index()
    {

		$users = $this->users->all();

		return view('users.index', compact('users'));
    }

}
