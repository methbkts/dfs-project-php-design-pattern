<?php
// session_start();

// Autoload -->
spl_autoload_register(function ($class) {
  require_once 'classes/' . $class . '.php';
});

// User management -->
// if (isset($_POST['username'])) {
//   $_SESSION['username'] = $_POST['username'];
//   $_SESSION['id'] = getUserId($_SESSION['username']);
//   $_SESSION['role'] = getRole($_SESSION['id']);
// }

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// Functions::dd($request_uri);

// Routes -->
switch ($request_uri[0]) {
    // Views -->  
    // Home page
  case '/':
    $currentPageTitle = "Homepage";
    require_once 'public/layouts/header.php';
    require_once 'public/views/home.php';
    require_once 'public/layouts/footer.php';
    break;

    // addFarmer page
  case '/addFarmer':
    $currentPageTitle = "Add Farmer";
    require_once 'public/layouts/header.php';
    require_once 'public/views/addFarmer.php';
    require_once 'public/layouts/footer.php';
    break;

    // editFarmer page
  case '/editFarmer':
    $currentPageTitle = "Edit Farmer";
    require_once 'public/layouts/header.php';
    require_once 'public/views/editFarmer.php';
    require_once 'public/layouts/footer.php';
    break;

    // removeFarmer page
  case '/removeFarmer':
    $currentPageTitle = "Remove Farmer";
    require_once 'public/layouts/header.php';
    require_once 'public/views/removeFarmer.php';
    require_once 'public/layouts/footer.php';
    break;

    // addProduct page
  case '/addProduct':
    $currentPageTitle = "Add Product";
    require_once 'public/layouts/header.php';
    require_once 'public/views/addProduct.php';
    require_once 'public/layouts/footer.php';
    break;

    // editProduct page
  case '/editProduct':
    $currentPageTitle = "Edit Product";
    require_once 'public/layouts/header.php';
    require_once 'public/views/editProduct.php';
    require_once 'public/layouts/footer.php';
    break;

    // removeProduct page
  case '/removeProduct':
    $currentPageTitle = "Remove Product";
    require_once 'public/layouts/header.php';
    require_once 'public/views/removeProduct.php';
    require_once 'public/layouts/footer.php';
    break;


    // Actions -->
    // addProduct Action
  case '/createProduct':
    if (empty($_POST['image'])) {
      $image = 'https://picsum.photos/200/100';
    } else {
      $image = Functions::test_input($_POST['image']);
    }
    $name = Functions::test_input($_POST['name']);
    $price = intval($_POST['price']);
    $type_id = intval($_POST['type_id']);
    $farmer_id = intval($_POST['farmer_id']);
    $product = new Product($name, $price, $image, $type_id, $farmer_id);
    require 'controllers/addProductAction.php';
    header('Location: /');
    break;

    // editProduct Action
  case '/updateProduct':
    $name = Functions::test_input($_POST['name']);
    $price = Functions::test_input($_POST['price']);
    $image = Functions::test_input($_POST['image']);
    $type_id = intval($_POST['type_id']);
    $farmer_id = intval($_POST['farmer_id']);

    // require 'controllers/editCharacterAction.php';
    Product::updateProduct($request_uri[1], $name, $price, $image, $type_id, $farmer_id);
    // Farmer::updateCharacter($request_uri[1]);
    header('Location: /');
    break;

    // removeProduct Action
  case '/deleteProduct':
    // require 'controllers/removeProductAction.php';
    Farmer::deleteProduct($request_uri[1]);
    header('Location: /');
    break;

    // Everything else
  default:
    $currentPageTitle = "Error 404";
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    require_once 'public/layouts/header.php';
    require_once 'public/layouts/footer.php';
    break;
}
