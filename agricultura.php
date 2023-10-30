<?php include('partial/header.php') ?>
<?php include('partial/loader.php') ?>
<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
</style>
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
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <!-- poza sofer -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4 class="txt-info">Planifica o lucrare: </h4>

                                                        <p>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- end poza sofer  -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <div id="map"></div>
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
                                    <img src="assets/images/tractor_1.jpg" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-success btn-xs" type="button" title="btn btn-success btn-xs">In lucru</button><br>
                                            <span class="txt-info">Persoana responsabila: </span> +40 746 728 732<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                            <span class="txt-info">Terenul: </span>Buftea, teren nr. 47<br><br>

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
                                        <h6 class="txt-info">Istoric: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 65<br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 25 iunie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span> 29 iunie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>Cluj-Napoca, România<br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 31<br>
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
                                    <img src="assets/images/tractor_2.jpg" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-success btn-xs" type="button" title="btn btn-success btn-xs">In lucru</button><br>
                                            <span class="txt-info">Persoana responsabila: </span> +40 746 728 732<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>27 oct. 2023 - 20:30<br>
                                            <span class="txt-info">Terenul: </span>Buftea, teren nr. 23<br><br>

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
                                        <h6 class="txt-info">Istoric: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 65<br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 25 iunie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span> 29 iunie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>Cluj-Napoca, România<br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 31<br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 65<br>
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
                                    <img src="assets/images/tractor_3.webp" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-warning btn-xs" type="button" title="btn btn-success btn-xs">In hangar</button><br>
                                            <span class="txt-info">Persoana responsabila: </span> +40 746 728 732<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>---<br>
                                            <span class="txt-info">Terenul: </span>---<br><br>

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
                                        <h6 class="txt-info">Istoric: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 65<br>
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
                                    <img src="assets/images/tractor_4.webp" class="mt-3" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex flex-column align-items-left">
                                        <p>
                                            <span class="txt-info">Nr. identificare: </span> 35485632114587<br>
                                            <span class="txt-info">Stare: </span> <button class="btn btn-danger btn-xs" type="button" title="btn btn-success btn-xs">In service</button><br>
                                            <span class="txt-info">Persoana responsabila: </span> +40 746 728 732<br>
                                            <span class="txt-info">Data și Ora Plecării: </span>---<br>
                                            <span class="txt-info">Terenul: </span>---<br><br>

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
                                        <h6 class="txt-info">Istoric: </h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 15 aprilie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span>17 aprilie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>București, România <br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 65<br>
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p>
                                                    <span class="txt-info">Data de Plecare: </span> 25 iunie 2023<br>
                                                    <span class="txt-info">Data de Sosire: </span> 29 iunie 2023 <br>
                                                    <span class="txt-info">Locație de Plecare: </span>Cluj-Napoca, România<br>
                                                    <span class="txt-info">Destinație: </span>Buftea, teren nr. 31<br>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5WxG2Z3pOTjaRpxzu586wBUH2j4p6HTg&callback=initMap&libraries=geometry">
</script>

<script>
    var map; // Declare map variable globally so it can be accessed by other functions
    var poly; // Declare poly globally
    var path; // Declare path globally

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {
                lat: 44.769685,
                lng: 25.027373
            } // Set the initial location
        });

        poly = new google.maps.Polygon({
            map: map,
            path: [],
            strokeColor: '#FF0000',
            fillColor: '#FF0000'
        });
        path = poly.getPath();

        // Add a listener for the click event
        google.maps.event.addListener(map, 'click', addLatLng);
    }

    function addLatLng(event) {
        path = poly.getPath();
        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear
        path.push(event.latLng);

        // Add a new marker at the new plotted point on the polygon.
        var marker = new google.maps.Marker({
            position: event.latLng,
            title: '#' + path.getLength(),
            map: map
        });
    }

    function calculateArea() {
        var area = google.maps.geometry.spherical.computeArea(poly.getPath());
        var areaSqFeet = area * 10.764; // Convert square meters to square feet

        document.getElementById('output').innerHTML = "The area is: " + area.toFixed(2) + " square meters (" + areaSqFeet.toFixed(2) + " square feet)";
    }
</script>
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