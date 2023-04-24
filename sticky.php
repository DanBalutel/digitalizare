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
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-primary pull-right m-l-10 mb-3" onclick="newNote2(d.element('newNoteText').value)">Adauga notita</a>

                <textarea class="form-control input-txt-bx mt-3" name="" id="newNoteText" cols="30" rows="10" placeholder="Textul ....."></textarea>

    

              </div>
              <div class="card-body">
                <div class="sticky-note" id="board" data-custom-ID="board"></div>
              </div>
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

<script src="assets/js/jquery.ui.min.js"></script>
<script src="assets/js/sticky/sticky.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<?php include('partial/footer-end.php'); ?>

