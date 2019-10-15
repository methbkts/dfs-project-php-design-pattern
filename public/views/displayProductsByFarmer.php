<?php
var_dump($id);die;
$product = getProductsByFarmer($id);
$farmerName = Farmer::getName();
?>
<section id="farmers" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Liste des porduits propose par ce <?=$farmerName?></h4>
                    <p class="text-black-50 mb-0">Tous les produits sont disponible.</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <?php

        foreach ($product as $key => $value) {

            ?>
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= $value->image ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><?= $value->name ?> - <span class="text-white-50"><?= $value->price ?> - <span class="text-white-50"><?= $value->quantity ?></span></h4>
                                <p class="mb-0 text-muted"><?= $value->description ?></p>
                                <hr class="d-none d-lg-block mb-0 ml-0">

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