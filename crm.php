<?php include('partial/header.php') ?>
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
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

                            <div class="card-body">
                                <div class="dt-ext table-responsive">
                                    <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">



                                        <button class="btn btn-primary mb-3" id="downloadExcel1">Exporta in Excel</button>

                                        <input class="form-control" type="file" id="uploadExcel1" accept=".xlsx" />
                                        <button class="btn btn-primary mb-3" id="processExcel1">Importa din Excel</button>


                                        <table class="display dataTable" id="multilevel-btn" role="grid" aria-describedby="multilevel-btn_info">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 80.4844px;">Id</th>
                                                    <th>Nume / Prenume</th>
                                                    <th>Telefon</th>
                                                    <th>Email</th>
                                                    <th>Trimisa oferta</th>

                                                </tr>
                                            </thead>
                                            <tbody id="crmTable1">

                                            </tbody>

                                        </table>










                                    </div>
                                </div>
                            </div>


                            <div class="card-body">
                                <div class="dt-ext table-responsive">
                                    <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">



                                        <button class="btn btn-primary mb-3" id="downloadExcel2">Exporta in Excel</button>

                                        <input class="form-control" type="file" id="uploadExcel2" accept=".xlsx" />
                                        <button class="btn btn-primary mb-3" id="processExcel2">Importa din Excel</button>


                                        <table class="display dataTable" id="multilevel-btn" role="grid" aria-describedby="multilevel-btn_info">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 80.4844px;">Id</th>
                                                    <th>Nume / Prenume</th>
                                                    <th>Telefon</th>
                                                    <th>Email</th>
                                                    <th>Trimisa oferta</th>

                                                </tr>
                                            </thead>
                                            <tbody id="crmTable2">

                                            </tbody>

                                        </table>










                                    </div>
                                </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
<script src="assets/js/crm.js"></script>
<!-- Plugins JS Ends-->
<script>
    new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>