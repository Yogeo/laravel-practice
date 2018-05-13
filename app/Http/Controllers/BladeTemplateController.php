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

    public function directive() {
        $data = ['explain'=>'this page was created by BladeTemplateController>directive.',
            'msg'=>'',
            'data'=>['one','two','three','four','five',],
            ];

        return view('practice.testBladeDirective', $data);
    }

    public function directivePost(Request $request) {
        $data = ['explain'=>'this page was created by BladeTemplateController>directive.',
            'msg'=>$request->msg,
            'msg2'=>$request->msg2,
            'data'=>['six','seven','eight','nine','ten',],
            ];
        return view('practice.testBladeDirective', $data);
    }
}
