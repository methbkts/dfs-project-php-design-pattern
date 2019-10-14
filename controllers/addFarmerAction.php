<?php

// addFarmerAction
$name = $_POST['name'];
$weapon = $_POST['weapon'];
$special = $_POST['special'];
if (empty($_POST['image'])) {
    $image = 'https://picsum.photos/300/200';
} else {
    $image = $_POST['image'];
}
$role_id = intval($_POST['role']);
$race_id = intval($_POST['race']);

// addFarmer
$farmer = new Farmer($name, $weapon, $special, $image, $role_id, $race_id);
