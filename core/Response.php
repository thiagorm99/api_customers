<?php

namespace app\core;

class Response{

    private $status;
    private $data;
    private $method;

    public function __construct($status, $data = [])
    {
        $this->status = $status;
        $this->data = $data;
        $this->method = $_SERVER['REQUEST_METHOD'];
    }


    public function get_response()
    {
        $res = [
            'status' => $this->status,
            'method' => $this->method,
            'data' => $this->data,
        ];

        return json_encode($res);
    }

}