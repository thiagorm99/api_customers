<?php

require_once "../vendor/autoload.php";
use app\core\Pdo;
use app\core\Response;

auth();
verify_method("DELETE");

$array = json_decode(file_get_contents("php://input"), true);

$model = new Pdo;
$data = $model->exe("delete from tbl_customers where id = :id", $array);

$response = new Response("success", $data);
echo $response->get_response();