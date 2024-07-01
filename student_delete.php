<?php 

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$connection = mysqli_connect('localhost', 'root', '', 'Students');

$id = $_POST['Id'];

$sql = "DELETE FROM `Students_Data` WHERE `Id` = '$id'";

$response = array();

if (mysqli_query($connection, $sql)) {
    $response['status'] = 'Yes';
}
else {
    $response['status'] = 'No';
}

echo json_encode($response);

?>