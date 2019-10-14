<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-3">
                <div class="featured-text text-center text-lg-left">
                    <h4>Edit character</h4>
                    <p class="text-black-50 mb-0">You can update an existing character by filling this form.</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3"></div>
            <div class="col-xl-6 col-lg-6">
                <form action="/updateCharacter?<?= $value->id ?>" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="energy" class="col-sm-2 col-form-label">Energy</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Energy" name="energy" id="energy" min="0" max="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="power" class="col-sm-2 col-form-label">Power</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Power" name="power" id="power" min="0" max="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="speed" class="col-sm-2 col-form-label">Speed</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Speed" name="speed" id="speed" min="0" max="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="weapon" class="col-sm-2 col-form-label">Weapon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Weapon" name="weapon" id="weapon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="special" class="col-sm-2 col-form-label">Special</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Special" name="special" id="special">
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
                            <input type="text" class="form-control" placeholder="Product" name="race" id="race">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Type" name="role" id="role">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>