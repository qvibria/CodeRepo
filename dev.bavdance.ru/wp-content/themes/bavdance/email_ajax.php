<?php

/** Loads the WordPress Environment and Template */
require ('../../../wp-load.php');
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "";
$date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : "";
$service_name = isset($_POST['service_name']) ? htmlspecialchars($_POST['service_name']) : "";

$return = array();
if (empty($name) || empty($phone) || empty($date)) {
    $return['status'] = 'not_valid';
    echo json_encode($return);
    exit;
}
$phone_reg = "/[0-9]+/";
if (!preg_match($phone_reg, $phone)) {
    $return['status'] = 'not_valid';
    echo json_encode($return);
    exit;
}

$content = "<p>Заказ услуги с сайта bavdance.ru.</p>";
$content .= "<p>Клиент $name желает заказать услугу $service_name.</p>";
$content .= "<p>Телефон клиента: $phone.</p>";

$subject = "Заказ услуги на сайте bavdance.ru";
$to = get_option('site_email');

$mail_send = mail($to, $subject, $content);
error_log("to: $to;");
if($mail_send){
    $return['status'] = 'success';
    echo json_encode($return);
    exit;
} else {
    $return['status'] = 'email_not_sended';
    echo json_encode($return);
    exit;
}
