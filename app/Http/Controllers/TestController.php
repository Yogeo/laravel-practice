<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;

$head = '<html><head>';
$style = '<style>'
            . 'body { font-size:16px; color:#999; }'
            . 'h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px }'
        . '</style>';
$body = '</head><body>';
$end = '</body></html>';

/**
 * create simple tag string with value.
 * @param $tag using html tag
 * @param $txt the value inside of html tag
 * @return string generated html string.
 */
function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class TestController extends Controller
{

    /**
     * index method. this is plane controller method.
     */
    public function index() {

        global $head, $style, $body, $end;

        // create html
        $html = $head . tag("title", "TestController>index") . $style . $body;
        $html .= tag("h1", "index");
        $html .= tag("p", "this page is called by index on TestController.");
        $html .= $end;
        return $html;
    }

    public function routeParam($id='unknown', $pass='undefined') {

        global $head, $style, $body, $end;

        // create html
        $html = $head . tag("title", "TestController>routeParam") . $style . $body;
        $html .= tag("h1", "routeParam");
        $html .= tag("p", "this page is called by routeParam on TestController.");
        $html .= tag("ul", tag("li", "ID:{$id}") . tag("li", "PASS:{$pass}"));
        $html .= $end;
        return $html;
    }

    public function before() {

        global $head, $style, $body, $end;

        // create html
        $html = $head . tag("title", "TestController>before") . $style . $body;
        $html .= tag("h1", "before");
        $html .= tag("p", "this page is called by before method on TestController.");
        $html .= "<a href='/test/after'>goto next page.</a>";
        $html .= $end;
        return $html;
    }

    public function after() {

        global $head, $style, $body, $end;

        // create html
        $html = $head . tag("title", "TestController>after") . $style . $body;
        $html .= tag("h1", "after");
        $html .= tag("p", "this page is called by after method on TestController.");
        $html .= $end;
        return $html;
    }

    public function checkMetaData(Request $request, Response $response) {

        global $head, $style, $body, $end;

        // create html
        $html = $head . tag("title", "TestController>checkMetaData") . $style . $body;
        $html .= tag("h1", "checkMetaData");
        $html .= tag("p", "this page is called by checkMetaData method on TestController.");
        $html .= tag("h3", "Request");
        $html .= tag("pre", "{$request}");
        $html .= tag("h3", "Response");
        $html .= tag("pre", "{$response}");
        $html .= $end;

        $response->setContent($html);
        return $response;
    }
}
