<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $user=auth()->user();
        $role = $user->role;
        if($role==='admin'){
            return view('adminHome.index');
        }else if($role === 'client'){
            return view('clientHome.index');
        }
        
    }
}