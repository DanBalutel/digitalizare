<?php include('partial/header.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/css/vendors/sticky.css">
<?php include('partial/header.php'); ?>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php'); ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php'); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php include('partial/breadcrumb.php'); ?>
            <!-- Container-fluid starts                    -->
            <div class="container-fluid">
                <div class="row sticky-header-main">
                    <div class="col-6 col-sm-4">
                        <div class="card">
                            <a href="sticky.php" class="card-header">

                                <div class="d-flex justify-content-between">
                                    <i class="icofont icofont-ui-calendar"></i>

                                    <h3 id="stickyToday">0</h3>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5>Azi</h5>
                                    </div>
                                </div>


                            </a>

                        </div>
                    </div>

                    <div class="col-6 col-sm-4">
                        <div class="card">
                            <a href="stickyAlert.php" class="card-header">

                                <div class="d-flex justify-content-between">
                                    <i class="icofont icofont-calendar"></i>
                                    <h3 class="">1</h3>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5>Alerte</h5>
                                    </div>
                                </div>


                            </a>

                        </div>
                    </div>

                    <div class="col-6 col-sm-4">
                        <div class="card">
                            <a href="stickyAll.php" class="card-header">

                                <div class="d-flex justify-content-between">
                                    <i class="icofont icofont-inbox"></i>
                                    <h3 id="stickyAll">0</h3>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5>Toate</h5>
                                    </div>
                                </div>



                            </a>

                        </div>
                    </div>

                    <div class="col-6 col-sm-4">
                        <div class="card">
                            <a href="stickyImportante.php" class="card-header">

                                <div class="d-flex justify-content-between">
                                    <i class="icofont icofont-flag"></i>
                                    <h3 class="">1</h3>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5>Importante</h5>
                                    </div>
                                </div>



                            </a>

                        </div>
                    </div>

                    <div class="col-6 col-sm-4">
                        <div class="card">
                            <a href="stickyDone.php" class="card-header">

                                <div class="d-flex justify-content-between">
                                    <i class="icofont icofont-checked"></i>
                                    <h3 class="">3</h3>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5>Completate</h5>
                                    </div>
                                </div>



                            </a>

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

<script>
    d.element('stickyToday').innerHTML = JSON.parse(localStorage.board).length;
    d.element('stickyAll').innerHTML = 2+JSON.parse(localStorage.board).length;

</script>
<script src="assets/js/jquery.ui.min.js"></script>
<script src="assets/js/sticky/sticky.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<?php include('partial/footer-end.php'); ?>