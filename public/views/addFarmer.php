<?php
$types = Farmer::getAllRoles();
$products = Farmer::getAllRaces();
?>
<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-3">
                <div class="featured-text text-center text-lg-left">
                    <h4>Add farmer</h4>
                    <p class="text-black-50 mb-0">You can create a new farmer by filling this form.</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3"></div>
            <div class="col-xl-6 col-lg-6">
                <form action="/createFarmer" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="image" class="form-control" placeholder="Image" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="race" class="col-sm-2 col-form-label">Product</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" placeholder="Product" name="race" id="race"> -->
                            <select name="race" id="race">
                                <?php
                                foreach ($products as $key => $value) {
                                    ?>
                                    <option value="<?= ++$key ?>"><?= $value->name ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" placeholder="Type" name="role" id="role"> -->
                            <select name="role" id="role">
                                <?php
                                foreach ($types as $key => $value) {
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
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>