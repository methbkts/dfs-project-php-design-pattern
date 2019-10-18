<?php

$currentFarmer = Farmer::getOneFarmer($farmer_id);


if (!empty($_POST['name'])) {
    $name = Functions::test_input($_POST['name']);
} else {
    $name = $currentFarmer->name;
}

if (!empty($_POST['description'])) {
    $description = Functions::test_input($_POST['description']);
} else {
    $description = $currentFarmer->description;
}

if (!empty($_POST['location'])) {
    $location = Functions::test_input($_POST['location']);
} else {
    $location = $currentFarmer->location;
}

if (!empty($_POST['image'])) {
    $image = Functions::test_input($_POST['image']);
} else {
    $image = $currentFarmer->image;
}

Farmer::updateFarmer($request_uri[1], $name, $description, $location, $image);
