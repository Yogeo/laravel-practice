<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpTemplateController extends Controller
{
    public function index() {
        $data = ['msg'=>'this is called by PhpTemplateController.'];
        return view('practice.testView', $data);
    }

    public function routeParam($id='zero') {
        $data = [
            'msg'=>'this is called by PhpTemplateController@routeParam.',
            'id'=>$id
            ];
        return view('practice.testRouteParam', $data);
    }

    public function usingQueryParam(Request $request) {
        $data = [
            'msg'=>'this is called by PhpTemplateController@usingQueryParam.',
            'id'=>$request->id
        ];
        return view('practice.testRouteParam', $data);
    }
}
