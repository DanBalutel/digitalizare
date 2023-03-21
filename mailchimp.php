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

                    <img style="width: 300px" src="data:image/png;base64,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" alt="">
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