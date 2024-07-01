<?php 

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$connection = mysqli_connect('localhost', 'root', '', 'Students');

$sql = "SELECT * FROM `Students_Data`";

$res = mysqli_query($connection, $sql);

$response = array();

while ($data = mysqli_fetch_assoc($res)) {
    $response[] = $data;
}

echo json_encode($response);

?>