<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once 'TestController.php';

const HEAD = '<html><head>';
const STYLE = '<style>'
    . 'body { font-size:16px; color:#999; }'
    . 'h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px }'
    . '</style>';
const BODY = '</head><body>';
const END = '</body></html>';

class SingleActionController extends Controller
{
    public function __invoke() {

        // create html
        $html = HEAD . tag("title", "SingleActionController>__invoke") . STYLE . BODY;
        $html .= tag("h1", "__invoke");
        $html .= tag("p", "this page is called by __invoke method on TestController.");
        $html .= END;
        return $html;
    }
}
