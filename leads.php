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


                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">
                                <h4>
                                    Leads DIGI
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Maria Popescu</td>
                                                <td>+40 123 456 789<br>maria.popescu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Ion Radu</td>
                                                <td>+40 987 654 321<br>ion.radu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Gabriela Gheorghe</td>
                                                <td>+40 666 777 888<br>gabriela.gheorghe@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Adrian Popa</td>
                                                <td>+40 999 888 777<br>adrian.popa@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Continue the same format for the remaining names -->


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>




                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">

                                <h4>
                                    Leads AGRO
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Raluca Vasilescu</td>
                                                <td>+40 111 222 333<br>raluca.vasilescu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Marius Radu</td>
                                                <td>+40 123 456 789<br>marius.radu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Ana Vladescu</td>
                                                <td>+40 555 123 456<br>ana.vladescu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Ionut Ionescu</td>
                                                <td>+40 333 444 555<br>ionut.ionescu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="card small-widget mb-sm-0">
                            <div class="card-body primary min-h-9">
                                <h4>
                                    Leads 411
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nume/Prenume</th>
                                                <th scope="col">Telefon/Email</th>
                                                <th scope="col">Site</th>
                                                <th scope="col">Servicii</th>
                                                <th scope="col">Actiuni</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mihai Dumitru</td>
                                                <td>+40 111 222 333<br>mihai.dumitru@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Elena Vasile</td>
                                                <td>+40 444 555 666<br>elena.vasile@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Andrei Gheorghe</td>
                                                <td>+40 666 777 888<br>andrei.gheorghe@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mihaela Popescu</td>
                                                <td>+40 999 888 777<br>mihaela.popescu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Adrian Stanescu</td>
                                                <td>+40 222 333 444<br>adrian.stanescu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Laura Popa</td>
                                                <td>+40 777 111 222<br>laura.popa@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <th scope="row">7</th>
                                                <td>George Ionescu</td>
                                                <td>+40 333 444 555<br>george.ionescu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Andreea Radu</td>
                                                <td>+40 666 777 888<br>andreea.radu@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>Vlad Mihai</td>
                                                <td>+40 888 777 666<br>vlad.mihai@example.com</td>
                                                <td>site.ro</td>
                                                <td>...</td>
                                                <td>
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                    <div class="dropdown-menu" style="">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="?test=1">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
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