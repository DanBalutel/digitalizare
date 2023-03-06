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

          <h3 class="display-4">Dispozitive care se pot conecta la PC sau telefon pentru a le controla in timp real</h3>

          <div class="col-sm-12">
            <div class="card small-widget mb-sm-0">
              <div class="card-body success flex-wrap d-flex align-items-center justify-content-center">
                <img class="w-25" src="assets/images/only1/iot3.jpeg" alt="">
                <h3 class="w-100 align-items-center justify-content-center d-flex flex-column">
                  Smart Office: Controlati de pe telefon <br>
                  <ul class="f-w-300">
                    <li>- Lumini</li>
                    <li>- Camera de Securitate cu senzor de miscare</li>
                    <li>- Climatizare</li>
                    <li>- Porti si Usi</li>

                  </ul>
                </h3>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="card small-widget mb-sm-0">
              <div class="card-body success d-flex align-items-center justify-content-center">
                <img class="w-100" src="assets/images/only1/iot1.jpeg" alt="">
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
</div>