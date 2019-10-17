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
    $currentPageTitle = "Page d'accueil";
    require_once 'public/layouts/header.php';
    require_once 'public/views/home.php';
    require_once 'public/layouts/footer.php';
    break;

  case '/admin':
    $currentPageTitle = "Page d'administration";
    require_once 'public/layouts/header.php';
    require_once 'public/views/admin.php';
    require_once 'public/layouts/footer.php';
    break;

    // Farmers page
  case '/displayFarmers':
    $currentPageTitle = "Liste des producteurs";
    require_once 'public/layouts/header.php';
    require_once 'public/views/displayFarmers.php';
    require_once 'public/layouts/footer.php';
    break;

    // Products page
  case '/displayProducts':
    $currentPageTitle = "Liste des produits";
    require_once 'public/layouts/header.php';
    require_once 'public/views/displayProducts.php';
    require_once 'public/layouts/footer.php';
    break;

    // One Farmer's Products page
  case '/displayProductsByFarmer':
    // remplacer 'fermier' par le nom du producteur
    $currentPageTitle = "Liste des produits du fermier";
    $farmer_id = $request_uri[1];
    require_once 'public/layouts/header.php';
    require_once 'public/views/displayProductsByFarmer.php';
    require_once 'public/layouts/footer.php';
    break;

    // addFarmer page
  case '/addFarmer':
    $currentPageTitle = "Ajouter un producteur";
    require_once 'public/layouts/header.php';
    require_once 'public/views/addFarmer.php';
    require_once 'public/layouts/footer.php';
    break;

    // editFarmer page
  case '/editFarmer':
    $currentPageTitle = "Modifier le producteur";
    require_once 'public/layouts/header.php';
    require_once 'public/views/editFarmer.php';
    require_once 'public/layouts/footer.php';
    break;

    // removeFarmer page
  case '/removeFarmer':
    $currentPageTitle = "Enlever le producteur";
    require_once 'public/layouts/header.php';
    require_once 'public/views/removeFarmer.php';
    require_once 'public/layouts/footer.php';
    break;

    // addProduct page
  case '/addProduct':
    $currentPageTitle = "Ajouter un produit";
    require_once 'public/layouts/header.php';
    require_once 'public/views/addProduct.php';
    require_once 'public/layouts/footer.php';
    break;

    // editProduct page
  case '/editProduct':
    $currentPageTitle = "Modifier le produit";
    $product_id = $request_uri[1];
    require_once 'public/layouts/header.php';
    require_once 'public/views/editProduct.php';
    require_once 'public/layouts/footer.php';
    break;

    // removeProduct page
  case '/removeProduct':
    $currentPageTitle = "Enlever le produit";
    require_once 'public/layouts/header.php';
    require_once 'public/views/removeProduct.php';
    require_once 'public/layouts/footer.php';
    break;


    // Actions -->
    // TODO: crud actions
    // addFarmer Action
  case '/createFarmer':
    require 'controllers/addFarmerAction.php';
    header('Location: /displayFarmers');
    break;

    // editFarmer Action
  case '/updateFarmer':
    require 'controllers/editFarmerAction.php';
    header('Location: /displayFarmers');
    break;

    // removeFarmer Action
  case '/deleteFarmer':
    require 'controllers/removeFarmerAction.php';
    header('Location: /displayFarmers');
    break;

    // addProduct Action
  case '/createProduct':
    require 'controllers/addProductAction.php';
    header('Location: /displayProducts');
    break;

    // editProduct Action
  case '/updateProduct':
    $product_id = $request_uri[1];
    require 'controllers/editProductAction.php';
    header('Location: /displayProducts');
    break;

    // removeProduct Action
  case '/deleteProduct':
    // require 'controllers/removeProductAction.php';
    Product::deleteProduct($request_uri[1]);
    header('Location: /displayProducts');
    break;


    // Everything else
  default:
    $currentPageTitle = "Error 404";
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    require_once 'public/layouts/header.php';
    require_once 'public/layouts/footer.php';
    break;
}
