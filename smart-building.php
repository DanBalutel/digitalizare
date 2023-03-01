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
        $title = 'IoT';
        include('partial/breadcrumb.php') 
      ?>
      <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row g-sm-3 height-equal-2 widget-charts">

        <div class="col-sm-12"> 
          <div class="card small-widget mb-sm-0"> 
            <div class="card-body success d-flex align-items-center justify-content-center">
                <img class="w-100" src="assets/images/only1/iot1.jpeg" alt="">
            </div>
          </div>
        </div>

        <div class="col-sm-3"> 
          <div class="card small-widget mb-sm-0"> 
            <div class="card-body success"><span class="f-light">Profit</span>

            </div>
          </div>
        </div>

        <div class="col-sm-3"> 
          <div class="card small-widget mb-sm-0"> 
            <div class="card-body success"><span class="f-light">Profit</span>

            </div>
          </div>
        </div>

</div>
      <!-- Container-fluid Ends-->
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
<!-- Plugins JS Ends-->
<script>
  new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>