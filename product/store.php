<?php
require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

$category = [
    'name' => $request['name'],
    'price' => $request['price'],
    'ca_id' => $request['ca_id'],
];

$getinf = new Query();
    $products = $getinf->create($category);
redirectHome();