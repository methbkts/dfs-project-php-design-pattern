<?php
?>

<section id="section" class="projects-section bg-light">
    <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-3">
                <div class="featured-text text-center text-lg-left">
                    <h4>Ajouter un producteur</h4>
                    <p class="text-black-50 mb-0">Vous pouvez créer un nouveau producteur en remplissant ce formulaire.</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3"></div>
            <div class="col-xl-6 col-lg-6">
                <form action="/createFarmer" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nom du producteur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nom du producteur" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description du producteur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Description du producteur" name="description" id="description" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-sm-2 col-form-label">Ville du producteur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Ville du producteur" name="location" id="location" required>
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
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>