<?php
header("Access-Control-Allow-Origin: *");
?>
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
      $title = 'Mony AI';
      include('partial/breadcrumb.php')
      ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col call-chat-body">
            <div class="card">
              <div class="card-body p-0">
                <div class="row chat-box">
                  <!-- Chat right side start-->
                  <div class="col pe-0 chat-right-aside">
                    <!-- chat start-->
                    <div class="chat">
                      <!-- chat-header start-->
                      <div class="chat-header clearfix">
                        <img class="rounded-circle" src="../assets/images/avtar/moniProfileImage.jpg" alt="">
                        <div class="about">
                          <div class="name">Mony AI</div>
                        </div>
                        <ul class="list-inline float-start float-sm-end chat-menu-icons">
                        </ul>
                        <div class="input-group-text btn btn-primary text-white fw-bold" style="margin:0 1rem" onclick="clearChatHistory()">X istoric</div>
                      </div>
                      <!-- chat-header end-->
                      <div class="chat-history chat-msg-box custom-scrollbar pb-5" style="min-height: 70vh">
                        <ul id="chatBox">
                          <li>
                            <div class="message my-message">
                              <img class="rounded-circle float-start chat-user-img img-30" src="../assets/images/avtar/moniProfileImage.jpg" alt="">
                              Bună ziua! Numele meu este Mony, sunt un robot cu inteligență artificială care poate răspunde la întrebări generale, explica lucruri, sugereaza idei, traduce, scrie e-mailuri și cod programare.
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="chat-message clearfix">
                        <div class="row">
                          <div class="col-xl-12 d-flex">
                            <div class="input-group text-box">
                              <input class="form-control input-txt-bx" id="askGPT" type="text" name="message-to-send" placeholder="Scrie aici .....">
                              <button class="input-group-text btn btn-success text-white fw-bold" id="img_generate" type="button">Genereaza imagine <span id="incercari"></button>
                              <button class="input-group-text btn btn-primary text-white fw-bold" id="trimite" type="button">Trimite</button>
                            </div>
                          </div>
                        </div>
                      </div>
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

<script>
async function checkIncercari() {
    const incercari = document.getElementById('incercari');
    const img_generate = document.getElementById('img_generate');
    try {
        const cui = window.localStorage.getItem('cui');
        const response = await fetch(`https://punctaj.ro/api/incercari/${cui}`);
        const attempts = await response.text();
        incercari.innerText = `(${2 - attempts} incercari)`; 
        if (parseInt(attempts) === 2) {
            img_generate.disabled = true; 
        }
    } catch (error) {
        console.error('Request failed:', error);
    }
}
checkIncercari();
</script>

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