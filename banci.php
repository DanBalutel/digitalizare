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
      $title = 'Banci';
      include('partial/breadcrumb.php')
        ?>

      <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                <div class="card balance-box height-equal-2">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="balance-profile">
                        <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                            <img src="assets/images/banci/brd.png" width="200" alt="user vector">
                        </div>
                        <span class="f-light d-block mt-2">Soldul </span>
                        <h5 class="mt-1">1,987,500.90 LEI</h5>
                        <ul> 
                            <li>
                            <div class="balance-item danger"> 
                                <div class="balance-icon-wrap"> 
                                <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                </div>
                                <div> <span class="f-12 f-light">Cheltuieli  </span>
                                <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="balance-item success">
                                <div class="balance-icon-wrap"> 
                                <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                </div>
                                <div> <span class="f-12 f-light">Venituri</span>
                                <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                <div class="card balance-box height-equal-2">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="balance-profile">
                        <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                            <img src="assets/images/banci/bcr.png" width="200" alt="user vector">
                        </div>
                        <span class="f-light d-block mt-2">Soldul </span>
                        <h5 class="mt-1">1,987,500.90 LEI</h5>
                        <ul> 
                            <li>
                            <div class="balance-item danger"> 
                                <div class="balance-icon-wrap"> 
                                <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                </div>
                                <div> <span class="f-12 f-light">Cheltuieli  </span>
                                <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="balance-item success">
                                <div class="balance-icon-wrap"> 
                                <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                </div>
                                <div> <span class="f-12 f-light">Venituri</span>
                                <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                    <div class="card balance-box height-equal-2">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <div class="balance-profile">
                            <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                                <img src="assets/images/banci/bt.png" width="200" alt="user vector">
                            </div>
                            <span class="f-light d-block mt-2">Soldul </span>
                            <h5 class="mt-1">1,987,500.90 LEI</h5>
                            <ul> 
                                <li>
                                <div class="balance-item danger"> 
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Cheltuieli  </span>
                                    <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                    </div>
                                </div>
                                </li>
                                <li>
                                <div class="balance-item success">
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Venituri</span>
                                    <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                    <div class="card balance-box height-equal-2">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <div class="balance-profile">
                            <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                                <img src="assets/images/banci/cec.png" width="200" alt="user vector">
                            </div>
                            <span class="f-light d-block mt-2">Soldul </span>
                            <h5 class="mt-1">1,987,500.90 LEI</h5>
                            <ul> 
                                <li>
                                <div class="balance-item danger"> 
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Cheltuieli  </span>
                                    <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                    </div>
                                </div>
                                </li>
                                <li>
                                <div class="balance-item success">
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Venituri</span>
                                    <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                    <div class="card balance-box height-equal-2">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <div class="balance-profile">
                            <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                                <img src="assets/images/banci/ing.png" width="200" alt="user vector">
                            </div>
                            <span class="f-light d-block mt-2">Soldul </span>
                            <h5 class="mt-1">1,987,500.90 LEI</h5>
                            <ul> 
                                <li>
                                <div class="balance-item danger"> 
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Cheltuieli  </span>
                                    <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                    </div>
                                </div>
                                </li>
                                <li>
                                <div class="balance-item success">
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Venituri</span>
                                    <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                    <div class="card balance-box height-equal-2">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <div class="balance-profile">
                            <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                                <img src="assets/images/banci/unicredit.png" width="200" alt="user vector">
                            </div>
                            <span class="f-light d-block mt-2">Soldul </span>
                            <h5 class="mt-1">1,987,500.90 LEI</h5>
                            <ul> 
                                <li>
                                <div class="balance-item danger"> 
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Cheltuieli  </span>
                                    <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                    </div>
                                </div>
                                </li>
                                <li>
                                <div class="balance-item success">
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Venituri</span>
                                    <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                    <div class="card balance-box height-equal-2">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <div class="balance-profile">
                            <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                                <img src="assets/images/banci/raiffeisen.png" width="200" alt="user vector">
                            </div>
                            <span class="f-light d-block mt-2">Soldul </span>
                            <h5 class="mt-1">1,987,500.90 LEI</h5>
                            <ul> 
                                <li>
                                <div class="balance-item danger"> 
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Cheltuieli  </span>
                                    <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                    </div>
                                </div>
                                </li>
                                <li>
                                <div class="balance-item success">
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Venituri</span>
                                    <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6"> 
                    <div class="card balance-box height-equal-2">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <div class="balance-profile">
                            <div style="padding: 20px;background: aliceblue;border-radius: 20px;">
                                <img src="assets/images/banci/revolut.png" width="200" alt="user vector">
                            </div>
                            <span class="f-light d-block mt-2">Soldul </span>
                            <h5 class="mt-1">1,987,500.90 LEI</h5>
                            <ul> 
                                <li>
                                <div class="balance-item danger"> 
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-right"><line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Cheltuieli  </span>
                                    <h5>78.8K</h5><span class="badge badge-light-danger rounded-pill">-11.67%</span>
                                    </div>
                                </div>
                                </li>
                                <li>
                                <div class="balance-item success">
                                    <div class="balance-icon-wrap"> 
                                    <div class="balance-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-right"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div>
                                    </div>
                                    <div> <span class="f-12 f-light">Venituri</span>
                                    <h5>19.7K</h5><span class="badge badge-light-success rounded-pill">+10.67%</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                            </div>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
  
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "https://www.bnr.ro/nbrfxrates.xml",
        cache: false,
        dataType: "xml",
        success: function(xml) {

            console.log(xml)
        }
    });
});

</script>
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