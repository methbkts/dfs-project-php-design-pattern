<!DOCTYPE html>
<html class="" lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="methbkts,lmanso">
    <meta name="description" content="">
    <title>Farming Express - <?= $currentPageTitle ?></title>
    <link rel="shortcut icon" href="public/img/favicon.png" type="image/x-icon">
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="public/css/grayscale.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-2dp" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/">Farming Express</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/displayFarmers#section">Liste des producteurs</a>
                    </li>
                    <li class="nav-link collapse navbar-collapse">|</li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/displayProducts#section">Liste des produits</a>
                    </li>
                    <li class="nav-link collapse navbar-collapse">|</li>
                    <!-- TODO: ajouter condition si utilisateur lambda pour aller sur sa page de profil -->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/profile#section">Profil</a>
                    </li>
                    <li class="nav-link collapse navbar-collapse">|</li <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/admin#section">Administration</a>
                    </li>
                    <li class="nav-link collapse navbar-collapse">|</li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/login#section">Connexion</a>
                    </li>
                    <li class="nav-link collapse navbar-collapse">|</li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <?php
                if ($currentPageTitle == "Page d'accueil") { ?>
                    <h1 class="mx-auto my-0 text-uppercase mb-4">Bienvenue</h1>
                    <!-- <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2> -->
                    <a href="#section" class="btn btn-primary js-scroll-trigger">Voir nos prix</a>
                <?php
                } else if ($currentPageTitle == "Error 404") { ?>
                    <h1 class="mx-auto my-0 text-uppercase mb-4"><?= $currentPageTitle ?></h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">The requested page could not be found.<br><a href="/">Cliquez ici pour retourner à l’accueil</a></h2>
                <?php
                } else { ?>
                    <h1 class="mx-auto my-0 text-uppercase mb-4" style="font-size: 4rem;"><?= $currentPageTitle ?></h1>
                    <a href="#section" class="btn btn-primary js-scroll-trigger">Let's go!</a>
                <?php } ?>
            </div>
        </div>
    </header>