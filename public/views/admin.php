<?php
$farmers = Farmer::getAllFarmers();
$products = Product::getAllProducts();
$ProductsNb = Count::countProducts();
$FarmersNb = Count::countFarmers();
?>

<section id="section" class="projects-section bg-light">
    <div class="container">
        <h2>Panel d'administration</h2>

        <!-- Products & Farmers Counting -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-5 order-lg-first mb-5">
                <div class="bg-black text-center h-100 project collapse-admin count-product shadow-4dp">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Il y a actuellement <?= $ProductsNb ?> produits en vente</h4>
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
                            <h4 class="text-white">Il y a actuellement <?= $FarmersNb ?> producteurs enregistrés</h4>
                            <p class="mb-0 text-white"><i class="fas fa-users fa-4x"></i></p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products & Farmers Adding -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-5">
                <div class="row">
                    <div class="col-lg-9 featured-text text-center text-lg-left">
                        <h4>Ajouter un produit :</h4>
                        <p class="text-black-50 mb-0">Les produits proposés par nos producteurs.</p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2">
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
                    <div class="col-lg-2">
                        <a href="/addFarmer"><button type="button" value="" class="btn btn-success shadow-2dp"><i class="fas fa-user-plus fa-2x"></i></button></a>
                    </div>
                </div>
            </div>
        </div>


        <h3>Liste des fermiers</h3>
        <!-- Farmers Listing -->
        <div class="table-responsive" style="border-radius:10px;">
            <table class="table table-striped shadow-4dp">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Description</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($farmers as $key => $value) : ?>
                        <tr>
                            <td><?= $value->name ?></td>
                            <td><?= $value->location ?></td>
                            <td><?= $value->description ?></td>
                            <td><a href="/editFarmer?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-info shadow-2dp"><i class="fas fa-user-edit"></i></button></a></td>
                            <td><a href="/deleteFarmer?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-danger shadow-2dp"><i class="fas fa-user-minus"></i></button></a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>

        <br>
        <h3>Liste des produits</h3>
        <!-- Products Listing -->
        <div class="table-responsive" style="border-radius:10px;">
            <table class="table table-striped shadow-4dp">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Producteur</th>
                        <th scope="col">Type</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
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
                            <td><a href="/editProduct?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-info shadow-2dp"><i class="fas fa-edit"></i></button></a></td>
                            <td><a href="/deleteProduct?<?= $value->id ?>"><button type="button" value="<?= $value->id ?>" class="btn btn-danger shadow-2dp"><i class="fas fa-trash-alt"></i></button></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>