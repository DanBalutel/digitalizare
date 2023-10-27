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
                                        <input type="file" name="file[]" max="10" id="fileInputs" multiple class="form-control me-75"> 
                                        <button class="btn btn-primary w-100" id="uploadButton">Incarca</button> 
                                    </form>
                                </div> 
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="card-body" id="fisiere">
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Etape urmarire grant</div>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-primary p-3 text-center">
                                    <span>DE PUBLICAT COMUNICAT</span>
                                    <div id="data_1"></div>
                                    <textarea name="comentariu1" class="form-control mt-2" placeholder="Comentarii" id="comentariu1"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-warning p-3 text-center">
                                    <span>ULTIMA ZI RAPORTARE</span>
                                    <div id="data_2"></div>
                                    <textarea name="comentariu2" class="form-control mt-2" placeholder="Comentarii" id="comentariu2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-danger p-3 text-center">
                                    <span>Finalizare proces monitorizare</span>
                                    <div id="data_3"></div>
                                    <textarea name="comentariu3" class="form-control mt-2" placeholder="Comentarii" id="comentariu3"></textarea>
                                </div>
                            </div>
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
        $('textarea[name="comentariu1"], textarea[name="comentariu2"], textarea[name="comentariu3"]').on('change', function () {
            const comentariu1 = $("#comentariu1").val()
            const comentariu2 = $("#comentariu2").val()
            const comentariu3 = $("#comentariu3").val()
            $.ajax({
                url: 'https://punctaj.ro/api/agri_update/' + cui,
                method: 'PUT',
                data: {
                    comentariu1: comentariu1,
                    comentariu2: comentariu2,
                    comentariu3: comentariu3,
                },
                success: function (response) {
                    Swal.fire("Success!", "Comentariu actualizat cu success!", "success");
                },
                error: function (xhr, status, error) {
                    toastr.success('Ceva nu a mers bine.', 'Error');
                    console.error('Error updating data:', error);
                }
            });
        });

 
        $.ajax({
            url: 'fetch_files.php',
            type: 'POST',
            data: { cui: cui },
            success: function(response) {
                $('#fisiere').html(response);
            },
            error: function() {
                console.error("Failed to fetch files.");
            }
        });
    });
    $(document).ready(function() {
        const cui = window.localStorage.getItem('cui');
 
        $.ajax({
            url: 'https://punctaj.ro/api/agri/' + cui,
            type: 'get',
            data: { cui: cui },
            success: function(response) {
                $('#data_1').html(response.data_publicare);
                $('#data_2').html(response.data_raportare);
                $('#data_3').html(response.data_raportare);
                $('#comentariu1').val(response.comentariu1);
                $('#comentariu2').val(response.comentariu2);
                $('#comentariu3').val(response.comentariu3);
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

        renderLoadingModal('<strong>Se încarcă datele</strong>, va rugam așteptați 😌🙏🏼.');
        var fileInput = $('#fileInputs')[0];
        if (!fileInput.files.length) {
            Swal.fire("Error!", "No file selected!", "error");
            return;
        }

        var formData = new FormData();
        
        // Loop through all selected files and append them to formData
        for (let i = 0; i < fileInput.files.length; i++) {
            formData.append('file[]', fileInput.files[i]);
        }

        formData.append('cui_file', cui);

        $.ajax({
            url: '/upload_files.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                Swal.fire({
                    title: "Success!",
                    text: "Documentele a fost trimis in cloud si salvat pe server!",
                    icon: "success",
                    onClose: () => {
                        location.reload();  
                    }
                });
                        location.reload();  
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