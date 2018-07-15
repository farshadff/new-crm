<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index(){
        $auth = new Auth();
        return view('admin.profile.index',compact('auth'));
    }

}
