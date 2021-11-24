<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicecontroller extends Controller
{
    function show() {
        return view('services');
    }
}
