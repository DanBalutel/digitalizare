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




                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-3">

                                    <div class="card-title">
                                        <h2>Informatii depozite</h2>
                                    </div>
                                    <hr>
                                    <label for="">Suma depozit</label>
                                    <input type="number" class="form-control" placeholder="2000">
                                    <br>
                                    <label for="">Perioada</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">6 luni</option>
                                        <option value="">1 an</option>
                                        <option value="">3 ani</option>
                                        <option value="">4 ani</option>
                                        <option value="">5 ani</option>
                                        <option value="">6 ani</option>
                                        <option value="">7 ani</option>
                                        <option value="">8 ani</option>
                                        <option value="">9 ani</option>
                                        <option value="">10 ani</option>
                                        <option value="">11 ani</option>
                                        <option value="">12 ani</option>
                                        <option value="">13 ani</option>
                                        <option value="">14 ani</option>
                                        <option value="">15 ani</option>
                                    </select>
                                </div>
                                <div class="col-md-9">

                                    <div class="card-title">
                                        <h2>Oferte Bancare</h2>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <p>
                                                <a target="_blank" href="https://tbibank.ro"><img
                                                        src="https://mail.google.com/mail/u/0?ui=2&amp;ik=3b3961d652&amp;attid=0.1&amp;permmsgid=msg-f:1758631920665833221&amp;th=1867ea6a09f32f05&amp;view=fimg&amp;fur=ip&amp;sz=s0-l75-ft&amp;attbid=ANGjdJ_4Srh9zlgpYh5c4RlAKp6oqY1Y_2X6knkCcoAJ6QTK6JQjy1BIT5f57eap--zsKCt-X17JGnxJXzPhYmnVQ2HRtZURHIOOaWF2EN8IhIXJnONYO4TuUOB4JeY&amp;disp=emb&amp;realattid=ii_leh6yu1r0"
                                                        width="180" alt=""></a>
                                            </p>
                                            <h4>DEPOZIT</h4>
                                            <p></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                            </p>
                                            <h5>DAE</h5>
                                            <h3 class="text-secondary">9.30%</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <a target="_blank" href="https://imfs.ro/simulator-credit/?tip=imobiliar"
                                                class="btn btn-warning align-middle">Negociaza dobanda</a>
                                        </div>
                                        <hr>
                                        <div class="col-md-3">
                                            <p>
                                                <a target="_blank" href="https://www.otpbank.ro/ro"><img
                                                        src="https://imfs.ro/wp-content/uploads/2021/04/OTP_Bank_Rom%C3%A2nia.svg.png"
                                                        width="180" alt=""></a>
                                            </p>
                                            <h4>DEPOZIT</h4>
                                            <p></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                            </p>
                                            <h5>DAE</h5>
                                            <h3 class="text-secondary">9.24%</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <a target="_blank" href="https://imfs.ro/simulator-credit/?tip=imobiliar"
                                                class="btn btn-warning align-middle">Negociaza dobanda</a>
                                        </div>
                                        <hr>
                                        <div class="col-md-3">
                                            <p>
                                                <a target="_blank" href="https://www.brd.ro"><img
                                                        src="https://imfs.ro/wp-content/uploads/2021/04/logo-mic.png"
                                                        width="180" alt=""></a>
                                            </p>
                                            <h4>DEPOZIT</h4>
                                            <p></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                            </p>
                                            <h5>DAE</h5>
                                            <h3 class="text-secondary">9.93%</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <a target="_blank" href="https://imfs.ro/simulator-credit/?tip=imobiliar"
                                                class="btn btn-warning align-middle">Negociaza dobanda</a>
                                        </div>
                                        <hr>
                                        <div class="col-md-3">
                                            <p>
                                                <a target="_blank" href="https://www.bcr.ro"><img
                                                        src="https://imfs.ro/wp-content/uploads/2021/04/BCR.svg.png"
                                                        width="180" alt=""></a>
                                            </p>
                                            <h4>DEPOZIT</h4>
                                            <p></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                            </p>
                                            <h5>DAE</h5>
                                            <h3 class="text-secondary">8.26%</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <a target="_blank" href="https://imfs.ro/simulator-credit/?tip=imobiliar"
                                                class="btn btn-warning align-middle">Negociaza dobanda</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-3">

                                    <div class="card-title">
                                        <h2>Informatii credit</h2>
                                    </div>
                                    <hr>
                                    <label for="">Destinatie Credit</label>
                                    <select name="" id="" class="form-select">
                                        <option value="" selected="" disabled="">alege tip</option>
                                        <option value="">Credit ipotecar/imobiliar</option>
                                        <option value="">Credit de nevoie personale</option>
                                    </select>
                                    <br>
                                    <label for="">Valoare credit</label>
                                    <input type="number" class="form-control" placeholder="2000">
                                    <br>
                                    <label for="">Perioada</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">1 an</option>
                                        <option value="">3 ani</option>
                                        <option value="">4 ani</option>
                                        <option value="">5 ani</option>
                                        <option value="">6 ani</option>
                                        <option value="">7 ani</option>
                                        <option value="">8 ani</option>
                                        <option value="">9 ani</option>
                                        <option value="">10 ani</option>
                                        <option value="">11 ani</option>
                                        <option value="">12 ani</option>
                                        <option value="">13 ani</option>
                                        <option value="">14 ani</option>
                                        <option value="">15 ani</option>
                                    </select>
                                </div>
                                <div class="col-md-9">

                                    <div class="card-title">
                                        <h2>Oferte Bancare</h2>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <p>
                                                <a target="_blank" href="https://www.otpbank.ro/ro"><img
                                                        src="https://imfs.ro/wp-content/uploads/2021/04/OTP_Bank_Rom%C3%A2nia.svg.png"
                                                        width="180" alt=""></a>
                                            </p>
                                            <h4>CREDIT IPOTECAR</h4>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>
                                            </p>
                                            <h5>DAE</h5>
                                            <h3 class="text-secondary">9.24%</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3">

                                            <p>
                                            </p>
                                            <h5>Rată lunară</h5>
                                            <h3 class="text-success">2288.05 RON</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <a target="_blank" href="https://imfs.ro/simulator-credit/?tip=imobiliar"
                                                class="btn btn-warning align-middle">Solicita creditul</a>
                                        </div>
                                        <hr>
                                        <div class="col-md-3">
                                            <p>
                                                <a target="_blank" href="https://www.brd.ro"><img
                                                        src="https://imfs.ro/wp-content/uploads/2021/04/logo-mic.png"
                                                        width="180" alt=""></a>
                                            </p>
                                            <h4>CREDIT IPOTECAR</h4>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>
                                            </p>
                                            <h5>DAE</h5>
                                            <h3 class="text-secondary">9.93%</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3">

                                            <p>
                                            </p>
                                            <h5>Rată lunară</h5>
                                            <h3 class="text-success">2400.97 RON</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <a target="_blank" href="https://imfs.ro/simulator-credit/?tip=imobiliar"
                                                class="btn btn-warning align-middle">Solicita creditul</a>
                                        </div>
                                        <hr>
                                        <div class="col-md-3">
                                            <p>
                                                <a target="_blank" href="https://www.bcr.ro"><img
                                                        src="https://imfs.ro/wp-content/uploads/2021/04/BCR.svg.png"
                                                        width="180" alt=""></a>
                                            </p>
                                            <h4>CREDIT IPOTECAR</h4>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>
                                            </p>
                                            <h5>DAE</h5>
                                            <h3 class="text-secondary">8.26%</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3">

                                            <p>
                                            </p>
                                            <h5>Rată lunară</h5>
                                            <h3 class="text-success">2131.73 RON</h3>
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <a target="_blank" href="https://imfs.ro/simulator-credit/?tip=imobiliar"
                                                class="btn btn-warning align-middle">Solicita creditul</a>
                                        </div>
                                    </div>
                                </div>
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