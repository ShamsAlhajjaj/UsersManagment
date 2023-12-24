<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersManagmentController extends Controller
{
    
    public function get_all_users () {
        $all_users = User::all();
            return view('all_users',['users'=>$all_users]);
        
    }
    
    public function get_user ($id) {
        return view ('user',['user'=>User::findOrFail($id)] );
    }
}