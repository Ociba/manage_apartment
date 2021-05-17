<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    //
    protected function logout(){
        Auth::logout();
        return redirect('/');
    }
}
