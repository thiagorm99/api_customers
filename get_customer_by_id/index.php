<?php

require_once "../vendor/autoload.php";
use app\core\Pdo;
use app\core\Response;

auth();
verify_method("GET");

$array = json_decode(file_get_contents("php://input"), true);

$model = new Pdo;
$data = $model->select("select * from tbl_customers where id = :id", $array);
$response = new Response("success", $data);
echo $response->get_response();