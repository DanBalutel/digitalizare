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
        $title = 'GMAIL';
        include('partial/breadcrumb.php') 
      ?>
      <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="card h-100">
            <div class="card-body ">
                <form action="">
                    <div class="row justify-content-center align-items-center text">
                        <div class="col-md-4 ">
                            <div class="text-center">
                                <img  src="assets/images/meniu/gmail.png" width="150" alt="">
                            </div>
                            <br>
                            <label for="login">Email</label>
                            <input type="email" class="form-control">
                            <br>
                            <label for="password">Password</label>
                            <input type="password" class="form-control">
                            <br>
                            <button class="btn btn-primary w-100">Login</button>
                        </div>
                    </div>
                </form>
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