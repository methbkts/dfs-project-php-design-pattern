<?php
$farmer = Farmer::getAllFarmers();
?>
<section id="section" class="projects-section bg-light">
    <div class="container">

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
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
            <div class="col-lg-6">
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
        </div>

        <br>

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Listes des fermiers :</h4>
                    <p class="text-black-50 mb-0">Tous les fermiers qui travaille en cooperation avec notre entreprise sont liste ci-dessous.</p>
                </div>
            </div>
        </div>

        <table class="table">
            <!-- Project One Row -->
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Localisation</th>
                    <th scope="col">description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($farmer as $key => $value) : ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $value->name ?></td>
                        <td><?= $value->location ?></td>
                        <td><?= $value->description ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>


    </div>
</section>