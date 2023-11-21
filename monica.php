<?php
header("Access-Control-Allow-Origin: *");
?>
<?php include('partial/header.php') ?>
<script src="assets/js/chatgpt.js" defer></script>
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
      $title = 'AI';
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
                    <div class="chat" style="min-height: 80vh">
                      <!-- chat-header start-->
                      <div class="chat-header clearfix"><img class="rounded-circle" src="../assets/images/avtar/moniProfileImage.jpg" alt="">
                        <div class="about">
                          <div class="name">Mony AI</div>
                          <div class="status font-success">Online</div>
                        </div>
                        <ul class="list-inline float-start float-sm-end chat-menu-icons">
                        </ul>
                        <div class="input-group-text btn btn-primary text-white fw-bold" style="margin:0 1rem" onclick="clearChatHistory()">X istoric</div>
                      </div>
                      <!-- chat-header end-->
                      <div class="chat-history chat-msg-box custom-scrollbar" style="min-height: 62vh">
                        <ul id="chatBox" style="overflow-y: auto; ">

                          <li>
                            <div class="message my-message"><img class="rounded-circle float-start chat-user-img img-30" src="../assets/images/avtar/moniProfileImage.jpg" alt="">
                              Bună ziua! Numele meu este Mony, sunt un robot cu inteligență artificială care poate răspunde la întrebări generale, explica lucruri, sugereaza idei, traduce, scrie e-mailuri și cod programare.
                            </div>
                          </li>

                        </ul>
                      </div>
                      <!-- end chat-history-->
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

      <div class="container-fluid">
        <h3 style="color:#00CCFF;">CLICK pe Exemple ⬇️</h3>
        <div class="row">
          <div class="col-md-4">
            <a style="cursor: pointer;">
              <div class="card" style="min-height: 4rem;">
                <div id="ai-question-1" class="card-body p-3">
                  Enumeră 3 avantaje pentru folosirea unui CRM.
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a style="cursor: pointer;">
              <div class="card" style="min-height: 4rem;">
                <div id="ai-question-2" class="card-body p-3">
                  Enumeră 3 avantaje pentru folosirea unui ERP.
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a style="cursor: pointer;">
              <div class="card" style="min-height: 4rem;">
                <div id="ai-question-3" class="card-body p-3">
                  Scrie un email de informare către clienții mei să îi notifici că în luna aceasta oferim un discount de 10%.
                </div>
              </div> 
            </a>
          </div>
          <div class="col-md-4">
            <a style="cursor: pointer;">
              <div class="card" style="min-height: 4rem;">
                <div id="ai-question-4" class="card-body p-3">
                  Enumeră 3 afaceri în trend în 2023 din România.
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a style="cursor: pointer;">
              <div class="card" style="min-height:4rem">
                <div id="ai-question-5" class="card-body p-3">
                  Tradu în română: Digitalisation of company in the construction sector
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <img class="center" style="max-width: 350px;" src="assets/images/iphone1.png" alt="">
          </div>
          <div class="col-md-8 d-flex flex-column justify-content-center">
            <span style="color:#00CCFF">
            <b>0742024473<b> Salvați numărul și puteți accesa AI:  <br>
            1. <a href="https://wa.me/40742024473" target="_blank">Click: <u>Whatsapp</u></a>: Acces rapid și istoric  <br>
            2. <a href="sms:+40742024473" target="_blank">Click: <u>SMS</u></a> (acces la AI chiar si in zone fără internet)
            </span>
          </div>
        </div>

      </div> -->

      <!-- Modal loading-->
      <div id="modal-loading" class="modal fade bd-example-modal-lg show" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;background: #000000a6;" aria-modal="true" role="dialog">
        <div class="mt-5 modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body dark-modal">


              <h6 id="loadingLabel" class="w-100 d-flex justify-content-center">text here</h6>

              <div class="progress">
                <div id="loadingLoader" class="progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
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

<script>
async function checkIncercari() {
    const incercari = document.getElementById('incercari');
    const img_generate = document.getElementById('img_generate');

    try {
        const cui = window.localStorage.getItem('cui');
        const response = await fetch(`https://punctaj.ro/api/incercari/${cui}`);
        const attempts = await response.text(); // Get the text from the response

        incercari.innerText = `(${2 - attempts} incercari)`; // Update the text

        if (parseInt(attempts) === 2) {
            img_generate.disabled = true; // Disable the button if attempts are 0
        }
    } catch (error) {
        console.error('Request failed:', error);
    }
}

checkIncercari();
</script>

<script>
  // define Moni steps fideo ID
  const moniVideoSteps = 'iqHC5eQIH7k';

  const moniStepsJson1 = {
    "tag": "div",
    "id": "videoContainerStepsMony",
    "class": "videoContainerSteps",
    "children": [{
      "tag": "div",
      "id": "moniStepsVideo"
    }]
  }

  const topbarHeight = d.element('headerWrapper').offsetHeight;
  const demoPlayDiv = d.element('demoPlayDiv');
  // d.createElement(moniStepsJson1, demoPlayDiv);

  // function showMoniSteps() {
  //   d.createElement(moniStepsJson1, demoPlayDiv);
  //   onYouTubeIframeAPIReady()
  //   d.e.demoPlay.classList.toggle('hide');
  // }

  // d.createHandler('demoPlay', 'click', showMoniSteps)


  // moni copy question cards
  const monyIds1 = ['ai-question-1', 'ai-question-2', 'ai-question-3', 'ai-question-5', 'ai-question-5']
  const monyIds2 = ['ai-question-4', 'ai-question-5']

  document.addEventListener("DOMContentLoaded", function() {
    setMaxHeight(monyIds1);
    setMaxHeight(monyIds2);
  });


</script>
<script src="https://www.youtube.com/iframe_api"></script>
<script src="assets/js/moniSteps.js"></script>

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