<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    
    public function index() {
        //$title = "WELCOME 2 THE JUNGLE!!";
        return view('pages.index');//->with('title', $title);
    }

}
