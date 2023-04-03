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
<script defer>
    
    var imageURL = 'uploads/' + dataObj.DateGenerale.cui + '_factura.png';
    document.getElementById('myImage').src = imageURL;
    console.log(`https://only1.ai/${imageURL}`)
    document.getElementById('genereaza').addEventListener('click', function() {
            
        renderLoadingModal('Datele se incarca...');

        var url = `https://api.raport.ai/genereaza?imagine=https://only1.ai/${imageURL}`

        fetch(url)

            .then((result) => {
                if (result.status != 200) { throw new Error("Bad Server Response"); }
                return result.text();
            })
            .then((response) => {
                
                console.log(response)

            })

            .catch((error) => {
                console.log(error);
        });
});
        



</script>
<!-- Plugins JS Ends-->
<script>
    new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>