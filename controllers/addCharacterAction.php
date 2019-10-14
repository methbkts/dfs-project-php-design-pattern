<?php

// addCharacterAction
$name = $_POST['name'];
$gender = $_POST['gender'];
$energy = intval($_POST['energy']);
$power = intval($_POST['power']);
$speed = intval($_POST['speed']);
$weapon = $_POST['weapon'];
$special = $_POST['special'];
if (empty($_POST['image'])) {
    $image = 'https://picsum.photos/300/200';
} else {
    $image = $_POST['image'];
}
$role_id = intval($_POST['role']);
$race_id = intval($_POST['race']);

// addCharacter
$character = new Farmer($name, $gender, $energy, $power, $speed, $weapon, $special, $image, $role_id, $race_id);
