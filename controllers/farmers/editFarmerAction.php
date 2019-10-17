<?php

$currentFarmer = Farmer::getOneFarmer($farmer_id);

if (empty($name)) {
    $name = $currentFarmer->name;
} else {
    $name = Functions::test_input($_POST['name']);
}

if (empty($description)) {
    $description = $currentFarmer->description;
} else {
    $description = Functions::test_input($_POST['description']);
}

// $location = Functions::test_input($_POST['location']);
// if (empty($_POST['image'])) {
//     $image = '/public/img/default-profile.png';
// } else {
//     $image = Functions::test_input($_POST['image']);
// }

if (!empty($price)) {
    $price = $currentProduct->price;
} else {
    intval($_POST['price']);
}

if (!empty($quantity)) {
    $quantity = $currentProduct->quantity;
} else {
    intval($_POST['quantity']);
}

if (!empty($type_id)) {
    $type_id = $currentProduct->type_id;
} else {
    intval($_POST['type_id']);
}

if (!empty($farmer_id)) {
    $farmer_id = $currentProduct->farmer_id;
} else {
    intval($_POST['farmer_id']);
}
// $farmer_id = intval($_POST['farmer_id']);

// Functions::dd($farmer_id);

Product::updateProduct($request_uri[1], $name, $price, $image, $quantity, $type_id, $farmer_id);

// TODO:
// Farmer::updateFarmer($request_uri[1]);
