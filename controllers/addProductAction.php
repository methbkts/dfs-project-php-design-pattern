<?php

$name = Functions::test_input($_POST['name']);
$price = intval($_POST['price']);
if (empty($_POST['image'])) {
  $image = 'https://picsum.photos/300/200';
} else {
  $image = Functions::test_input($_POST['image']);
}
$quantity = intval($_POST['quantity']);
$type_id = intval($_POST['type']);
$farmer_id = intval($_POST['farmer']);

$product = new Product($name, $price, $image, $quantity, $type_id, $farmer_id);
