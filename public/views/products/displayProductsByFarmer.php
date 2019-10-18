<?php

?>

<section id="section" class="projects-section bg-light">
    <div class="container">
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="contDisplayProductsByFarmer mr-4">
                <img class="imgDisplayProductsByFarmer" src="<?= $farmer->image ?>" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Liste des produits de <?= $farmer->name ?></h4>
                    <p class="text-black-50 mb-0">Tous les produits proposés par <?= $farmer->name ?>.</p>
                </div>
            </div>
        </div>

        <?php foreach ($products as $key => $value) : ?>
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0 displayProducts">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= $value->image ?>" alt="product-image">
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><?= $value->name ?> de <?= $value->farmer ?></span></h4>
                                <p class="mb-0 text-white">Les <?= $value->name ?> de <?= $value->farmer ?> sont proposé(e)s à <?= $value->price ?>€.</p>
                                <p class="mb-0 text-white">Il en reste actuellement <?= $value->quantity ?>.</p>

                                <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>