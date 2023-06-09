<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');
header('Access-Control-Allow-Method:GET');
header('Access-control-Allow-Headers:content-Type,Access-Control-Allow-Headers,Authorization,X-Request-with');

include 'function.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];
if ($requestMethod == "GET") {
    $customerList = getCustomerList();
    echo $customerList;
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . "Method Not Allowed",
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
