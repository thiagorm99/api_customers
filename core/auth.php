<?php

use app\core\Response;

function auth()
{
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        $response = new Response("Authentication Required");
        echo $response->get_response();
        exit;
    } else if ($_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != 'admin') {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');

        $response = new Response("Authentication Required");
        echo $response->get_response();
        exit;
    }
}
