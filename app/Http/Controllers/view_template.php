<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_template extends Controller
{
    public function index () {
        return view ('index');
    }
}
