<!-- latest jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Bootstrap js-->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<!-- feather icon js-->
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="assets/js/scrollbar/simplebar.js"></script>
<script src="assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="assets/js/config.js"></script>
<!-- Plugins JS start-->
<script id="menu" src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/slick/slick.min.js"></script>
<script src="assets/js/slick/slick.js"></script>
<script src="assets/js/header-slick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function generateUniqueId() {
        const random = Math.floor(Math.random() * 90000) + 10000;
        return random.toString().substring(0, 5);
    }

    // Example usage
    const uniqueId = generateUniqueId();
    console.log(uniqueId);
</script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="assets/js/custom-script.js?version=<?php echo (rand(1, 100000)); ?>"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/dashboard.js?version=<?php echo (rand(1, 100000)); ?>" defer></script>
<script src="assets/js/sendOffer.js?version=<?php echo (rand(1, 100000)); ?>"></script>
<?php
// // List of pages where the script should be added
// $allowedPages = array('crm.php');

// // Get the current page file name
// $currentFile = $_SERVER['PHP_SELF'];
// $currentPage = basename($currentFile);

// // Check if the current page is in the allowed pages list
// if (!in_array($currentPage, $allowedPages)) {
//     echo '<script src="assets/js/dashboard.js" defer></script>';
// }

// Check if the 'showoffert' parameter exists and is equal to 1
if (isset($_GET['oferta']) && $_GET['oferta'] === '1') {
    echo '<script src="assets/js/showOffer.js" defer></script>';
}

?>