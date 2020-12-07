<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function __construct(){
        $this->middleware('EsCliente');
    }

    public function index(){
        return view('user');
    }
}
