<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeepControler extends Controller
{
    public function index(){
        return view('keep/index'); 
    }

    public function create() {
        return view('keep/create');
    }
}
