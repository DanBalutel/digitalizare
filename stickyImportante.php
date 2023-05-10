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
                                <a href="sticky-home.php" class="btn btn-primary pull-left m-l-10 mb-3">Meniu</a>
                            </div>
                            <div class="card-body">
                                <div class="sticky-note" id="boardNone">


                                    <div class="note" style="background: rgba(255, 170, 5, 0.2)" ondragstart="`function(){$(this).css('z-index', ${++noteZindex});}`">
                                        <a href="javascript:;" class="button remove">X</a>
                                        <div class="note_cnt">
                                            <input type="checkbox" onclick="deleteNoteTemp()" class="remove">
                                            <i class="icofont icofont-flag"></i>
                                            <textarea class="title" placeholder="Enter note title">Important</textarea>
                                            <textarea class="cnt" placeholder="Enter note description here">CUI: 439689726</textarea>
                                        </div>
                                    </div>


                                </div>
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