<?php
//add Product Action
if (empty($_POST['image'])) {
    $image = 'https://picsum.photos/200/100';
  } else {
    $image = Functions::test_input($_POST['image']);
  }
  $name = Functions::test_input($_POST['name']);
  $price = intval($_POST['price']);
  $quantity = intval($_POST['quantity']);
  $type_id = intval($_POST['type_id']);
  $farmer_id = intval($_POST['farmer_id']);
  //Add product
  $product = new Product($name, $price, $image, $quantity, $type_id, $farmer_id);
  // var_dump($product);die;
