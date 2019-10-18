<?php
$farmers = Farmer::getAllFarmers();
$farmerUpdate = Farmer::getOneFarmer($farmer_id);
// Functions::dd($farmerUpdate);
?>
<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5 ">
            <div class="col-xl-4 col-lg-3">
                <div class="featured-text text-center text-lg-left">
                    <h4>Modifier la fiche de <?= $farmerUpdate->name ?></h4>
                    <p class="text-black-50 mb-0">Utilisez-le formulaire</p>
                </div>
            </div>
            <div class="row align-items-center no-gutters mb-4 mb-lg-5 displayProducts updateForm">
                <div class="col-xl-6 col-lg-3">
                    <img class="img-fluid shadow-4dp" src="<?= $farmerUpdate->image ?>" alt="">
                </div>
                <div class="col-lg-6 shadow-4dp">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><?= $farmerUpdate->name ?> a <?= $farmerUpdate->location ?></span></h4>
                                <p class="mb-0 text-muted"> <span class="text-white-50"><?= $farmerUpdate->description?></p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3"></div>
            <div class="col-xl-6 col-lg-6">
                <form action="/updateFarmer?<?= $farmer_id ?>" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nom du producteur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nom du producteur" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description du producteur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Description du producteur" name="description" id="description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-sm-2 col-form-label">Ville du producteur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Ville du producteur" name="location" id="location">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Image" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>