<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbname = "phpdb";

require '../includes/config.php';

function getCustomerList()
{
    global $connection;
    $query = "SELECT * FROM customers";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        if (mysqli_num_rows($query_run) > 0) {
            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
            $data = [
                'status' => 200,
                'message' => 'customer list fetched succesfully',
            ];
            header("HTTP/1.0 200 ok");
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => "No customer found",
            ];
            header("HTTP/1.0 404 No customer found");
            return json_encode($data);
        }
    } else {
        $data = [
            'status' => 500,
            'message' => "Internal server Error",
        ];
        header("HTTP/1.0 500 Internal server Error");
        return json_encode($data);
    }
}
