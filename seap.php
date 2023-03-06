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
                <div class="row g-sm-3 height-equal-2 widget-charts">

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Breckpoint Specific</h3><span>Use

                            </div>
                            <div class="card-block row">
                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Titlu</th>
                                                    <th scope="col">Termen</th>
                                                    <th scope="col">Val. estimata</th>
                                                    <th scope="col">Actiuni</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Masa refrigerata cu 2 usi </td>
                                                    <td>23-08-2021</td>
                                                    <td> 6.700 RON</td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a
                                                                class="dropdown-item" href="?test=1">Action</a><a
                                                                class="dropdown-item" href="#">Another action</a><a
                                                                class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                                href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Masina de gatit cu 6 ochiuri, cuptor si dulap inchis</td>
                                                    <td>23-08-2021 </td>
                                                    <td>35.000 RON </td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a
                                                                class="dropdown-item" href="?test=1">Action</a><a
                                                                class="dropdown-item" href="#">Another action</a><a
                                                                class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                                href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Contract de furnizare a unei instalatii de incinerare a
                                                        deseurilor de hartie, containerizat </td>
                                                    <td>06-09-2021 </td>
                                                    <td>221.848 RON</td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a
                                                                class="dropdown-item" href="?test=1">Action</a><a
                                                                class="dropdown-item" href="#">Another action</a><a
                                                                class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                                href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Statie de pompare ape uzate menajere - Petresti Parc localitatea
                                                        Corbeanca </td>
                                                    <td>07-09-2021 </td>
                                                    <td>193.175 RON </td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a
                                                                class="dropdown-item" href="?test=1">Action</a><a
                                                                class="dropdown-item" href="#">Another action</a><a
                                                                class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                                href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Armaturi de reglaj sala masini si sala cazane actionate electric
                                                        si pneumatic aferente blocului energetic nr. 5 </td>
                                                    <td>06-09-2021 </td>
                                                    <td>8.123.677 RON </td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a
                                                                class="dropdown-item" href="?test=1">Action</a><a
                                                                class="dropdown-item" href="#">Another action</a><a
                                                                class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                                href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Materiale pentru rebobinarea motoarelor </td>
                                                    <td>25-08-2021 </td>
                                                    <td>1.443 RON</td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a
                                                                class="dropdown-item" href="?test=1">Action</a><a
                                                                class="dropdown-item" href="#">Another action</a><a
                                                                class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                                href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="card">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <iframe src="https://www.e-licitatie.ro/pub" width="100%" height="1000vh"
                                    name="iframe"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <!-- Modal loading-->
            <div id="modal-loading" class="modal fade bd-example-modal-lg show" tabindex="-1"
                aria-labelledby="myLargeModalLabel" style="display: none;background: #000000a6;" aria-modal="true"
                role="dialog">
                <div class="mt-5 modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body dark-modal">


                            <h6 id="loadingLabel" class="w-100 d-flex justify-content-center">text here</h6>

                            <div class="progress">
                                <div id="loadingLoader" class="progress-bar-animated progress-bar-striped bg-success"
                                    role="progressbar" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
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
<script src="assets/js/clock.js"></script>
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