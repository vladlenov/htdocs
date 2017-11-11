<?php

if (!isset($_COOKIE['arrayTop'])) {
    setcookie("arrayTop", json_encode([]));
    $arrayTop = [];
} else {
    $arrayTop = json_decode($_COOKIE['arrayTop']);
}
array_unshift($arrayTop, $_GET['file']);

$arrayTop = array_slice($arrayTop, 0, 5);

setcookie("arrayTop", json_encode($arrayTop), time()+360);

header('Content-Disposition: attachment; filename=' . basename($_GET['file']));
header('Content-Length: ' . filesize($_GET['file']));
echo file_get_contents($_GET['file']);