<?php
$farmer = Farmer::getAllFarmers();
?>
<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Listes des fermiers :</h4>
                    <p class="text-black-50 mb-0">Tous les fermiers qui travaille en cooperation avec notre entreprise sont liste ci-dessous.</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <?php

        foreach ($farmer as $key => $value) {

            ?>
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= $value->image ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><?= $value->name ?> - <span class="text-white-50"><?= $value->location ?></span></h4>
                                <p class="mb-0 text-muted"><?= $value->description ?></p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                                <br>
                                <p class="text-white">
                                    Pour voir les produits que propose <?= $value->name ?> :
                                    <a href="/displayProductsByFarmer?<?= $value->id ?>"><button type="button" class="btn btn-farmer" value="<?= $value->id ?>" style="float: right;"><i class="fas fa-shopping-basket fa-2x"></i></button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>

        <!-- Project Two Row -->
        <!-- <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="img-fluid" src="public/img/demo-image-02.jpg" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Mountains</h4>
                            <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</section>