<?php include('partial/header.php') ?>
<script src="assets/js/chatgpt.js" defer></script>
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
        $title = 'Email';
        include('partial/breadcrumb.php') 
      ?>
      
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-6">
                <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Gmail.max-1440x810.format-webp.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <img src="https://logos-world.net/wp-content/uploads/2020/10/Yahoo-Logo.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Microsoft_Office_Outlook_%282018%E2%80%93present%29.svg/1101px-Microsoft_Office_Outlook_%282018%E2%80%93present%29.svg.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Gmail.max-1440x810.format-webp.webp" class="img-fluid" alt="">
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