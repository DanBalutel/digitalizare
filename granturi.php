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
    $title = 'Granturi';
    include('partial/breadcrumb.php')
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Proiect - Sprijin pentru entitățile din domeniul agroalimentar sub formă de microgranturi și granturi pentru capital de lucru
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
<script src="assets/js/notify/index.js"></script>
<script src="/assets/js/chatgpt.js"></script>
<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/height-equal.js"></script>
<script src="assets/js/animation/wow/wow.min.js"></script>
<!-- Plugins JS Ends-->
<script>
  new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>