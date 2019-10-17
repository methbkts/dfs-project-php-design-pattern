<?php
$products = Product::getAllProducts();
$farmers = Farmer::getAllFarmers();
// $farmerName = Farmer::getName();
?>
<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Liste des produits proposés actuellement</h4>
                    <p class="text-black-50 mb-0">Tous les produits sont disponible.</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <?php foreach ($products as $key => $value) : ?>
            <div class="row justify-content-center no-gutters mb-5 displayProducts">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= $value->image ?>" alt="">

                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white cont-btn-displayProducts"><?= $value->name ?> de <?= $value->farmer ?></span>
                                    <a href="/editProduct?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-warning btn-sm"><i class="far fa-edit fa-sm"></i></button></a>
                                    <a href="/deleteProduct?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn-sm btn btn-danger "><i class="far fa-trash-alt fa-xs"></i></button></a>
                                </h4>
                                <p class="mb-0 text-muted"> <span class="text-white-50">Les <?= $value->name ?> de <?= $value->farmer ?> sont propose a : <?= $value->price ?> €</span>, il en reste : <span class="text-white-50"><?= $value->quantity ?></p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                                <p class="text-white">Voir les produits proposés par <?= $value->farmer ?>
                                    <a href="/displayProductsByFarmer?<?= $value->farmer_id ?>"><button type="button" class="btn btn-farmer" value="<?= $value->farmer_id ?>"><i class="fas fa-shopping-basket"></i></button></a>
                                    <!-- <button type="button" class="btn btn-info"><i class="fas fa-binoculars"></i></button> -->

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>