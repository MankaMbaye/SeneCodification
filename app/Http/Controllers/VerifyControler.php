<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyControler extends Controller
{
    


   public function verify($token){

   	$user= User::where('token', $token)->firstOrFail()->update(['token'=>null]);

   	return redirect()
   	->route('home');
   	->with('success','Account verified!');


   }








}
