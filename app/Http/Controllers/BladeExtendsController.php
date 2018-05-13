<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExtendsController extends Controller
{
    public function index() {
        return view('practice.testLayout');
    }
}
