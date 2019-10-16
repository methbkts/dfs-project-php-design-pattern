<?php

$name = Functions::test_input($_POST['name']);
$description = Functions::test_input($_POST['description']);
$location = Functions::test_input($_POST['location']);
if (empty($_POST['image'])) {
    $image = 'https://picsum.photos/600/600';
} else {
    $image = Functions::test_input($_POST['image']);
}

$farmer = new Farmer($name, $description, $location, $image);
