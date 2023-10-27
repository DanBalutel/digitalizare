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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="color: #00CCFF">
                        Grant capital de lucru 2022 - Sprijin pentru entitățile din domeniul agroalimentar sub formă de microgranturi și granturi pentru capital de lucru
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="row">
                                <div class="col-md-6">Documente</div>
                                <div class="col-md-6">
                                    <form action="" class="d-flex">
                                        <input type="file" name="" id="fileInputs" multiple class="form-control me-75"> 
                                        <button class="btn btn-primary w-100" id="uploadButton">Incarca</button> 
                                    </form>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <?php if (count($files) > 0): ?>
                                <ul>
                                    <?php foreach ($files as $file): ?>
                                        <li><a href="<?php echo $directoryPath . $file; ?>" target="_blank"><?php echo $file; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p>No files found.</p>
                            <?php endif; ?>
                        </div>

                    </div>
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
    $(document).ready(function() {
        const cui = window.localStorage.getItem('cui');
 
        $.ajax({
            url: 'fetch_files.php',
            type: 'POST',
            data: { cui: cui },
            success: function(response) {
                console.log(response)
                $('.card-body').html(response);
            },
            error: function() {
                console.error("Failed to fetch files.");
            }
        });
    });

    $(document).ready(function() {
    const cui = window.localStorage.getItem('cui');

    $('#uploadButton').click(function(e){
        e.preventDefault(); 

        var fileInput = $('#fileInputs')[0];
        if (!fileInput.files.length) {
            Swal.fire("Error!", "No file selected!", "error");
            return;
        }

        var formData = new FormData();
        formData.append('file', fileInput.files[0]);
        formData.append('cui_file', cui);

        $.ajax({
            url: '/upload_files.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                Swal.fire("Success!", "Documentele a fost trimis in cloud si salvat pe server!", "success");
            },
            error: function(xhr, status, error){
                Swal.fire("Error!", "A aparut o eroare la incarcarea fisierului!", "error");
            }
        });
    });
});

</script>
<script>
  new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>