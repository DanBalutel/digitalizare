<?php include('partial/header.php'); ?>

<link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

<?php include('partial/loader.php'); ?>

<!-- page-wrapper Start-->
<div class="page-wrapper default-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php'); ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php'); ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php include('partial/breadcrumb.php'); ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row project-cards">

                    <div class="col-xl-12">
                        <div class="card height-equal" style="min-height: 341.898px;">
                            <div class="card-header">
                                <h4>Starea proiectului</h4>
                            </div>
                            <div class="card-body progress-showcase row">
                                <div class="col">
                                    <br>
                                    <p class="f-m-light mt-1">Vanzari 2023 1M (euro)</p>
                                    <div class="progress lg-progress-bar">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <br>
                                    <p class="f-m-light mt-1">Autorizari</p>
                                    <div class="progress lg-progress-bar">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <br>
                                    <p class="f-m-light mt-1">Cursuri IT</p>
                                    <div class="progress lg-progress-bar">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

        <?php include('partial/footer.php'); ?>

    </div>
</div>
<?php include('partial/scripts.php'); ?>

<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/tooltip-init.js"></script>
<?php include('partial/footer-end.php'); ?>