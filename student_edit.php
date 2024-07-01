<?php 

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$connection = mysqli_connect('localhost', 'root', '', 'Students');

$id = $_POST['Id'];
$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$hobby = $_POST['Hobby'];
$gender = $_POST['Gender'];
$division = $_POST['Division'];

$sql = "UPDATE `Students_Data` SET `Name` = '$name', `Email` = '$email', `Password` = '$password', `Hobby` = '$hobby', `Gender` = '$gender', `Division` = '$division' WHERE `Id` = '$id'";

$response = array();

if (mysqli_query($connection, $sql)) {
    $response['status'] = 'Yes';
}
else {
    $response['status'] = 'No';
}

echo json_encode($response);

?>