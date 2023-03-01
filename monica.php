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
        $title = 'Fonduri UE';
        include('partial/breadcrumb.php') 
      ?>
      
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <a style="cursor: pointer;" id="ai-question-1">
                <div class="card">
                    <div class="card-body p-3">
                        Ce inseamna un CRM si care sunt beneficiile acestuia
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a style="cursor: pointer;" id="ai-question-2">
                <div class="card">
                    <div class="card-body p-3">
                        Ce inseamna un CRM si care sunt beneficiile acestuia
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a style="cursor: pointer;" id="ai-question-3">
                <div class="card">
                    <div class="card-body p-3">
                        Ce inseamna un CRM si care sunt beneficiile acestuia
                    </div>
                </div>
            </a>
        </div>
    </div>
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
                    <div class="chat-header clearfix"><img class="rounded-circle" src="../assets/images/user/3.png" alt="">
                      <div class="about">
                        <div class="name">Monica AI</div>
                        <div class="status font-success">Online</div>
                      </div>
                      <ul class="list-inline float-start float-sm-end chat-menu-icons">
                      </ul>
                    </div>
                    <!-- chat-header end-->
                    <div class="chat-history chat-msg-box custom-scrollbar">
                      <ul id="chatBox">
                        
                        <li>
                            <div class="message my-message"><img class="rounded-circle float-start chat-user-img img-30" src="../assets/images/user/3.png" alt="">
                                Salut, adreseaza-mi o intrebare, sau fa click pe o intrebare de mai sus.
                            </div>
                        </li>
                        <div class="message">
                                                                        
                        </div>
                      </ul>
                    </div>
                    <!-- end chat-history-->
                    <div class="chat-message clearfix">
                      <div class="row">
                        <div class="col-xl-12 d-flex">
                          <div class="input-group text-box">
                            <input class="form-control input-txt-bx" id="askGPT" type="text" name="message-to-send" placeholder="Scrie un mesaj.....">
                            <button class="input-group-text btn btn-primary text-white fw-bold" type="button">Trimite</button>
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
      <!-- Container-fluid Ends-->
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
  new WOW().init();
</script>
<?php include('partial/footer-end.php') ?>