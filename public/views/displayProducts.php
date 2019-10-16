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
                    <h4>Liste des porduits propose actuellement</h4>
                    <p class="text-black-50 mb-0">Tous les produits sont disponible.</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <?php

        foreach ($products as $key => $value) {

            ?>
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0 displayProducts">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= $value->image ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><?= $value->name ?> de <?= $value->farmer ?></span></h4>
                                <p class="mb-0 text-muted"> <span class="text-white-50">Les <?= $value->name ?> de <?= $value->farmer ?> sont propose a : <?= $value->price ?> €</span>, il en reste : <span class="text-white-50"><?= $value->quantity ?></p>
                                <p class="text-white-50"> pour voir plus de produits propose par <?= $value->farmer ?></p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                                <p>
                                    <button type="button" class="btn btn-info"><i class="fas fa-binoculars"></i></button>
                                    <a href="/updateProductForm?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-warning"><i class="far fa-edit"></i></button></a>
                                    <a href="/deleteProduct?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
</section>
<!-- <?php foreach ($farmers as $key => $value) {
            $farmer_id = $value->id; ?>
                                                <a href="/updateProduct? 
                                                        <? $farmer_id ?> <?php } ?> ">
                                                    <button type="button" <?php
                                                                            foreach ($farmers as $key => $value) {
                                                                                $farmer_id = $value->id;
                                                                                ?> value="<?= $farmer_id ?>" <?php } ?>
                                                        class="btn btn-info"><i class="fas fa-binoculars"></i>
                                                    </button>
                                                </a> -->