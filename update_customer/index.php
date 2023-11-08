<?php

require_once "../vendor/autoload.php";
use app\core\Pdo;
use app\core\Response;

auth();
verify_method("PUT");

$array = json_decode(file_get_contents("php://input"), true);

$model = new Pdo;
$data = $model->exe("update tbl_customers
set first_name = :first_name, last_name = :last_name, address = :address, city = :city, phone_number = :phone_number
where id = :id", $array);

$response = new Response("success", $data);
echo $response->get_response();