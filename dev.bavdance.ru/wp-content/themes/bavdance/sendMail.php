<?php
$name = isset($_POST['name']) ? $_POST['name']: "";
$phone = isset($_POST['tel']) ? $_POST['tel'] : "";
$date = isset($_POST['date']) ? $_POST['date'] : "";
$return = array();

$name_preg = "/[А-Яа-я]+/";
$phone_preg = "/[0-9]+/";
if(!preg_match($name_preg, $name) ){
    $return['valid'] = 'false';
    echo json_encode($return);
    exit();
}
if(!preg_match($phone_preg, $phone)){
    $return['valid'] = 'false';
    echo json_encode($return);
    exit();
}
$return['sended'] = "true";
echo json_encode($return);
