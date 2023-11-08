<?php

use app\core\Response;

function verify_method($method)
{
    if ($_SERVER['REQUEST_METHOD'] != $method) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 405 Method Not Allowed');
    
        $response = new Response("Incorrect request method");
        echo $response->get_response();
        exit;
    }
}