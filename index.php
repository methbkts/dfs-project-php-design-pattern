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

    // addCharacter page
  case '/addCharacter':
    $currentPageTitle = "Add Farmer";
    require_once 'public/layouts/header.php';
    require_once 'public/views/addCharacter.php';
    require_once 'public/layouts/footer.php';
    break;
    // editCharacter page
  case '/editCharacter':
    $currentPageTitle = "Edit Farmer";
    require_once 'public/layouts/header.php';
    require_once 'public/views/editCharacter.php';
    require_once 'public/layouts/footer.php';
    break;
    // removeCharacter page
  case '/removeCharacter':
    $currentPageTitle = "Remove Farmer";
    require_once 'public/layouts/header.php';
    require_once 'public/views/removeCharacter.php';
    require_once 'public/layouts/footer.php';
    break;

    // Actions -->
    // addProduct Action
  case '/createProduct':
    require 'controllers/addProductAction.php';
    header('Location: /');
    break;
    // editProduct Action
  case '/updateProduct':
    // require 'controllers/editCharacterAction.php';
    Farmer::updateProduct($request_uri[1]);
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
