<?php

require_once 'connection/pdo.php';
require_once 'helper.php';

$request = $_POST;

$product = [
    'id' => $request['id'],
];

$getinf = new Query();
$getinf->updateConfirmStatus($product);
redirectHome();
?>