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
                                <h2 style="color:#00CCFF">Licitatii / Lucrari</h2>
                                <h5 style="color:#00CCFF" id="caenTitle"></h5>

                            </div>
                            <div class="card-block row">
                                <div class="col-sm-12 col-lg-12 col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Titlu</th>
                                                    <th scope="col">Data publicare</th>
                                                    <th scope="col">Termen</th>
                                                    <th scope="col">Val. estimata</th>
                                                    <th scope="col">Actiuni</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">SCN1122306</th>
                                                    <td>Servicii de proiectare, asistență tehnică din partea proiectantului și execuția lucrărilor pentru realizarea obiectivului de investiție «MODERNIZARE DRUMURI DE INTERES LOCAL ÎN COMUNA HLIPICENI, JUDEȚUL BOTOȘANI</td>
                                                    <td>23.03.2023 15:17</td>
                                                    <td>10.04.2023 15:00</td>
                                                    <td> 10.182.397,28  RON </td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th scope="row">SCN1122298</th>
                                                    <td>Reparatii curente la instalaţiile IFTE de pe raza secţiei IFTE Roman: instalatii IFTE din statiile Bacau,Roman si Girleni</td>
                                                    <td>23.03.2023 12:55</td>
                                                    <td>12.04.2023 15:00</td>
                                                    <td> 550.000,00  RON </td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
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
                            <div class="card-header">
                                <h2 style="color:#00CCFF">Achizitii</h2>

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
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Masina de gatit cu 6 ochiuri, cuptor si dulap inchis</td>
                                                    <td>23-08-2021 </td>
                                                    <td>35.000 RON </td>
                                                    <td>
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
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
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seteaza</button>
                                                        <div class="dropdown-menu" style="">
                                                            <h6 class="dropdown-header">Dropdown header</h6><a class="dropdown-item" href="?test=1">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
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
                                <iframe src="https://www.e-licitatie.ro/pub" width="100%" height="1000vh" name="iframe"></iframe>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="card">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <iframe src="https://www.chatpdf.com/" width="100%" height="1000vh" name="iframe"></iframe>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <iframe src="https://www.youtube.com/" width="100%" height="1000vh" name="iframe"></iframe>
                            </div>
                        </div>
                    </div>




<h1>browser</h1>
/* gets the data from a URL */

?>

<form action="seap.php" method="post">
url: <input type="text" name="url"><br>
<input type="submit">
</form>

url - https://<?php echo $_POST["url"]; ?><br>

<?php

$url = $_POST["url"];
$homepage = file_get_contents('h'.$url);
echo $homepage;

?>


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
<script src="assets/js/custom-script.js"></script>

<!-- Plugins JS Ends-->
<script>
    new WOW().init();

    // title of the table
    dataObj = JSON.parse(window.localStorage.dataObj);
    d.element('caenTitle').innerHTML = `CAEN: ${dataObj.Bilanturi[0].cod_caen} - ${listCaen[dataObj.Bilanturi[0].cod_caen]}`;
</script>
<?php include('partial/footer-end.php') ?>