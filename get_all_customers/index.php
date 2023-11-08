<?php

require_once "../vendor/autoload.php";
use app\core\Pdo;
use app\core\Response;

auth();
verify_method("GET");

$model = new Pdo;
$data = $model->select("select * from tbl_customers");
$response = new Response("success", $data);
echo $response->get_response();