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

                    <img style="width: 100px" src="data:image/png;base64,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" alt="">
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