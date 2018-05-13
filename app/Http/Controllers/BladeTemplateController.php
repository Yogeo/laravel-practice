<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTemplateController extends Controller
{
    public function index() {
        $data = ['msg'=>'this is sampage with using php blade template.',];

        return view('practice.testBlade', $data);
    }
}
