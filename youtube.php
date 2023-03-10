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
                <div class="row mt-3 h-100 d-flex flex-column justify-content-center align-items-center g-sm-3 height-equal-2 widget-charts">

                    <img style="width: 100px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png" alt="">
                    <input class="w-25 form-control" type="text" placeholder="Login / Email">
                    <input class="w-25 form-control" type="text" placeholder="*****">
                    <button class="w-25 btn btn-primary btn-block">Log in</button>

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