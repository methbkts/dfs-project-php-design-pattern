<?php

?>
<section id="section" class="projects-section bg-light">
    <div class="container">
        <form method="post">

            <!-- Profile Head -->
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="profile-image" />
                        <div class="file btn btn-lg btn-primary">
                            Changer Photo
                            <input type="file" name="profile-image" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Kshiti Ghelani
                        </h5>
                        <h6>
                            Développeur Web & Designer
                        </h6>
                        <p class="proile-rating"><span>&nbsp;</span></p>
                        <!-- <p class="proile-rating">NOTATION : <span>8/10</span></p> -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">À propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">Historique</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Modifier Profil" />
                </div>
            </div>

            <!-- Profile Body -->
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>LIENS</p>
                        <a href="#section">Site personnel</a><br>
                        <a href="#section">Profil Facebook</a><br>
                        <a href="#section">Profil Twitter</a>
                        <p>SKILLS</p>
                        Développeur Web<br>
                        Web Designer<br>
                        WordPress<br>
                        WooCommerce<br>
                        PHP, .Net
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Identifiant</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Kshiti123</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nom</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Kshiti Ghelani</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>kshitighelani@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Téléphone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>01 23 45 67 89</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Développeur Web & Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Type de compte</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Client</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Abonnement</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Premium</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre de commande</label>
                                </div>
                                <div class="col-md-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Producteur préféré</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Pierre</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Inscrit depuis</label>
                                </div>
                                <div class="col-md-6">
                                    <p>6 mois</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Bio</label><br />
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam est itaque ad, impedit sequi recusandae, necessitatibus numquam vel magnam, perspiciatis commodi atque doloremque officiis quia cumque consectetur excepturi. Nemo, fugit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>