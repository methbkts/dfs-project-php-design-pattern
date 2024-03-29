<?php
$types = Product::getAllTypes();
$farmers = Farmer::getAllFarmers();
?>

<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-3">
                <div class="featured-text text-center text-lg-left">
                    <h4>Ajouter un produit</h4>
                    <p class="text-black-50 mb-0">Vous pouvez créer un nouveau produit en remplissant ce formulaire.</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3"></div>
            <div class="col-xl-6 col-lg-6">
                <form action="/createProduct" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nom du produit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nom du produit" name="name" id="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Prix du produit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Prix du produit" name="price" id="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Image" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantité disponible</label>
                        <div class="col-sm-10">
                            <input type="quantity" class="form-control" placeholder="Quantité disponible" name="quantity" id="quantity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type de produit</label>
                        <div class="col-sm-10">
                            <select name="type" id="type">
                                <?php foreach ($types as $key => $value) : ?>
                                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="farmer" class="col-sm-2 col-form-label">Producteur</label>
                        <div class="col-sm-10">
                            <select name="farmer" id="farmer">
                                <?php
                                foreach ($farmers as $key => $value) :
                                    ?>
                                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>