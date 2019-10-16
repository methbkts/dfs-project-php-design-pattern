<?php

$name = Functions::test_input($_POST['name']);
$image = Functions::test_input($_POST['image']);
$price = intval($_POST['price']);
$quantity = $_POST['quantity'];
$type_id = intval($_POST['type_id']);
$farmer_id = intval($_POST['farmer_id']);

Product::updateProduct($request_uri[1], $name, $price, $image, $quantity, $type_id, $farmer_id);