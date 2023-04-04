<?php include('partial/header.php') ?>

<script src='https://unpkg.com/tesseract.js@v2.1.0/dist/tesseract.min.js'></script>


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
                <div class="row">
                    <div class="col-md-6">
                        <img id="myImage" class="img-fluid" src="">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Datele din factura</h2>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <input type="submit" class="btn btn-primary" id="genereaza" value="Genereaza datele din factura">
                            </div>
                        </div>
                        <hr>
                        <div id="data">
                            
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

<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/notify/index.js"></script>
<script src="assets/js/typeahead/handlebars.js"></script>
<script src="assets/js/typeahead/typeahead.bundle.js"></script>
<script src="assets/js/typeahead/typeahead.custom.js"></script>
<script src="assets/js/typeahead-search/handlebars.js"></script>
<script src="assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="assets/js/height-equal.js"></script>
<script src="assets/js/animation/wow/wow.min.js"></script>
<script src="assets/js/tooltip-init.js"></script>
<script>
    const obiect = JSON.parse(window.localStorage.dataObj);
    var imageURL = 'uploads/' + obiect.DateGenerale.cui + '_factura.png';
    document.getElementById('myImage').src = imageURL;
    console.log(`https://only1.ai/${imageURL}`)
    document.getElementById('genereaza').addEventListener('click', function() {

        renderLoadingModal('Datele se incarca...');

        var url = `https://only1.ai/${imageURL}`;

        try {
            // perform OCR on the image
            Tesseract.recognize(url, 'ron')
                .then(result => {
                    document.getElementById('data').innerHtml = result.data.text;
                    console.log(result.data.text);
                })
                .catch(error => {
                    console.error(error);
                });
        } catch (error) {
            console.error(error);
        }
    });
</script>
<!-- Plugins JS Ends-->
<script>
    new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>