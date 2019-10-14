<?php
$type = Product::getAllTypes();
$farmer = Farmer::getAllFarmers();
?>
<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-3">
                <div class="featured-text text-center text-lg-left">
                    <h4>Modifier un produit</h4>
                    <p class="text-black-50 mb-0">Vous pouvez modifier un produit avec ce formulaire</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3"></div>
            <div class="col-xl-6 col-lg-6">
            <form action="/updateProduct?<?php $value->id?>" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="nom du produit" name="name" id="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Prix</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="prix du produit" name="price" id="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type_id" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select name="type_id" id="type_id">
                                <?php
                                foreach ($type as $key => $value) {
                                    ?>
                                    <option value="<?= ++$key ?>"><?= $value->name ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Le fermier</label>
                        <div class="col-sm-10">
                            <select name="role" id="role">
                                <?php
                                foreach ($farmer as $key => $value) {
                                    ?>
                                    <option value="<?= ++$key ?>"><?= $value->name ?></option>
                                <?php
                                }
                                ?>
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