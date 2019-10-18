<?php

$currentProduct = Product::getOneProduct($product_id);

if (!empty($_POST['name'])) {
    $name = Functions::test_input($_POST['name']);
} else {
    $name = $currentProduct->name;
}

if (!empty($_POST['image'])) {
    $image = Functions::test_input($_POST['image']);
} else {
    $image = $currentProduct->image;
}

if (!empty($_POST['price'])) {
    $price = intval($_POST['price']);
} else {
    $price = $currentProduct->price;
}

if (!empty($_POST['quantity'])) {
    $quantity = intval($_POST['quantity']);
} else {
    $quantity = $currentProduct->quantity;
}

// if(empty($type_id)){
//     $type_id = $currentProduct->type_id;
// } else {
//     intval($_POST['type_id']);
// }

$type_id = intval($_POST['type_id']);

// if (!isset($farmer_id)) {
//     $farmer_id = $currentProduct->farmer_id;
// } else {
//     $farmer_id = intval($_POST['farmer_id']);
// }
$farmer_id = intval($_POST['farmer_id']);
// Functions::dd($farmer_id);
// Functions::dd($currentProduct);


Product::updateProduct($request_uri[1], $name, $price, $image, $quantity, $type_id, $farmer_id);
