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
        $title = 'Google Apps';
        include('partial/breadcrumb.php') 
      ?>
      
      <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEVChfT///8ZZ9I1f/SxyPo5gfSXtvgwffPV4fwpevPl7P3r8P36/P8LYtF5o/ZBhPQ2edfU4vbK2vRDf9nQ3/U+fNjW5PdIifRTj/V+qvfb5/2/0/vE1fvR3vzF2fyrxvmVtfiGr/hqnPZLjPSbu/iNYbvnAAADWklEQVR4nO3d7VKbQBSAYciK2tAUrW1DwGD8uP9rLI5xWtsf7i5nc87JvO8FRJ5hl12QTKr63Ku0D6B4CP2H0H8I/Yfw39rp4eWyQIfbIrw6VTjs+m3XlCjc/TAgHHah6bqqTJub7+rCqQ+FdK+tNjdlzmK8cHxuCgKr1Wpz90tVeL8tNT7fhasyAzVWuO7LAl+FZYixwseiQ/QonInyi0akcCh2Df0gnOeiODFSeCh9Co/CAgM1Ttg+lT6F70L5RSNOuC99nfkjFB+occKxOp1wtfkpehbjhBfFp+FfQuG5aFE4EwV3N5HCkjvS/4WiGzibQsmBalQouGhYFc5XVKFFw6xwnosyZ9GuUGouGhYK3WlYFsps4EwLRQaqbaHEomFcOC8aS3c31oXLFw3zwsVz0b5w6Vx0IFx4p+FBuGyguhAuIvoQLtnAOREu2MB5EeYPVDfC7EXDjzB3oDoSZj4q9iTMm4uuhFmPin0JczZwzoQZA9WbMH3RcCdMflTsT5h61+9QmDgXPQrT7jRcCpM2cD6FKQPVqTCB6FUYv4FzK4xeNMwI0wsXCBEi1A4hQoT6IUSIUD+ECBHqhxAhQv0QIkSoH0KEacLwRb5P/+YpheE66mPSuv7sj55SeFVEeIUw6mMQvoUQYVYIER5D+BbCMLZr6drR0q6tClfymdp5q4QQIUL9ECJEqB9ChAj1QygrPPu7p3Dfyndv6Q74/J9iIMwKIcJjCN9CiDArhKfdte3rr9LVe0u7tvN/Y0glhAgR6ocQIUL9ECJEqB9CWWGz5B8Umb94dlJhc3Gd35D5w3yOnmJ8y/vNM4QIESJEiBAhQmnhcO7CqgkL8rDzVgkhQoT6IUSIUD+ECBHqhxAhQv0QIkSoH0KECPVDiBChfggRItQPIUKE+iFEiFA/hAg/CvPerSvb+QsbSeFYZb4/WLRRULjv7Qm7Pu613Thhm/nVpJJ1T62gsD7Ym4jNIe7QI4VDZ+0kdt1aVFg/WlsRw2PkkccK18auNU0fNwvjhfW0tUTstlPsgUcL6/HZztWmeY5bC9OE9dRbmYuhjz6DScJ62IVG/ZradU3YpXyBJUX4auy3VaNZte2TfKnCeXczPbxc6vXyMMVeQ3OF/kLoP4T+Q+g/hP77DdqWqCVZTzgAAAAAAElFTkSuQmCC" width="110" height="110" alt="">
                                <h5 class="mb-0 mt-5">Google Docs</h5>

                                <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Deschide</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="data:image/jpeg;base64,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" width="110" height="110" alt="">
                                <h5 class="mb-0 mt-5">Google Sheets</h5>

                                <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Deschide</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/da/Google_Drive_logo.png" width="110" height="110" alt="">
                                <h5 class="mb-0 mt-5">Google Drive</h5>

                                <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Deschide</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="https://cdn-icons-png.flaticon.com/512/2965/2965358.png" width="110" height="110" alt="">
                                <h5 class="mb-0 mt-5">Google Keep</h5>

                                <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Deschide</a>
                                </div>
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