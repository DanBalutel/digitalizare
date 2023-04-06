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
            $title = 'Dashboard';
            include('partial/breadcrumb.php')
            ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <h2 style="color: #00CCFF">Functie OCR: Cand faceti poza la o factura - Aplicatia va prelua automat datele si le va migra in programele de contabilitate folosite.</h2>
                <div class="row mt-2">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/tesseract.js/2.1.0/tesseract.min.js" integrity="sha512-//GjtqQtAtedEIJpCzDXdvQ0A6aKZgjKwaQTJbLEJjgTKPyopzvtvu/JaEVRFAs8aUhslCSTRwKih3wKtOaIbQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    let imageURL;
    fetch(`https://aipro.ro/uploads/${obiect.DateGenerale.cui}_factura.png`, { method: 'HEAD' })
    .then(res => {
        if (res.ok) {
            imageURL = "uploads/" + obiect.DateGenerale.cui + "_factura.png?timestamp="+ Math.random();
            document.getElementById('myImage').src = imageURL;
        } else {
            imageURL = "uploads/factura.png?timestamp="+ Math.random();
            document.getElementById('myImage').src = imageURL;
        }
    }).catch(err => console.log(''));
    document.getElementById('genereaza').addEventListener('click', function() {

        renderLoadingModal('Datele se incarca...');

        var url = `https://aipro.ro/${imageURL}`;

        try {
            // perform OCR on the image
            Tesseract.recognize(url, 'ron')
                .then(result => {
                    document.getElementById('data').innerHTML = result.data.text.replace(/(\r\n|\n|\r)/gm,'<br>');
                    console.log(result)
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