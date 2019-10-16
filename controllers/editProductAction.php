<?php

$currentProduct = Product::getOneProduct($product_id);
// Functions::dd($currentProduct);


if(!empty($name)){
    $name = $currentProduct->name;
} else {
    $name = Functions::test_input($_POST['name']);
}

if(!empty($image)){
    $image = $currentProduct->image;
} else {
    $image = Functions::test_input($_POST['image']);
}

if(!empty($price)){
    $price = $currentProduct->price;
} else {
    intval($_POST['price']);
}

if(!empty($quantity)){
    $quantity = $currentProduct->quantity;
} else {
    intval($_POST['quantity']);
}

if(!empty($type_id)){
    $type_id = $currentProduct->type_id;
} else {
    intval($_POST['type_id']);
}

if(!empty($farmer_id)){
    $farmer_id = $currentProduct->farmer_id;
} else {
    intval($_POST['farmer_id']);
}
// $farmer_id = intval($_POST['farmer_id']);

// Functions::dd($farmer_id);

Product::updateProduct($request_uri[1], $name, $price, $image, $quantity, $type_id, $farmer_id);