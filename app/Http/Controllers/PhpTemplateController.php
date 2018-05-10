<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpTemplateController extends Controller
{
    public function index() {
        $data = ['msg'=>'this is called by PhpTemplateController.'];
        return view('practice.testView', $data);
    }
}
