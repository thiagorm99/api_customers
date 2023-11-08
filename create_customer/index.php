<?php

require_once "../vendor/autoload.php";
use app\core\Pdo;
use app\core\Response;

auth();
verify_method("POST");

$array = json_decode(file_get_contents("php://input"), true);

$model = new Pdo;
$data = $model->exe("insert into tbl_customers (first_name, last_name, address, city, phone_number)
values(:first_name, :last_name, :address, :city, :phone_number)", $array);

$response = new Response("success", $data);
echo $response->get_response();