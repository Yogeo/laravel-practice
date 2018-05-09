<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index() {
        return <<<EOF
<html>
    <head>
        <title>testControllerAction</title>
        <style>
            body { font-size:16px; color:#999; }
            h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px }
        </style>
    </head>
    <body>
        <h1>index</h1>
        <p>this is index action of TestController</p>
    </body>
</html>
EOF;
    }

}
