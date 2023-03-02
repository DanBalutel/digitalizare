<?php include('partial/header.php') ?>
<script src="assets/js/dashboard.js" defer></script>
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
          <h3 id="name"></h3>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body primary min-h-9"> <span class="f-light">Cifra de afaceri</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="cifra-de-afaceri"></h4><span class="font-primary f-12 f-w-500"><i
                      class="icon-arrow-up"></i><span>+50%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#fill-charts"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body success min-h-9"><span class="f-light">Profit</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="profit-actual"></h4><span class="font-success f-12 f-w-500"><i
                      class="icon-arrow-up"></i><span>+20%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#profit"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body secondary min-h-9"><span class="f-light">Angajați</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="locuri-munca"></h4><span class="font-secondary f-12 f-w-500"></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body success min-h-9"><span class="f-light">Cod CAEN</span>
                <div class="flex-wrap d-flex align-items-end gap-1">
                  <h4 id="cod-caen"></h4><span class="font-success f-12 f-w-500"></span>
                  <div id="nume-caen" class="f-14 f-s-normal">denumire CAEN</div>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#fill-bookmark"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body secondary"> <span class="f-light">Active Totale</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="active-totale"></h4><span class="font-secondary f-12 f-w-500"><i
                      class="icon-arrow-up"></i><span>+50%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#new-order"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body warning"><span class="f-light">Stocuri</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="nr-stocuri"></h4><span class="font-warning f-12 f-w-500"><i
                      class="icon-arrow-up"></i><span>+20%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#tag"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body secondary"><span class="f-light">Casa si conturi in banci</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="casa-conturi"></h4><span class="font-secondary f-12 f-w-500"><i
                      class="icon-arrow-down"></i><span>-10%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#sale"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card small-widget mb-sm-0">
              <div class="card-body success"><span class="f-light">Capital total</span>
                <div class="d-flex align-items-end gap-1">
                  <h4 id="capital-total"></h4><span class="font-success f-12 f-w-500"><i
                      class="icon-arrow-up"></i><span>+80%</span></span>
                </div>
                <div class="bg-gradient">
                  <svg class="stroke-icon svg-fill">
                    <use href="../assets/svg/icon-sprite.svg#orders"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <!-- MAP -->
          <div class="col-md-6">
            <div class="card small-widget mb-sm-0">
              <div class="card-header">
                <h5>Adresa fiscala</h5>
              </div>
              <div id="mapAnaf"></div>
            </div>
          </div>


          <div class="col-sm-12 col-xl-6 box-col-6">
            <div class="card min-h-30">
              <div class="card-header">
                <h5>Asociatii</h5>
              </div>
              <div class="card-body apex-chart">
                <div id="piechart"></div>
              </div>
            </div>
          </div>


          <div class="col-sm-12 col-xl-6 box-col-6">
            <div class="card">
              <div class="card-header">
                <h5>Rentabilitatea afacerii</h5>
              </div>
              <div class="card-body">
                <div id="basic-apex"></div>
              </div>
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