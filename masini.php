<?php include('partial/header.php') ?>
<?php include('partial/loader.php') ?>
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php') ?>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php') ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">

            <?php
            $title = 'Dashboard';
            include('partial/breadcrumb.php')
            ?>

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <section class="maps-leaflet">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <!-- poza sofer -->
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="avatar">
                                                            <img src="assets/images/custom-persons/9.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">
                                                        <h6 class="card-title d-flex flex-column justify-content-center">Ion Popescu</h6>
                                                    </div>
                                                </div>
                                                <!-- end poza sofer  -->
                                                <!-- alte detalii -->
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <p class="mt-3">
                                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                                            <span class="txt-info">Stare: </span> <button class="btn btn-success btn-xs" type="button" title="" data-bs-original-title="btn btn-success btn-xs">In tranzit</button><br>
                                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                                            <span class="txt-info">Încărcătura Curentă: </span>Echipamente industriale grele<br>
                                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                                            <span class="txt-info">Destinația Curentă: </span>Budapesta, Ungaria<br><br>
                                                            <span class="txt-info">Alerte și Notificări: </span><br>
                                                        </p>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">

                                                    </div>
                                                </div>
                                                <!-- end alte detalii -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <iframe width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=44.769685,25.027373&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <!-- poza sofer -->
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="avatar">
                                                            <img src="assets/images/custom-persons/1.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">
                                                        <h6 class="card-title d-flex flex-column justify-content-center">Daniel Popescu</h6>
                                                    </div>
                                                </div>
                                                <!-- end poza sofer  -->
                                                <!-- alte detalii -->
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <p class="mt-3">
                                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                                            <span class="txt-info">Stare: </span> <button class="btn btn-warning btn-xs" type="button" title="" data-bs-original-title="btn btn-success btn-xs">In asteptare</button><br>
                                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                                            <span class="txt-info">Încărcătura Curentă: </span>---<br>
                                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                                            <span class="txt-info">Destinația Curentă: </span>Budapesta, Ungaria<br><br>
                                                            <span class="txt-info">Alerte și Notificări: </span><br>

                                                        <div class="alert alert-warning dark" role="alert">
                                                            <p>Notificare: Are loc incarcarea marfii.</p>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">

                                                    </div>
                                                </div>
                                                <!-- end alte detalii -->
                                            </div>
                                        </div>
                                        <!-- harta locatia masinii -->
                                        <div class="col-12 col-md-7">
                                            <iframe width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=44.314623,23.916960&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        </div>
                                        <!-- end harta locatia masinii -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <!-- poza sofer -->
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="avatar">
                                                            <img src="assets/images/custom-persons/2.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">
                                                        <h6 class="card-title d-flex flex-column justify-content-center">Ion Radu</h6>
                                                    </div>
                                                </div>
                                                <!-- end poza sofer  -->
                                                <!-- alte detalii -->
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <p class="mt-3">
                                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                                            <span class="txt-info">Stare: </span> <button class="btn btn-success btn-xs" type="button" title="" data-bs-original-title="btn btn-success btn-xs">In tranzit</button><br>
                                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                                            <span class="txt-info">Încărcătura Curentă: </span>Echipamente industriale grele<br>
                                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                                            <span class="txt-info">Destinația Curentă: </span>Budapesta, Ungaria<br><br>
                                                            <span class="txt-info">Alerte și Notificări: </span><br>
                                                        </p>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">

                                                    </div>
                                                </div>
                                                <!-- end alte detalii -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <iframe width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=45.098346,23.332877&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <!-- poza sofer -->
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="avatar">
                                                            <img src="assets/images/custom-persons/6.jpg" width="110" height="110" class="rounded-circle shadow" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">
                                                        <h6 class="card-title d-flex flex-column justify-content-center">Andrei Popescu</h6>
                                                    </div>
                                                </div>
                                                <!-- end poza sofer  -->
                                                <!-- alte detalii -->
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <p class="mt-3">
                                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                                            <span class="txt-info">Stare: </span> <button class="btn btn-success btn-xs" type="button" title="" data-bs-original-title="btn btn-success btn-xs">In tranzit</button><br>
                                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                                            <span class="txt-info">Încărcătura Curentă: </span>Echipamente industriale grele<br>
                                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                                            <span class="txt-info">Destinația Curentă: </span>Budapesta, Ungaria<br><br>
                                                            <span class="txt-info">Alerte și Notificări: </span><br>
                                                        </p>
                                                    </div>
                                                    <div class="col-6 d-flex flex-column justify-content-center">

                                                    </div>
                                                </div>
                                                <!-- end alte detalii -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <iframe width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=46.975859,23.215396&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="https://comyspedition.ro/renault.png" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-success btn-xs" type="button" title="btn btn-success btn-xs">In tranzit</button><br>
                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                            <span class="txt-info">Încărcătura Curentă: </span>Echipamente industriale grele<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                            <span class="txt-info">Destinația Curentă: </span>Budapesta, Ungaria<br><br>

                                            <span class="txt-info">Raportul de Consum: </span>29 L / 100 km<br>
                                            <span class="txt-info">Alerte și Notificări: </span>
                                        <div class="alert alert-warning dark" role="alert">
                                            <p>Notificare: Este necesară înlocuirea filtrului de aer în curând.</p>
                                        </div><br>
                                        <button class="btn btn-light btn-sm" type="button" title="Imagini si Documente Relevante">Imagini si Documente Relevante</button><br>


                                        </p>
                                        <h6 class="txt-info">Starea tehnica: </h6>


                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Ulei Motor: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de aer: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 89%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de combustibil: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 63%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Anvelope: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Frane: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 47%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <h6 class="txt-info">Istoricul Transporturilor: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Frankfurt, Germania<br>
                                                    <span class="txt-info">Încărcătură: </span>Containere cu echipamente electronice <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în siguranță. <br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 25 iunie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span> 29 iunie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>Cluj-Napoca, România<br>
                                                    <span class="txt-info">Destinație: </span>Barcelona, Spania<br>
                                                    <span class="txt-info">Încărcătură: </span>Produse alimentare perisabile <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în stare proaspătă.<br>
                                                </p>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="https://comyspedition.ro/mercedes.png" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-success btn-xs" type="button" title="btn btn-success btn-xs">In tranzit</button><br>
                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                            <span class="txt-info">Încărcătura Curentă: </span>Echipamente industriale grele<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                            <span class="txt-info">Destinația Curentă: </span>Budapesta, Ungaria<br><br>

                                            <span class="txt-info">Raportul de Consum: </span>29 L / 100 km<br>
                                            <span class="txt-info">Alerte și Notificări: </span> ---
                                            <br>
                                            <br>
                                            <button class="btn btn-light btn-sm" type="button" title="Imagini si Documente Relevante">Imagini si Documente Relevante</button><br>


                                        </p>
                                        <h6 class="txt-info">Starea tehnica: </h6>


                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Ulei Motor: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de aer: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 29%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de combustibil: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 63%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Anvelope: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Frane: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 47%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <h6 class="txt-info">Istoricul Transporturilor: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Frankfurt, Germania<br>
                                                    <span class="txt-info">Încărcătură: </span>Containere cu echipamente electronice <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în siguranță. <br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 25 iunie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span> 29 iunie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>Cluj-Napoca, România<br>
                                                    <span class="txt-info">Destinație: </span>Barcelona, Spania<br>
                                                    <span class="txt-info">Încărcătură: </span>Produse alimentare perisabile <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în stare proaspătă.<br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Frankfurt, Germania<br>
                                                    <span class="txt-info">Încărcătură: </span>Containere cu echipamente electronice <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în siguranță. <br>
                                                </p>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="https://comyspedition.ro/w.png" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-warning btn-xs" type="button" title="btn btn-success btn-xs">In asteptare</button><br>
                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                            <span class="txt-info">Încărcătura Curentă: </span>---<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>---<br>
                                            <span class="txt-info">Destinația Curentă: </span>---<br><br>

                                            <span class="txt-info">Raportul de Consum: </span>23 L / 100 km<br>
                                            <span class="txt-info">Alerte și Notificări: </span> ---
                                            <br>
                                            <br>
                                            <button class="btn btn-light btn-sm" type="button" title="Imagini si Documente Relevante">Imagini si Documente Relevante</button><br>


                                        </p>
                                        <h6 class="txt-info">Starea tehnica: </h6>


                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Ulei Motor: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de aer: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 29%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de combustibil: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 63%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Anvelope: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Frane: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 47%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <h6 class="txt-info">Istoricul Transporturilor: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Frankfurt, Germania<br>
                                                    <span class="txt-info">Încărcătură: </span>Containere cu echipamente electronice <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în siguranță. <br>
                                                </p>
                                            </li>

                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="https://comyspedition.ro/renault.png" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-danger btn-xs" type="button" title="btn btn-success btn-xs">In service</button><br>
                                            <span class="txt-info">Contactul șoferului: </span> +40 746 728 732<br>
                                            <span class="txt-info">Încărcătura Curentă: </span>---<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>---<br>
                                            <span class="txt-info">Destinația Curentă: </span>---<br><br>

                                            <span class="txt-info">Raportul de Consum: </span>31 L / 100 km<br>
                                            <span class="txt-info">Alerte și Notificări: </span> ---
                                            <br>
                                            <br>
                                            <button class="btn btn-light btn-sm" type="button" title="Imagini si Documente Relevante">Imagini si Documente Relevante</button><br>


                                        </p>
                                        <h6 class="txt-info">Starea tehnica: </h6>


                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Ulei Motor: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de aer: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Filtru de combustibil: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Anvelope: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p>
                                                    <span class="txt-info">Frane: </span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <h6 class="txt-info">Istoricul Transporturilor: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Frankfurt, Germania<br>
                                                    <span class="txt-info">Încărcătură: </span>Containere cu echipamente electronice <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în siguranță. <br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 25 iunie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span> 29 iunie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>Cluj-Napoca, România<br>
                                                    <span class="txt-info">Destinație: </span>Barcelona, Spania<br>
                                                    <span class="txt-info">Încărcătură: </span>Produse alimentare perisabile <br>
                                                    <span class="txt-info">Stare la Sosire: </span>Încărcătura a fost livrată în stare proaspătă.<br>
                                                </p>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>



        </div>
    </div>



    <!-- Modal loading-->
    <div id="modal-loading" class="modal fade bd-example-modal-lg show" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;background: #000000a6;" aria-modal="true" role="dialog">
        <div class="mt-5 modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body dark-modal">


                    <h6 id="loadingLabel" class="w-100 d-flex justify-content-center">text here</h6>

                    <div class="progress">
                        <div id="loadingLoader" class="progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>



</div>
<!-- footer start-->
<?php include('partial/footer.php') ?>
</div>
</div>
<?php include('partial/scripts.php') ?>
<!-- Plugins JS start-->

<script src="assets/js/chart/apex-chart/moment.min.js"></script>
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/dashboard/default.js"></script>
<script src="assets/js/notify/index.js"></script>
<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/height-equal.js"></script>
<script src="assets/js/animation/wow/wow.min.js"></script>
<script src="assets/js/chart/morris-chart/raphael.js"></script>
<script src="assets/js/chart/morris-chart/morris.js"> </script>
<script src="assets/js/chart/morris-chart/prettify.min.js"></script>
<script src="assets/js/chart/morris-chart/morris-script.js"></script>
<script src="assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<script>
    new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>