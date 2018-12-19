<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function home ()
    {
    	$users = User::all();

    	return $users; 

    	return view ('users.home') ;
    }
}
