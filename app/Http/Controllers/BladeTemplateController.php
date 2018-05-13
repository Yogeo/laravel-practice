<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTemplateController extends Controller
{
    public function index() {
        $data = ['explain'=>'this is sample page with using php blade template.',
            'msg'=>'please input your name.'];

        return view('practice.testBlade', $data);
    }

    public function post(Request $request) {
        $msg = $request->msg;
        $data = ['explain'=>'form data was submitted.',
            'msg'=>'Hello, '. $msg . '.',];
        return view('practice.testBlade', $data);
    }
}
