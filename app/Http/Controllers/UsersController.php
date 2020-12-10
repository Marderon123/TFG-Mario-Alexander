<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function index(){
        $usuarios = DB::table('users')
                    ->select('users.*')
                    ->orderBy('id','DESC')
                    ->get();
        return view('dashboard.users')->with('usuarios',$usuarios);
    }
}
