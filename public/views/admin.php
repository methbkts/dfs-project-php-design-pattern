<?php
$farmer = Farmer::getAllFarmers();
$nbProducts = Count::countProducts();
$nbFarmers = Count::countFarmers();
$products = Product::getAllProducts();
// Functions::dd($nbProducts);
?>
<section id="section" class="projects-section bg-light">
    <div class="container">
        <h2>Panel d'administration :</h2>
        <br>
        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-5 order-lg-first mb-5">
                <div class="bg-black text-center h-100 project collapse-admin count-product shadow-4dp">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Il y a <?php foreach ($nbProducts as $key => $value) : echo $value;
                                                            endforeach ?> produits en vente actuellement</h4>
                            <p class="mb-0 text-white"><i class="fas fa-seedling fa-4x"></i></p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 mb-5">
                <div class="bg-black text-center h-100 project collapse-admin count-farmer shadow-4dp">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Il y a <?php foreach ($nbFarmers as $key => $value) : echo $value;
                                                            endforeach ?> producteurs actuellement enregistrés</h4>
                            <p class="mb-0 text-white"><i class="fas fa-users fa-4x"></i></p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-5">
                <div class="row">
                    <div class="col-lg-9 featured-text text-center text-lg-left">
                        <h4>Ajouter un produits :</h4>
                        <p class="text-black-50 mb-0">Les produits proposés par nos producteurs.</p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-xl-2 col-lg-2">
                        <a href="/addProduct"><button type="button" value="" class="btn btn-success shadow-2dp"><i class="fas fa-plus fa-2x"></i></i></button></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3"></div>
            <div class="col-xl-4 col-lg-5">
                <div class="row">
                    <div class="col-lg-9 featured-text text-center text-lg-left">
                        <h4>Ajouter un fermier:</h4>
                        <p class="text-black-50 mb-0">Les fermiers qui travailles avec notre entreprise.</p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-xl-2 col-lg-2">
                        <a href="/addFarmer"><button type="button" value="" class="btn btn-success shadow-2dp"><i class="fas fa-user-plus fa-2x"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
        <h3>Liste des fermiers</h3>
        <div class="table-responsive" style="border-radius:10px;">
            <table class="table table-striped shadow-4dp">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Localisation</th>
                        <th scope="col">description</th>
                        <th scope="col">editer</th>
                        <th scope="col">ajouter</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($farmer as $key => $value) : ?>
                        <tr>
                            <td><?= $value->name ?></td>
                            <td><?= $value->location ?></td>
                            <td><?= $value->description ?></td>
                            <td><a href="/editFarmer?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-info shadow-2dp"><i class="far fa-edit"></i></button></a></td>
                            <td><a href="/deleteFarmer?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-danger shadow-2dp"><i class="far fa-trash-alt"></i></button></a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
        <br>
        <h3>Liste des produits</h3>
        <div class="table-responsive" style="border-radius:10px;">
            <table class="table table-striped shadow-4dp">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Producteur</th>
                        <th scope="col">Type</th>
                        <th scope="col">prix</th>
                        <th scope="col">quantité</th>
                        <th scope="col">editer</th>
                        <th scope="col">ajouter</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $key => $value) : ?>
                        <tr>
                            <td><?= $value->name ?></td>
                            <td><?= $value->farmer ?></td>
                            <td><?= $value->type ?></td>
                            <td><?= $value->price ?></td>
                            <td><?= $value->quantity ?></td>
                            <td><a href="/editProduct?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-info shadow-2dp"><i class="far fa-edit"></i></button></a></td>
                            <td><a href="/deleteProduct?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-danger shadow-2dp"><i class="far fa-trash-alt"></i></button></a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</section>