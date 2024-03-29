<?php
$farmers = Farmer::getAllFarmers();
$type = Product::getAllTypes();
$productUpdate = Product::getOneProduct($product_id);
// Functions::dd($farmers);
?>
<section id="section" class="projects-section bg-light">
    <div class="container">
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-2">
                <div class="featured-text text-center text-lg-left">
                    <h4>Modifier les <?= $productUpdate->name ?></h4>
                    <p class="text-black-50 mb-0">Vous pouvez modifier les <?= $productUpdate->name ?> avec ce formulaire</p>
                </div>
            </div>
            <div class="row align-items-center no-gutters mb-4 mb-lg-5 displayProducts updateForm">
                <div class="col-xl-6 col-lg-3">
                    <img class="img-fluid" src="<?= $productUpdate->image ?>" alt="">
                </div>
                <div class="col-lg-6 shadow-4dp">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white"><?= $productUpdate->name ?> de <?= $productUpdate->farmer ?></span></h4>
                                <p class="mb-0 text-muted"> <span class="text-white-50">Les <?= $productUpdate->name ?> de <?= $productUpdate->farmer ?> sont propose a : <?= $productUpdate->price ?> €</span>, il en reste : <span class="text-white-50"><?= $productUpdate->quantity ?></p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6">
                <form action="/updateProduct?<?= $product_id ?>" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="nom du produit" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="image du produit" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Prix</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="0.01" class="form-control" placeholder="prix du produit" name="price" id="price" lang="en">
                            <!-- <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" /> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantite</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="form-control" placeholder="quantite disponible du produit" name="quantity" id="quantity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type_id" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select name="type_id" id="type_id">
                                <?php foreach ($type as $key => $value) : ?>
                                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="farmer_id" class="col-sm-2 col-form-label">Le producteur</label>
                        <div class="col-sm-10">
                            <select name="farmer_id" id="farmer_id">
                                <?php foreach ($farmers as $key => $value) : ?>
                                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                <?php endforeach ?>
                            </select>
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