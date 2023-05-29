<?php include('partial/header.php');?>

<?php include('partial/loader.php'); ?>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php'); ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php');?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php include('partial/breadcrumb.php'); ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <p id="general_data"></p>
                <hr>
                <h2>Prezentare Soft AiPro</h2>
                <embed
                    src="assets/pdf/Prezentare Soft AiPro.pdf"
                    type="application/pdf"
                    frameBorder="0"
                    scrolling="auto"
                    style="height: 80vh"
                    width="100%"
                ></embed>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        
        <?php include('partial/footer.php');?>
    </div>
</div>

<?php include('partial/scripts.php'); ?>
<script>
function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
    const results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
const eCui = getParameterByName('cui');
const eTelefon = getParameterByName('telefon');
const eEmail = getParameterByName('email');
const eBuget = getParameterByName('buget');
fetch(`https://punctaj.ro/api/anaf/cui/${eCui}`, {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json'
    },
})
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById('general_data').innerHTML = `
        <h2>Detalii generale:</h2> <br>
        <hr>
        Telefon: ${eTelefon}  <br>
        Email: ${eEmail}  <br>
        Buget: ${eBuget}  <br>
        CUI: ${eCui}  <br>
        Nr. de înmatriculare: ${data.companyInfo.data.date_generale.nrRegCom} <br>
        Cod CAEN: ${data.companyInfo.data.date_generale.cod_CAEN} <br>
        `;

    })
    .catch(error => {
        console.error('Error:', error);
    });

</script>

<script src="assets/js/notify/index.js"></script>
<script src="assets/js/height-equal.js"></script>
<?php include('partial/footer-end.php'); ?>