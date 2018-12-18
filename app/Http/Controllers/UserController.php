<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
   public function Signup ()
   {
      $users = User::all();
    return view ('user.signup');
   }

   public function store (Request $request)
   {
    // return view 
    $this->validate($request, [
         'email' => 'email|required|unique:users',
         'password' => 'required|min:4'
    ]);

    $users = new user (
     [
          'email' =>$request->input ('email'),
          'password' => bcrypt ($request->input('password'))
     ]);
    
      $users -> email = request ('email');
      $users -> password = request ('password');

    $users->save();

    return redirect ()->route ('product.index');
   } 

   public function getSignin ()
   {

    return view ('user.signin');
   }

    public function postSignin (Request $request)
   {
    
   
    $this->validate($request, [
         'email' => 'email|required',
         'password' => 'required|min:4'
       ]);

    if (Auth::attempt(['email' => $request -> input ('email'),'password' => $request -> input ('password')])){
       return redirect () -> route ('user.profile');
     }
       return redirect () -> back();
  }
      public function getProfile ()
      {
          return view ('user.profile');

      }

}

 